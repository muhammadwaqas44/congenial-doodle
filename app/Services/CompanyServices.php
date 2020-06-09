<?php


namespace App\Services;


use App\Company;
use App\Mail\CompanyMail;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CompanyServices
{
    public function addCompanyPost($request)
    {
        $user = User::where('email', $request->email)->first();

        $request->validate([
            'title' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:9|max:15',
            'password' => 'required',
            'access_level' => 'required',
        ], [
            'title.required' => 'Company Name is required',
            'name.required' => 'Full Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email ;format is not valid',
            'phone.required' => 'Phone number is required',
            'password.required' => 'Password is required',
            'access_level.required' => 'Access Level is required',
        ]);

        if (!$user) {
            $userNew = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role_id' => 4,
                'password' => Hash::make($request->password),
                'actual_password' => $request->password,
                'status' => 1,
            ]);
            $userCompany = Company::create([
                'title' => $request->title,
                'status' => 1,
                'access_level' => $request->access_level,
                'notes' => $request->notes,
                'user_id' => $userNew->id,
                'created_by' => Auth::id(),
            ]);

            if ($userCompany && $userNew) {
                Mail::to($userNew->email)->send(new CompanyMail($userCompany, $userNew));
                return response()->json(['result' => 'success', 'message' => 'Company Add Successfully']);
            } else {
                return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
            }
        }
    }

    public function editCompanyPost($companyId, $request)
    {
        $company = Company::find($companyId);
        $user = User::find($company->user_id);
        $request->validate([
            'title' => 'required|string',
            'name' => 'required|string',
            'email' => 'sometimes|required|email|unique:users,email, '.$user->id,
            'phone' => 'required|min:9|max:15',
            'password' => 'required',
            'access_level' => 'required',


        ], [
            'title.required' => 'Company Name is required',
            'name.required' => 'Full Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email ;format is not valid',
            'phone.required' => 'Phone number is required',
            'password.required' => 'Password is required',
            'access_level.required' => 'Access Level is required',
        ]);
        if ($company) {
            $userNew = $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role_id' => 4,
                'password' => Hash::make($request->password),
                'actual_password' => $request->password,
                'status' => 1,
            ]);

            $userCompany = $company->update([
                'title' => $request->title,
                'status' => 1,
                'access_level' => $request->access_level,
                'notes' => $request->notes,
                'user_id' => $user->id,
                'created_by' => Auth::id(),
            ]);

            if ($userCompany && $userNew) {
                return response()->json(['result' => 'success', 'message' => 'Company Update Successfully']);
            } else {
                return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
            }
        } else {
            return response()->json(['result' => 'error', 'message' => 'No Record Found']);
        }

    }
}
