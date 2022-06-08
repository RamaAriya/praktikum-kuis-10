<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id= $_POST['id'];
    $posted = $_POST['posted'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pesan = $_POST['pesan'];

    // buat query update
    $sql = "UPDATE gs SET posted='$posted', nama='$nama', email='$email', address='$address', city='$city', pesan='$pesan' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>