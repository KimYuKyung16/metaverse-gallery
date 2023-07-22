<?php
session_start();
header('Content-Type: charsetutf-8');

$conn = mysqli_connect('localhost', 'root', 'apmsetup', 'gallery_db');

$review_nickname = $_POST['review_nickname'];
$review = $_POST['review'];
$gallery = $_POST['gallery'];
$num = $_POST['num'];

$sql = "INSERT INTO
        comment(gallery, nickname, review)
        VALUES('{$gallery}', '{$review_nickname}', '{$review}') ";

$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "fail";
    echo mysqli_error($conn);
} else {
    echo "<script>location.replace('myGallery.php?num=$num');</script>";
}
