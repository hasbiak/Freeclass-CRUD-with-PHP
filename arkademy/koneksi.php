<?php
//mysqli_connect("server","Username","Password",Database")
$koneksi = mysqli_connect("localhost","root","","arkademy");
if ($koneksi){
    //echo "Koneksi Database Berhasil";
}else{
    echo "Koneksi Gagal".mysqli_error();
}
?>