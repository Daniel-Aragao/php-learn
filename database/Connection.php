<?php 

class Connection{
    public static function make($config){
        try{
            $pdo = new PDO('mysql:127.0.0.1;dbname=mytodo;', 'root', '');

            return new PDO(
                $config['connnection'] . ';dbname' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
            
        }catch(PDOException $e){
            die('Could not connect to database: ' . $e->getMessage());
        }
    
        return $pdo;   
    }
}