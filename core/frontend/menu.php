<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SCMC 0.0</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php
        $xml = simplexml_load_file('data/site.xml');

        foreach($xml->page as $page) {
          $xml_page = simplexml_load_file('data/pages/'.$page['name']);
          if($scms_page == $page['name'])
              echo '<li class="active"><a href="?page='.$page['name'].'">'.$xml_page['name'].'</a></li>';
          else
              echo '<li><a href="?page='.$page['name'].'">'.$xml_page['name'].'</a></li>';
        }
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>