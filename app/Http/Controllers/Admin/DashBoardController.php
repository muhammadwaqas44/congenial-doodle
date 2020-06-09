<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Event;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class DashBoardController extends Controller
{
    public function index()
    {
        $allUsers= User::all()->count();
        $allCompany= Company::all()->count();
        $allSchedules= Schedule::all()->count();
        $acitveConsultant = Schedule::where('consultant_id', Auth::user()->id)->whereIn('status_id', [2, 5])->count();
        $pendingConsultant = Schedule::where('consultant_id', Auth::user()->id)->whereIn('status_id', [1])->count();
        $pendingEditor= Schedule::whereIn('status_id', [3])->count();
        $activeEditor= Schedule::where('editor_id', Auth::user()->id)->whereIn('status_id', [4])->count();
        $completeEditor= Schedule::where('editor_id', Auth::user()->id)->whereIn('status_id', [6])->count();

        return view('dashboard.index',compact('acitveConsultant','pendingConsultant','pendingEditor','activeEditor','completeEditor','allSchedules','allCompany','allUsers'));
    }

    public function readAllNotifications(Request $request){
        Event::where('to_id', Auth::user()->id)->update(['read'=>1]);
        if ($request->ajax()) {
            $data = Event::where('to_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->make(true);
        }
        return view('dashboard.all-notifications');
    }



}
