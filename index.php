<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}
.home-page-content {
    text-align: center;
    padding: 200px;
    color: #920483;
    font-size: 30px;
}
body {
    background-image: url('https://www.indianyouth.net/wp-content/uploads/2017/02/mountains.jpg');
    height: 100vh;
    width: 100vw;
    position: relative;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
nav .logo {
    color: white;
    font-size: 33px;
    font-weight: bold;
    line-height: 70px;
    padding-left: 110px;
}
nav {
    height: 70px;
    background: #920483;
    box-shadow: 0 3px 15px rgba(0, 0, 0, .4);
}
nav ol {
    float: right;
    margin-right: 30px;
}
nav ol li {
    display: inline-block;
}
nav ol li a {
    color: white;
    display: block;
    padding: 0 15px;
    line-height: 70px;
    transition: color 0.3s ease;
}
nav ol li a:hover {
    color: #ffcc00; 
}
nav ol li:hover > ol {
    top: 70px;
    opacity: 1;
    visibility: visible;
    transition: .3s linear;
}
nav ol ol li {
    width: 180px;
    display: list-item;
    position: relative;
    border: 1px solid #042331;
    border-top: none;
}
</style>
</head>
<body>
    <nav>
        <label class="logo">Fly Your Wings</label>
        <ol>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ol>
    </nav>
    <div class="home-page-content">
        <h1>Explore | Discover | Connect</h1>
        <h3>"We travel not to escape life, but to let life escape us."</h3>
    </div>
</body>
</html>