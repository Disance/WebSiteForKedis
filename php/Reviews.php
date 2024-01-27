<?php

 require_once './connect/connect.php';

 $sortResult = mysqli_query($link, "SELECT `sorting` FROM `Sorting`");
 $sortRow = mysqli_fetch_assoc($sortResult);
 $sort = $sortRow['sorting'];
 $sortinfo = "DESC";

$result = mysqli_query($link, "SELECT * FROM `reviews` ORDER BY $sort $sortinfo");
 require_once "../vendor/autoload.php";

 use Carbon\Carbon;

 $carbon = new Carbon();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/Reviews.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include ('../pattern/preloader.php')
    ?>
    <?php
    include ('../pattern/navbar.php')
    ?>
    <div class="title">
        <h1>Отзывы</h1>
    </div>
    <div class="center">
    <div class="container">
        
        <?php
        if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error'] ;?></p>
        <?php } ?>
        <form method="post" action="check/check.php">

            <label for="">Имя: </label><br><input id="name" name="name" placeholder="Имя" type="text"><br><br>
            <label for="">Коментарий: </label><br><input id="text" name="text" placeholder="Не более 200 символов" type="text"><br><br>
            <div class="star-rating">
                <div class="star-rating__wrap">
                  <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="Оценка 5"></label>
                  <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="Оценка 4"></label>
                  <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="Оценка 3"></label>
                  <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="Оценка 2"></label>
                  <input class="star-rating__input" checked id="star-rating-1" type="radio" name="rating" value="1">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="Оценка 1"></label>
                </div>
                <input style="visibility: hidden;" name="date" type="text" value="<?php echo $carbon?>">
              </div>
            <br><input class="button-form" type="submit">
        </form>

        <form method="post" action="check/checksort.php">
        <select name="sorting" class="sorting">
                <option hidden selected="true" disabled="disabled">Сортировка</option>
                <option value="id">Сортировка по давности</option>
                <option value="grade">Сортировка по оценки</option>
            </select>
            <input type="submit">
        </form>
        <hr color="gray">

        <div class="reviews">
        <?php
        while($review = mysqli_fetch_assoc($result)){
            ?>
            <img width="70px" class="photo" src="/vector/usericon.png" alt=""><h2 class="title-review"><?php echo $review['name']?></h2> 
            <h3>Оценка: <?php  $i=0; while( $i<$review['Grade']){ $i++;?> <svg style="position: relative;
                top: 7px;" width="30px" height="30px" viewBox="0 0 24 24" fill="#CDA434" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="#CDA434" />
                </svg><?php  } ?> </h3> <p><?php echo $carbon->diffForHumans($review['date']) ?></p>
            <div class="reviews-block">
            <p class="text-review"><?php echo $review['coment']?></p></div>
            <hr>
            <?php
        };
    ?>
        </div>
    </div>
</div>
<script src="/js/review.js"></script>
</body>
</html>