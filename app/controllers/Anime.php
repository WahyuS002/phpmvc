<?php

class Anime extends Controller{

    public function index(){

        $data["judul"] = "Anime";
        $data["anime"] = $this->model('Anime_model')->getAnime();

        $this->view('templates/header', $data);
        $this->view('anime/index', $data);
        $this->view('templates/footer');

    }

    public function detail($id){

        $data["judul"] = "Detail Anime";
        $data["anime"] = $this->model('Anime_model')->getAnimeById($id);

        $this->view('templates/header', $data);
        $this->view('anime/detail', $data);
        $this->view('templates/footer');

    }

    
    public function tambahAnime(){
        
        if( $this->model('Anime_model')->tambahAnimeBaru($_POST) > 0 ){
            header('Location: ' . BASEURL . '/anime');
            exit;
        }

    }

}