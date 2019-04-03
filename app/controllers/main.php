<?php
class main extends controller implements controllerInterface{
    public function index(){
        $data['title'] = "Homepage";
        load::view('templates/header', $data);
       load::view('main/index');
       load::view('templates/footer');
    }
}