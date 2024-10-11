<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile(Request $request){
        $page = "profile";
        $user = Auth::user();
        return view('user.profile',[
            'page' => $page,
            'user' => $user,
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $field = $request->input('field');
        $value = $request->input('value');

        if (in_array($field, ['name', 'email'])) {
            $user->$field = $value;
            $user->save();
            return response()->json(['message' => __('user_profile.update_success')]);
        }

        return response()->json(['message' => __('user_profile.update_failed')], 400);
    }

    public function deleteAccount(){
        $user = Auth::user();
        $user->delete();
        Auth::logout();
        return redirect('/')->with('success', 'Your account has been deactivated');
    }
}
