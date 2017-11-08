      	<?php
require_once ('parse_csv.php');
$techno = json_decode(parsecsv('techno'));// on appel dans la fonction le nom du fichier csv à appeler
?>
              <!-- section1 -->
 <div class="container">
             <div class="row">
              <div class="col-md-12">
               <article id="para">
                 <h1>La formation</h1>
                 <p id="par">Aformac est partenariat avec ONLINEFORMAPRO, pour notre école ACCESS CODE SCOOL VICHY, se donne pour objectif de proposer à tous l’accès le plus direct au milieu professionnel de l’informatique et du numérique .
 
La mission de notre école est de former les professionnels de l’informatique de demain,capables d’évoluer avec un esprits critique est aptes à comprendre leur environnement, être une école en phase avec la réalités techniques et professionnelles du secteur.
 
Le filigrane de la formation étant que les apprenant(e)s d’ACS apprennent à apprendre et disposent ainsi des clés pour se lancer dans une carrière de développeur et pour évoluer en tant que professionnel(le)s dans un univers numérique par nature en constance évaluation. 
Notre formation de 8 mois (dont 2 en entreprises) gratuite qualifiante, intensive et accessible sans prérequis de diplôme, permet un accès rapide aux métiers de développeurd’applications web et mobile avec une spécialité Font-end ou Back-End.
Après un tronc commun de 2 mois, le stagiaire se spécialise afin de devenir Developpeur Font-End ou Back-End en fonction de ses goûts, compétences et aptitudes.</p>
               </article>               
              </div>  
             </div>             
            </div>
            <div class="container">
             <div class="row">
          	<?php  
          	for ($i=0; $i < count(json_decode(parsecsv('techno'))); $i++) { 
			//boucle sur le nb d'occurence l'argument de la fonction est le nom du fichier csv
			echo '<div class="col-md-4">
        <div class="card border-secondary mb-3" ">
				<div class="card-header bg-primary">'.$techno[$i]->titre.'</div>
				<div class="card-body text-secondary">
			         <h4 class="card-title">'.$techno[$i]->techno.'</h4> 	  		        	  	
			          	  </div>
                    </div>
                    </div>
';
			} 	
			?>
          	 </div>
          	</div> 
            </div> 
          <!-- section1 -->
  
      	
       	
       