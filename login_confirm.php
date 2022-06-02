<?php
session_start(); 
header('Content-Type: charset=utf-8'); 

$id = $_SESSION['id'];

$conn = mysqli_connect('localhost', 'kyk', '3909', 'gallery_db');
$sql = "SELECT * FROM users WHERE u_id = '$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if(!isset($id)) {
    echo "<script>location.replace('login.php');</script>";        
}
else{
    if($row['gallery_name'] != ''){
        echo "<script>location.replace('my_gallery.php');</script>"; 
    }else{ //갤러리 없을 때
        echo "<script>location.replace('gallery_add.html');</script>"; 
    }      
    
}

?>