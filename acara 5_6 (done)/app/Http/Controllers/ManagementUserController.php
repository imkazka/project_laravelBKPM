<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    // Method untuk menampilkan semua data user
    public function index()
    {
        // return "Halo ini adalah method index, dalam controller ManagementUser";
        $nama = "Azka";

        $pelajaran = ["Logika & Algoritma","Matematika Diskrit","Pemrograman Web Framework"];

        return view('home', compact('nama','pelajaran'));
    }

}