<?php include "../db.php" ?>
<?php include "../header.php" ?>
<?php

?>

<div class="container"> 
 
          <?php 
            echo '<div class="row">';
                 echo '<div class="col-4 mt-3"></div>';
                 echo '<div class="col-8 mt-3">';
                 echo '<h2>DICCIONARIO BIBLICO</h2>';
                 echo '</div>';
            echo '</div>';

            echo '<div class="row">';
            echo ' <div class="col"><form action="../paginas/diccionario.php">Buscar Palabra: <input type="text" name="word" size="12"><input type="submit" value="Submit"></form></div>';
            echo '</div>';   
            echo '<div class="row">';
            echo '<div><br></div>';
            echo "</div>";    
            $ws_flag=0;      
            if(isset($_GET['word'])){
                $word = $_GET['word']; 
                $query="SELECT  * FROM  diccionario WHERE dic_palabra LIKE '%$word%' ";  
                echo "Palabra a buscar = '$word'";
             }else {
                $query="SELECT  * FROM  diccionario order by dic_palabra";
             }
            
            $view_versos= mysqli_query($conn,$query);     

            while($row= mysqli_fetch_assoc($view_versos)){
              $db_dic_palabra = $row['dic_palabra'];
              $db_dic_definicion = $row['dic_definicion']; 
              if ($ws_flag ==0){
              echo '<div class="row">';
              echo '<div class="col-3"><strong>'.$db_dic_palabra.'</strong></div>';
              echo '<div class="col-9" align="justify" style="background-color:rgba(153, 204, 255, 0.7);">'.$db_dic_definicion.'</div>';  
              echo "</div>";
              echo '<div class="row">';
              echo '<div><br></div>';
              echo "</div>";
              $ws_flag=1;
              } else {
                echo '<div class="row">';
                echo '<div class="col-3"><strong>'.$db_dic_palabra.'</strong></div>';
                echo '<div class="col-9" align="justify" style="background-color:rgba(153, 204, 255, 0.2);">'.$db_dic_definicion.'</div>';  
                echo "</div>";
                echo '<div class="row">';
                echo '<div><br></div>';
                echo "</div>";
                $ws_flag=0;
              }
            }  
            ?>
              
</div>   