<?php
use App\PeminjamanBuku;
use Illuminate\Database\Seeder;

class PeminjamanBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peminjaman = new PeminjamanBuku();
        $peminjaman->judul_buku = 'Pendekar';
        $peminjaman->nama_peminjam = 'Pahni Hanawan';
        $peminjaman->genre_buku = 'Action';
        $peminjaman->tanggal_pinjaman = '27 April 2003';
        $peminjaman->lama_waktu_pinjam= '1 Minggu';
        $peminjaman->save();
    }
}
