<?php

class Database {
    private static $dbName = "login";
    private static $dbHost = "localhost";
    private static $dbUsername = "root";
    private static $dbPassword = "";

    private static $connect = null;

    public function __construct() {
        die("Init function is not allowed");
    }

    public static function connect() {
        if(null == self::$connect) {
            try {
                self::$connect = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbPassword);

                // set the pdo exception mode
                self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }

            return self::$connect;
        }
    }

    public static function disconnect() {
        self::$connect = null;
    }
}