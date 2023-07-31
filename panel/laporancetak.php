<?php
include('../koneksi.php');
$sesi = $_SESSION['pengguna']['level'];
?>
<html>

<head>
    <title>Laporan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @page {
            margin: 3mm;
        }
    </style>
    <style>
        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 1px;
        }
    </style>
    <style type="text/css">
        body {
            -webkit-print-color-adjust: exact;
            padding: 10px;
        }

        .table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 10pt;
        }

        .table td,
        .table th {
            border: 1px solid #ddd;
            padding: 6px;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tr:hover {
            background-color: #ddd;
        }

        .table th {
            padding-top: 8px;
            padding-bottom: 8px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        @page {
            size: A4;
            margin: 0;
        }
    </style>
</head>
<?php
$id = $_GET['id'];
if ($id == 'suratktp') {
    $surat = "Surat Keterangan KTP";
} elseif ($id == 'suratskck') {
    $surat = "Surat Pengantar SKCK";
} elseif ($id == 'suratbelummenikah') {
    $surat = "Surat Keterangan Belum Menikah";
} elseif ($id == 'surattidakmampu') {
    $surat = "Surat Keterangan Tidak Mampu";
} elseif ($id == 'suratktp') {
    $surat = " Surat Keterangan KTP";
} elseif ($id == 'suratbedanama') {
    $surat = "Surat Keterangan Beda Nama";
} elseif ($id == 'suratdomisili') {
    $surat = "Surat Keterangan Domisili";
}
$tahun = $_GET['tahun'];
$bulan = $_GET['bulan'];
?>

<body style='font-family:tahoma; font-size:3pt;'>
    <center>
        <table style='width:600; font-size:16pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <tr>
                <td><img src="../assets/home/assets/img/logo/logobaru.png" width="70" height="70"></td>
                <td>
                    <center>
                        <font size="6"><b> PEMERINTAH KABUPATEN LAHAT</b></font><br>
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
        <div style="padding-left:25px;padding-right:25px;">
            <table width="625" style='width:100%;border-collapse: collapse;' border='0'>
                <tr>
                    <td width="150px">
                        <span style="font-size:11pt">Surat</span>
                    </td>
                    <td>
                        <span style="font-size:11pt"> : <?= $surat ?></span>
                    </td>
                </tr>
                <tr>
                    <td width="150px">
                        <span style="font-size:11pt">Tahun</span>
                    </td>
                    <td>
                        <span style="font-size:11pt"> : <?= $tahun ?></span>
                    </td>
                </tr>
                <?php
                if ($bulan != 0) { ?>
                    <tr>
                        <td width="150px">
                            <span style="font-size:11pt">Bulan</span>
                        </td>
                        <td>
                            <span style="font-size:11pt"> : <?= getBulan($bulan) ?></span>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <br><br><br>
            <br><br><br>
            <table class="table">
                <thead class="thead-dark">
                    <th width="50">NO</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>WAKTU PENGAJUAN</th>
                    <th>STATUS</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    if ($bulan != 0) {
                        $result = $koneksi->query("SELECT * FROM $id where year(dibuat) = '$tahun' and month(dibuat) = '$bulan'") or die(mysqli_error($koneksi));
                    } else {
                        $result = $koneksi->query("SELECT * FROM $id where year(dibuat) = '$tahun'") or die(mysqli_error($koneksi));
                    }
                    $disetujui = 0;
                    $ditolak = 0;
                    $belumdikonfirmasi = 0;
                    while ($data = $result->fetch_array()) {
                        ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $data['nik']; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <?php
                                $tanggaldanwaktu = new DateTime($data['dibuat']);
                                $tanggal = $tanggaldanwaktu->format("Y-m-d");
                                $waktu = $tanggaldanwaktu->format("H-i");
                                ?>
                            <td><?= tanggal($tanggal) . ' - Pukul : ' . $waktu ?> W.I.B</td>
                            <td>
                                <?php
                                    echo $data['status'];
                                    ?>
                            </td>
                        </tr>
                    <?php
                        if ($data['status'] == 'Di Setujui') {
                            $disetujui++;
                        } elseif ($data['status'] == 'Di Tolak') {
                            $ditolak++;
                        } elseif ($data['status'] == 'Menunggu Persetujuan') {
                            $belumdikonfirmasi++;
                        }
                        $no++;
                    } ?>
                </tbody>
            </table>
            <table style='width:100%;border-collapse: collapse;' border='0'>
                <tr>
                    <td colspan="2">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="150px">
                        <span style="font-size:11pt">Belum di Konfirmasi</span>
                    </td>
                    <td>
                        <span style="font-size:11pt"> : <?= $belumdikonfirmasi ?></span>
                    </td>
                </tr>
                <tr>
                    <td width="150px">
                        <span style="font-size:11pt">Di Setujui</span>
                    </td>
                    <td>
                        <span style="font-size:11pt"> : <?= $disetujui ?></span>
                    </td>
                </tr>
                <tr>
                    <td width="150px">
                        <span style="font-size:11pt">Di Tolak</span>
                    </td>
                    <td>
                        <span style="font-size:11pt"> : <?= $ditolak ?></span>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table width="625">
                <tr>
                    <td width="430"><br><br><br><br></td>
                    <?php
                    $now = date("Y-m-d");

                    ?>
                    <td>
                        <center><?php echo tanggal($now); ?>
                            <br>KEPALA Pemerintah Kabupaten Lahat
                            <br><br><br><br><br>
                            TUKIMAN
                    </td>
                </tr>
            </table>
        </div>
        <br><br>
    </center>
</body>

</html>
<script>
    window.print();
</script>