<link rel="stylesheet" type="text/css" href="/css/style.css">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<script type="text/javascript" src="/js/app.js"></script>

<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>


<!DOCTYPE html>
<html>

<head></head>

<p> Nama    : Kelly </p>
<p> NIM     : 03081200030 </p>
<p> Kelas   : 20SI2 </p>
<img src="images/logo.png" alt="">
<a href="querypdf" class="btn btn-CetakPDF btn-lg active" role="button" aria-pressed="true">CetakPDF</a>

<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Transaksi_ID</th>
            <th scope="col">Namapegawai</th>
            <th scope="col">Usia</th>
            <th scope="col">Jeniskelamin</th>
          </tr>
        </thead>
        <tbody>
        
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
</body>
<html></html>