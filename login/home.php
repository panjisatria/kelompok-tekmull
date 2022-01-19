<?php
session_start();
if(!isset($_SESSION["user_username"])) {
    header("Location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <style>
        body {
        font-family: 'Lato', sans-serif;
        }

        .overlay {
        height: 100%;
        width: 100%;
        display: none;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0, 0.9);
        }

        .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
        }

        .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
        }

        .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
        }

        .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
        }

        @media screen and (max-height: 450px) {
        .overlay a {font-size: 20px}
        .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
        }
        }
        </style>
        </head>
        <body>

        <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="logout.php">LogOut</a>
        </div>
        </div>
        <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</span>

        <script>
        function openNav() {
        document.getElementById("myNav").style.display = "block";
        }

        function closeNav() {
        document.getElementById("myNav").style.display = "none";
        }
        </script>
            
        </body>
        <hr><br><br><br>
        <center>
            <p>PILIHAN PENDIDIKAN</p>
            <button class="btn">
                 <a class="onclick" href="halaman2.php">Sekolah Dasar Negeri/SDN</a>
            </button><br><br>
            <button class="btn">
                 <a class="onclick" href="SMP.php">Sekolah Menengah Pertaman/SMP</a>
            </button><br><br>
                <button class="btn">
                 <a class="onclick" href="smu1.php">Sekolah Menengah Umum/SMU</a>
            </button><br><br>
            <button class="btn">
                 <a class="onclick" href="SMK.php">Sekolah Menengah Kejuruan/SMK</a>
            </button><br><br>
</body>
</html>