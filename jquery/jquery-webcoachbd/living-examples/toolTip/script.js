$(document).ready(function(){
  $('.tTip').hover(function(event){
    // mouse hover
    var spanText = $(this).next().html();
      
    $('<p class="toolTip"></p>')
      .text(spanText)
      .appendTo('body')
      .css('top', (event.pageY - 40) + 'px')
      .css('left', (event.pageX + 20) + 'px')
      .fadeIn('slow');
  }, function() {
    $('.toolTip').remove();
  }).mousemove(function(event){
    // when mouse move
    $('.toolTip')
      .css('top', (event.pageY - 40) + 'px')
      .css('left', (event.pageX + 20) + 'px');
  });
});
