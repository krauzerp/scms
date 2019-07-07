var pen = new Array();;
var cnt = 0;

$(function(){
  $('a[xml-data]').bind('click', function(){
    while(cnt > 0)
    {
      pen[cnt].destroy();
      // console.log('Destroy Editor: '+cnt);
      cnt--;
    }
    url = 'core/backend/load_page.php';
    name = $(this).attr('xml-data');
    data = {file: name};
    $('#page_content').load(url,data, function(){
      //
      // reload content from database
      //
      $('.media').bind('click', function(){
        url = 'core/backend/load_modal_image.php';
        name = $(this).attr('xml-data');
        data = {file: name};
        $('#currentImage').load(url,data, function(){


    var ul = $('#upload ul');

    $('#drop a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {
            var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul);

            // Initialize the knob plugin
            // tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){

                if(tpl.hasClass('working')){
                    jqXHR.abort();
                }

                tpl.fadeOut(function(){
                    tpl.remove();
                });

            });

            // Automatically upload the file once it is added to the queue
            var jqXHR = data.submit();
        },

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            // data.context.find('input').val(progress).change();

console.log(progress);

            $('#upload-progress').attr('aria-valuenow', progress);
            $('#upload-progress').attr('style', 'width:' + progress + '%;');
            $('#upload-progress').html(progress + '%');

            if(progress == 100){
              console.log(data.files[0].name);
              $('#image').attr('src', 'uploads/' + data.files[0].name);
              data.context.removeClass('working');
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });


    // Prevent the default action when a file is dropped on the window
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
    });

    // Helper function that formats the file sizes
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }




        });

        $('#modalImage').modal('show');
      });
      //
      // Content
      //
      $('.content').each(function(){
        url = 'core/backend/load_content.php';
        name = $(this).attr('xml-data');
        data = {file: name};
        $(this).load(url,data, function(){
          var options = {
            editor: $(this)[0],
            debug: true
          }
          cnt++;
          pen[cnt] = new Pen(options);
          //console.log('Create Editor: '+cnt);
        });
      });
      //
      // Store changes when focus lost
      //
      $('.content').bind('focusout', store_content);
    });

    url = 'core/backend/load_meta.php';
    name = $(this).attr('xml-data');
    data = {file: name};
    $('#page_meta').load(url,data, function(){

    url ='core/backend/show_publish.php';
    $('#page_publish').load(url, data, page_publish);
    //
    // script for meta tag
    //
    });
  });
});

load_content = function() {
  console.log('load_content');
  url ='core/backend/load_content.php';
  name = $(this).attr('xml-data');
  data = {file: name};
  $(this).load(url, data);
}

store_content = function(){
    url = 'core/backend/store_content.php';
    name = $(this).attr('xml-data');
    html = $(this).html();
    data = {file: name, data: html};
    //$(this).load(url, data, load_content);
    $.post(url, data);

    url ='core/backend/show_publish.php';
    $('#page_publish').load(url, data, page_publish);
}

page_publish = function(){
  $('a[publish-data]').bind('click', function(){
    url = 'core/backend/publish_content.php';
    name = $(this).attr('publish-data');
    data = {file: name};
    $('#page_publish').load(url, data, page_publish);
  });
}
