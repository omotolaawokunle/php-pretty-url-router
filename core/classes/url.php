<?php
    class url{
        static function part($number){
            $uri = explode("?", $_SERVER["REQUEST_URI"]);
            $parts = explode("/", $uri[0]);
            if($parts[1] == $GLOBALS['config']['path']['index']){
            $number++;
        }
            return (isset($parts[$number])) ? $parts[$number] : FALSE;
        }
        static function post($key){
            return (isset($_POST[$key])) ? $_POST[$key] : false;
        }
        static function get($key){
            return (isset($_GET[$key])) ? urldecode($_GET[$key]) : FALSE;
        }
        static function request($key){
            if(url::get($key)){
                return url::get($key);
            }else if(url::post($key)){
                return url::post($key);
            }else{
                return false;
            }
        }
        static function build($url, $params = array()){
            if(strpos($url, "//") == FALSE){
                $prefix = "//".$GLOBALS['config']['domain'];
            }else{
                $prefix = "";
            }
            $upend = "";
            foreach($params as $key => $param){
                $upend.= ($upend == "") ? "?" : "&";
                $upend.= urlencode($key)."=".urlencode($param);
            }
            return $prefix.$upend;
        }
        static function simple($url){
             if(strpos($url, "//") == FALSE){
                $prefix = "//".$GLOBALS['config']['domain'];
            }else{
                $prefix = "";
            }
            return $prefix;
        }
        static function redirect($to, $exit = true){
            if(headers_sent()){
                echo "<script>window.location =".$to."</script>";
            }else{
                header("Location:". $to);
            }
            if($exit){
                die();
            }
        }
    }

