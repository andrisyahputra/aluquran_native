<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Alquran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        @font-face {
            font-family: 'Uthmani';
            src: url('assets/font/UthmanicHafs1Ver09.otf') format('truetype');
        }
        .arabic{
            font-family: 'Uthmani',serif;
            font-size: 20px;
            font-weight: normal;
            direction: rtl;
            padding: 0 5px;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center">Alquran Digital</h3>
        <hr>
        <table class="table table-striped table-bordered">
            <tr>
                <th>No</th>
                <th>Surah</th>
                <th>Arti</th>
                <th>Jumlah Ayat</th>
                <th>Tempat turun</th>
                <th>Urutan Pewahyuan</th>
            </tr>
            <?php
// pemangil koneksi
include "koneksi.php";
$tampil = mysqli_query($koneksi, "SELECT * FROM daftarsurah");
while ($data = mysqli_fetch_array($tampil)):
?>
            <tr>
                <td><?=$data['index'];?></td>
                <td>
                    <a href="detail.php?surah=<?= $data['index'];  ?>&nama_surah=<?= $data['surah_indonesia'];  ?>">
                    <?=$data['surah_indonesia'];?> 
                    </a>
                    <span class="arabic">(<?=$data['surah_arab'];?>)</span>
                </td>
                <td><?=$data['arti'];?></td>
                <td><?=$data['jumlah_ayat'];?></td>
                <td><?=$data['tempat_turun'];?></td>
                <td><?=$data['urutan_pewahyuan'];?></td>
            </tr>
            <?php endwhile;?>

        </table>


















    </div>

<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
