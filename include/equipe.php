        <?php
require_once ('parse_csv.php');
$equipe = json_decode(parsecsv('equipe'));// on appel dans la fonction le nom du fichier csv à appeler
?>

 <!-- section4 -->
          	
          		
                <div class="container-fluid red7">
                  <h2>Nous</h2>
           	     <div class="row">
           		   <?php  
            for ($i=0; $i < count(json_decode(parsecsv('equipe'))); $i++) { 
      //boucle sur le nb d'occurence l'argument de la fonction est le nom du fichier csv
      echo '        
               
                    <article class="col-md-4 text-center">
                <img src="img/'.$i.'.png" alt="'.$equipe[$i]->nom.'">
                 <p>'.$equipe[$i]->nom.'</p>
                 <p>'.$equipe[$i]->competence.'</p>
                 
                </article>    
';
      }   
      ?>
           	     </div>
                
          	</div>
          	

          <!-- section4 -->