<?php

namespace App\Http\Controllers\Consultant;

use App\Company;
use App\Http\Controllers\Controller;
use App\Role;
use App\Schedule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{

    public function indexConsultant()
    {

        $acitveConsultant = Schedule::where('consultant_id', Auth::user()->id)->whereIn('status_id', [2, 5])->count();
        $pendingConsultant = Schedule::where('consultant_id', Auth::user()->id)->whereIn('status_id', [1])->count();

        return view('consultant-dashboard.index-consultant',compact('acitveConsultant','pendingConsultant'));
    }
    public function editProfile()
    {
        $user = User::find(Auth::id());
        $data['roles'] = Role::whereIn('id', [1, 2, 3])->get();
        return view('consultant-dashboard.profile.profile', compact('data', 'user'));
    }
}
