<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function biodata(){
        $a =' Pahni Hanawan';
        $b = ' Islam';
        $c = ' Laki-Laki';
        $d = ' SMK Assalaam Bandung';
        $e = ' 11';
        $f = ' RPL';
        $g = ' Bermain Game';
        $h = ' 16 Tahun';
        return view('biodata',['nama'=>$a,'agama'=>$b,'jk'=>$c,'sekolah'=>$d,'kelas'=>$e,'jurusan'=>$f,'hobi'=>$g,'umur'=>$h]);
    }
}
