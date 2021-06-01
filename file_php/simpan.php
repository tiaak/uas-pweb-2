<?php


    include_once("koneksi.php");
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $isi = $_POST['isi'];
    
    $query = "INSERT INTO bukutamu VALUES ('','$nama', '$email', '$isi')";
    $hasil = mysqli_query($koneksi,$query);

    if(!$hasil)
        die("Penyimpanan gagal!!!");

  	header("Location: tampil2.php");


?>