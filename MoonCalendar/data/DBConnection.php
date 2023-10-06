<?php
class DBConnect {
    private static $dbName = 'mooncalendardb';
    private static $dbHost = 'localhost';
    private static $dbLogin = 'root';
    private static $dbPassword = '';

    private static function getDSN(){
        return 'mysql:dbname=' . self::$dbName.';host='.self::$dbHost;
    }

    public static function getConnection(){
        return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword, [
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
    }
}



