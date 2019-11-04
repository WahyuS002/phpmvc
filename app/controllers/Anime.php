<?php

class Anime extends Controller{

    public function index(){

        $data["judul"] = "Anime";
        $data["anime"] = $this->model('Anime_model')->getAnime();

        $this->view('templates/header', $data);
        $this->view('anime/index', $data);
        $this->view('templates/footer');

    }

}