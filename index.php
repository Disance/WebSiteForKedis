<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="icon" href="/img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КЭДИС</title>
</head>
<body class="body">
<?php
    include ('pattern/preloader.php')
    ?>
    <div class="container">
    <?php
    include ('pattern/navbar.php')
    ?>
    </div>
    <div onclick="ScrollTopTop()" class="upward"></div>

    <div>
        
    </div>

    <footer >
    </footer>
    <script src="js/main.js"></script>
    <script>
    window.addEventListener('scroll' , function(){
        var scroll = document.querySelector('.upward');
        scroll.classList.toggle('active' , window.scrollY > 500);
    })
    function ScrollTopTop(){
        window.scrollTo({
            top:0, 
        })
    }
    </script>
</body>
</html>