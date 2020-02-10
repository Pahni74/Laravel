<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    # MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'id_mahasiswa');
    public $timestamps = true;

    public function mahasiswa() {
        return $this->belongsTo('App\Mahasiswas', 'id_mahasiswa');
    }

}
