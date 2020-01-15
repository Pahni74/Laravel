<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return $siswa;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nama,$nis)
    {
        $siswa = new Siswa();
        $siswa->nama=$nama;
        $siswa->nis=$nis;
        $siswa->kelas='XI RPL 3';
        $siswa->jurusan='RPL';
        $siswa->alamat='Bandung';
        $siswa->tgl_lahir='2003-04-27';
        $siswa->save();
        return $siswa;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return $siswa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$nama,$nis)
    {
        $siswa =  Siswa::find($id);
        $siswa->nama=$nama;
        $siswa->nis=$nis;
        $siswa->kelas='XI RPL 3';
        $siswa->jurusan='RPL';
        $siswa->alamat='Jawa Barat,Bandung,Gading Junti Asri';
        $siswa->tgl_lahir='2003-04-27';
        $siswa->save();
        return $siswa;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }
}
