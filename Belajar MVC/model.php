<?php
// buat koneksi dengan database
function get_database(){
    return mysqli_connect("localhost","root",null,"crud");
}

// ambil tabel user
function table_user(){
    $link = get_database();
    $result = mysqli_query($link,"select * from user");

    // ambil semua isi table ke dalam bentuk array 2 dimen
    $hasil = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $hasil;
}
