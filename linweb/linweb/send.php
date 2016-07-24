<!Doctype html>
<html>

  <head>
    <title>UB International Language Association</title>
  </head>

<?php
include('header.php');
?>

<?php

$to="ubsailc@gmail.com";
$name = $_POST['name'];
$email = $_PSOT['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

mail($email, $subject, $message, "to:".$to);
echo "Thank you for contacting us! We will reply shortly";

?>

<?php
include('footer.php');
?>

</html>