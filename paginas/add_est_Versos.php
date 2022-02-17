<?php include "../db.php" ?>
<?php include "../header.php";

    if(!(isset($_GET['url_id_estudio'])) && isset($_GET['url_estudio'])){
        die;
    } else{
      $url_id_estudio = $_GET['url_id_estudio']; 
      $url_estudio = $_GET['url_estudio']; 
    } 
    echo "<p><h2 align='center'> {$url_estudio}</h2></p></td>";
?>

<div class="container col-4 border rounded bg-light mt-5" style='--bs-bg-opacity: .5;'>
<form action="" method="post">
 
    <div class="mb-3">
      <label for="verso" class="form-label">Verso</label>
      <input type="text" class="form-control" name="verso" placeholder="Enter new verso" required> 
    </div>
    <div class="mb-3">
      <input type="submit" name="add_verso" value="Agregar Verso" class="btn btn-primary">
    </div>
  </form>
<?php

if (isset($_POST['add_verso'])) {
      $verso = $_POST['verso'];  
      $query = "INSERT INTO estudio_versos(ve_fk_e_id_key, ve_fk_v_IdVersiculo) VALUES('{$url_id_estudio}','{$verso}')";
      $addVerso = mysqli_query($conn, $query);
     
      if ($addVerso) {
        header("location: ../paginas/Listar_est_Versos.php?id_estudio='.$url_id_estudio.'&estudio='.$url_estudio.'");
    
      } else {
        echo "Something went wrong" . mysqli_error($conn);
      }
    }  
  
 ?>
</div>

 
 

 