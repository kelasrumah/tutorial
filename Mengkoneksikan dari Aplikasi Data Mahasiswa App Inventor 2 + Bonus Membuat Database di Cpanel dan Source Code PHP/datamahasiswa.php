<?php   
  include "koneksi.php";   
  $nama = $_REQUEST['nama'];   
  $nim = $_REQUEST['nim'];   
  $jurusan = $_REQUEST['jurusan'];   
  $fakultas = $_REQUEST['fakultas'];   
  $ipk = $_REQUEST['ipk'];   
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");   
  $mysqli = "INSERT INTO datamahasiswa (nama, nim, jurusan, fakultas, ipk) VALUES ('$nama', '$nim', '$jurusan', '$fakultas', '$ipk')";   
  $result = mysqli_query($conn, $mysqli);   
  echo "Input berhasil";   
  mysqli_close($conn); 
?>
