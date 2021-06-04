<?php 
include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
 
$result = mysqli_query($koneksi,"SELECT * FROM masyarakat where username='$username' and password='$password'");
$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['nik'] = $data['nik'];
	header("location:masyarakat.php");
} else {
	?>
    <script type="text/javascript">
        alert ('Username or Password False');
        window.location="index.php";
    </script>   
    <?php
}
?>