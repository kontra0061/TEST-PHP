<?php require_once("includes/connection.php"); ?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
  <link href="css/style.css" media="screen" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

  <form action="" id="loginform" method="post">
    <p><label for="user_email">Почта пользователя<br></label>
      <input class="input" name="useremail" size="20" type="email" value="">
    </p>
    <p class="submit"><button class="button" name="email" type="submit">send reqest</button></p>
  </form>
  <?php
  print(isset($_POST));
  if (!empty($_POST["useremail"])) {
    $email = $_POST["useremail"];
    print_r($_POST);
    $query = "SELECT * FROM users
    WHERE email='$email'";
    print($query);

    try{
      $result = mysqli_query($con, $query);
    }
     catch(Exception $e){
      exit();
     }

    $user = mysqli_fetch_assoc($result);
    print_r($user);

    echo  $con->multi_query($query);

  ?> <form action="save.php" id="loginform" method="post">
      <p><label for="user_first_name">Имя пользователя<br>
          <input class="input" id="userfirstname" name="userfirstname" size="20" type="text" value="<?= $user['first_name'] ?>"></label></p>
      <p><label for="user_last_name">Фамилия пользователя<br>
          <input class="input" id="userlastname" name="userlastname" size="20" type="text" value="<?= $user['last_name'] ?>"></label></p>
      <p><label for="user_email">Почта пользователя<br>
          <input class="input" id="useremail" name="useremail" size="20" type="email" value="<?= $user['email'] ?>"></label></p>
      <p><label for="user_company_name">Компания пользователя<br>
          <input class="input" id="usercompanyname" name="usercompanyname" size="20" type="text" value="<?= $user['company_name'] ?>"></label></p>
      <p><label for="user_position">Расположение<br>
          <input class="input" id="userposition" name="userposition" size="20" type="text" value="<?= $user['position'] ?>"></label></p>
      <p><label for="user_phone">Телефон<br>
          <input class="input" id="userphone1" name="userphone1" size="1" type="text" value="<?=mb_strimwidth($user['phone_number'], 0, 1) ?>">
          <input class="input" id="userphone2" name="userphone2" size="4" type="text" value="<?= mb_strimwidth($user['phone_number'], 1, 3)?>">
          <input class="input" id="userphone3" name="userphone3" size="8" type="text" value="<?= mb_strimwidth($user['phone_number'], 3, 11) ?>"></label></p>
          
    </form>
  <?php
  }
  ?>




  </body>

</html>