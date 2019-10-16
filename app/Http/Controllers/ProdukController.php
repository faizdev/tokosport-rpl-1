<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    // menampilkan view index
    public function index()
    {
        // ambil dulu data produk dari database
        $dataProdukFromDB = DB::table('produk')
                            ->get();

        // kembalikan view ke user
        return view('app.manajemen-produk.index',[
            "dataProduk"    =>  $dataProdukFromDB
        ]);
    }

    public function create()
    {
        echo "ini halaman create";
    }
}
