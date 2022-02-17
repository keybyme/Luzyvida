<!-- Header -->
<?php
session_start(); 
if (!isset($_SESSION['user_key']) && empty($_SESSION['user_key'])) {         // condition Check: if session is not set. 
 header('Location: login.php');   // if not set the user is sendback to login page.
 exit();
};
?>
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {  
        $desc = $_POST['desc'];                
        $start = $_POST['start'];         
        $end = $_POST['end'];         
        $hora = $_POST['hora'];   
        $email = $_POST['email'];        
        $from = $_POST['from'];          
        $message = $_POST['message'];   
  
        // SQL query to insert user data into the users table
        $query= "INSERT INTO reminders(re_fk_user_key, re_desc, re_fecha_start, re_fecha_end, re_hora, re_email, re_from, re_message) 
        VALUES({$_SESSION['user_key']},'{$desc}','{$start}','{$end}','{$hora}','{$email}', '{$from}','{$message}')";
        $add_reminder = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_reminder) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Reminder added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Reminder details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="desc" class="form-label">Reminder</label>
        <input type="text" name="desc"  class="form-control">
      </div>

      <div class="form-group">
        <label for="start" class="form-label">Start</label>
        <input type="text" name="start"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="end" class="form-label">End</label>
        <input type="text" name="end"  class="form-control">
      </div>    

      <div class="form-group">
        <label for="hora" class="form-label">Hora</label>
        <input type="text" name="hora"  class="form-control">
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="from" class="form-label">From</label>
        <input type="text" name="from"  class="form-control">
      </div>       

      <div class="message-group">
        <label for="message" class="form-label">Message</label>
        <input type="text" name="message"  class="form-control">
      </div> 

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>


<!-- Footer -->
<?php include "../footer.php" ?>