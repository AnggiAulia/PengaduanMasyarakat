<?php

if (isset($_GET['url'])){
    $url=$_GET['url'];

    switch($url)
    {
        case 'tulis_pengaduan';
        include 'tulis_pengaduan.php';
        break;

        case 'lihat_laporan';
        include 'lihat_laporan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

        case 'lihat_tanggapan';
        include 'lihat_tanggapan.php';
        break;
    }
}
else{
    ?>
    Selamat Datang  <?php echo $_SESSION['nama'];
}
?>