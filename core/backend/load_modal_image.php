<?php
if(file_exists('../../data/content/'.$_POST['file']))
{
  $xml = simplexml_load_file('../../data/content/'.$_POST['file']);
}
else
{
  echo "<h2>New Content Block</h2><p>...</p>";
}
?>

<form id="upload" method="post" action="core/backend/upload.php" enctype="multipart/form-data">
    <div id="drop">
    	<img id="image" src="data/media/<?php echo $xml['src'] ?>" style="width:100%">

        <a style="display:none">Browse</a>
        <input style="display:none" type="file" name="upl" multiple />
    </div>

    <ul style="display:none">
        <!-- The file uploads will be shown here -->
    </ul>
<div class="progress">
  <div id="upload-progress" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
    0%
  </div>
</div>


<div class="form-group">
    <label for="caption">Caption</label>
    <input type="text" class="form-control" id="pageTitle" placeholder="Enter Page Title" value="<?php echo $xml->caption ?>">
</div>
</form>
