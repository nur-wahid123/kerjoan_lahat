<?php
include_once('../koneksi.php');
$koneksi->query("DELETE FROM berita WHERE id='$_GET[id]'");

echo "<script>alert('Data Berhasil Di Hapus');</script>";
echo "<script>location='beritadaftar.php';</script>";
