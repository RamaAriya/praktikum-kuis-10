<?php 

include 'conn.php';

$username = $_POST['Username'];
$password = $_POST['Password'];

$data = mysqli_query($conn,"SELECT * FROM user WHERE Username='$username' AND Password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:form-login.php?pesan=berhasil");
}else{
    header("location:form-login.php?pesan=gagal");
}
?>