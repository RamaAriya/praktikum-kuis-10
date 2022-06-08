<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Konohagakure</title>
</head>

<body>
    <header>
        <h3>QUESTBOOK</h3>
        
    </header>

    <nav>
        <a href="form-gs.php"></a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Posted</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Pesan</th>
        </tr>
    </thead>
    <tbody>

        <?php
         $sql = "SELECT * FROM gs";
         $query = mysqli_query($conn, $sql);

        while($quest = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$quest['id']."</td>";
            echo "<td>".$quest['posted']."</td>";
            echo "<td>".$quest['nama']."</td>";
            echo "<td>".$quest['email']."</td>";
            echo "<td>".$quest['address']."</td>";
            echo "<td>".$quest['city']."</td>";
            echo "<td>".$quest['pesan']."</td>";

            echo "<td>";
            echo "<a href='Edit.php?id=".$quest['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$quest['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>