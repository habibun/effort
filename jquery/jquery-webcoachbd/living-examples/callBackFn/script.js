$(document).ready(function(){
	$('#shower').show();
	$('h3').click(function(){
		$(this).next().slideUp(500,function(){
			var test = $(this).next().next().text();
			if(test == ''){
				$('#shower').slideDown('slow');
			}else{
				$(this).next().next().slideDown('slow');
			}
		});
	});
});