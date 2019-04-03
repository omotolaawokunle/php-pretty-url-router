<?php
    class common{
        static function loggedIn(){
            $check = array("id", "username");
            return (session::check($check)) ? TRUE : FALSE;
        }
    }