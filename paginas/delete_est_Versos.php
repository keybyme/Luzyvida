<?php include "../db.php" ?>
<?php include "../header.php";?>

<?php 

if(isset($_GET['url_ve_key'])){ 
    $url_ve_key = $_GET['url_ve_key']; 
    {
         $query = "DELETE FROM estudio_versos WHERE ve_key = {$url_ve_key}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: ../paginas/Listar_estudios.php");
     }
    }
?>

  <!-- Footer -->
<?php include "footer.php" ?>