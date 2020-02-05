<?php

use App\Gaji;
use Illuminate\Database\Seeder;
class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaji = new Gaji();
        $gaji->nip = 5631753;
        $gaji->nama = 'Udin';
        $gaji->agama ='Islam';
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->jabatan='Manager';
        $gaji->jam_kerja='150';
        $gaji->save();

        $gaji = new Gaji();
        $gaji->nip = 7381952;
        $gaji->nama = 'Zaenal';
        $gaji->agama ='Islam';
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->jabatan='Sekertaris';
        $gaji->jam_kerja='210';
        $gaji->save();

        $gaji = new Gaji();
        $gaji->nip = 657383;
        $gaji->nama = 'Jamal';
        $gaji->agama ='Islam';
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->jabatan='Staff';
        $gaji->jam_kerja='260';
        $gaji->save();

    }
}
