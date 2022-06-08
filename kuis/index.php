<!DOCTYPE html>
<html>
<head>
    <title>KUIS</title>
</head>

<body>
    <header>
        <h3></h3>
        <h1>SILAHKAN......</h1>
    </header>

    <h4></h4>
    <nav>
        <ul>
            <li><a href="form-login.php">LOG IN</a></li>
            <li><a href="form-sign up.php">SIGN UP</a></li>
            <li><a href="form-guestbook.php">QUESTBOOK</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Tamu Berhasil!";
            } else {
                echo "Pendaftaran Tamu gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>