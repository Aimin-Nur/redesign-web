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
        return view('admin.verifUser', compact('getUser','countVerif','countNotVerif'));
    }

    public function manageUser()
    {
        $getUser = DB::table('users')->where('status', 1)->get();
        $countVerif = User::where('status', 1)->count();
        $countNotVerif = User::where('status', 0)->count();
        return view('admin.manageUser', compact('getUser','countVerif'));
    }

    public function addPorto()
    {
        return view('admin.addPortofolio');
    }

    public function managePorto()
    {
        $getArtikel = DB::table('portofolio')->get();
        return view('admin.managePorto', compact('getArtikel'));
    }

    public function savePorto(Request $request)
    {
        $savePorto = new ModelPorto();
        $savePorto->status = $request->input('field_status');
        $savePorto->judul = $request->input('field_judul');
        $savePorto->isi = nl2br($request->input('field_deskripsi'));


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
}
