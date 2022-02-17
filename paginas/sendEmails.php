<?php include "../db.php" ?>
<?php include "../header.php" ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

?>
<div class="container">
 <table border="1" bordercolor="#CC0000" class="table table-striped"> 
 <tr>
          <?php  

                        date_default_timezone_set('US/Eastern'); 
                        $fecha_mmdd = date("md");  
                        $hora_HHMM = date("Hi");  
                        echo '<tr>';
                        echo '<td colspan="7"><h2 align="center">Reminders  </h2>Today is ' . date("l") . '&nbsp;&nbsp;&nbsp;&nbsp;'. date("m/d/y") .'&nbsp;&nbsp;&nbsp;&nbsp;'.date("h:i:sa").'</td>';
                        echo '</tr>';
                        

                        echo "<tr>";  
                        echo " <td>Reminder</td>";
                        echo " <td>Start</td>";
                        echo " <td>End</td>";
                        echo " <td>Hora</td>"; 
                        echo " <td>Mensaje</td>";
                        echo " <td>Email</td>";
                        echo " <td>From</td>"; 
                        echo " </tr> ";            

            $query="SELECT * FROM  reminders where re_fecha_start = $fecha_mmdd order by re_fecha_start";           
            $view_reminders= mysqli_query($conn,$query);     

            while($row= mysqli_fetch_assoc($view_reminders)){

              $re_fk_user_key = $row['re_fk_user_key'];   
              $re_desc = $row['re_desc'];  
              $re_fecha_start = $row['re_fecha_start']; 
              $re_fecha_end = $row['re_fecha_end'];
              $re_hora = $row['re_hora'];
              $re_email = $row['re_email']; 
              $re_message = $row['re_message'];
              $re_from = $row['re_from'];

              echo "<tr>";  
              echo " <td> {$re_desc}</td>";
              echo " <td> {$re_fecha_start}</td>";
              echo " <td> {$re_fecha_end}</td>";
              echo " <td> {$re_hora}</td>"; 
              echo " <td> {$re_message}</td>";
              echo " <td> {$re_email}</td>";
              echo " <td> {$re_from}</td>"; 
              echo " </tr> ";
             

    
//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.20874.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'me@20874.com';                     //SMTP username
    $mail->Password   = '22hollytoday##';                               //SMTP password
  //  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->SMTPSecure = 'ssl';   
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('2407939353@txt.att.net', $re_from);  //no toces


    $mail->addAddress($re_email, 'Cliente');     //Add a recipient
    //$mail->addAddress('2407939353@txt.att.net');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $re_desc;
    $mail->Body    = $re_message;
    $mail->AltBody = $re_message;

    $mail->send();
    echo 'Mensaje ha sido enviado';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
            }
            ?>
     </table>          
</div>   