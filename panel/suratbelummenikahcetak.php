<!DOCTYPE html>
<html>
<?php
include '../koneksi.php';
$ambildata = $koneksi->query("SELECT * FROM suratbelummenikah WHERE idsuratbelummenikah ='$_GET[id]'") or die(mysqli_error($koneksi));
$data = $ambildata->fetch_assoc();
$spasi = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
?>
<title>SURAT KETERANGAN BELUM PERNAH MENIKAH</title>
<link rel="shortcut icon" type="image/x-icon" href="../assets/home/assets/img/logo/logbaru.png">

<head>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }

        @page {
            size: auto;
            margin: 0;
        }
    </style>
</head>

<body>
    <br><br><br>
    <center>
        <table style='width:600; font-size:16pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <tr>
                <td><img src="../assets/home/assets/img/logo/logobaru.png" width="70" height="70"></td>
                <td>
                    <center>
                        <font size="6"><b> PEMERINTAH KABUPATEN LAHAT</b></font><br>
                        <font size="6"><b> DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</b></font><br>
                        <font size="2">JL. Kolonel H Barlian, Bandar Jaya, Kec. Lahat, Kabupaten Lahat<br>Sumatera Selatan 31412, Indonesia.<br>
                            Telp. 082 731 321822.
                        </font><br>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <center>
            <span>-----------------------------------------------------------------------------------------------------------------------</span></center>
        <table width="625">
            <!-- <tr>
                <td>
                    <font size="2"><?= $spasi ?>NO. Kode Desa : <b>33. 06. 110. 044</b></font>
                </td>
            </tr>-->
        </table>
        <table width="625">
            <tr>
                <td colspan="2">
                    <center>
                        <font size="4"><b><u>SURAT KETERANGAN BELUM PERNAH MENIKAH</u></b></font>
                    </center>
                    <center>
                        <font size="4"><b>Nomor : <?= $data['idsuratbelummenikah'] ?>/<?= date('m') ?>/<?= date('Y') ?></b></font>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2"><?= $spasi ?>Yang bertanda tangan dibawah ini Saya Kepala Dukcapil Kabupaten Lahat menerangkan bahwa :</font>
                </td>
            </tr>
        </table>
        <table width="500">
            <tr>
                <td width="175px">Nama</td>
                <td>: </td>
                <td width="350px"><?= $data['nama']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: </td>
                <td><?= $data['jeniskelamin']; ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>: </td>
                <td><?= $data['tempatlahir'] . ', ' . tanggal($data['tanggallahir']); ?></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>: </td>
                <td><?= $data['nik']; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: </td>
                <td><?= $data['statusperkawinan']; ?></td>
            </tr>
            <tr>
                <td>Kewarganegaraan & Agama</td>
                <td>: </td>
                <td><?= $data['kewarganegaraan'] ?> & <?= $data['agama'] ?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: </td>
                <td><?= $data['pekerjaan']; ?></td>
            </tr>
            <tr>
                <td>Tempat Tinggal</td>
                <td>: </td>
                <td><?= $data['alamat']; ?></td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <?= $spasi ?>Bahwa Orang tersebut diatas adalah Betul-betul warga penduduk Kecamatan Lahat, Kabupaten Lahat dan sampai saat ini orang tersebut Berstatus <b>BELUM PERNAH MENIKAH</b>.
                    <br><br>
                    Demikian Surat Keterangan ini Kami buat dengan sebenar-benarnya untuk menjadikan Maklum bagi yang berkepentingan.
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td width="430"><br><br><br><br></td>
                <?php
                $now = date("Y-m-d");

                ?>
                <td>
                    <center><?php echo tanggal($now); ?>
                        <br>KEPALA Dukcapil Kabupaten Lahat
                        <br><br><br><br><br>
                        ISKANDAR SUPRATMAN,SE.,MM.
                </td>
            </tr>
        </table>
    </center>
    <script>
        window.print();
    </script>
</body>

</html>