<?php
  header('Content-Type: charset=utf-8');
  session_start();
  $num = $_GET['picture_num'];

  $conn = mysqli_connect('localhost', 'root', 'apmsetup', 'gallery_db');

  $sql = "DELETE FROM pictures 
          WHERE u_id = '{$_SESSION['id']}' and picture_num = '{$num}' ";
  $result = mysqli_query($conn, $sql);

  if ($result === false) { # sql 결과에 오류가 있을 경우
    echo "삭제 오류";
    echo mysqli_error($conn);
  } else { # sql 결과에 오류가 없을 경우
    echo "<script>location.replace('../myInfo/myGalleryInfo.php');</script>";
  }
?>