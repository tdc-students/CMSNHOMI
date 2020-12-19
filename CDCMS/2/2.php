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
    $less->compileFile('less/2.less', 'css/2.css');
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>module 2</title>
        <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />

        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/all_icons.min.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
        <link href="css/2.css" rel="stylesheet" type="text/css" />    
         <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2.less', 'css/2.css');
        ?>
    </head>
    <body>
         <?php  $dir_block.include'2-content.php'; ?>
          <script src="js/jquery-3.5.1.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
         <!-- javascrip swiper -->
    </body>
</html>