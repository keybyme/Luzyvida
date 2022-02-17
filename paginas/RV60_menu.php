<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <!-- <a href="#about">About</a> -->
  <button class="dropdown-btn">Reina Valera 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <select name="genesis" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>G&eacute;nesis</option>
     <?php
     $lib = 1;
       while ($lib <= 50) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$lib.'</option>'; 
        $lib++;
       }
    ?>
  </select> 

   <br>
  <select name="exodo" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Exodo</option>
     <?php
       $lib = 51;
       $versiculo = 1;
       while ($lib <= 90) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="levitico" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Lev&iacute;tico</option>
     <?php
       $lib = 91;
       $versiculo = 1;
       while ($lib <= 117) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="numeros" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>N&uacute;meros</option>
     <?php
       $lib = 118;
       $versiculo = 1;
       while ($lib <= 153) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="deuteronomio" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Deuteronomio</option>
     <?php
       $lib = 154;
       $versiculo = 1;
       while ($lib <= 187) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>


  <br>
  <select name="josue" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Josue</option>
     <?php
       $lib = 188;
       $versiculo = 1;
       while ($lib <= 211) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="jueces" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Jueces</option>
     <?php
       $lib = 212;
       $versiculo = 1;
       while ($lib <= 232) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="rut" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Rut</option>
     <?php
       $lib = 233;
       $versiculo = 1;
       while ($lib <= 236) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="1samuel" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>1ra de Samuel</option>
     <?php
       $lib = 237;
       $versiculo = 1;
       while ($lib <= 267) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="2samuel" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>2da de Samuel</option>
     <?php
       $lib = 268;
       $versiculo = 1;
       while ($lib <= 291) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="1reyes" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>1ra de Reyes</option>
     <?php
       $lib = 292;
       $versiculo = 1;
       while ($lib <= 313) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="2reyes" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>2da de Reyes</option>
     <?php
       $lib = 314;
       $versiculo = 1;
       while ($lib <= 338) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>
          
  <br>     
  <select name="1cronicas" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>1ra de Cr&oacute;nicas</option>
     <?php
       $lib = 339;
       $versiculo = 1;
       while ($lib <= 367) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="2cronicas" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>2da de Cr&oacute;nicas</option>
     <?php
       $lib = 368;
       $versiculo = 1;
       while ($lib <= 403) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="esdras" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Esdras</option>
     <?php
       $lib = 404;
       $versiculo = 1;
       while ($lib <= 413) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="nehemias" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Nehem&iacute;as</option>
     <?php
       $lib = 414;
       $versiculo = 1;
       while ($lib <= 426) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>




  <br>     
  <select name="ester" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Ester</option>
     <?php
       $lib = 427;
       $versiculo = 1;
       while ($lib <= 436) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="job" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Job</option>
     <?php
       $lib = 437;
       $versiculo = 1;
       while ($lib <= 478) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="salmos" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Salmos</option>
     <?php
       $lib = 479;
       $versiculo = 1;
       while ($lib <= 628) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="proverbios" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Proverbios</option>
     <?php
       $lib = 629;
       $versiculo = 1;
       while ($lib <= 659) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="eclesiastes" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Eclesiastes</option>
     <?php
       $lib = 660;
       $versiculo = 1;
       while ($lib <= 671) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="cantares" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Cantares</option>
     <?php
       $lib = 672;
       $versiculo = 1;
       while ($lib <= 679) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="isaias" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Isa&iacute;as</option>
     <?php
       $lib = 680;
       $versiculo = 1;
       while ($lib <= 745) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="jeremias" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Jerem&iacute;as</option>
     <?php
       $lib = 746;
       $versiculo = 1;
       while ($lib <= 797) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="lamentaciones" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Lamentaciones</option>
     <?php
       $lib = 798;
       $versiculo = 1;
       while ($lib <= 802) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="ezequiel" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Ezequiel</option>
     <?php
       $lib = 803;
       $versiculo = 1;
       while ($lib <= 850) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="daniel" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Daniel</option>
     <?php
       $lib = 851;
       $versiculo = 1;
       while ($lib <= 862) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="oseas" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Oseas</option>
     <?php
       $lib = 863;
       $versiculo = 1;
       while ($lib <= 876) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="joel" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Joel</option>
     <?php
       $lib = 877;
       $versiculo = 1;
       while ($lib <= 879) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="amos" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Amos</option>
     <?php
       $lib = 880;
       $versiculo = 1;
       while ($lib <= 888) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="abdias" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Abdias</option>
     <?php
       $lib = 889;
       $versiculo = 1;
       while ($lib <= 889) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="jonas" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Jonas</option>
     <?php
       $lib = 890;
       $versiculo = 1;
       while ($lib <= 893) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="miqueas" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Miqueas</option>
     <?php
       $lib = 894;
       $versiculo = 1;
       while ($lib <= 900) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="nahum" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Nahum</option>
     <?php
       $lib = 901;
       $versiculo = 1;
       while ($lib <= 903) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="habacuc" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Habacuc</option>
     <?php
       $lib = 904;
       $versiculo = 1;
       while ($lib <= 906) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="sofonias" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Sofonias</option>
     <?php
       $lib = 907;
       $versiculo = 1;
       while ($lib <= 909) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="hageo" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Hageo</option>
     <?php
       $lib = 910;
       $versiculo = 1;
       while ($lib <= 911) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="zacarias" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Zacar&iacute;as</option>
     <?php
       $lib = 912;
       $versiculo = 1;
       while ($lib <= 925) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="malaquias" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>malaqu&iacute;as</option>
     <?php
       $lib = 926;
       $versiculo = 1;
       while ($lib <= 929) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="mateo" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Mateo</option>
     <?php
       $lib = 930;
       $versiculo = 1;
       while ($lib <= 957) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="marcos" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Marcos</option>
     <?php
       $lib = 958;
       $versiculo = 1;
       while ($lib <= 973) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="lucas" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Lucas</option>
     <?php
       $lib = 974;
       $versiculo = 1;
       while ($lib <= 997) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="juan" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Juan</option>
     <?php
       $lib = 998;
       $versiculo = 1;
       while ($lib <= 1018) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="hechos" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Hechos</option>
     <?php
       $lib = 1019;
       $versiculo = 1;
       while ($lib <= 1046) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="romanos" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Romanos</option>
     <?php
       $lib = 1047;
       $versiculo = 1;
       while ($lib <= 1062) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="1corintios" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>1ra de Corintios</option>
     <?php
       $lib = 1063;
       $versiculo = 1;
       while ($lib <= 1078) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="2corintios" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>1da de Corintios</option>
     <?php
       $lib = 1079;
       $versiculo = 1;
       while ($lib <= 1091) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="galatas" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>G&aacute;latas</option>
     <?php
       $lib = 1092;
       $versiculo = 1;
       while ($lib <= 1097) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="efesios" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Efesios</option>
     <?php
       $lib = 1098;
       $versiculo = 1;
       while ($lib <= 1103) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="filipenses" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Filipenses</option>
     <?php
       $lib = 1104;
       $versiculo = 1;
       while ($lib <= 1107) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="colosenses" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Colosenses</option>
     <?php
       $lib = 1108;
       $versiculo = 1;
       while ($lib <= 1111) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="1tesalonicenses" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>1ra Tesalonicences</option>
     <?php
       $lib = 1112;
       $versiculo = 1;
       while ($lib <= 1116) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="2tesalonicenses" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>2da Tesalonicences</option>
     <?php
       $lib = 1117;
       $versiculo = 1;
       while ($lib <= 1119) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="1timoteo" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>1ra de Timoteo</option>
     <?php
       $lib = 1120;
       $versiculo = 1;
       while ($lib <= 1125) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="2timoteo" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>2da de Timoteo</option>
     <?php
       $lib = 1126;
       $versiculo = 1;
       while ($lib <= 1129) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="tito" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Tito</option>
     <?php
       $lib = 1130;
       $versiculo = 1;
       while ($lib <= 1132) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="filemon" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Filemon</option>
     <?php
       $lib = 1133;
       $versiculo = 1;
       while ($lib <= 1133) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  <br>     
  <select name="hebreos" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Hebreos</option>
     <?php
       $lib = 1134;
       $versiculo = 1;
       while ($lib <= 1146) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>        

  <br>     
  <select name="santiago" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Santiago</option>
     <?php
       $lib = 1147;
       $versiculo = 1;
       while ($lib <= 1151) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>   

  <br>     
  <select name="1pedro" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>1ra de Pedro</option>
     <?php
       $lib = 1152;
       $versiculo = 1;
       while ($lib <= 1156) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>  

  <br>     
  <select name="2pedro" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>2da de Pedro</option>
     <?php
       $lib = 1157;
       $versiculo = 1;
       while ($lib <= 1159) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>  

  <br>     
  <select name="1juan" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>1ra de Juan</option>
     <?php
       $lib = 1160;
       $versiculo = 1;
       while ($lib <= 1164) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>  

  <br>     
  <select name="2juan" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>2da de Juan</option>
     <?php
       $lib = 1165;
       $versiculo = 1;
       while ($lib <= 1165) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>  

  <br>     
  <select name="3juan" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>3ra de Juan</option>
     <?php
       $lib = 1166;
       $versiculo = 1;
       while ($lib <= 1166) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>  

  <br>     
  <select name="judas" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Judas</option>
     <?php
       $lib = 1167;
       $versiculo = 1;
       while ($lib <= 1167) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>  

  <br>     
  <select name="apocalipsis" size="1" onChange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
     <option value="0" selected>Apocalipsis</option>
     <?php
       $lib = 1168;
       $versiculo = 1;
       while ($lib <= 1189) {
        echo '<option value="../paginas/RV60.php?libro='.$lib.'">'.$versiculo.'</option>'; 
        $lib++;
        $versiculo++;
       }
    ?>
  </select>

  </div>
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html> 
