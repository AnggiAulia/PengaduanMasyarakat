<?php 
include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
 
$result = mysqli_query($koneksi,"SELECT * FROM petugas where username='$username' and password='$password'");
$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	if ($data['level']=="admin"){
		$_SESSION['username'] = $data['username'];	
		$_SESSION['id_petugas'] = $data['id_petugas'];	
		$_SESSION['nama'] = $data['nama_petugas'];
		$_SESSION['level'] = $data['level'];	
		header("location:admin/admin.php");
	}
	else if($data['level']=="petugas"){
		$_SESSION['username'] = $data['username'];	
		$_SESSION['nama'] = $data['nama_petugas'];
		$_SESSION['level'] = $data['level'];	
		header("location:petugas/petugas.php");
	}
} 
else {
	?>
    <script type="text/javascript">
        alert ('Username or Password False');
        window.location="index2.php";
    </script>   
    <?php
	}
?>