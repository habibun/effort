$(document).ready(function(){
	$('.ratings a').hover(function(){
		$(this).prevAll().andSelf().addClass('rating_over');
		$(this).nextAll().removeClass('rating_over');
	},function(){
		$(this).prevAll().andSelf().removeClass('rating_over');
	});
	
	
	
	$('.ratings a').click(function(e){
		var rate = $(this).text();
		var p_id = $(this).parent().next().text();
		e.preventDefault();
		$.ajax({
			type : 'GET',
			url : 'ratings.php?r='+rate+'&id='+p_id,
			success : function(){
				window.location.reload(true);
			}
		});
	});
});