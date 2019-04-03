<?php
    class admin extends controller{
        function index(){
            if(common::loggedIn()){
                url::redirect("admin/dashboard");
            }else{
                if(url::post("username") && url::post("password")){
                    $admins = new admins();
                    $user = $admins->auth(url::post("username"), url::post("password"));
                    if($user){
                        session::set("id", $user['id']);
                        session::set("username", $user['username']);
                        url::redirect("admin/dashboard");
                    }else{
                        $data = array('error' => "Username or Password is invalid!");
                 load::view("admin/login", $data);   
                }
                }else{
                 load::view("admin/login");   
                }
            }
        }
        function dashboard(){
           $data['title'] = "Dashboard";
            if(!common::loggedIn()){
                url::redirect("/MyFramework/");
            }else{
                echo '<a href ="logout">Logout</a>';
            }
        }
                function logout(){
            session::endSession();
            url::redirect("/MyFramework/");
        }
    }

