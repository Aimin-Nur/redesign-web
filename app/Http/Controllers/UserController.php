<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ModelKarir;
use App\Models\ModelPorto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index ()
    {
        $user = Auth::guard('user')->user();
        $publish = "Publish";
        $draft = "Draf";
        $getArtikel = DB::table('portofolio')->get();
        $countPublish = ModelPorto::where('status', $publish)->count();
        $countDraf = ModelPorto::where('status', $draft)->count();

        if ($user !== null && $user->status == 0) {
            return view('users.notVerif');
        } elseif ($user === null || $user->status === NULL) {
            return redirect('/portal')->with('sesiHabis', 'Sesi Login Anda Berakhir.');
        } else {
            return view('users.home', compact('getArtikel','countPublish','countDraf'));
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

    public function addPorto()
    {
        return view('users.addPortofolio');
    }

    public function savePorto(Request $request)
    {
        $savePorto = new ModelPorto();
        $savePorto->status = $request->input('field_status');
        $savePorto->judul = $request->input('field_judul');
        $savePorto->isi = nl2br($request->input('field_deskripsi'));
        $savePorto->editor = "Admin PT. Malewa";


        if ($request->hasFile('field_foto')) {
            $file = $request->file('field_foto');
            $originalName = $file->getClientOriginalName();

            $fotoDirectory = 'public/uploads/Portofolio-Malewa';
            $filePath = $file->storeAs($fotoDirectory, $originalName);

            $savePorto->gambar = $originalName;
        }

        $savePorto->save();
        return redirect('/dashboardUser/{id}')->with('berhasil', 'Portofolio Berhasil ditambahkan.');
    }

    public function destroyPorto($id)
    {
        $delete = DB::table('portofolio')->where('id', $id)->delete();

        if ($delete) {
            return redirect()->back()->with('hapus', 'Portofolio berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Portofolio gagal dihapus.');
        }
    }

    public function editPorto($id)
    {
        $getId = ModelPorto::where('id', $id)->first();
        return view('users.editPortofolio', compact('getId'));
    }

    public function sendEditPorto($id, Request $request)
    {
        $saveArtikel = ModelPorto::find($id);

        $saveArtikel->status = $request->input('field_status');
        $saveArtikel->judul = $request->input('field_judul');


        if ($request->hasFile('field_foto')) {
            $file = $request->file('field_foto');
            $originalName = $file->getClientOriginalName();

            $fotoDirectory = 'public/uploads/Portofolio-Malewa';
            $filePath = $file->storeAs($fotoDirectory, $originalName);

            $saveArtikel->gambar = $originalName;
        }

        $saveArtikel->save();
        return redirect('/dashboardUser/{id}')->with('berhasil', 'Portofolio Berhasil diEdit.');
    }

    public function manageKarir()
    {
        $getArtikel = DB::table('karir')->get();
        $countArtikel = ModelKarir::count();
        $publish = "Publish";
        $draft = "Draf";
        $countArtikelPublish = DB::table('karir')->where('status', $publish)->count();
        $countArtikelDraft = ModelKarir::where('status', $draft)->count();
        return view('users.manageKarir', compact('getArtikel','countArtikelPublish','countArtikelDraft','countArtikel'));
    }

    public function addKarir()
    {
        return view('users.addKarir');
    }

    public function saveKarirMalewa(Request $request)
    {
        $getAuth = Auth::guard('user')->user();
        $getNama = $getAuth->name;

        $saveKarir = new ModelKarir;
        $saveKarir->status = $request->input('field_status');
        $saveKarir->judul = $request->input('field_judul');
        $saveKarir->isi = nl2br($request->input('field_deskripsi'));
        $saveKarir->editor = $getNama;


        if ($request->hasFile('field_foto')) {
            $file = $request->file('field_foto');
            $originalName = $file->getClientOriginalName();

            $fotoDirectory = 'public/uploads/Karir-Malewa';
            $filePath = $file->storeAs($fotoDirectory, $originalName);

            $saveKarir->gambar = $originalName;
        }

        $saveKarir->save();
        return redirect('/manageKarirByUser/{id}')->with('berhasil', 'Karir Berhasil ditambahkan.');
    }

    public function editKarir($id){
        $getId = ModelKarir::where('id', $id)->first();
        return view('users.editKarir', compact('getId'));
    }

    public function destroyKarir($id)
    {
        $delete = DB::table('karir')->where('id', $id)->delete();

        if ($delete) {
            return redirect()->back()->with('hapus', 'Portofolio berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Portofolio gagal dihapus.');
        }
    }

    public function sendEditKarir($id, Request $request){

        $getAuth = Auth::guard('user')->user();
        $getNama = $getAuth->name;

        $saveArtikel = ModelKarir::find($id);

        $saveArtikel->status = $request->input('field_status');
        $saveArtikel->judul = $request->input('field_judul');
        $saveArtikel->isi = $request->input('field_isi');
        $saveArtikel->editor = $getNama;


        if ($request->hasFile('field_foto')) {
            $file = $request->file('field_foto');
            $originalName = $file->getClientOriginalName();

            $fotoDirectory = 'public/uploads/Karir-Malewa';
            $filePath = $file->storeAs($fotoDirectory, $originalName);

            $saveArtikel->gambar = $originalName;
        }

        $saveArtikel->save();
        return redirect('/manageKarirByUser/{id}')->with('berhasil', 'Karir Berhasil diEdit.');
    }


}
