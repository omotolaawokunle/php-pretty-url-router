<?php
    class admins extends model{
        function auth($username, $password){
            $this->model->query("SELECT * from user WHERE username = ? AND password = ?", array($username, $password));
            if($row = $this->model->fetch_assoc()){
                return $row;
            }else{
                return false;
            }
        }
    }

