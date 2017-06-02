<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SCMC - 0.0</title>
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
      <?php include('core/backend/load_sitemap.php'); ?>
      </div>
      <div class="col-md-9">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#page_content" data-toggle="tab">Content</a></li>
          <li><a href="#page_meta" data-toggle="tab">Meta</a></li>
          <li><a href="#page_publish" data-toggle="tab">Publish</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="page_content">...</div>
          <div class="tab-pane" id="page_meta">...</div>
          <div class="tab-pane" id="page_publish">...</div>
        </div>
      </div>
    </div>
    <div id="DBG"></div>
    <!-- Modal -->
<div id="modalImage" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Image</h4>
      </div>
      <div class="modal-body" id="currentImage">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div><!-- /.container-collapse -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  
  <!-- jQuery File Upload Dependencies -->
  <script src="js/jquery.ui.widget.js"></script>
  <script src="js/jquery.iframe-transport.js"></script>
  <script src="js/jquery.fileupload.js"></script>  

  <script src="js/bootstrap.min.js"></script>
  <script src="js/pen.js"></script>
  <script src="js/scmscore.js"></script>
</body>
</html>
