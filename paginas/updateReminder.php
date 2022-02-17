<?php
session_start(); 
if (!isset($_SESSION['user_key']) && empty($_SESSION['user_key'])) {         // condition Check: if session is not set. 
 header('Location: login.php');   // if not set the user is sendback to login page.
 exit();
};
?>
<?php include "../db.php" ?>
<?php include "../header.php" ?>
 
    
<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['url_re_key']))
    {
      $url_re_key = $_GET['url_re_key']; 
    }
      // SQL query to select all the data from the table where id = $url_re_key
      $query="SELECT * FROM reminders WHERE re_key = $url_re_key ";
      $view_rems= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_rems))
        {
          $id = $row['re_key'];
          $desc = $row['re_desc'];
          $start = $row['re_fecha_start'];
          $end = $row['re_fecha_end'];
          $hora = $row['re_hora'];
          $email = $row['re_email'];
          $from = $row['re_from'];
          $message = $row['re_message'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $desc = $_POST['desc'];
      $start = $_POST['start'];
      $end = $_POST['end'];
      $hora = $_POST['hora'];
      $email = $_POST['email'];
      $from = $_POST['from'];
      $message = $_POST['message'];
      
      // SQL query to update the data in reminders table where the id = $userid 
      $query = "UPDATE reminders SET re_desc = '{$desc}' , re_fecha_start = '{$start}' , re_fecha_end = '{$end}', re_hora = '{$hora}' , re_email = '{$email}' , re_from = '{$from}' , re_message = '{$message}'WHERE re_key = $url_re_key";
      $update_rem = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Reminder data updated successfully!')</script>";
      header('location: ../paginas/reminders.php');
    }             
?>

<h1 class="text-center">Update Reminder Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="desc" >Reminder</label>
        <input type="text" name="desc" class="form-control" value="<?php echo $desc  ?>">
      </div>

      <div class="form-group">
        <label for="start" >Start</label>
        <input type="text" name="start"  class="form-control" value="<?php echo $start  ?>">
      </div> 
    
      <div class="form-group">
        <label for="end" >End</label>
        <input type="text" name="end"  class="form-control" value="<?php echo $end  ?>">
      </div>    

      <div class="form-group">
        <label for="hora" >Hora</label>
        <input type="text" name="hora" class="form-control" value="<?php echo $hora  ?>">
      </div>

      <div class="form-group">
        <label for="email" >Start</label>
        <input type="email" name="email"  class="form-control" value="<?php echo $email  ?>">
      </div> 
    
      <div class="form-group">
        <label for="from" >From</label>
        <input type="text" name="from"  class="form-control" value="<?php echo $from  ?>">
      </div>

      <div class="form-group">
        <label for="message" >Message</label>
        <input type="text" name="message"  class="form-control" value="<?php echo $message  ?>">
      </div>

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="reminders.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>