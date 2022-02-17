<?php include "../db.php" ?>
<?php include "../header.php";?>

<?php
session_start(); 
if (!isset($_SESSION['user_key']) && empty($_SESSION['user_key'])) {         // condition Check: if session is not set. 
 header('Location: login.php');   // if not set the user is sendback to login page.
 exit();
};
?>

<?php 

if(isset($_GET['url_re_key'])){ 
    $url_re_key = $_GET['url_re_key']; 
    {
         $query = "DELETE FROM reminders WHERE re_key = {$url_re_key}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: ../paginas/reminders.php");
     }
    }
?>

  <!-- Footer -->
<?php include "footer.php" ?>