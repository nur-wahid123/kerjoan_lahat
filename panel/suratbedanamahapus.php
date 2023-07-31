<?php
include_once('../koneksi.php');
$koneksi->query("DELETE FROM suratbedanama WHERE idsuratbedanama='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Simpan');</script>";
echo "<script>location='suratbedanamadaftar.php';</script>";
