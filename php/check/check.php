<?php

 require_once '../connect/connect.php';

if(isset($_POST['name']) && isset($_POST['text'])){
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = filter_var(trim(validate($_POST['name'])),
            FILTER_SANITIZE_STRING);
    $text = filter_var(trim(validate($_POST['text'])),
            FILTER_SANITIZE_STRING);
    $rating = filter_var(trim(validate($_POST['rating'])),
            FILTER_SANITIZE_STRING);
    $date = filter_var(trim(validate($_POST['date'])),
            FILTER_SANITIZE_STRING);
    if(empty($name)){
        header('Location: ../Reviews.php?error=Введите Имя!');
        exit();
    }
    else if(empty($text)){
        header('Location: ../Reviews.php?error=Введите Текст!');
        exit();
    }
    else if (strlen($name) < 3){
        header('Location: ../Reviews.php?error=Слишком Короткое Имя!');
        exit();
    }
    else if (strlen($text) < 10){
        header('Location: ../Reviews.php?error=Слишком короткий коментарий!');
        exit();
    }
    else if (strlen($text) > 200){
        header('Location: ../Reviews.php?error=В коментарии содержится более 200 символов');
        exit();
    }
    else if (strpos($name, '=') !== false) {
        header('Location: ../Reviews.php?error=В имени не может быть символа =');
        exit();
    }
    else{
        $link->query("INSERT INTO  `reviews`(`name`, `coment`, `Grade`,`date`) VALUES ( '$name', '$text', '$rating' , '$date')");
        header('Location: ../Reviews.php');
    }

}else{
    header('Location: ../Reviews.php');
    exit();
}

?>

