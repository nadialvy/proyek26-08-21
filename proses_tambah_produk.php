<?php
if($_POST){
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $foto_produk=$_POST['foto_produk'];

    if(empty($nama_produk)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='produk.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='produk.php';</script>";
    } elseif(empty($harga)) {
        echo "<script>alert('harga tidak boleh kosong');location.href='produk.php';</script>";
    } else {
        include "koneksi_toko.php";
        $insert = mysqli_query($conn,"INSERT INTO produk (nama_produk, deskripsi, harga, foto_produk) VALUES ('".$nama_produk."','".$deskripsi."', '".$harga."', '".$foto_produk."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan produk');location.href='produk.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan produk');location.href='produk.php';</script>";
        }
    }
}

?>