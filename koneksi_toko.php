<?php
    $conn = mysqli_connect('localhost', 'root', '', 'toko_online');

    //cek koneksi
    if(mysqli_connect_errno()){
        printf("Connection failed: %s\n", mysqli_connect_errno());
        exit();
    }

?>