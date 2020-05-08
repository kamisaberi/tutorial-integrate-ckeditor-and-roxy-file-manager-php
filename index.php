<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php



//require_once 'fileman/system.inc.php';
//require_once 'fileman/php/functions.inc.php';
//if(!isset($_SESSION)){
//    session_start();
//}

//$_SESSION['UserType'] = 'Admin';

//$_SESSION[SESSION_PATH_KEY]="";

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

        <script src="Scripts/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script>
            var roxyFileman = 'fileman/index.html?integration=ckeditor';
            $(function () {
                CKEDITOR.replace('content', {filebrowserBrowseUrl: roxyFileman,
                    filebrowserImageBrowseUrl: roxyFileman + '&type=image',
                    removeDialogTabs: 'link:upload;image:upload'});
            });
        </script>
    </head>
    <body>
        <textarea id="content" name="content" rows="10" cols="80"></textarea>
    </body>
</html>
