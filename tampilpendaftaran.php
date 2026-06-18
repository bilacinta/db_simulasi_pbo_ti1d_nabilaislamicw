<?php
require_once 'koneksi.php';
require_once 'pendaftaranreguler.php';
require_once 'pendaftaranprestasi.php';
require_once 'pendaftarankedinasan.php';

$koneksi = new Koneksi();

$db = $koneksi->getKoneksi();

$reguler = new PendaftaranReguler(0,"","",0,0,"","");
$prestasi = new PendaftaranPrestasi(0,"","",0,0,"","");
$kedinasan = new PendaftaranKedinasan(0,"","",0,0,"","");

$dataReguler = $reguler->getDaftarReguler($db);
$dataPrestasi = $prestasi->getDaftarPrestasi($db);
$dataKedinasan = $kedinasan->getDaftarKedinasan($db);
?>

<!DOCTYPE html>
<html>
<head>
<title>Sistem PMB</title>

<style>

body{
    font-family: Arial, sans-serif;
    background: #FFF8F0;
    margin:0;
}

h1{
    text-align:center;
    color:#A26769;
    margin-top:30px;
}

h2{
    background:#F8D7DA;
    color:#7D5A5A;
    padding:12px;
    border-radius:10px;
}

.container{
    width:95%;
    margin:auto;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    margin-bottom:40px;
    box-shadow:0px 3px 10px rgba(0,0,0,0.15);
}

th{
    background:#E8CFC1;
    color:#5C4033;
    padding:12px;
}

td{
    padding:10px;
    border-bottom:1px solid #eee;
    text-align:center;
}

tr:nth-child(even){
    background:#FFF5F7;
}

tr:hover{
    background:#FFE4E1;
}

</style>
</head>
<body>

<h1>Sistem Manajemen Pendaftaran Mahasiswa Baru</h1>

<div class="container">

<!-- REGULER -->
<h2>Jalur Reguler</h2>

<table>

<tr>
<th>ID</th>
<th>Nama</th>
<th>Asal Sekolah</th>
<th>Nilai Ujian</th>
<th>Info Jalur</th>
<th>Total Biaya</th>
</tr>

<?php

while($row = $dataReguler->fetch_assoc())
{
    $obj = new PendaftaranReguler(
        $row['id_pendaftaran'],
        $row['nama_calon'],
        $row['asal_sekolah'],
        $row['nilai_ujian'],
        $row['biaya_pendaftaran_dasar'],
        $row['pilihan_prodi'],
        $row['lokasi_kampus']
    );

?>

<tr>
<td><?= $row['id_pendaftaran'] ?></td>
<td><?= $row['nama_calon'] ?></td>
<td><?= $row['asal_sekolah'] ?></td>
<td><?= $row['nilai_ujian'] ?></td>
<td><?= $obj->tampilkanInfoJalur() ?></td>
<td>Rp <?= number_format($obj->hitungTotalBiaya(),0,",",".") ?></td>
</tr>

<?php } ?>

</table>


<!-- PRESTASI -->

<h2>Jalur Prestasi</h2>

<table>

<tr>
<th>ID</th>
<th>Nama</th>
<th>Asal Sekolah</th>
<th>Nilai Ujian</th>
<th>Info Jalur</th>
<th>Total Biaya</th>
</tr>

<?php

while($row = $dataPrestasi->fetch_assoc())
{
    $obj = new PendaftaranPrestasi(
        $row['id_pendaftaran'],
        $row['nama_calon'],
        $row['asal_sekolah'],
        $row['nilai_ujian'],
        $row['biaya_pendaftaran_dasar'],
        $row['jenis_prestasi'],
        $row['tingkat_prestasi']
    );

?>

<tr>
<td><?= $row['id_pendaftaran'] ?></td>
<td><?= $row['nama_calon'] ?></td>
<td><?= $row['asal_sekolah'] ?></td>
<td><?= $row['nilai_ujian'] ?></td>
<td><?= $obj->tampilkanInfoJalur() ?></td>
<td>Rp <?= number_format($obj->hitungTotalBiaya(),0,",",".") ?></td>
</tr>

<?php } ?>

</table>


<!-- KEDINASAN -->

<h2>Jalur Kedinasan</h2>

<table>

<tr>
<th>ID</th>
<th>Nama</th>
<th>Asal Sekolah</th>
<th>Nilai Ujian</th>
<th>Info Jalur</th>
<th>Total Biaya</th>
</tr>

<?php

while($row = $dataKedinasan->fetch_assoc())
{
    $obj = new PendaftaranKedinasan(
        $row['id_pendaftaran'],
        $row['nama_calon'],
        $row['asal_sekolah'],
        $row['nilai_ujian'],
        $row['biaya_pendaftaran_dasar'],
        $row['sk_ikatan_dinas'],
        $row['instansi_sponsor']
    );

?>

<tr>
<td><?= $row['id_pendaftaran'] ?></td>
<td><?= $row['nama_calon'] ?></td>
<td><?= $row['asal_sekolah'] ?></td>
<td><?= $row['nilai_ujian'] ?></td>
<td><?= $obj->tampilkanInfoJalur() ?></td>
<td>Rp <?= number_format($obj->hitungTotalBiaya(),0,",",".") ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>