<?php
use App\PembelianBuku;
use Illuminate\Database\Seeder;

class PembelianBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = new PembelianBuku();
        $pembelian->judul_buku = 'Pendekar';
        $pembelian->nama_pembeli = 'Pahni Hanawan';
        $pembelian->harga_buku = 500000;
        $pembelian->waktu_pembelian= '27 April 2003';
        $pembelian->save();
    }
}
