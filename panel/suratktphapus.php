<?php
include_once('../koneksi.php');
$koneksi->query("DELETE FROM suratktp WHERE idsuratktp='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Simpan');</script>";
echo "<script>location='suratktpdaftar.php';</script>";
