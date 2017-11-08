        <?php
require_once ('parse_csv.php');
$avenir = json_decode(parsecsv('avenir'));// on appel dans la fonction le nom du fichier csv à appeler
?>
<!-- section2 -->
<div class="container-fluid red2 text-center">
          	 <div class="container">
          	  <h2>L'avenir</h2>          	
          	 </div>
          	   <div  class="container red4">
          	  	<div class="row justify-content-center">
                         <?php
                           for ($i=0; $i < count(json_decode(parsecsv('equipe'))); $i++) { 
      //boucle sur le nb d'occurence l'argument de la fonction est le nom du fichier csv
      echo '    <div class="col-md-3 py-2">
                    <img src="img/3.jpg">     
               <p>'.$avenir[$i]->avenir.'</p>   
                    </div>
                 ';
      }   
      ?>
                                        	  
          	    </div> 
               </div> 
               <div class="container">
      
               </div>         	  		
          	  </div>         		  	
                 <!-- section2 -->