<?php
session_start();
if(isset($_SESSION["user_username"])) {
    header("Location:home.php");
    exit();
}

include("koneksi.php");

$err="";
if(isset($_POST['Daftar'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $konfirm_password=$_POST['konfirm_password'];

    if($username=='' or $password=='' or $konfirm_password==''){
        $err="Isi semua";
    }else if($password != $konfirm_password){
        $err="Konfirmasi password tidak sama";
    } else{
        $sqli = "INSERT INTO user VALUES ('$username', MD5('$password'))";
        if ($conn->query($sqli) === TRUE) {
            $err="Registrasi berhasil";
        } else {
            $err="Registrasi gagal";
        }
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>2000016045</title>
</head>
<body>
    <div class="container">
        <div class="formlogin">
            <div class="foto"><img src="img/1.png" height="65"><h1>Registrasi</h1></div>
            <form action="" method="POST">
                <?php
                    if($err) {
                        echo $err;
                    } else {
                        echo "";
                    }
                ?>
                <input required type="text" name="username" placeholder="buat username"><br>
                <input required type="password" name="password" placeholder="buat password"><br>
                <input required type="password" name="konfirm_password" placeholder="konfirmasi password"><br>
                <button type="submit" name="Daftar">Daftar</button>
                <center>Sudah punya akun? <a href="index.php">Login</a></center>
            </form>
        </div>
    </div>
</body>
</html>