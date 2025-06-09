<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController
{

    public function getAllUsers()
    {
        $allUsers = User::all(); 
        return view('app', compact('allUsers'));
    }

    public function updateUserName(User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        // Mengupdate nama pengguna
        $user->name = $request->name;
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'User name updated successfully');
    }

    public function updateUserEmail(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|email|max:255|unique:msusers,email,' . $user->id,
        ]);
    
        // Mengupdate nama pengguna
        $user->email = $request->email;
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'User email updated successfully');
    }

    public function updateUserPassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|string|min:8',
        ]);
    
        // Mengupdate password pengguna
        $user->password = bcrypt($request->password);
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'User password updated successfully');
    }
    
}
