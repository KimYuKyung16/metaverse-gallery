<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/my_gallery3.css">
  <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <!-- 타이틀 -->
  <header id="title_div">
    <h1 id="title">Gallery</h1>
  </header>



  <main>
    <div id="left_div">
      <?php
      session_start();
      header('Content-Type: charset=utf-8');
      $conn = mysqli_connect('localhost', 'kyk', '3909', 'gallery_db');
      $sql = "
                SELECT * FROM users WHERE 
                u_id = '{$_SESSION['id']}' ";
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_array($result)) {
        echo "내 갤러리이름: {$row['gallery_name']} ";
      }
      ?>
      <p>갤러리 대표사진</p>
      <img id="frame1" src="image/add.JPG" alt="img" width="300" height="300">
      <label for="gallery_visable">갤러리 공개 여부:</label>
      <input id="gallery_visable" type="checkbox">
      <input type="date">
    </div>





    <div id="right_div">
      <h1>작품 추가하기</h1>
      <form action="picture_desc.php" method="POST" id="pictures-form">
        <div>
          <?php
          $sql = "
                    SELECT * FROM pictures WHERE 
                    u_id = '{$_SESSION['id']}' 
                    ORDER BY picture_num ASC ";
          $result = mysqli_query($conn, $sql);
          $pic_src1 = $pic_src2 = $pic_src3 = $pic_src4 = $pic_src5 = $pic_src6 = $pic_src7 = $pic_src8 = $pic_src9 = $pic_src10
            = $pic_src11 = $pic_src12 = "add.JPG";

          while ($row = mysqli_fetch_array($result)) {
            if ($row['picture_num'] == 1) {
              $pic_src1 = $row['picture'];
            } elseif ($row['picture_num'] == 2) {
              $pic_src2 = $row['picture'];
            } elseif ($row['picture_num'] == 3) {
              $pic_src3 = $row['picture'];
            } elseif ($row['picture_num'] == 4) {
              $pic_src4 = $row['picture'];
            } elseif ($row['picture_num'] == 5) {
              $pic_src5 = $row['picture'];
            } elseif ($row['picture_num'] == 6) {
              $pic_src6 = $row['picture'];
            } elseif ($row['picture_num'] == 7) {
              $pic_src7 = $row['picture'];
            } elseif ($row['picture_num'] == 8) {
              $pic_src8 = $row['picture'];
            } elseif ($row['picture_num'] == 9) {
              $pic_src9 = $row['picture'];
            } elseif ($row['picture_num'] == 10) {
              $pic_src10 = $row['picture'];
            } elseif ($row['picture_num'] == 11) {
              $pic_src11 = $row['picture'];
            } elseif ($row['picture_num'] == 12) {
              $pic_src12 = $row['picture'];
            }
          }

          ?>
          <table id="picture-table">
            <tbody>
              <tr>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=1'><img id="img1" class="image" src="image/<?= $pic_src1 ?>" alt="img1"></a><p>작품1</p></td>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=2'><img id="img2" class="image" src="image/<?= $pic_src2 ?>" alt="img2"></a><p>작품2</p></td>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=3'><img id="img3" class="image" src="image/<?= $pic_src3 ?>" alt="img3"></a><p>작품3</p></td>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=4'><img id="img4" class="image" src="image/<?= $pic_src4 ?>" alt="img4"></a><p>작품4</p></td>
              </tr>
              <tr>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=5'><img id="img5" class="image" src="image/<?= $pic_src5 ?>" alt="img4"></a><p>작품5</p></td>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=6'><img id="img6" class="image" src="image/<?= $pic_src6 ?>" alt="img4"></a><p>작품6</p></td>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=7'><img id="img7" class="image" src="image/<?= $pic_src7 ?>" alt="img4"></a><p>작품7</p></td>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=8'><img id="img8" class="image" src="image/<?= $pic_src8 ?>" alt="img4"></a><p>작품8</p></td>
              </tr>
              <tr>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=9'><img id="img9" class="image" src="image/<?= $pic_src9 ?>" alt="img4"></a><p>작품9</p></td>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=10'><img id="img10" class="image" src="image/<?= $pic_src10 ?>" alt="img4"></a><p>작품10</p></td>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=11'><img id="img11" class="image" src="image/<?= $pic_src11 ?>" alt="img4"></a><p>작품11</p></td>
                <td class="picture"><a href='./upload/picture_desc.php?picture_num=12'><img id="img12" class="image" src="image/<?= $pic_src12 ?>" alt="img4"></a><p>작품12</p></td>
              </tr>
            </tbody>
          </table>
        </div>
      </form>
    </div>
    <main>

      <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="module" src="./js/my_gallery2.js"></script>
</body>

</html>