<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/pen.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
  .content:hover{outline: grey dotted 1px;}
  .content:focus{outline: lightblue auto 5px;}
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2>Pages</h2>
        <table class="table">
        <?php
        $dir ='data/pages';
        if (is_dir($dir)) {
          if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
              if(!is_dir($file))
                echo '<tr><td><a href="#" xml-data="'.$file.'">'.$file.'</a></td></tr>';
            }
            closedir($dh);
          }
        }
        ?>
        </table>
      </div>
      <div class="col-md-9" id="page">
      </div>
    </div>
  </div><!-- /.container-collapse -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script>
  $(function(){
    $('a').bind('click', function(){
      url = 'core/content.php';
      name = $(this).attr('xml-data');
      data = {file: name};
      $('#page').load(url,data, function(){
        $('.content').each(function(){
          console.log('LoadFile: '+$(this).attr('xml-data'));
          url = 'core/load.php';
          name = $(this).attr('xml-data');
          data = {file: name};
          $(this).load(url,data);
        });

        $('.content').bind('focusout',function(){
          // console.log($(this).html());

          url = 'core/store.php';
          name = $(this).attr('xml-data');
          data = $(this).html();

          data = {file: name, data: data};

          // $(this).html();

          $.post(url, data,
            function(data, textStatus, jqXHR)
            {
              // console.log('ajax:'+data);
            });
        });
      });
    });
  });
  </script>

  <script>
  $(function(){

    });
  </script>


</body>
</html>
