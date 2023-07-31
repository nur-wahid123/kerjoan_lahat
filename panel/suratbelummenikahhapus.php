<?php
include_once('../koneksi.php');
$koneksi->query("DELETE FROM suratbelummenikah WHERE idsuratbelummenikah='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Simpan');</script>";
echo "<script>location='suratbelummenikahdaftar.php';</script>";
