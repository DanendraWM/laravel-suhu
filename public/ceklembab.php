<?php
include 'koneksi.php';

$sql = mysqli_query($koneksi, 'SELECT * FROM sensors ORDER BY id DESC');
$data = mysqli_fetch_array($sql);
$kelembapan = $data['kelembapan'];
echo $kelembapan;
