<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $GLOBALS['config'] = array(
        "appName" => "MyFramework",
        "domain" => "localhost",
        "version" => "1.0",
        "handlebars_enabled" => "true",
        "path" => array(
            "app" => "app/",
            "core" => "core/",
            "assets" => "/assets/",
            "session" => "app/session",
            "basePath" => "C:/wamp64/www/MyFramework",
            "index" => "index.php"
        ),
        "default" => array(
            "controller" => "main",
            "method" => "index"
        ),
        "routes" => array(),
        "database" => array(
            "host" => "localhost",
            "username" => "root",
            "password" => "",
            "name" => "test"
        ),
    );
    $GLOBALS['instances'] = array();
    require_once $GLOBALS['config']['path']['core']."autoload.php";
    new router();