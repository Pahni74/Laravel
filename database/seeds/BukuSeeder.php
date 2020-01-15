<?php
use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $buku = new Buku();
        $buku->judul = 'Belajar Laravel 1';
        $buku->jumlah_halaman = 60;
        $buku->penerbit ='Gramedia';
        $buku->synopsis = 'Belajar Laravel itu Menyenangkan';
        $buku->status='1';
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar Laravel 2';
        $buku->jumlah_halaman = 60;
        $buku->penerbit ='Gramedia';
        $buku->synopsis = 'Belajar Laravel itu Menyenangkan';
        $buku->status='1';
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar Laravel 3';
        $buku->jumlah_halaman = 60;
        $buku->penerbit ='Gramedia';
        $buku->synopsis = 'Belajar Laravel itu Menyenangkan';
        $buku->status='1';
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar Laravel 4';
        $buku->jumlah_halaman = 60;
        $buku->penerbit ='Gramedia';
        $buku->synopsis = 'Belajar Laravel itu Menyenangkan';
        $buku->status='1';
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar Laravel 5';
        $buku->jumlah_halaman = 60;
        $buku->penerbit ='Gramedia';
        $buku->synopsis = 'Belajar Laravel itu Menyenangkan';
        $buku->status='1';
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar Laravel 6';
        $buku->jumlah_halaman = 60;
        $buku->penerbit ='Gramedia';
        $buku->synopsis = 'Belajar Laravel itu Menyenangkan';
        $buku->status='1';
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar Laravel 7';
        $buku->jumlah_halaman = 60;
        $buku->penerbit ='Gramedia';
        $buku->synopsis = 'Belajar Laravel itu Menyenangkan';
        $buku->status='1';
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar Laravel 8';
        $buku->jumlah_halaman = 60;
        $buku->penerbit ='Gramedia';
        $buku->synopsis = 'Belajar Laravel itu Menyenangkan';
        $buku->status='1';
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar Laravel 9';
        $buku->jumlah_halaman = 60;
        $buku->penerbit ='Gramedia';
        $buku->synopsis = 'Belajar Laravel itu Menyenangkan';
        $buku->status='1';
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar Laravel 10';
        $buku->jumlah_halaman = 60;
        $buku->penerbit ='Gramedia';
        $buku->synopsis = 'Belajar Laravel itu Menyenangkan';
        $buku->status='1';
        $buku->save();
    }
}
