<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController
{
    
        // Proses login
        public function login(Request $request)
        {
            $user = User::where('name', $request->input('username'))->first();

            if ($user && Hash::check($request->input('password'), $user->password)) {
                // Jika password cocok, lanjutkan login
                Auth::login($user);
                return redirect()->route('home'); 
            } else {
                // Jika password tidak cocok
                return back()->withErrors([
                    'message' => 'Nama atau password salah.',
                ]);
            }
            

        }
    
        // Proses registrasi
        public function register(Request $request)
        {
            
            $user = User::create([
                'name' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => $request->input('confirmPassword'), // Mengenkripsi password
            ]);

            // Debugging: Cek apakah data sudah disimpan
            //dd($user); // Cek apakah user berhasil dibuat

            // Login otomatis setelah registrasi
            Auth::login($user);

            return redirect()->route('Tapaknusahome');
        }


            
        // Proses logout
        public function logout(Request $request)
        {
            Auth::logout();
            return redirect()->route('Tapaknusahome');
           
        }
}
