<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ModelKarir;
use App\Models\ModelPorto;
use Illuminate\Support\Facades\Auth;

class MalewaController extends Controller
{
    public function index()
    {
        $publish = "Publish";
        $getArtikel = ModelKarir::where('status', $publish)->get();
        return view('malewa.karir', compact('getArtikel'));
    }
}
