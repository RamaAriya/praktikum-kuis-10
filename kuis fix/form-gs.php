<!DOCTYPE html>
<html>
<head>
    <title>Formulir Konohagakure</title>
</head>

<body>
    <header>
        <h3>Formulir GuestBook</h3>
    </header>

    <form action="prosesgs.php" method="POST">

        <fieldset>

        <p>
            <label for="posted">Tanggal: </label>
            <input type="Date" name="posted" />
        </p>

        <p>
        <label for="nama">Nama: </label>
            <input type="VARCHAR" name="nama" placeholder="Masukan Nama" />
        </p>
    
        <p>
        <label for="email">Email: </label>
            <input type="VARCHAR" name="email" placeholder="Masukan email" />
        </p>

        <p>
        <label for="address">Address: </label>
            <input type="VARCHAR" name="address" placeholder="Masukan address" />
        </p>

        <p>
        <label for="city">City: </label>
            <input type="VARCHAR" name="city" placeholder="Masukan city" />
        </p>

        <p>
            <label for="pesan">Pesan: </label>
            <textarea name="pesan"></textarea>
        </p>
        
        <p>
        <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>