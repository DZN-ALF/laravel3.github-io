<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        return view('pesan.index',[
           'title' => 'Pesan',
           'active' => 'pesan'
        ]);
    }

public function proses(Request $request)
{
    $this->validate($request,[
        'nama' => 'required|min4|max20',
        'email' => 'required|@',
        'contact' => 'required|min12|max13'
    ]);
    return view('proses',['data'=> $request]);
 }
}