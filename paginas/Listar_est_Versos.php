<?php include "../db.php" ?>
<?php include "../header.php" ?>
 

<div class="container">
   
          <?php 
            
            if(!isset($_GET['id_estudio'])){ 
                die; 
             }
                $id_estudio = $_GET['id_estudio']; 
                $estudio = $_GET['estudio'];  
                echo '<div class="row">';
                echo '<div class="col-4"><a href="../paginas/add_est_Versos.php?url_id_estudio='.$id_estudio.'&url_estudio='.$estudio.'"'.'>Agregar Verso</a></div>'; 
                echo '<div class="col-8 mt-3"><h2> '.$estudio.'</h2></div>';
                echo "</div>";
                $ws_flag=0; 
                $query="  SELECT *                  
                FROM  estudio_versos inner join lVersiculos on
                      ve_fk_V_IdVersiculo = V_IdVersiculo  
                      inner join lCapitulos on
                        V_IdCapitulo = C_IdCapitulo inner join lLibros on
                      C_IdLibro = L_IdLibro   
                   WHERE  ve_fk_e_id_key = $id_estudio      
                order by V_IdVersiculo";  
         
         echo '<div class="row">'; 
         echo ' <div class="col-1"><p style="background-color:rgba(255, 99, 71, 0.5);">Libro</p></div>';
         echo ' <div class="col-1"><p style="background-color:rgba(255, 99, 71, 0.5);">Capitulo</p></div>';
         echo ' <div class="col-1"><p style="background-color:rgba(255, 99, 71, 0.5);">Verso</p></div>'; 
         echo ' <div class="col-8"><p style="background-color:rgba(255, 99, 71, 0.5);">Texto</p></div>'; 
         echo ' <div class="col-1"><p style="background-color:rgba(255, 99, 71, 0.5);">Delete</p></div>';
       echo " </div> ";      
       echo '<div class="row">'; 
       echo '<div><br></div>';
       echo '<div>';     

            $view_est_versos= mysqli_query($conn,$query);     
          
            while($row= mysqli_fetch_assoc($view_est_versos)){
              $ve_key = $row['ve_key'];
              $L_Libro_Desc = $row['L_Libro_Desc'];  
              $C_Capitulo_Desc = $row['C_Capitulo_Desc']; 
              $V_versiculo = $row['V_versiculo'];
              $V_Contenido = $row['V_Contenido'];
              if ($ws_flag ==0){ 
              echo '<div class="row">'; 
              echo ' <div class="col-1" style="background-color:rgba(255, 99, 71, 0.2);"> '.$L_Libro_Desc.'</div>';
              echo ' <div class="col-1" style="background-color:rgba(255, 99, 71, 0.2);"> '.$C_Capitulo_Desc.'</div>';
              echo ' <div class="col-1" style="background-color:rgba(255, 99, 71, 0.2);"> '.$V_versiculo.'</div>';
              echo ' <div class="col-8" style="background-color:rgba(255, 99, 71, 0.2);"> '.$V_Contenido.'</div>';
              echo ' <div class="col-1" style="background-color:rgba(255, 99, 71, 0.2);"><a href="../paginas/delete_est_Versos.php?url_ve_key='.$ve_key.'"'.'><img src="../images/ico-eliminar2.gif" width="20" height="20" alt=""/></a></div>'; 
              echo " </div> ";
              $ws_flag=1; 
              } else {
                echo '<div class="row">'; 
                echo ' <div class="col-1"> '.$L_Libro_Desc.'</div>';
                echo ' <div class="col-1"> '.$C_Capitulo_Desc.'</div>';
                echo ' <div class="col-1"> '.$V_versiculo.'</div>';
                echo ' <div class="col-8"> '.$V_Contenido.'</div>';
                echo ' <div class="col-1"><a href="../paginas/delete_est_Versos.php?url_ve_key='.$ve_key.'"'.'><img src="../images/ico-eliminar2.gif" width="20" height="20" alt=""/></a></div>'; 
                echo " </div> ";
                $ws_flag=0; 
              }
            }  
            ?>
              </tr>  
            </tbody>
        </table>
</div>    