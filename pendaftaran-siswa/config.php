<?php

$server = "127.0.0.1";
$user = "root";
$password = "";
$nama_database = "pendaftaran_siswa";
$port = 3307;

$db = mysqli_connect($server, $user, $password, $nama_database, $port);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>