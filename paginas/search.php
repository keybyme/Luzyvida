<?php include "../db.php" ?>
<?php include "../header.php" ?>
<?php
$palabra = $_GET['palabra'];
 //echo $palabra;

?>

<div class="container">
 <table border="1" bordercolor="#CC0000" class="table table-striped"> 
            <tbody>
              <tr>
 
          <?php 
            
            $query="    SELECT  *                  
            FROM  lVersiculos inner join lCapitulos on
                  V_IdCapitulo = C_IdCapitulo
                inner join lLibros on
                 C_IdLibro = L_IdLibro
         
                      where  V_Contenido LIKE '% $palabra %'
                      or V_Contenido LIKE '% $palabra.%'
                      or V_Contenido LIKE '% $palabra,%'
                      or V_Contenido LIKE '% $palabra;%'
                      or V_Contenido LIKE '% $palabra:%'
  
            order by C_IdLibro, V_IdCapitulo, V_IdVersiculo";  // SQL query to fetch all table data
            $view_versos= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_versos)){
              $ws_capi = $row['V_IdCapitulo'];
              $cap = $row['C_Capitulo_Desc'];
              $libro_desc = $row['L_Libro_Desc'];
              $id = $row['V_IdVersiculo'];                
              $verso = $row['V_versiculo'];        
              $cont = $row['V_Contenido'];     
            
              echo "<tr>";
              echo " <th scope='row' >{$id}</th>";
              echo " <td> {$libro_desc}</td>";
              echo " <td> {$cap}</td>";
              echo " <td> {$verso}</td>";
              echo " <td colspane='2'> {$cont}</td>";  
              echo ' <td><a href="../paginas/RV60.php?libro='.$ws_capi.'"'.'>ir al Cap&iacute;tulo</a></td>'; 
              echo " </tr> ";
            }  
            ?>
              </tr>  
            </tbody>
        </table>
</div>