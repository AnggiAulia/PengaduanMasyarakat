<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Detail - Pengaduan</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
<div class="card shadow">
  <div class="card-header">
    Detail Pengaduan
  </div>
  <div class="card-body">
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
    
        <?php
        include 'koneksi.php';
        $result = mysqli_query($koneksi,"SELECT * FROM pengaduan where id_pengaduan='$_GET[id]'");
        while($data=mysqli_fetch_array($result)){
        ?>
        
      <div class="form-group cols-sm-6">
        <label>Tanggal Pengaduan</label>
        <input readonly type="date" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label>Nomor Induk Kependudukan</label>
        <input readonly type="text" name="nik" class="form-control" value="<?php echo $_SESSION['nik']; ?>">
      </div>
      <div class="form-group cols-sm-6">
        <label>Tulis Laporan</label>
        <textarea readonly name="isi_laporan" class="form-control" rows="7"><?php echo $data['isi_laporan']; ?></textarea>
      </div>
      <div class="form-group cols-sm-6">
        <label>Bukti Foto</label>
        <div>
        <img src="foto/<?php echo $data['foto'];?>?width=100">
        </div>
      </div>
      <hr>
      <div class="form-group cols-sm-6">
        <a href="?url=lihat_laporan" value="Kembali" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
          </span>
          <span class="text">Kembali
          </span>
        </a>
      </div>
        <?php } ?>
    </form>
  </div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>

  </body>
</html>