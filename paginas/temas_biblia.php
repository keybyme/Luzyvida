<?php include "../db.php" ?>
<?php include "../header.php" ?>
<?php

?>

<div class="container">
    
 
          <?php 
            echo '<div class="row">';
              echo '<div class="col-4"></div>';
              echo '<div class="col-8">';
              echo '<h2>TEMAS EN LA BIBLIA</h2>';
              echo '</div>';
            echo '</div>';
            
            echo '<div class="row">';
            echo ' <div class="col"><form action="../paginas/temas_biblia.php">Buscar Tema: <input type="text" name="word" size="12"><input type="submit" value="Submit"></form></div>';
            echo '</div>';
            if(isset($_GET['word'])){
                $word = $_GET['word']; 
                $query="SELECT  * FROM  ltema WHERE T_titulo LIKE '%$word%' ";  
                echo "Tema a buscar = '$word'";
             }else {
                $query="SELECT  * FROM  ltema order by T_titulo";
             }
            

            $view_versos= mysqli_query($conn,$query);      
            while($row= mysqli_fetch_assoc($view_versos)){
              $url_tema = $row['T_titulo']; 
              $ws_start = $row['T_id_verso_start'];
              $ws_end = $row['T_id_verso_end'];
              echo '<div class="row">';  
              echo ' <div class="col"><a href="../paginas/Listar_temas.php?url_start='.$ws_start.'&url_end='.$ws_end.'&url_tema='.$url_tema.'"'.'>'.$url_tema.'</a></div>'; 
              echo " </div> ";
            }  
            ?>
              </tr>  
            </tbody>
        </table>
</div>   