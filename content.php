<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <title>Index</title>
        <script src="../js/jquery-1.10.2.js"></script>
        <script>
            $(function() {
                $('#id').bind('change', function() {
                    value = $(this).val();
                    $('#mask').load('ajax.php?id=' + value);
                });
            });
        </script>
        <style>
            input, textarea {
                width: 500px;
            }
            textarea {
                height: 200px;
            }
            .content {
                width: 100%;
                text-align: center;
            }

        </style>
    </head>
    <body>
        <div class="content">
            <form method="POST" action="content.php">
                <input type="hidden" name="save" value="true">
                <input id="id" type="text" name="id">
                <br/>
                <div id="mask">
                    <input type="text" name="header">
                    <br/>
                    <input type="text" name="abstract">
                    <br/>
                    <textarea name="copy"></textarea>
                </div>
                <br/>
                <input type="submit" name="Submit">
            </form>
        </div>

    </body>
</html>
<?php
if (isset($_POST['save'])) {
    /*
     *
     * establish DB connection
     *
     */
    $mysql_host = "localhost";
    $mysql_user = "root";
    $mysql_pw = "root";
    $mysql_db = "smart_cms";

    $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pw, $mysql_db);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $lng = 'deu';

    $hash_h = add_text($_POST['header'], $lng, $mysqli);
    $hash_a = add_text($_POST['abstract'], $lng, $mysqli);
    $hash_c = add_text($_POST['copy'], $lng, $mysqli);

    $id = $_POST['id'];

    $sql = "REPLACE INTO content (id, header, abstract, copy) VALUES ('" . $id . "', '" . $hash_h . "', '" . $hash_a . "', '" . $hash_c . "')";

    if (!$mysqli->query($sql)) {
        echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    echo 'post';
}

function add_text($text, $lng, $mysqli) {
    $hash = hash('sha256', $text);

    $sql = "REPLACE INTO language (hash, lng, text) VALUES ('" . $hash . "', '" . $lng . "', '" . $text . "')";

    if (!$mysqli->query($sql)) {
        echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    return $hash;
}
?>