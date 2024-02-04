<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="/css/navbar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="menu" class="menu">
        <div class="title"><a href=""><img style="margin:40px 0px 0px 20px;" width="200px" src="/img/logotext.png" alt=""></a></div><br><br>
        <div class="list-menu">
        <ul>
            <li><a class="button-menu" href="/php/Reviews.php">Главная</a></li>
            <li><a class="button-menu" href="#">Новости</a></li>
            <li><a class="button-menu" href="#">Специальности</a></li>
            <li><a class="button-menu" href="#">Расписание</a></li>
            <li><a class="button-menu" href="#">Отзывы</a></li>
        </ul>
        </div>
        </div>
<header id="header" class="header">
    <ul>
        <a href="/index.php"><img style="cursor: pointer;" width="80px" src="/img/logo.png" alt=""></a>
        <div class="logo-text">
        <a href=""><img width="300px" src="/img/logotext.png" alt=""></a>
    </div>
        <div class="box-li">
        <li><a style="color: #0288ce;" class="navbar-button" href="/index.php">Главная</a></li>
        <li><a class="navbar-button" href="">Новости</a></li>
        <li><a class="navbar-button" href="">Специальности</a></li>
        <li><a class="navbar-button" href="">О нас</a></li>
        <li><a class="navbar-button" href="">Расписание</a></li>
        <li><a class="navbar-button" href="/php/Reviews.php">Отзывы</a></li>
        <li><a id="hidden" class="navbar-button" href="/php/admin/admin.php">Admin Reviews</a></li>
        <div onclick="burgerClick()" class="burger-menu">
            <span id="open-menu"></span>
        </div>
        </div>
    </ul>
</header>
<script src="/js/navbar.js"></script>
</body>
</html>