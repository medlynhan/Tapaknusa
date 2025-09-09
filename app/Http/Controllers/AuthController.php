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
            // Validasi manual supaya bisa kontrol pesan error
            $validator = \Validator::make($request->all(), [
                'username' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email',
                'confirmPassword' => 'required|string|min:6',
            ], [
                'email.unique' => 'Email ini sudah terdaftar, silakan gunakan email lain.',
            ]);

            // Kalau gagal validasi → balik ke halaman sebelumnya dengan error
            if ($validator->fails()) {
                return back()->withErrors([
                    'email' => "Email ini sudah terdaftar, silakan gunakan email lain",
                ]);
            }

            // Kalau lolos validasi → buat user
            $user = User::create([
                'name' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('confirmPassword')),
            ]);

            // Login otomatis
            Auth::login($user);



            return redirect()->route('Tapaknusahome')
                ->with('success', 'Registrasi berhasil, Anda telah login.');
        }




            
        // Proses logout
        public function logout(Request $request)
        {
            Auth::logout();
            return redirect()->route('Tapaknusahome');
           
        }
}
