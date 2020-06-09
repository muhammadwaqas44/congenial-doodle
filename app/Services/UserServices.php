<?php


namespace App\Services;


use App\Helpers\ImageHelpers;
use App\Mail\UserCredentialsMail;
use App\User;
use App\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserServices
{
    public function addNewUserPost($request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:9|max:15',
            'password' => 'required|min:5',
            'role_id' => 'required',
            'status' => 'required|integer',
            'profile_image' => 'file|mimes:jpeg,jpg,png|max:5000',
        ], [
            'name.required' => 'Full Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email ;format is not valid',
            'phone.required' => 'Phone number is required',
            'password.required' => 'Password is required',
            'role_id.required' => 'Select the Role, it is required',
            'status.required' => 'Active Status is required',
        ]);
        if (!empty($request->profile_image)) {
            $path = 'storage/public/profile_images/';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $fileName = time() . "-" . $request->name . ".png";
            $result = ImageHelpers::updateProfileImage($path, $request->file('profile_image'), 'not-link', $fileName);
            $profile_image = $path . $fileName;
        } else {
            $profile_image = null;
        }
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $userNew = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
//                'role_id' => $request->role_id,
                'password' => Hash::make($request->password),
                'actual_password' => $request->password,
                'profile_image' => $profile_image,
                'gender' => $request->gender,
                'status' => $request->status,
                'remarks' => $request->remarks,
            ]);
            if ($userNew) {
                foreach ($request->role_id as $roleID) {
                    UserRole::create([
                        'role_id' => $roleID,
                        'user_id' => $userNew->id,
                    ]);
                }
                Mail::to($userNew->email)->send(new UserCredentialsMail($userNew));
                return response()->json(['result' => 'success', 'message' => 'User Add Successfully']);
            } else {
                return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
            }
        } else {
            return response()->json(['result' => 'error', 'message' => 'Email Already Exist']);
        }
    }

    public function editUserPost($userId, $request)
    {
//        dd($request->all());
        $user = User::find($userId);
        if ($user) {
            $request->validate([
                'name' => 'required',
                'email' => 'sometimes|required|email|unique:users,email, '.$userId,
                'phone' => 'required|min:9|max:15',
                'password' => 'required|min:5',
                'role_id' => 'required',
                'profile_image' => 'file|mimes:jpeg,jpg,png|max:5000',

            ], [
                'name.required' => 'Full Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Email ;format is not valid',
                'phone.required' => 'Phone number is required',
                'password.required' => 'Password is required',
                'role_id.required' => 'Select the Role, it is required',
            ]);
            if (!empty($request->profile_image)) {
                $path = 'storage/public/profile_images/';
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                $fileName = time() . "-" . $request->name . ".png";
                $result = ImageHelpers::updateProfileImage($path, $request->file('profile_image'), 'not-link', $fileName);
                $profile_image = $path . $fileName;
            } else {
                $profile_image = $request->profile_image_hide;
            }
//            if ($request->status) {
//                $status = $request->status;
//            } else {
//                dd('okk');
//                $status = $user->status;
//            }
            $userNew = $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'actual_password' => $request->password,
                'profile_image' => $profile_image,
                'gender' => $request->gender,
                'status' => $request->status,
                'remarks' => $request->remarks,
            ]);
            $user->roles()->sync($request->role_id);

            if ($userNew) {
                return response()->json(['result' => 'success', 'message' => 'User Update Successfully', 'role_id' => $request->role_id,]);
            } else {
                return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
            }
        } else {
            return response()->json(['result' => 'error', 'message' => 'No Record Found']);
        }
    }

    public function editProfilePost($userId, $request)
    {
        $user = User::find($userId);
        if ($user) {
            $request->validate([
                'name' => 'required',
                'email' => 'sometimes|required|email|unique:users,email, '.$userId,
                'phone' => 'required|min:9|max:15',
                'password' => 'required',
                'profile_image' => 'file|mimes:jpeg,jpg,png|max:5000',

            ], [
                'name.required' => 'Full Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Email ;format is not valid',
                'phone.required' => 'Phone number is required',
                'password.required' => 'Password is required',
            ]);
            if (!empty($request->profile_image)) {
                $path = 'storage/public/profile_images/';
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                $fileName = time() . "-" . $request->name . ".png";
                $result = ImageHelpers::updateProfileImage($path, $request->file('profile_image'), 'not-link', $fileName);
                $profile_image = $path . $fileName;
            } else {
                $profile_image = $request->profile_image_hide;
            }

            $userNew = $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'actual_password' => $request->password,
                'profile_image' => $profile_image,
                'remarks' => $request->remarks,
            ]);
            if ($userNew) {
                return response()->json(['result' => 'success', 'message' => 'Profile Update Successfully']);
            } else {
                return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
            }
        } else {
            return response()->json(['result' => 'error', 'message' => 'No Record Found']);
        }
    }
}
