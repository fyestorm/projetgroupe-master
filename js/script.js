$(document).ready(function(){

$('a').click(function()
	{$('html,body').animate({scrollTop:$($(this).attr('href')).offset().top

},2000);
 eventPreventDefault;
});



});