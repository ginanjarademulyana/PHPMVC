<?php

class App {
    public function __construct(){
        $url = $this->paraseURL();
        var_dump($url);
    }

    public function paraseURL(){
        if ( isset($_GET['url']) ){
            $url = $_GET['url'];
            return $url;
        }
    }

}