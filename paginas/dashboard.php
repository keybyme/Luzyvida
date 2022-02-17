
<?php
session_start(); 
if (!isset($_SESSION['user_key']) && empty($_SESSION['user_key'])) {         // condition Check: if session is not set. 
 header('Location: login.php');   // if not set the user is sendback to login page.
 exit();
};
?>
<?php echo $_SESSION['user_key']; ?>

  
<div class="container col-12 border rounded mt-3">
<?php include "../header.php" ?>
  <h1 class=" mt-3 text-center">Welcome, This your dashboard!! </h1>
  
 <h4> <?php echo $_SESSION['user_name'];

 
 ?> </h4>
 
  <table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">User Key</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <?php echo $_SESSION['user_key']; ?></td>
        <td> <?php echo $_SESSION['user_name']; ?></td>
        <td> <?php echo $_SESSION['user_email']; ?></td>
      </tr>
    </tbody>
  </table>
 
  
</div>



 
