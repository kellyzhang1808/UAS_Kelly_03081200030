Nama : Kelly
NIM : 03081200030

Penjelasan:

1.Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator
caranya :
masukkan "php artisan crud:generate formpegawai --fields='Namapegawai#string;Usia#integer;Jeniskelamin#string' --controller-namespace=App\Http\Controllers\Admin --route-group=admin --form-helper=html" pada bagian terminal 
crud ini menjelaskan tentang informasi dari para pegawai

2.Buatlahsebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan queryview tersebut kedalam file queryUAS.sql
caranya :
CREATE VIEW Pegawai AS
SELECT tabel.Transactionnumber as Transaksi_ID, abc.Namapegawai as Namapegawai, abc.Usia as Usia, abc.Jeniskelamin as Jeniskelamin
FROM form_transactions tabel
LEFT JOIN tentangpegawais abc on abc.Namapegawai = tabel.pic

3.Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknyakedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan
caranya :
Membuat file views yang baru dengan nama query.blade.php, lalu masukkan code
<?php
          $rows = \DB::select('select Transaksi_ID, Namapegawai, Usia, Jeniskelamin from pegawai');
          foreach($rows as $row)
          echo' <tr>
            <td scope="row">'.$row->Transaksi_ID.'</td>
            <td>'.$row->Namapegawai.'</td>
            <td>'.$row->Usia.'</td>
            <td>'.$row->Jeniskelamin.'</td>
          </tr>';
          ?>
          </tbody>
        </table>
untuk memunculkan tabel views yang telah dibuat tadi
masukkan composer require barryvdh/laravel-dompdf pada bagian terminal
lalu buatlah controller dengan memasukkan code phpartisan make:controllerLaporanController
pada bagian routes tambahkan 
Route::get('/laporan', [LaporanController::class,'index']);
Route::get('/laporan/cetak_pdf', [LaporanController::class,'cetak_pdf']);