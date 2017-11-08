<?php

function parsecsv($fileId){

	$file = fopen("data/".$fileId.".csv", "r");
	$tabResult = [];
	$tabLibelles = [];
	$ligne = 0;

	while (!feof($file))  {


	       if($ligne==0){
	           $tabLibelles =explode(";", fgets($file));
	         	       }else{
	       		$ligneTab = explode(";", fgets($file));
				$temporairTab= [];
				for ($i=0; $i<count($ligneTab);$i++) {
					$ligneTab[$i] = str_replace(",","<br>", $ligneTab[$i]);
					$temporairTab[$tabLibelles[$i]] = $ligneTab[$i];
				}
				array_push($tabResult, $temporairTab);
	       }
	       $ligne++;
	       
	    }
	    fclose($file);
	    return  json_encode($tabResult);
}
?>