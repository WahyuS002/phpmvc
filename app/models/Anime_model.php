<?php

class Anime_model{
    private $dbh; //database handler (penampung)
    private $stmt; //statement misal SELECT * bla bla bla

    public function __construct(){

        $dsn = "mysql:host=localhost;dbname=phpdasar";

        try{    
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }

    public function getAnime(){

        $this->stmt = $this->dbh->prepare("SELECT * FROM myanimelist");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}