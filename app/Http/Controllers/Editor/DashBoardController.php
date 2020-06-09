<?php

namespace App\Http\Controllers\Editor;

use App\Company;
use App\Event;
use App\Http\Controllers\Controller;
use App\Role;
use App\Schedule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class DashBoardController extends Controller
{

    public function indexEditor()
    {

        $pendingEditor= Schedule::whereIn('status_id', [3])->count();
        $activeEditor= Schedule::where('editor_id', Auth::user()->id)->whereIn('status_id', [4])->count();
        $completeEditor= Schedule::where('editor_id', Auth::user()->id)->whereIn('status_id', [6])->count();

        return view('editor-dashboard.index-editor',compact('pendingEditor','activeEditor','completeEditor'));
    }
    public function editProfile()
    {
        $user = User::find(Auth::id());
        $data['roles'] = Role::whereIn('id', [1, 2, 3])->get();
        return view('editor-dashboard.profile.profile', compact('data', 'user'));
    }

    public function readAllNotifications(Request $request)
    {
        Event::where('to_id', Auth::user()->id)->update(['read' => 1]);
        if ($request->ajax()) {
            $data = Event::where('to_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->make(true);
        }
        return view('editor-dashboard.all-notifications');
    }
}
