<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author User
 */
class DB {
   /**
     * @var object PDO
     */
    private static $instance;

    /**
     * DB constructor.
     */
    private function __construct(){}

    /**
     * DB clone
     */
    private function __clone(){}

    /**
     * DB wakeup
     */
    private function __wakeup(){}
    
    /**
     * Connect to the database on the specified parameters
     *
     * @return PDO
     */
    public static function connect()
    {
        if (self::$instance === null) {
            $paramsPath = 'db_params.php';
            $params = include($paramsPath);
            $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
            try{
                self::$instance = new PDO($dsn,$params['user'],$params['password']);
                self::$instance->exec("set names utf8");
                return self::$instance;
            }catch (\PDOException $e){
                echo "Error connect to database" . $e->getMessage();
            }
        }
        return self::$instance;
    }
}
