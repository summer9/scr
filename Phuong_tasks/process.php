<?php
// what to do with the form date_add
$title = "Your information";
include "header.php";

$fname =$_POST["fname"];
$lname = $_POST["lname"];
$email =$_POST["email"];
$DOB =$_POST["DOB"];

echo "Hello ". " " .$fname." ". $lname. " ". "Your email id is:  ".$email;

include "footer.php";

?>


