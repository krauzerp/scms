$(function(){
  $('.page').bind('click', function(){
    $( "#content" ).load( "core/page.php?id="+ $(this).attr('id'));
  });
});
