<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <center><h5>SELAMAT BELAJAR</h5>
        <body>
        <p><strong>Tip:</strong>klik icon play untuk menonton</p>
        <video width="50%" controls id="myvideo">
        <source src="img/IPS SMP.mp4"video/mp4">
        <source src="img/IPS SMP.mp4" type="video/ogg">
        Your browser does not support the video tag.
        </video>
        </center>
        <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" 
                id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2"></label>
        </div>
        <tr>
        <td colspan="3">
        <input type="submit" name="post" value"post">
        </td>
        </tr>
</body>
</html>