<?php 
namespace partials;
function header() {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>はーとふるエステート</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/d1133d1098.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <section id="menu">
        <div class="logo">
            <img  src="php/images/logo.png" alt="">
            <h2>はーとふるエステート</h2>
        </div>
        <div class="items">
            <li><i class="fa-solid fa-house"></i><a href="home">ホーム</a></li>
            <li><i class="fa-regular fa-building"></i><a href="mansion">マンション</a></li>
            <li><i class="fa-regular fa-building"></i><a href="vacancy">空室</a></li>
            <li><i class="fa-regular fa-calendar-days"></i><a href="delete">住人退去</a></li>
            <li></li>
            <li></li>
            <li></li>
        </div>
    </section> 
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fas fa-bars"></i>
                </div>
                <div class="search">
                    <i class="far fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>
            <div class="profile">
                <i class="far fa-bell"></i>
                <img src="php/images/cat.jpg" alt="">   
            </div>
        </div>
<?php 
}
?>
