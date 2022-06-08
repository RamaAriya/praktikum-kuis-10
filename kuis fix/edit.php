<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: cetak.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM gs WHERE id=$id";
$query = mysqli_query($conn, $sql);
$quest = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Update GS |  Konohagakure</title>
</head>

<body>
    <header>
        <h3>Formulir Update GS </h3>
    </header>

    <form action="proses-edit.php" method="POST">

                <fieldset>

                <input type="hidden" name="id" value="<?php echo $quest['id'] ?>" />
            <p>
                <label for="posted">Tanggal: </label>
                <input type="Date" name="posted" value= <?php echo $quest['posted'] ?> />
            </p>

            <p>
            <label for="nama">Nama: </label>
                <input type="VARCHAR" name="nama" placeholder="Masukan Nama" value="<?php echo $quest['nama'] ?>" />
            </p>

            <p>
            <label for="email">Email: </label>
                <input type="VARCHAR" name="email" placeholder="Masukan email" value=<?php echo $quest['email'] ?> />
            </p>

            <p>
            <label for="address">Address: </label>
                <input type="VARCHAR" name="address" placeholder="Masukan address" value= <?php echo $quest['address'] ?>/>
            </p>

            <p>
            <label for="city">City: </label>
                <input type="VARCHAR" name="city" placeholder="Masukan city" value=<?php echo $quest['city'] ?> />
            </p>

            <p>
                <label for="pesan">Pesan: </label>
                <textarea name="pesan" value=<?php echo $quest['pesan'] ?>></textarea>
            </p>

            <p>
            <input type="submit" value="Daftar" name="daftar" />
            </p>

            </fieldset>


    </form>

    </body>
</html>