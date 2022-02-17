<div class="container col-4 border rounded bg-light mt-5" style='--bs-bg-opacity: .5;'>
<?php include "../header.php" ?>
  <h1 class="text-center">Sign Up</h1>
  <hr>
  <form action="" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Username</label>
      <input type="text" class="form-control" name="user" placeholder="Enter your User Name" autocomplete="off" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email ID</label>
      <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" required>
      <small class="text-muted">Your email is safe with us.</small>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
      <small class="text-muted">Do not share your password.</small>
    </div>
    <div class="mb-3">
      <input type="submit" name="signup" value="Sign Up" class="btn btn-primary">
    </div>
  </form>
</div>

<?php
if (isset($_POST['signup'])) {
  $user = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['password'];
 
  $query = "INSERT INTO usuarios(user_name,user_email,user_password, user_fk_cia_key) VALUES('{$user}','{$email}','{$password}', 1)";
  $addUser = mysqli_query($conn, $query);
 
  if (!$addUser) {
    echo "Something went wrong" . mysqli_error($conn);
  } else {
    header('location: login.php');
  }
}
?>