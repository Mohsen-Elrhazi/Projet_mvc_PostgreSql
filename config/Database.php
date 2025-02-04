<?php 
namespace Config;

class Database{
    private static $host="localhost";
    private static $port="5432";
    private static  $db_name="projet_mvc_db";
    private static $username="postgres";
    private static $password="";
    private static $conn;

    public static function getConnection(){
        if(self::$conn){
            return self::$conn;
            
        }else{
            self::$conn= new \PDO("pgsql:host=".self::$host.";port=".self::$port.";dbname=".self::$db_name,self::$username,self::$password);
            return self::$conn;
        }
    }
}

Database::getConnection();
?>