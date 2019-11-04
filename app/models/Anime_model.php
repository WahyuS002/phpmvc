<?php

class Anime_model{
    private $db;

    public function __construct(){

        $this->db = new Database();

    }

    public function getAnime(){

        $this->db->query('SELECT * FROM myanimelist');
        return $this->db->resultSet();

    }

    public function getAnimeById($id){

        $this->db->query('SELECT * FROM myanimelist WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->singleResult();

    }

}