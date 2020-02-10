<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Buku;
use App\PembelianBuku;
use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('/', function () {
    return Buku::all();
});
Route::get('messsage', function(){
    return 'Halo ini Halaman Pesan';
});
Route::get('Bola', function(){
    return 'Persib VS Persija';
});
Route::get('Tekno', function () {
    return 'Teknologi Semakin Berkembang';
});
Route::get('berita', function () {
    return 'ini halaman berita';
});
Route::get('variable', function () {

    $data1= 'Ini Variable Data 1';
    $data2= 'Ini Variable Data 2';
    $data3= 'Ini Variable Data 3';
    $data4= 'Ini Variable Data 4';
    $data5= 'Ini Variable Data 5';
    return $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5;
});
Route::get('angkot/{jurusan}', function () {
    $jurusan = 'Cibaduyut - Karang Setra';
    $data = 'Angkot Jurusan:';
    return $data .' '.$jurusan;
});
Route::get('angkot/{jurusan}/{jadwal}', function () {
    $jurusan = 'Cibaduyut - Karang Setra';
    $data = 'Angkot Jurusan:';
    $jadwal ='Berangkat Jam 07:00 WIB';
    return $data .' '.$jurusan.' '.$jadwal;
});
Route::get('users/{nama}/{alamat}/{nomor}', function ($nama,$alamat,$nomor) {
    return 'Halo ' .$nama.' Yang Beralamat Di '.$alamat.' Nomor HP '.$nomor;
});
Route::get('siswa/{nama}/{nilai?}', function ($nama,$nilai = ' Belum Memiliki Nilai') {
    if($nilai > 50 ){
        $grade= 'Grade Anda A';
    }
    elseif($nilai <= 50 && $nilai > 40){
        $grade= 'Grade Anda B';
    }
    elseif($nilai <= 40 && $nilai > 30){
        $grade= 'Grade Anda C';
    }
    elseif($nilai <= 30 && $nilai > 20){
        $grade= 'Grade Anda D';
    }
    elseif($nilai <= 20 && $nilai >= 1){
        $grade= 'Grade Anda E';
    }
    else{
        $grade= 'Dan Tidak Memiliki Grade';
    }
    return 'Halo : '.$nama.'<br> '.$nilai.'<br> '.$grade;
});

Route::get('contoh','ContohController@latihan');
Route::get('contoh2','ContohController@latihan2');
Route::get('profil2','ContohController@latihan3');
Route::get('profil3','ContohController@latihan4');
Route::get('biodata2','BiodataController@biodata');
Route::get('menu/{mkn}','ContohController@menu');
Route::get('menu2/{mkn?}','ContohController@menu');
Route::get('pesan/{makan?}/{mkn?}/{uang?}','ContohController@pesan');
Route::get('tampil-buku','BukuController@tampil');
Route::get('hitung-buku','BukuController@hitungbuku');

//CRUD
Route::get('get-buku','BukuController@index');
Route::get('create-buku/{judul}','BukuController@createdata');
Route::get('get-buku/{id}','BukuController@show');
Route::get('delete-buku/{id}/{judul}','BukuController@delete');
Route::get('update-buku/{id}/{judul}','BukuController@update');


// Route::resource('students', 'StudentsController');
//CRUD 2
Route::get('siswa','SiswaController@index');
Route::get('create-siswa/{nama}/{nis}','SiswaController@create');
Route::get('show-siswa/{id}','SiswaController@show');
Route::get('update-siswa/{id}/{nama}/{nis}','SiswaController@update');
Route::get('delete-siswa/{id}/{nama}','SiswaController@destroy');

//Passing Data
Route::get('passing','PracticeController@pass');
Route::get('passing1','PracticeController@pass1');
Route::get('status/{a?}','PracticeController@status');
Route::get('buku','PracticeController@loop');

//Book
Route::get('book','BukuController@index');
Route::get('book/{id}','BukuController@show');

//Gaji
Route::get('gaji','GajiController@index');
Route::get('gaji/{id}','GajiController@show');

//Belajar Blade Templating
Route::get('/profil', function () {
return view('profil');
});
Route::get('/kontak', function () {
    return view('kontak');
    });

    Route::get('/blog', function () {
        return view('blog');
        });

///RELASI
# URL localhost:8000/relasi-1/
Route::get('relasi-1', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;

});

# URL localhost:8000/relasi-2/
Route::get('relasi-2', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama dosen pembimbing
    return $mahasiswa->dosen->nama;

 });
Route::get('relasi-3', function() {

    # Temukan dosen dengan yang bernama Yulianto
    $dosen = Dosen::where('nama', '=', 'Yulianto')->first();

    # Tampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $temp)
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
});

Route::get('relasi-4', function(){

    #Mencari Data Mahasiswa Yang Bernama Noviyanto Rachmadi
    $novay = Mahasiswa::where("nama",'=','Noviyanto Rachmadi')->first();
    #Menampilkan Seluruh Hobi Si Novay
    foreach($novay->hobi as $temp)
    echo '<li>'.$temp->hobi.'</li>';
});

Route::get('relasi-5', function(){

    #Mencari Data Hobi Yang Bernama Mandi Hujan
    $mandi_hujan = Hobi::where("hobi",'=','Mandi Hujan')->first();
    #Menampilkan Semua Mahasiswa Yang Punya Hobi Mandi Hujan
    foreach($mandi_hujan->mahasiswa as $temp)
    echo '<li> Nama:' .$temp->nama.' '.'<strong>'.$temp->nim.'</strong></li>';
});

Route::get('eloquent',function(){
    $mahasiswa = Mahasiswa::with('wali','dosen','hobi')->get();
    return view ('eloquent',compact('mahasiswa'));
});







