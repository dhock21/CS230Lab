<?php 
require_once 'dbhandler.php';
date_default_timezone_set('UTC');


if (isset($_POST['review-submit'])){
    session_start();
    $uname = $_SESSION['uname'];
    $title = $_POST['review-title'];
    $date = date('Y-m-d H:i:s');
    $review = $_POST['review'];
    $item_id = $_POST['item_id'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO reviews (itemid, uname, title, reviewtext, revdate, ratingnum, status) VALUES ('$item_id', '$uname', '$title', '$review', '$date', '$rating', 1);";
    mysqli_query($conn, $sql);

    header("Location: ../review.php?id=$item_id");
    exit();
    
}
