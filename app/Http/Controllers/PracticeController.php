<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass(){
    $nama='Pahni';
    $alamat='Bandung';
    return view('latihan',compact('nama','alamat'));
    }

    public function pass1(){
        $gaji=5000000;
        return view('latihan1',['penghasilan'=>$gaji]);
    }
    //Passing Data Parameter
    public function status($status='Jomblo'){
        //dd($status);
        return view('latihan2', compact('status'));
    }

    public function loop(){
        $buku= [

            ['judul'=>'Bangkit Dari Remedial','penerbit'=>'Erlangga',
            'harga'=>100000,'penulis'=>'Aku Yang Suka Remedi'
            ],

            ['judul'=>'Tips Move on Dari Kamu','penerbit'=>'Erlangga',
            'harga'=>150000,'penulis'=>'Epul'
            ],

            ['judul'=>'Kekuaran 1/3 Malam','penerbit'=>'Erlangga',
            'harga'=>250000,'penulis'=>'Mutia'
            ]
        ];
        return view('latihan3',compact('buku'));

    }
}

