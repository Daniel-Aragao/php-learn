<?php 

class Connection{
    public static function make(){
        try{
            $pdo = new PDO('mysql:127.0.0.1;dbname=mytodo;', 'root', '');
            
        }catch(PDOException $e){
            die('Could not connect to database: ' . $e->getMessage());
        }
    
        return $pdo;   
    }
}