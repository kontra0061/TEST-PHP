<?php require_once("includes/connection.php"); ?>

<html lang="en">
	<head>
<meta charset="utf-8">
<title></title>
<link href="css/style.css" media="screen" rel="stylesheet">
<link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head> 
<body>
<div class="container mlogin">
<div id="login">
<h1>Вход</h1>
<form action="record.php" id="loginform" method="post">
<p><label for="user_first_name">Имя пользователя<br>
<input class="input" id="userfirstname" name="userfirstname"size="20"
type="text" value="" required></label></p>
<p><label for="user_last_name">Фамилия пользователя<br>
<input class="input" id="userlastname" name="userlastname"size="20"
type="text" value=""></label></p>
<p><label for="user_email">Почта пользователя<br>
<input class="input" id="useremail" name="useremail"size="20"
type="text" value=""></label></p>
<p><label for="user_company_name">Компания пользователя<br>
<input class="input" id="usercompanyname" name="usercompanyname"size="20"
type="text" value=""></label></p>
<p><label for="user_position">Расположение<br>
<input class="input" id="userposition" name="userposition"size="20"
type="text" value=""></label></p>
<p><label for="user_phone">Телефон<br>
<input class="input" id="userphone1" name="userphone1"size="1"
type="text" value="">
<input class="input" id="userphone2" name="userphone2"size="4"
type="text" value="">
<input class="input" id="userphone3" name="userphone3"size="8"
type="text" value=""></label></p>
  <p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
   </form>


 </div>
  </div>

</body>
</html>

