<?php
class errors {
    
   static function show($type){
        $data = array('title' => $type.' Error');
        load::view('error/'.$type, $data);
    }
}
