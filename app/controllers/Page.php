<?php

class Page extends Controller{

    public function index(){

        $data["judul"] = 'Page';

        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');

    }

}