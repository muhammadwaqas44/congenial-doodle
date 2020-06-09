<?php

namespace App\Http\Controllers\Front;

use App\Company;
use App\Http\Controllers\Controller;
use App\Mail\ForgetPasswordMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function loginAdmin()
    {
        if (Auth::check()) {
            $roles = Auth::user()->roles()->pluck('role_id')->toArray();
            $admin = in_array(1, $roles);
            if ($admin) {
                return redirect()->route("admin-dashboard");
            }
        }
        return view('auth.admin-login');
    }

    public function loginConsultant()
    {
        if (Auth::check()) {
            $roles = Auth::user()->roles()->pluck('role_id')->toArray();
            $consultant = in_array(2, $roles);
            if ($consultant) {
                return redirect()->route("consultant-dashboard");
            }
        }
        return view('auth.consultant-login');
    }

    public function loginEditor()
    {
        if (Auth::check()) {
            $roles = Auth::user()->roles()->pluck('role_id')->toArray();
            $editor = in_array(3, $roles);
            if ($editor) {
                return redirect()->route("editor-dashboard");
            }
        }
        return view('auth.editor-login');
    }

    public function loginClient()
    {
        if (Auth::check()) {
            $roles = Auth::user()->roles()->pluck('role_id')->toArray();
            $client = in_array(4, $roles);
            if ($client) {
                return redirect()->route("client-dashboard");
            }
        }
        return view('auth.client-login');
    }

    public function loginAdminPost(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email'
        ], [
            'password.required' => 'Password is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email ;format is not valid',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = ($request->remember) ? true : false;
        if (Auth::attempt($credentials, $remember)) {

            $roles = Auth::user()->roles()->pluck('role_id')->toArray();
            $admin = in_array(1, $roles);
            if ($request->route()->getName() == 'login-admin-post' && $admin) {
                return response()->json(['result' => 'success', 'message' => 'Login  successfully']);
            } else {
                Auth::logout();
                return response()->json(['result' => 'no_role', 'message' => 'Not registered with this role']);
            }
        } else {
            return response()->json(['result' => 'error', 'message' => 'Failed to Login']);
        }
    }

    public function loginConsultantPost(Request $request)
    {

        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email'
        ], [
            'password.required' => 'Password is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email ;format is not valid',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = ($request->remember) ? true : false;
        if (Auth::attempt($credentials, $remember)) {

            $roles = Auth::user()->roles()->pluck('role_id')->toArray();
            $consultant = in_array(2, $roles);
            if ($request->route()->getName() == 'login-consultant-post' && $consultant) {
                return response()->json(['result' => 'success', 'message' => 'Login  successfully']);
            } else {
                Auth::logout();
                return response()->json(['result' => 'no_role', 'message' => 'Not registered with this role']);
            }
        } else {
            return response()->json(['result' => 'error', 'message' => 'Failed to Login']);
        }
    }

    public function loginEditorPost(Request $request)
    {

        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email'
        ], [
            'password.required' => 'Password is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email ;format is not valid',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = ($request->remember) ? true : false;
        if (Auth::attempt($credentials, $remember)) {
            $roles = Auth::user()->roles()->pluck('role_id')->toArray();
            $editor = in_array(3, $roles);
            if ($request->route()->getName() == 'login-editor-post' && $editor) {
                return response()->json(['result' => 'success', 'message' => 'Login  successfully']);
            } else {
                Auth::logout();
                return response()->json(['result' => 'no_role', 'message' => 'Not registered with this role']);
            }
        } else {
            return response()->json(['result' => 'error', 'message' => 'Failed to Login']);
        }
    }

    public function loginClientPost(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email'
        ], [
            'password.required' => 'Password is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email ;format is not valid',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = ($request->remember) ? true : false;
        if (Auth::attempt($credentials, $remember)) {
            $roles = Auth::user()->roles()->pluck('role_id')->toArray();
            $client = in_array(4, $roles);
            if ($request->route()->getName() == 'login-client-post' && $client) {
                return response()->json(['result' => 'success', 'message' => 'Login  successfully']);
            } else {
                Auth::logout();
                return response()->json(['result' => 'no_role', 'message' => 'Not registered with this role']);
            }
        } else {
            return response()->json(['result' => 'error', 'message' => 'Failed to Login']);
        }
    }

//    public function loginPostClient(Request $request)
//    {
//
//        $this->validate($request, [
//            'company' => 'required',
//            'email' => 'required|email'
//        ], [
//            'company.required' => 'Company Name is required',
//            'email.required' => 'Email is required',
//            'email.email' => 'Email ;format is not valid',
//        ]);
//
//        $company = Company::where('title', $request->company)->with('user')->whereHas('user', function ($query) use ($request) {
//            $query->where([
//                'email' => $request->email,
//            ]);
//        })->first();
//        if ($company) {
//            $remember = ($request->remember) ? true : false;
//            if (Auth::attempt(['email' => $company->user->email, "password" => $company->user->actual_password], $remember)) {
//                session(['companyId' => $company->id]);
//                return response()->json(['result' => 'success', 'message' => 'Login  successfully']);
//            } else {
//                return response()->json(['result' => 'error', 'message' => 'Failed to Login']);
//            }
//        } else {
//            return response()->json(['result' => 'error', 'message' => 'No company is exist on this email']);
//        }
//
//    }

    public function forgetPassword()
    {
        return view('auth.forget-password');
    }

    public function resetPassword($forgettoken)
    {
        $user = User::where('reset_token', $forgettoken)->first();
        if ($user) {
            return view('auth.reset-password', compact('user'));
        } else {
            return abort(404);
        }

    }

    public function forgetPasswordPost(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ], [
            'email.required' => 'Email is required',
            'email.email' => 'Email format is not valid',
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $full_name = $user->name;
            $to = $user->email;
            $id = $user->id;
            $forgettoken = Str::random(80) . time();
            $user->reset_token = $forgettoken;

            Mail::to($to)->send(new ForgetPasswordMail($forgettoken, $full_name));
            $user->save();
            return response()->json(["id" => $id, 'email' => $to, 'result' => 'success', 'message' => 'If your email address exists in our database, you will receive a password recovery link at your email address in a few minutes.'], 200);
        } else {
            return response()->json(['result' => 'error', 'message' => 'If your email address exists in our database, you will receive a password recovery link at your email address in a few minutes.'], 200);
        }
    }

    public function resetPasswordPost(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:8|string|confirmed',
        ], [
            'password.confirmed' => 'Password and Confirm Password does not match',
        ]);
        $user = User::find($request->user_id);
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->actual_password = $request->password;
            $user->save();
            return response()->json(['result' => 'success', 'message' => 'Password Change Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'User not found']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('client-view');
    }
}
