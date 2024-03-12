<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginUser(Request $request)
    {
        if (Auth::guard('admin')->attempt([
            'name' => $request->input('field_name'),
            'password' => $request->input('field_password'),
        ])) {
            // Autentikasi sebagai user berhasil
            $user = Auth::guard('admin')->user();
            $userId = $user->id;
            return redirect('/dashboardAdmin/' . $userId);

        } elseif (Auth::guard('user')->attempt([
            'name' => $request->input('field_name'),
            'password' => $request->input('field_password'),
        ])) {
            // Autentikasi sebagai admin DLH berhasil
            $user = Auth::guard('user')->user();
            $userId = $user->id;
            return redirect('/dashboardUser/' . $userId);
        }

        return redirect('/portal')->with(['warning' => 'Username atau Password Anda tidak terdaftar.']);
    }


    public function logoutAdmin(){
        $guards = ['admin', 'user'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::guard($guard)->logout();
                break;
            }
        }

        return redirect('/portal')->with(['logout' => 'Anda berhasil Logout.']);
    }


}
