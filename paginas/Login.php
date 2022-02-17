<div class="container col-4 border rounded bg-light mt-5" style='--bs-bg-opacity: .5;'>
<?php include "../header.php" ?>
  <h1 class="text-center">Sign In</h1>
  <hr>
  <form action="" method="post">
    <div class="mb-3">
      <label for="email" class="form-label">User Name</label>
      <input type="text" class="form-control" name="username" placeholder="Enter your User Name" autocomplete="off" required>
      <small class="text-muted">Your user id is safe with us.</small>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
      <small class="text-muted">Do not share your password.</small>
    </div>
    <div class="mb-3">
      <input type="submit" name="signin" value="Sign In" class="btn btn-primary">
    </div>
  </form>
</div>
<?php session_start(); ?>

<?php
 


if (isset($_POST['signin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
 
  $query = "SELECT * from usuarios WHERE user_name = '$username' AND user_password = '$password'";
  $user = mysqli_query($conn, $query);
 
  if (!$user) {
    die('query Failed' . mysqli_error($conn));
  }
 
  while ($row = mysqli_fetch_array($user)) {
 
    $user_id = $row['user_key'];
    $user_name = $row['user_name'];
    $user_email = $row['user_email'];
    $user_password = $row['user_password'];
  }
  if ($user_name == $username  &&  $user_password == $password) {
 
    $_SESSION['user_key'] = $user_id;       // Storing the value in session
    $_SESSION['user_name'] = $user_name;   // Storing the value in session
    $_SESSION['user_email'] = $user_email; // Storing the value in session
    //! Session data can be hijacked. Never store personal data such as password, security pin, credit card numbers other important data in $_SESSION
    header('location: dashboard.php?user_key=' . $user_id);
  } else {
    header('location: login.php');
  }
}
?>