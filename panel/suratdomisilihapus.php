<?php
include_once('../koneksi.php');
$koneksi->query("DELETE FROM suratdomisili WHERE idsuratdomisili='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Simpan');</script>";
echo "<script>location='suratdomisilidaftar.php';</script>";
