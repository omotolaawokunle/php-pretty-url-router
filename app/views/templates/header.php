<?php 
$css = "/".$GLOBALS['config']['appName'].$GLOBALS['config']['path']['assets']."css/";
$js = "/".$GLOBALS['config']['appName'].$GLOBALS['config']['path']['assets']."js/";
$img = "/".$GLOBALS['config']['appName'].$GLOBALS['config']['path']['assets']."img/";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$title?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo $css;?>materialize/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $css;?>font-awesome-4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="<?php echo $js;?>jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <nav class="nav-wrapper black">
            <a class="nav-content">Home</a>
            <a class="nav-content">About</a>
        </nav>
        <div class="container">
          
            
        
