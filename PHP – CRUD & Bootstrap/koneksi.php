<?php
$koneksi = mysqli_connect("localhost","root", "", "prakwebdb");
if (mysqli_connect_error()){
    die("koneksi database gagal: " . mysqli_connect_error());
}