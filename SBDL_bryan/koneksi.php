<?php
    $db = new mysqli("localhost", "root", "", "sbdl_bryan");
    if(mysqli_connect_errno()){
        echo("Gagal Koneksi, Kesalahan pada: ".mysqli_connect_errno());
        exit();
    }
?>