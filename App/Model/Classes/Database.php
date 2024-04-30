<?php

abstract class Database{

    protected $host = "localhost";
    protected $user = "root";
    protected $db = "projetointegrador";
    protected $password = "";
    protected $port = 3306;

    //The part of Connect
    protected object $conn;

    function connect(): PDO{

        try{

            $dns = "mysql:host={$this->host};
            port={$this->port};
            dbname={$this->db}";

            $this->conn = new PDO($dns, $this->user, $this->password);

            return $this->conn;

        }catch(PDOException $e){

            die("Morri". $e->getMessage());

        }
    }

}