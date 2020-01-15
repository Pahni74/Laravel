<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $a='Pahni';
        $b='Hanawan';
        return 'Nama Saya '.$a.' '.$b;
    }
}
