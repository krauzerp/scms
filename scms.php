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
    <style>
    #penedit {
        outline:none;
        transition: all 0.25s ease-in-out;
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        border-radius:3px;
        -webkit-border-radius:3px;
        -moz-border-radius:3px;
        border:1px solid rgba(0,0,0, 0.2);
    }

    #penedit:focus {
        box-shadow: 0 0 5px rgba(0, 0, 255, 1);
        -webkit-box-shadow: 0 0 5px rgba(0, 0, 255, 1);
        -moz-box-shadow: 0 0 5px rgba(0, 0, 255, 1);
        border:1px solid rgba(0,0,255, 0.8);
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="col-sm-3">
            <h2>Pages</h2>
            <?php
            require('core/pages.php');
            ?>
        </div>
        <div class="col-sm-9">
            <h2>Content</h2>
            <div id="content"></div>
        </div>
    </div><!-- /.container-collapse -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pen.js"></script>
    <script src="js/scms.js"></script>
</body>
</html>
