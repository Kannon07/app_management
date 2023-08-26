<?php
session_start();
//creat conections
$conn = mysqli_connect("localhost","root","","management_aset");

//add new assets
if(isset($_POST['addnewaset'])){
    $nama = $_POST['nama'];
    $gambar = $_POST['gambar'];
    $barcode=$_POST['barcode'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];

    $addtotable = mysqli_query($conn,"INSERT INTO aset (nama, gambar, barcode, lokasi, deskripsi, tanggal, jumlah) VALUES ('$nama','$gambar','$barcode','$lokasi','$deskripsi','$tanggal','$jumlah')");
    if($addtotable){
        header('location:index.php');
        exit;
    }else{
        echo 'gagal';
        header('location:index.php');
        exit;
    }
    
};


