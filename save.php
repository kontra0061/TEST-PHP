<?php require_once("includes/connection.php"); ?>

<?php
$first_name = $_POST['userfirstname'];
$last_name = $_POST['userlastname'];
$email = $_POST['useremail'];
$company_name = $_POST['usercompanyname'];
$position = $_POST['userposition'];
$phone = $_POST['userphone1'] + $_POST['userphone2'] +$_POST['userphone3'];

$query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', company_name = '$company_name', position = '$position', email = '$email'
WHERE email = $email ";

try{
    mysqli_query($con, $query);
}
catch(Exception $e){
    exit();
   }
?>
