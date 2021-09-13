<?php

if($_POST){
    //nama yang ada didalam $_POST harus sama dengan yang ada di transaksi
    //kalau yang depan itu nama variable, jadi boleh dinamai apa saja (bisa berubah ubah)
    $id_pelanggan=$_POST['id_pelanggan'];
    $id_petugas=$_POST['id_petugas'];
    $tgl_transaksi=$_POST['tgl_transaksi'];
    //ke 3 variable diatas digunakan pada query yang value

    if(empty($id_pelanggan)){
        echo "<script>alert('Nama Pelanggan tidak boleh kosong');location.href='transaksi.php';</script>";
    } elseif(empty($id_petugas)){
        echo "<script>alert('Nama petugas tidak boleh kosong');location.href='transaksi.php';</script>";
    } elseif(empty($tgl_transaksi)) {
        echo "<script>alert('Tanggal transaksi tidak boleh kosong');location.href='transaksi.php';</script>";
    } else{
        include "koneksi_toko.php";
        $inputkan = mysqli_query($conn,"INSERT INTO transaksi (id_pelanggan, id_petugas, tgl_transaksi) VALUES ('".$id_pelanggan."','".$id_petugas."', '".$tgl_transaksi."')");
        if($inputkan){
            echo "<script>alert('Sukses menambahkan transaksi');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi');location.href='transaksi.php';</script>";
        }
    }
}

?>