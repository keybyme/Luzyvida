<?php

session_start(); 


?>
<?php include "../db.php" ?>
<?php include "../header.php" ?>
<?php include "../paginas/RV60_menu.php" ?>

<?php
$libro = $_GET['libro'];
?>


<div class="container">
          <?php 
            $ws_bandera=0;
            $ws_flag = 0;
            $query="SELECT * FROM  lVersiculos inner join lCapitulos on V_IdCapitulo = C_IdCapitulo 
            inner join lLibros on C_IdLibro = L_IdLibro inner join lTema on V_IdVersiculo >= T_id_verso_start and V_IdVersiculo <= T_id_verso_end 
            WHERE  V_IdCapitulo = $libro order by V_versiculo";  // SQL query to fetch all table data
            $view_versos= mysqli_query($conn,$query);    // sending the query to the database
           // echo '<div class="container">';
            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_versos)){
              $ws_capi = $row['V_IdCapitulo'];
              $cap = $row['C_Capitulo_Desc'];
              $libro_desc = $row['L_Libro_Desc'];
              $id = $row['V_IdVersiculo'];                
              $verso = $row['V_versiculo'];        
              $cont = $row['V_Contenido'];     
              $ws_prev = $ws_capi - 1;
              $ws_next = $ws_capi + 1;      
              if ($ws_flag == 0) {
                echo '<div class="row">';  
                  echo '<div class="col-3 mt-3"><form action="../paginas/search.php">Search: <input type="text" name="palabra" size="12"><input type="submit" value="Submit"></form></div>';
                  
                  echo '<div class="col-7 mt-3"><h2> '.$libro_desc.' Cap&iacute;tulo '.$cap.'</h2></div>'; 
                  echo '<div class="col-1 mt-3"><a href="../paginas/RV60.php?libro='.$ws_prev.'"'.'>Prev</a></div>';
                  echo '<div class="col-1 mt-3"><a href="../paginas/RV60.php?libro='.$ws_next.'"'.'>Next</a></div>'; 
                 
                echo "</div>";
                $ws_flag = 1;
             
              }
              
              $sql_result = "SELECT * FROM ltema WHERE T_id_verso_start = $id";
              $tema = mysqli_query($conn, $sql_result); 
              if ($tema) { 
                while ($fila = mysqli_fetch_array($tema)) {
                  $ws_titulo = $fila['T_titulo']; 
                
                  echo '<div class="row">'; 
                    echo '<div class="col-4"></div>';
                    echo '<div class="col-8 mt-2"><h4 class="text-primary"> '.$ws_titulo.'</h4></div>';
                  echo "</div>";
                } 
              }

              echo '<div class="row">'; 
              if ($ws_bandera == 0) {
                  $ws_bandera=1;
                  if (isset($_SESSION['user_key'])) {
                      echo '<div class="col-1" style="background-color:rgba(153, 204, 255, 0.5);">'.$id.'</div>';
                      echo '<div class="col-1" style="background-color:rgba(153, 204, 255, 0.5);">'.$verso.'</div>'; 
                      echo '<div class="col-10" style="background-color:rgba(153, 204, 255, 0.5);">'.$cont.'</div>';  
                      echo " </div> ";
                } else {
                      echo '<div class="col-1" style="background-color:rgba(153, 204, 255, 0.5);">'.$verso.'</div>'; 
                      echo '<div class="col-11" style="background-color:rgba(153, 204, 255, 0.5);">'.$cont.'</div>';  
                      echo " </div> ";
                }
               }else {
                $ws_bandera=0;
                if (isset($_SESSION['user_key'])) {
                  echo '<div class="col-1">'.$id.'</div>';
                  echo '<div class="col-1">'.$verso.'</div>'; 
                  echo '<div class="col-10">'.$cont.'</div>';  
                  echo " </div> ";
            } else {
                  echo '<div class="col-1">'.$verso.'</div>'; 
                  echo '<div class="col-11">'.$cont.'</div>';  
                  echo " </div> ";
            }
               }
            }  
            //echo "</div>";
            ?> 

    </div>
</body>
</html>
