<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ModelKarir;
use App\Models\ModelPorto;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index ()
    {
        $user = Auth::guard('user')->user();

        if ($user !== null && $user->status == 0) {
            return view('users.notVerif');
        } elseif ($user === null || $user->status === NULL) {
            return redirect('/portal')->with('sesiHabis', 'Sesi Login Anda Berakhir.');
        } else {
            return view('users.home');
        }

    }

    public function formRegis()
    {
        return view('register');
    }


    public function sendRegis(Request $request)
    {
        $save = new User;
        $save->name = $request->input('field_nama');
        $save->email = $request->input('field_email');
        $save->password = $request->input('field_password');
        $save->save();

        if($save){
            return redirect('/portal')->with('Accepted', 'Berhasil Registarasi Akun, Silahkan Login.');
        }else{
            return redirect('/portal')->with('error', 'Akun Anda Gagal Terdaftar.');
        };
    }
}
