<!DOCTYPE html>
<html>
<?php
include '../koneksi.php';
$ambildata = $koneksi->query("SELECT * FROM suratbedanama WHERE idsuratbedanama ='$_GET[id]'") or die(mysqli_error($koneksi));
$data = $ambildata->fetch_assoc();
$spasi = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
?>
<title>SURAT KETERANGAN BEDA NAMA</title>
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
                        <font size="2">Jl. Bhayangkara No.31, Kota Baru, Kec. Lahat, Kabupaten Lahat<br>Sumatera Selatan 31412, Indonesia.<br>
                            Telp. 082 731 321890.
                        </font><br>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <center>
            <span>-----------------------------------------------------------------------------------------------------------------------</span></center>
        <table width="625">
            <tr>
                <td colspan="2">
                    <center>
                        <font size="4"><b><u>SURAT KETERANGAN BEDA NAMA</u></b></font>
                    </center>
                    <center>
                        <font size="4"><b>Nomor : <?= $data['idsuratbedanama'] ?>/<?= date('m') ?>/<?= date('Y') ?></b></font>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2"><?= $spasi ?>Yang bertanda tangan di bawah ini Saya Kepala Dukcapil Kabupaten Lahat menerangkan bahwa :</font>
                </td>
            </tr>
        </table>
        <table width="500">
            <tr>
                <td width="200px">Nama</td>
                <td>: </td>
                <td width="300px"><?= $data['nama']; ?></td>
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
                <td>Alamat</td>
                <td>: </td>
                <td><?= $data['alamat']; ?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: </td>
                <td><?= $data['pekerjaan']; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: </td>
                <td><?= $data['agama'] ?></td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td>
                    <font size="2"><?= $spasi ?>Dengan ini kami Menerangkan bahwa :</font>
                </td>
            </tr>
        </table>
        <table width="500">
            <tr>
                <td width="200px">Nama</td>
                <td>: </td>
                <td width="300px"><?= $data['namalain']; ?></td>
            </tr>
            <tr>
                <td>Nomor <?= $data['namasuratlain'] ?></td>
                <td>: </td>
                <td><?= $data['nosuratlain']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: </td>
                <td><?= $data['alamatlain']; ?></td>
            </tr>
        </table>
        <br>
        <table width="540">
            <tr>
                <td align="justify">
                    <?= $spasi ?>Yang Tertera di Kartu / Surat <?= $data['namasuratlain'] ?> dengan Nama <?= $data['namalain'] ?> Yang Tertera di Kartu Keluarga Adalah Nama Satu Orang yang Sama
                    <br>
                    <br>
                    <?= $spasi ?>Demikian surat keterangan Beda Nama dan Alamat ini kami buat dan semoga bisa digunakan sebagaimana mestinya.
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