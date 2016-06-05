$(document).ready(function(){
	$('#content_pane a').click(function(e){
		var url = $(this).attr('href')+' '+'#maincolumn';
		e.preventDefault();
		$('#container').html('<img class="loader" src="spinner.gif" alt=""/>Loading...').load(url,function(response,status,xhr){
			if(status == 'error'){
				$(this).html(xhr.status+' '+xhr.statusText);
			}
		});
	});
	
});
