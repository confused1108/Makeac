<!DOCTYPE html>
<html>

<head>

<title>
assignment

</title>
    
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body>


<?php
include 'connect.inc_sad.php';
session_start();
unset($_SESSION['signed_in']);
session_destroy();

header("Location:admin_Login.php");
exit;
?>

</body>

</html>