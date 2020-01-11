<?php
use App\PenjualanBuku;
use Illuminate\Database\Seeder;

class PenjualanBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penjualan = new PenjualanBuku();
        $penjualan->judul_buku = 'Pendekar';
        $penjualan->nama_pembeli = 'Pahni Hanawan';
        $penjualan->genre_buku = 'Action';
        $penjualan->harga_buku = 500000;
        $penjualan->waktu_pembelian= '27 April 2003';
        $penjualan->save();
    }
}
