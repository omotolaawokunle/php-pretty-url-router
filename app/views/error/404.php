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
        <div class="container">
            <div class="row">
                <div class="col m6 col offset-m3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-title"><?=$title;?></div>
                            The page you are trying to access
                        does not exist!!
                        </div>
                        <div class="card-action"><hr>
                            <code>Check your Controller/Method name, one of them does not exist.</code></div>
                    </div>
                </div>
            </div>
        </div>

