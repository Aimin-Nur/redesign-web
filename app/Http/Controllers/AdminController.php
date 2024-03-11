<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\ModelPorto;
use App\Models\ModelKarir;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function verifUser()
    {
        return view('admin.verifUser');
    }

    public function manageUser()
    {
        return view('admin.manageUser');
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
            $originalName = $file->getClientOriginalName(); // Ambil nama asli file

            // Simpan file ke direktori yang ditentukan
            $fotoDirectory = 'public/uploads/Portofolio-Malewa';
            $filePath = $file->storeAs($fotoDirectory, $originalName);

            // Simpan nama file ke database
            $savePorto->gambar = $originalName;
        }

        $savePorto->save();
        return redirect('/managePortofolio/{id}')->with('Berhasil', 'Portofolio Berhasil ditambhakan.');
    }
}
