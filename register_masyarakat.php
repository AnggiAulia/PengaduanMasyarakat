<?php
include "koneksi.php";

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];

mysqli_query($koneksi, "insert into masyarakat VALUES('$nik','$nama','$username','$password','$telp')");
if ($koneksi){
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan, Silahkan Login');
        window.location="index.php";
    </script>   
<?php
}
?>