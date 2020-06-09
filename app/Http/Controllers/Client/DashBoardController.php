<?php

namespace App\Http\Controllers\Client;

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

    public function indexClient()
    {
        return view('client.index-client');
    }

    public function editProfile()
    {
        $user = User::find(Auth::id());
        $data['roles'] = Role::whereIn('id', [1, 2, 3])->get();
        return view('client.profile.profile', compact('data', 'user'));
    }

    public function readAllNotifications(Request $request)
    {
        Event::with(['schedule'])
            ->whereHas('schedule.company', function ($query) {
                $query->where([
                    'user_id' => Auth::user()->id,
                ]);
            })->update(['client_read' => 1]);
        if ($request->ajax()) {
            $data = Event::with(['schedule'])
                ->whereHas('schedule.company', function ($query) {
                    $query->where([
                        'user_id' => Auth::user()->id,
                    ]);
                })->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->make(true);
        }
        return view('client.all-notifications');
    }

}
