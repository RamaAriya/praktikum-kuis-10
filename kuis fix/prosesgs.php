<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $posted = $_POST['posted'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pesan = $_POST['pesan'];

    // buat query
    $sql = "INSERT INTO gs (posted, nama, email, address, city, pesan) VALUE ('$posted', '$nama', '$email', '$address', '$city', '$pesan')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>