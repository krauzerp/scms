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
