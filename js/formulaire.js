$(document).ready(function(){

	$('#envoi').click(function(e){
        e.preventDefault();

		var champs =   ['nom','prenom','email','objet','text'];
        var erreurs = 0;
        var reqData = '';
        
        $('#erreur').hide();
        champs.forEach( function(element) {
        	erreurs += verifier(element);
        	reqData += element+'='+$("#"+element).val()+'&';
        });
         if (erreurs == 0) {
         	$.ajax({
     			url       : 'verif.php',
     			type      : 'POST',
     			data      : reqData,
     			dataType  : 'html',
     			success : function(retour){    			    				
     				$('#reponse').html(JSON.parse(retour));     				
     			}


         });

	}else{
		$('#erreur').show();
	};


function verifier(nomChamp){
	var champ = $("#"+nomChamp);
	 	champ.css({ 
	        backgroundColor : 'white',
	    });
    if(champ.val() == ""){ 
	    $('#erreur').html('le champ ' + nomChamp + ' n\'est pas rempli'); 
	    $('#erreur').css({
	    	backgroundColor : 'red',
	    })
        champ.css({ 
	        backgroundColor : 'red',
	    });
	    return 1;
    }
    return 0;
}




});
});

