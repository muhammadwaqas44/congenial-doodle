<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\Services\UserServices;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function addNewUser()
    {
        $data['roles'] = Role::whereIn('id', [1, 2, 3])->get();
        return view('dashboard.users.add-new-user', compact('data'));
    }

    public function editUser($userId)
    {
        $user = User::find($userId);
        abort_if(!$user,404);
        $userRoles = $user->roles->pluck('id')->toArray();
        $data['roles'] = Role::whereIn('id', [1, 2, 3])->get();

        return view('dashboard.users.edit-user', compact('data', 'user','userRoles'));
    }

    public function editProfile()
    {
        $user = User::find(Auth::id());
        $data['roles'] = Role::whereIn('id', [1, 2, 3])->get();
        return view('dashboard.users.profile', compact('data', 'user'));
    }

    public function addNewUserPost(Request $request, UserServices $userServices)
    {
        $data = $userServices->addNewUserPost($request);
        return $data;
    }

    public function editUserPost($userId, Request $request, UserServices $userServices)
    {
        $data = $userServices->editUserPost($userId, $request);
        return $data;
    }

    public function editProfilePost($userId, Request $request, UserServices $userServices)
    {
        $data = $userServices->editProfilePost($userId, $request);
        return $data;
    }

    public function allAdmins(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('roles')->whereHas('roles', function ($query) {
                $query->where([
                    'roles.id' => 1,
                ]);
            })->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (User $user) {

                    $btn = '<a href="' . route('edit-user', ['userId' => $user->id]) . '" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                           <button type="button" id="' . $user->id . '" class="btn btn-danger btn-sm " onClick="softDeleteUserBtn(this.id)"><i class="fas fa-trash"></i></button>';

                    return $btn;
                })
                ->addColumn('status', function (User $user) {
                    if ($user->status == '1') {
                        $status = 'Active';
                    } else {
                        $status = 'Inactive';
                    }
                    return $status;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        $heading = "Admins List";
        $type = "Admin";
        return view('dashboard.users.user-listing', compact('heading', 'type'));
    }

    public function softDeleteUser($userId){
        $user = User::where('id', $userId)->delete();
        if($user){
           return response()->json(['result' => 'success', 'message' => 'User deleted successfully!']);
        }else{
           return response()->json(['result' => 'error', 'message' => 'User not exists']);
        }
    }

    public function allConsultants(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('roles')->whereHas('roles', function ($query) {
                $query->where([
                    'roles.id' => 2,
                ]);
            })->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (User $user) {

                    $btn = '<a href="' . route('edit-user', ['userId' => $user->id]) . '" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                           <button type="button" id="' . $user->id . '" class="btn btn-danger btn-sm " onClick="softDeleteUserBtn(this.id)"><i class="fas fa-trash"></i></button>';

                    return $btn;
                })
                ->addColumn('status', function (User $user) {
                    if ($user->status == '1') {
                        $status = 'Active';
                    } else {
                        $status = 'Inactive';
                    }
                    return $status;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }


        $heading = "Consultants List";
        $type = "Consultant";
        return view('dashboard.users.user-listing', compact('heading', 'type'));
    }

    public function allEditors(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('roles')->whereHas('roles', function ($query) {
                $query->where([
                    'roles.id' => 3,
                ]);
            })->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (User $user) {

                    $btn = '<a href="' . route('edit-user', ['userId' => $user->id]) . '" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                           <button type="button" id="' . $user->id . '" class="btn btn-danger btn-sm " onClick="softDeleteUserBtn(this.id)"><i class="fas fa-trash"></i></button>';

                    return $btn;
                })
                ->addColumn('status', function (User $user) {
                    if ($user->status == '1') {
                        $status = 'Active';
                    } else {
                        $status = 'Inactive';
                    }
                    return $status;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        $heading = "Editors List";
        $type = "Editor";
        return view('dashboard.users.user-listing', compact('heading', 'type'));
    }

    public function allClient(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('roles')->whereHas('roles', function ($query) {
                $query->where([
                    'roles.id' => 4,
                ]);
            })->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (User $user) {

                    $btn = '<a href="' . route('edit-user', ['userId' => $user->id]) . '"
                                                       class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pencil-alt"></i></a>';

                    return $btn;
                })
                ->addColumn('status', function (User $user) {
                    if ($user->status == '1') {
                        $status = 'Active';
                    } else {
                        $status = 'Inactive';
                    }
                    return $status;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        $heading = "Clients List";
        $type = "Clients";
        return view('dashboard.users.user-listing', compact('heading', 'type'));
    }
}
