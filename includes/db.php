<?php

class Db
{
    
    public static function getConnection()
    {
      try{
        $paramsPath = ROOT . '/config/db_config.php';
        $params = include($paramsPath);
        

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->exec("set names utf8");
        return $db;
      }
      catch(Exception $e){
        return false;
      }
        
    }

}