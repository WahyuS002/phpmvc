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

    public function tambahAnimeBaru($data){

        $query = "INSERT INTO myanimelist 
                    VALUES
                    ('', :title, :score, :description, :icon, :category, :aired, :episodes)";

        $this->db->query($query);
        $this->db->bind('title', $data["title"]);
        $this->db->bind('score', $data["score"]);
        $this->db->bind('description', $data["description"]);
        $this->db->bind('icon', $data["icon"]);
        $this->db->bind('category', $data["category"]);
        $this->db->bind('aired', $data["aired"]);
        $this->db->bind('episodes', $data["episodes"]);

        $this->db->execute();

        return $this->db->row_affect();

    }

}