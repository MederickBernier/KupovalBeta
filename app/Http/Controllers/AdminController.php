<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function showDashboard(Request $request){
        $page = "dashboard";
        return view('admin.dashboard',[
            'page' => $page,
        ]);
    }

    public function listUsers(){
        $users = User::withTrashed()->paginate(10);
        return view('admin.users.index',[
            'users' => $users,
        ]);
    }

    public function editUser(User $user){
        return view('admin.users.edit',[
            'user' => $user,
        ]);
    }

    public function updateUser(Request $request, User $user){
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'role' => 'required|in:admin,client',
        ]);

        $user->update($request->only('first_name', 'last_name','email','role'));
        return redirect()->route('admin.users.index')->with('success','User updated successfully');
    }

    public function softDeleteUser(User $user){
        $user->delete();
        return redirect()->route('admin.users.index')->with('success','User deleted successfully');
    }

    public function createUser(){
        return view('admin.users.create');
    }

    public function toggleUserActivate($id){
        $user = User::withTrashed()->findOrFail($id);
        if($user->trashed()){
            $user->restore();
            return redirect()->route('admin.users.index')->with('success','User restored successfully');
        }else{
            $user->delete();
            return redirect()->route('admin.users.index')->with('success','User deactivated successfully');
        }
    }

    public function showEventLog(){
        return view('admin.eventlog.index');
    }
}
