<?php
include_once('../koneksi.php');
$koneksi->query("DELETE FROM suratskck WHERE idsuratskck='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Simpan');</script>";
echo "<script>location='suratskckdaftar.php';</script>";
