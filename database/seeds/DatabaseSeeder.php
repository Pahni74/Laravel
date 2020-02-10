<?php
use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BukuSeeder::class);
        $this->call(GajiSeeder::class);
        $this->call(PembelianBukuSeeder::class);
        $this->call(PenjualanBukuSeeder::class);
        $this->call(PeminjamanBukuSeeder::class);
        # Kita akan beri nama Seeder dengan 'RelasiSeeder'
        $this->call(RelasiSeeder::class);
		# Tampilkan informasi berikut bila Seeder telah dilakukan
		$this->command->info('RelasiSeeder berhasil.');
    }
}
