<?php include "../db.php" ?>
<?php include "../header.php" ?>
<?php

?>

<div class="container">
    
          <?php 
            echo '<div class="row">';
              echo '<div class="col-4"></div>';
              echo '<div class="col-8">';
              echo '<h2>ESTUDIOS BIBLICOS</h2>';
              echo '</div>';
            echo '</div>';
            
            echo '<div class="row">';
            echo ' <div class="col"><form action="../paginas/listar_estudios.php">Buscar Estudio: <input type="text" name="e_estudio" size="12"><input type="submit" value="Submit"></form></div>';
            echo '</div>';
            if(isset($_GET['e_estudio'])){ 
                $e_estudio = $_GET['e_estudio']; 
                $query="SELECT  * FROM  lestudios WHERE e_estudio LIKE '%$e_estudio%' ";  
                echo "Estudio a buscar = '$e_estudio'";
             }else {
                $query="SELECT  * FROM  lestudios order by e_estudio";
             }
            
            $view_estudios= mysqli_query($conn,$query);     
          
            while($row= mysqli_fetch_assoc($view_estudios)){
              $e_id_key = $row['e_id_key'];
              $e_estudio = $row['e_estudio']; 
              $e_http = $row['e_http'];

              echo '<div class="row">';  
              echo ' <div class="col"><a href="../paginas/Listar_est_Versos.php?id_estudio='.$e_id_key.'&estudio='.$e_estudio.'"'.'>'.$e_estudio.'</a></div>'; 
              echo " </div> ";
            }  
            ?>
              
</div>    