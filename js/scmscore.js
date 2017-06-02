$(function(){
  $('a[xml-data]').bind('click', function(){
    url = 'core/content.php';
    name = $(this).attr('xml-data');
    data = {file: name};
    $('#page_content').load(url,data, function(){
      //
      // reload content from database
      //
      $('.content').each(function(){
        url = 'core/load.php';
        name = $(this).attr('xml-data');
        data = {file: name};
        $(this).load(url,data);
      });
      //
      // Store changes when focus lost
      //
      $('.content').bind('focusout',function(){
        // console.log($(this).html());
        url = 'core/store.php';
        name = $(this).attr('xml-data');
        html = $(this).html();
        data = {file: name, data: html};
        $.post(url, data);
      });
    });
  });
});