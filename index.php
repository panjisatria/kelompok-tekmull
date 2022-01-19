<?php
session_start();
if(isset($_SESSION["user_username"])) {
    header("Location:home.php");
    exit();
}

include("koneksi.php");

$err="";
if(isset($_POST['Login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username==''or $password==''){
        $err="Isi semua";
    }else{
        $sql1="select * from user where username = '$username'";
        $q1=mysqli_query($conn,$sql1);
        $r1=mysqli_fetch_array($q1);
        $n1=mysqli_num_rows($q1);
        
        if($n1 < 1){
            $err = "Username tidak ada";
        }elseif($r1['password'] !=md5($password)){
            $err = "Password tidak sesuai";
        }else{
            $_SESSION['user_username']=$username;
            header("location:home.php");
            exit();
        }
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
            <div class="foto"><img src="img/1.png" height="65"><h1>Login</h1></div>
            <form action="" method="post">
                <?php
                    if($err) {
                        echo $err;
                    } else {
                        echo "";
                    }
                ?>
                <input required type="text" name="username" placeholder="username"><br>
                <input required type="password" name="password" placeholder="password"><br>
                <button type="submit" name="Login">Login</button>
            </form>
            <center>
            <p>tdiak punya akun? <a class="regris" href="regristrasi.php">Daftar</a></p>
                </center>
        </div>
    </div>
</body>
</html>