<?php
include_once('koneksi.php');

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $ambil = $koneksi->query("SELECT * FROM user WHERE username='$username' AND password='$password' and level='Penduduk'");
    $akunyangcocok = $ambil->num_rows;
    if ($akunyangcocok == 1) {
        $akun = $ambil->fetch_assoc();
        if ($akun['statusaktif'] == 'Tidak Aktif') {
            echo "<script> alert('Akun anda belum aktif, mohon menunggu konfirmasi admin');</script>";
            echo "<script> location ='login.php';</script>";
        } else {
            $_SESSION["pengguna"] = $akun;
            echo "<script> alert('Login Berhasil');</script>";
            echo "<script> location ='panel/home.php';</script>";
        }
    } else {
        echo "<script> alert('Login Gagal, Username atau Password anda salah');</script>";
        echo "<script> location ='login.php';</script>";
    }
}
