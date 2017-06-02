<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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


    input:focus {
    box-shadow: 0 0 5px rgba(0, 0, 255, 1);
    -webkit-box-shadow: 0 0 5px rgba(0, 0, 255, 1);
    -moz-box-shadow: 0 0 5px rgba(0, 0, 255, 1);
}

      .active {
        outline:none;
        transition: all 0.25s ease-in-out;
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
}


        border: 1px solid lime;
      }
    </style>
  </head>
  <body>
	  <div class="container">
      <div class="col-sm-9">
        <h2>Content</h2>
        <div id="content">
        a<br>ab<br>asd
        </div>
      </div>
	  </div><!-- /.container-collapse -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pen.js"></script>
    <script src="js/scms.js"></script>
    <script>
    $(function(){
      $('#content').bind('mouseenter mouseleave', function(){
        $(this).toggleClass('active');
      });
    });
    </script>
  </body>
</html>
