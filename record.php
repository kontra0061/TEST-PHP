
<?php require_once("includes/connection.php"); 
/* Создание базы данных */
   
    $query = "insert INTO users (first_name, last_name, company_name, position, email, phone_number) values (".
    "'". $_POST["userfirstname"]. "',".
    "'". $_POST["userlastname"]. "',".
    "'". $_POST["useremail"]. "',".
    "'". $_POST["usercompanyname"]. "',".
    "'". $_POST["userposition"]. "',".
    "'".$_POST["userphone1"].
    $_POST["userphone2"].
    $_POST["userphone3"] ."'"
    . ")";
    print $query;
    $con->multi_query($query);
?>
