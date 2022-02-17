<?php include "../db.php" ?>
<?php include "../header.php" ?>
<?php

?>

<div class="container">
   
          <?php 
             if(!(isset($_GET['url_start']) && isset($_GET['url_end']) && isset($_GET['url_tema']))){
                 die;
             }
             $url_start = $_GET['url_start']; 
             $url_end = $_GET['url_end']; 
             $url_tema= $_GET['url_tema']; 
             echo '<div class="row">';
             echo '<div class="row">';
             echo '<div class="col-4 mt-3"></div>';
             echo '<div class="col-8 mt-3"><h2>'.$url_tema.'</h2></div>';
             echo "</div>";
             $ws_flag=0;
             $query="SELECT * FROM  lVersiculos inner join lCapitulos on V_IdCapitulo = C_IdCapitulo inner join lLibros on C_IdLibro = L_IdLibro inner join lTema on V_IdVersiculo >= T_id_verso_start and V_IdVersiculo <= T_id_verso_end WHERE  V_IdVersiculo between $url_start and $url_end order by V_versiculo";  // SQL query to fetch all table data
             
            $view_versos= mysqli_query($conn,$query);     

            while($row= mysqli_fetch_assoc($view_versos)){
              $L_Libro_Desc = $row['L_Libro_Desc'];  
              $C_Capitulo_Desc = $row['C_Capitulo_Desc']; 
              $V_versiculo = $row['V_versiculo'];
              $V_Contenido = $row['V_Contenido'];
              if ($ws_flag ==0){
              echo '<div class="row">';
              echo '<div class="col-2" style="background-color:rgba(153, 204, 255, 0.7);">'.$L_Libro_Desc.'</div>'; 
              echo '<div class="col-1" style="background-color:rgba(153, 204, 255, 0.7);">'.$C_Capitulo_Desc.'</div>';
              echo '<div class="col-1" style="background-color:rgba(153, 204, 255, 0.7);">'.$V_versiculo.'</div>';
              echo '<div class="col-8" align="justify" style="background-color:rgba(153, 204, 255, 0.7);">'.$V_Contenido.'</div>';
              echo " </div> ";
              $ws_flag=1;
              } else {
                echo '<div class="row">';
                echo '<div class="col-2" style="background-color:rgba(153, 204, 255, 0.2);">'.$L_Libro_Desc.'</div>'; 
                echo '<div class="col-1" style="background-color:rgba(153, 204, 255, 0.2);">'.$C_Capitulo_Desc.'</div>';
                echo '<div class="col-1" style="background-color:rgba(153, 204, 255, 0.2);">'.$V_versiculo.'</div>';
                echo '<div class="col-8" align="justify" style="background-color:rgba(153, 204, 255, 0.2);">'.$V_Contenido.'</div>';
                echo " </div> ";
                $ws_flag=0;
              }
            } 
            ?>
              </tr>  
            </tbody>
        </table>
</div>   