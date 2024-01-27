<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="/css/navbar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header id="header" class="header">
    <ul>
        <a href="/index.php"><img style="cursor: pointer;" width="80px" src="/img/logo.png" alt=""></a>
        <a href="/index.php"><img style="left: 10px; cursor: pointer; position: relative; bottom: 20px;" width="180px" src="/img/logotext.png" src="/img/logotext.png" alt=""></a>
        <li><a class="navbar-button" href="">Новости</a></li>
        <li><a class="navbar-button" href="">Специальности</a></li>
        <li><a class="navbar-button" href="">Расписание</a></li>
        <li><a class="navbar-button" href="/php/Reviews.php">Отзывы</a></li>
        <li><a id="hidden" class="navbar-button" href="/php/admin/admin.php">Admin Reviews</a></li>
        <div class="burger-menu">
            <span id="open-menu"></span>
        </div>
    </ul>
</header>

<div id="menu" class="menu">
<div class="title">Menu</div><br><br>
<div class="list-menu">
<ul>
    <li><a href="/php/Reviews.php">Отзывы</a></li>
    <li><a href="#">Новости</a></li>
    <li><a href="#">Специальности</a></li>
    <li><a href="#">Расписание</a></li>
</ul>
</div>
</div>
<script>
    var flag = 1;
    document.querySelector(".burger-menu").addEventListener('click', function(){
    if (flag == 1){
        this.classList.toggle('active');
    document.getElementById('menu').classList.add('open');
    flag = 2;
    }
    else if (flag == 2){
    this.classList.toggle('active');
    document.getElementById('menu').classList.remove('open');
    flag = 1;
    }})
</script>
<script src="/js/navbar.js"></script>
</body>
</html>