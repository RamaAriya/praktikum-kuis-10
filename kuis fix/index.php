<!DOCTYPE html>
<html>
<head>
    <title>Hotel Konohagakure</title>
</head>

<body>
    <header>
       
        <h1>Konohagakure</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-signup.php">Register</a></li>
            <li><a href="form-login.php">Login</a></li>
            <li><a href="form-gs.php">GuestBook</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran  Berhasil!";
            } else {
                echo "Pendaftaran  gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>