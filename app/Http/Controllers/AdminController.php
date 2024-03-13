<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\ModelPorto;
use App\Models\ModelKarir;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function verifUser()
    {
        $getUser = DB::table('users')->where('status', 0)->get();
        $countVerif = User::where('status', 1)->count();
        $countNotVerif = User::where('status', 0)->count();

        $getCount = DB::table('users')->where('status', 0)->count();
        return view('admin.verifUser', compact('getUser','countVerif','countNotVerif','getCount'));
    }

    public function sendVerifUser($id)
    {
        $getUser = User::where('id', $id)->first();
        $getUser->status = 1;
        $getUser->update();
        return redirect('/verifUser/{id}')->with('berhasil', 'Akun User berhasil diverifikasi');
    }

    public function cancelVerifUser($id)
    {
        $getUser = User::where('id', $id)->first();
        $getUser->status = 0;
        $getUser->update();
        return redirect('/manageUser/{id}')->with('berhasil', 'Akun User berhasil dinonaktifkan');
    }



    public function manageUser()
    {
        $getUser = DB::table('users')->where('status', 1)->get();
        $countVerif = User::where('status', 1)->count();
        $countNotVerif = User::where('status', 0)->count();
        $getCount = DB::table('users')->where('status', 1)->count();
        return view('admin.manageUser', compact('getUser','countVerif', 'getCount'));
    }

    public function addPorto()
    {
        return view('admin.addPortofolio');
    }

    public function managePorto()
    {
        $publish = "Publish";
        $draft = "Draf";
        $getArtikel = DB::table('portofolio')->get();
        $countPublish = ModelPorto::where('status', $publish)->count();
        $countDraf = ModelPorto::where('status', $draft)->count();
        return view('admin.managePorto', compact('getArtikel','countPublish','countDraf'));
    }

    public function editPorto($id)
    {
        $getId = ModelPorto::where('id', $id)->first();
        return view('admin.editPortofolio', compact('getId'));
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
        return redirect('/managePortofolio/{id}')->with('berhasil', 'Portofolio Berhasil diEdit.');
    }

    public function sendEditKarir($id, Request $request){
        $saveArtikel = ModelKarir::find($id);

        $saveArtikel->status = $request->input('field_status');
        $saveArtikel->judul = $request->input('field_judul');
        $saveArtikel->isi = $request->input('field_isi');


        if ($request->hasFile('field_foto')) {
            $file = $request->file('field_foto');
            $originalName = $file->getClientOriginalName();

            $fotoDirectory = 'public/uploads/Karir-Malewa';
            $filePath = $file->storeAs($fotoDirectory, $originalName);

            $saveArtikel->gambar = $originalName;
        }

        $saveArtikel->save();
        return redirect('/manageKarir/{id}')->with('berhasil', 'Artikel Berhasil diEdit.');
    }

    public function editKarir($id){
        $getId = ModelKarir::where('id', $id)->first();
        return view('admin.editKarir', compact('getId'));
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
        return redirect('/managePortofolio/{id}')->with('berhasil', 'Portofolio Berhasil ditambahkan.');
    }

    public function manageKarir()
    {
        $getArtikel = DB::table('karir')->get();
        $countArtikel = ModelKarir::count();
        $publish = "Publish";
        $draft = "Draf";
        $countArtikelPublish = DB::table('karir')->where('status', $publish)->count();
        $countArtikelDraft = ModelKarir::where('status', $draft)->count();
        return view('admin.manageKarir', compact('getArtikel','countArtikelPublish','countArtikelDraft','countArtikel'));
    }

    public function saveKarirMalewa(Request $request)
    {
        $saveKarir = new ModelKarir;
        $saveKarir->status = $request->input('field_status');
        $saveKarir->judul = $request->input('field_judul');
        $saveKarir->isi = nl2br($request->input('field_deskripsi'));


        if ($request->hasFile('field_foto')) {
            $file = $request->file('field_foto');
            $originalName = $file->getClientOriginalName();

            $fotoDirectory = 'public/uploads/Karir-Malewa';
            $filePath = $file->storeAs($fotoDirectory, $originalName);

            $saveKarir->gambar = $originalName;
        }

        $saveKarir->save();
        return redirect('/managePortofolio/{id}')->with('berhasil', 'Karir Berhasil ditambahkan.');
    }

    public function addKarir()
    {
        return view('admin.addKarir');
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
}
