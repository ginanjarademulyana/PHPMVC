<?php

class About {
    public function index($nama = 'Ginanjar', $pekerjaan='Gamer'){
        echo "Halo, nama saya $nama dan saya seorang $pekerjaan";
    }

    public function page(){
        echo 'About/page';
    }
}