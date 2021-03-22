<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Data Mahasiswa";
        $data['mahasiswa'] = array(
            'nim' => '1915101049',
            'nama' => 'I Kadek Riski Septiawan'
        );
        $data['user'] = '';
        return view('admin.beranda', compact('title', 'data'));
    }
}
