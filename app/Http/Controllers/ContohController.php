<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan(){

        return 'Ini Contoh Latihan Controller';
    }

    public function latihan2(){
        $a='Pahni';
        $b='Hanawan';
        return 'Nama Saya '.$a.' '.$b;
    }
    //Passing Data From Controller To View
    public function latihan3(){
    $a ='Arthur Crosby';
    return view('test',compact('a'));
    }

    public function latihan4(){
        $a='Supri';
        return view('test2',['nama'=>$a]);
    }

    public function menu($a='Batagor'){

        return view('menu',compact('a'));
    }
    public function menu2($a){

        return view('menu2',compact('a'));
    }

    public function pesan($a = null,$b=null,$c=null){
        if(isset($a)){
            $a = 'Anda Memesan '.$a;
        }
        if(isset($b)){
            $b = '& '.$b;
        }
        if (isset($c)) {
            if ($c >= 25000) {
                $c = 'Anda Mendapatkan Ukuran Jumbo ';
            }
            elseif ($c > 15000 &&  $c <= 25000) {
                $c = 'Anda Mendapatkan Ukuran Medium ';
            }
            elseif ($c >0  && $c <= 15000) {
                $c = 'Anda Mendapatkan Ukuran Small ';
            }
            else{
                $c = 'Harga Tidak Valid ';
            }

        }
        if (!isset($a)) {
            $a='Anda Belum Memesan Sesuatu';
        }
        return view('pesan',compact('a','b','c'));
    }



}
