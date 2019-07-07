<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SCMC - 0.0</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.slate.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <?php 
    if(isset($_GET['page']))
      $scms_page = $_GET['page'];
    else {
      $xml = simplexml_load_file('data/site.xml');

      $scms_page = $xml->page[0]['name'];
    }
  ?>
  <div class="container">
    <?php include('core/frontend/menu.php'); ?>
    <div class="row">
      <div class="col-md-12">
      <?php include('core/frontend/content.php'); ?>
      </div>
    </div>
  </div><!-- /.container-collapse -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>