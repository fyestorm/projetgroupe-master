<?php
require_once ('parse_csv.php');
$slide = json_decode(parsecsv('slide'));// on appel dans la fonction le nom du fichier csv à appeler
  // echo $slide[0]->nom;


?>
<!-- section3 -->
  <div class="container-fluid">
<!--   <div class="container justify-content-center"> -->
<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
<?php
     echo '<ol class="carousel-indicators">';
for ($i=0; $i < count(json_decode(parsecsv('slide'))); $i++) { 
//boucle sur le nb d'occurence l'argument de la fonction est le nom du fichier csv
if ($i == 0) {
  echo '<li data-target="#carouselExampleIndicators" data-slide-to='.$i.' class=\"active\"></li>';
}else{
echo '<li data-target=\"#carouselExampleIndicators\" data-slide-to='.$i.'></li>';
}
}
echo '  </ol>';
echo '  <div class="carousel-inner col-12">';
for ($i=0; $i < count(json_decode(parsecsv('slide'))); $i++) { 
//boucle sur le nb d'occurence l'argument de la fonction est le nom du fichier csv
if ($i == 0) {
echo '<div class="carousel-item active">';
echo '<img class="d-block w-100" src='.$slide[$i]->image.' alt="First slide">';
echo ' <div class="carousel-caption d-none d-md-block">';
 echo '<h3 class="text-light bg-dark">'.$slide[$i]->nom.'</h3>';
 echo '   <p class="text-light bg-dark">'.$slide[$i]->description.'</p>';
 echo ' </div>';
 echo '   </div>';
}else{
echo '<div class="carousel-item">';
echo '<img class="d-block w-100" src='.$slide[$i]->image.' alt="First slide">';
 echo '<div class="carousel-caption d-none d-md-block">';
 echo '<h3 class="text-light bg-dark">'.$slide[$i]->nom.'</h3>';
 echo '   <p class="text-light bg-dark">'.$slide[$i]->description.'</p>';
echo '  </div>';
echo '    </div>';
}
}
?>
</div>
   </div>
 <!-- section3 -->