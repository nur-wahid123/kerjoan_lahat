<?php
include_once('../koneksi.php');
$koneksi->query("DELETE FROM user WHERE iduser='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Simpan');</script>";
echo "<script>location='internaldaftar.php';</script>";
