<?php

class About {
    public function index($nama = 'Ginanjar', $pekerjaan ='Gamer'){
        $this->view('about/index');
    }

    public function page(){
        $this->view('about/page');
    }
}