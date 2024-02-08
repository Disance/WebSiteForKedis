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
            
        $link->query("INSERT INTO  `reviews`(`name`, `coment`, `Grade`,`date`) VALUES ( '$name', '$text', '$rating' , '$date')");
        header('Location: ../Reviews.php');

}else{
    header('Location: ../Reviews.php');
    exit();
}

?>

