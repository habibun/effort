//tab slider jquery code
$(document).ready(function(){//Default view
    $('#current').show();
	$('#tab_bar li:nth-child(1) a').addClass('running');
    $('#favorite,#all_time').hide();
    $('#tab_bar li:nth-child(1) a').click(function(event){//Fire when Current hit clicks
        event.preventDefault();
		$(this).addClass('running');
		$('#tab_bar li:nth-child(2) a,#tab_bar li:nth-child(3) a').removeClass('running');
        $('#current').fadeIn(500);
        $('#favorite,#all_time').hide();
    });
    $('#tab_bar li:nth-child(2) a').click(function(event){//Fire when All time clicks
        event.preventDefault();
		$(this).addClass('running');
		$('#tab_bar li:nth-child(1) a,#tab_bar li:nth-child(3) a').removeClass('running');
        $('#favorite').fadeIn(500);
        $('#current,#all_time').hide();
    });
    $('#tab_bar li:nth-child(3) a').click(function(event){//Fire when Favorite clicks
        event.preventDefault();
		$(this).addClass('running');
		$('#tab_bar li:nth-child(1) a,#tab_bar li:nth-child(2) a').removeClass('running');
        $('#all_time').fadeIn(500);
        $('#favorite,#current').hide();
    });
});