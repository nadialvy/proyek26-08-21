<?php
if($_POST){
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];

    if(empty($nama_pelanggan)){
        echo "<script>alert('Nama pelanggan tidak boleh kosong');location.href='pelanggan.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='pelanggan.php';</script>";
    } elseif(empty($no_telp)) {
        echo "<script>alert('No Telp tidak boleh kosong');location.href='pelanggan.php';</script>";
    } else {
        include "koneksi_toko.php";
        $insert=mysqli_query($conn,"INSERT INTO pelanggan (nama, alamat, telp) VALUES ('".$nama_pelanggan."','".$alamat."', '".$no_telp."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='pelanggan.php';</script>";
        }
    }
}

?>