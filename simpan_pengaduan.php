<?php
include "koneksi.php";

$tgl_pengaduan=$_POST['tgl_pengaduan'];
$rand = rand();
$nik=$_POST['nik'];
$isi_laporan=$_POST['isi_laporan'];
$foto=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$status=0;

mysqli_query($koneksi, "insert into pengaduan VALUES('NULL', '$tgl_pengaduan','$nik','$isi_laporan','".$rand ."_" .$foto."','$status')");
move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$rand.'_'.$foto);
if ($koneksi){
    ?>
    <script type="text/javascript">
        alert ('Laporan Berhasil Disimpan');
        window.location="masyarakat.php";
    </script>   
<?php
}
?>