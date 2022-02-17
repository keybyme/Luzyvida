
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  session_start(); 

              //  destroys session
  header('location: ../index.php');   // if not set the user is sendback to login page.
  $_SESSION['user_key'] == null;
  session_destroy();
?>
</body>
</html>