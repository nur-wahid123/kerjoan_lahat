<?php
include_once('../koneksi.php');
$koneksi->query("DELETE FROM pengumuman WHERE id='$_GET[id]'");

echo "<script>alert('Data Berhasil Di Hapus');</script>";
echo "<script>location='pengumumandaftar.php';</script>";
