<!-- Header -->
<?php
session_start(); 
if (!isset($_SESSION['user_key']) && empty($_SESSION['user_key'])) {         // condition Check: if session is not set. 
 header('Location: login.php');   // if not set the user is sendback to login page.
 
 exit();
};

?>
<?php  include "../header.php" ?>
 
<div class="container">
  
          <?php   
            
                        date_default_timezone_set('US/Eastern'); 
                        $fecha_mmdd = date("md");  
                        $hora_HHMM = date("Hi");  
                        echo '<div class="row">';
                          echo '<div class="col-2 mt-3"><a href="../paginas/add_reminder.php">ADD</a></div>';  
                          echo '<div class="col-3 mt-3"><h2>Reminders  </h2></div>';
                          echo '<div class="col-5 mt-3"><strong>Today is ' . date("l") . '&nbsp;&nbsp;&nbsp;&nbsp;'. date("m/d/y") .'&nbsp;&nbsp;&nbsp;&nbsp;'.date("h:i:sa").'</strong></div>';
                          echo '<div class="col-2 mt-3"><a href="../paginas/sendEmails.php">  Send Emails</a></div>'; 
                        echo '</div>';
                        
                        echo '<div class="row">'; 
                          echo ' <div class="col-2"><p style="background-color:rgba(255, 99, 71, 0.5);">Reminder</p></div>';
                          echo ' <div class="col-1"><p style="background-color:rgba(255, 99, 71, 0.5);">Start&nbsp;&nbsp;&nbsp;End</p></div>';
                          echo ' <div class="col-1"><p style="background-color:rgba(255, 99, 71, 0.5);">Hora</p></div>'; 
                          echo ' <div class="col-3"><p style="background-color:rgba(255, 99, 71, 0.5);">Mensaje</p></div>';
                          echo ' <div class="col-2"><p style="background-color:rgba(255, 99, 71, 0.5);">Email</p></div>';
                          echo ' <div class="col-2"><p style="background-color:rgba(255, 99, 71, 0.5);">From</p></div>'; 
                          echo ' <div class="col-1"><p style="background-color:rgba(255, 99, 71, 0.5);">Upd./Del.</p></div>';
                        echo " </div> ";      
                        echo '<div class="row">'; 
                        echo '<div><br></div>';
                        echo '<div>';     
            $ws_flag=0;            
            $query="SELECT * FROM  reminders order by re_fecha_start";           
            $view_reminders= mysqli_query($conn,$query);     

            while($row= mysqli_fetch_assoc($view_reminders)){
              $re_key = $row['re_key'];
              $re_fk_user_key = $row['re_fk_user_key'];   
              $re_desc = $row['re_desc'];  
              $re_fecha_start = $row['re_fecha_start']; 
              $re_fecha_end = $row['re_fecha_end'];
              $re_hora = $row['re_hora'];
              $re_email = $row['re_email']; 
              $re_message = $row['re_message'];
              $re_from = $row['re_from'];

              if ($re_fk_user_key == $_SESSION['user_key']){  
                if ($ws_flag ==0){  
                echo '<div class="row">';
                  echo '<div class="col-2" style="background-color:rgba(255, 99, 71, 0.2);">'.$re_desc.'</div>';
                  echo '<div class="col-1" style="background-color:rgba(255, 99, 71, 0.2);">'.$re_fecha_start.'&nbsp;&nbsp;&nbsp;'.$re_fecha_end.'</div>';
                  echo '<div class="col-1" style="background-color:rgba(255, 99, 71, 0.2);">'.$re_hora.'</div>'; 
                  echo '<div class="col-3" style="background-color:rgba(255, 99, 71, 0.2);">'.$re_message.'</div>';
                  echo '<div class="col-2" style="background-color:rgba(255, 99, 71, 0.2);">'.$re_email.'</div>';
                  echo '<div class="col-2" style="background-color:rgba(255, 99, 71, 0.2);">'.$re_from.'</div>'; 
                  echo '<div class="col-1" style="background-color:rgba(255, 99, 71, 0.2);"><a href="../paginas/updateReminder.php?url_re_key='.$re_key.'"'.'><img src="../images/ico-edit.gif" width="16" height="16" alt=""/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../paginas/deleteReminder.php?url_re_key='.$re_key.'"'.'><img src="../images/ico-eliminar2.gif" width="20" height="20" alt=""/></a></div>'; 
                echo "</div> ";
                $ws_flag=1; 
                } else {
                  echo '<div class="row">';
                  echo '<div class="col-2">'.$re_desc.'</div>';
                  echo '<div class="col-1">'.$re_fecha_start.'&nbsp;&nbsp;&nbsp;'.$re_fecha_end.'</div>';
                  echo '<div class="col-1">'.$re_hora.'</div>'; 
                  echo '<div class="col-3">'.$re_message.'</div>';
                  echo '<div class="col-2">'.$re_email.'</div>';
                  echo '<div class="col-2">'.$re_from.'</div>'; 
                  echo '<div class="col-1"><a href="../paginas/updateReminder.php?url_re_key='.$re_key.'"'.'><img src="../images/ico-edit.gif" width="16" height="16" alt=""/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../paginas/deleteReminder.php?url_re_key='.$re_key.'"'.'><img src="../images/ico-eliminar2.gif" width="20" height="20" alt=""/></a></div>'; 
                echo "</div> ";
                $ws_flag=0; 
                }
              }
            }  

    
            ?>
         
</div>   