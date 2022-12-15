<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Alo Cứu Hộ 14 - Tài Khoản</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <style>

        * {
            box-sizing: border-box;
        }

        p, header, img{
            margin: 0;
            padding: 0;
            border: 0;
            text-decoration: none;
        }

        body {
            background: linear-gradient(0deg,rgba(0,0,0,0.1),rgba(0,0,0,0.8)) ,url(./../assets/image/road1.jpg) no-repeat center;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-attachment: fixed;
            font-family: 'Dosis', sans-serif;
        }

        header {
            font-size: 2.8em;
            text-transform: capitalize;
            color: white;
            letter-spacing: 3px;
            word-spacing: 3px;
            margin: 1em 1vw 1.5em;
            text-align: center;
            font-family: 'Dosis', sans-serif;
            display: block;
            color: darkorange;;
        }

        p {
            margin: 1em 1vw 1.5em;
            text-align: center;
            font-size: 1.2em;
        }

        a {
            color:azure;
        }

        a:hover {
            font-weight: 425;
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <header>
    <a href="./../index.html">ALO CỨU HỘ 14</a>
    </header>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Đăng Xuất</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Đăng Nhập</a> &nbsp hoặc &nbsp <a href="signup.html">Đăng Ký</a></p>
        
    <?php endif; ?>
    
</body>
</html>
