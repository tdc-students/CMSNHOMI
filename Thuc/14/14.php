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
    $less->compileFile('less/14.less', 'css/14.css');
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>module 14</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet"  />
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/14.css" rel="stylesheet" type="text/css" />    
        
        
         <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/14.less', 'css/14.css');
        ?>
    </head>
    <body>
         <?php  $dir_block.include'14-content.php'; ?>
         
           <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
         <!-- javascrip swiper -->
           <script>


            var swiper = new Swiper('.swiper-container', {
              spaceBetween: 30,
              loop: true,
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
            });
          </script>
    </body>
</html>