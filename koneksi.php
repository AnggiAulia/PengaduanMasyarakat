<?php 
 $koneksi = mysqli_connect("localhost", "root", "", "ppm");

 if (mysqli_connect_errno()){
    echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
}
 ?>