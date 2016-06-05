$(document).ready(function(){
	$('#checkAll').click(function(){
	var c = this.checked;
		$('input[type="checkbox"]').each(function(){
			$(this).prop('checked',c);
		});
	});
}); 