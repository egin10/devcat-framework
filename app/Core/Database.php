<?php

class Database
{
    private static $_instance = null;
    private $mysqli;

    public function __construct(){
        require_once '../app/conf.php';
        $this->mysqli = new mysqli($host, $user, $pass, $db) or die ('Connection to database failed!');
    }
    
    public function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new Database();
        }
        return self::$_instance;
    }
    
    //Query Builder
    public function all($table){
        $reply  = [];
        $query  = "SELECT * FROM $table";
        $result = $this->mysqli->query($query);

        while($row = $result->fetch_assoc()){
            $reply[] = $row;
        }

        return $reply;
    }
}