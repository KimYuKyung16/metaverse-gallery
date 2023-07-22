<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입</title>
  <link rel="stylesheet" href="../navbar/navbar.css">
  <link rel="stylesheet" href="signup.css">
</head>

<body>
  <?php include "../navbar/navbar.php" ?>


  <form action="signupProcess.php" method="POST" id="signup_form">
    <div class="signup_list_div">
      <h2>회원가입</h2>
      <hr noshade color="#BDBDBD">
      <div class="mb_3">
        <label for="id" class="form_label">아이디</label>
        <input id="id" class="form_control" name="id" type="text" placeholder="아이디 입력">
      </div>
      <div class="mb_3">
        <label for="pw" class="form_label">비밀번호</label>
        <input id="pw" class="form_control" name="pw" type="password" placeholder="비밀번호 입력">
      </div>
      <div class="mb_3">
        <label for="pw_check" class="form_label">비밀번호 확인</label>
        <input id="pw_check" class="form_control" name="pw_check" type="password" placeholder="비밀번호 확인">
      </div>
      <button id="signup_confirm_btn" class="signup_confirm_btn" type="button">회원가입</button>

      <div class="bottomText">
        <p>계정이 있다면 <a href="login.php">로그인</a> 해주세요</p>
      </div>
    </div>
  </form>

</body>
<script type="module" src="signup.js"></script>
<script type="module" src="login.js"></script>

</html>