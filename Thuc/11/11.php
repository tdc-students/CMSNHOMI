<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/11.less', 'css/11.css');
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>module 11</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet"  />
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/11.css" rel="stylesheet" type="text/css" />  
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/> 

         <?php

        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');

        }
        $less = new lessc;
        $less->compileFile('less/11.less', 'css/11.css');
        ?>
    </head>
    <body>

         <?php  $dir_block.include'11-content.php'; ?>
         <!-- javascrip swiper --> 
         <script src="js/11.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/switchery.min.js"></script>
    </body>
  
     
</html>