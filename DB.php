<?php

class DB {
    private static ?PDO $pdo = null;
    private function __construct(){}
    public static function getDB()
    {
        if (self::$pdo == null) {
            self::$pdo = new PDO('mysql:host=localhost;dbname=crm', 'root');
        }
        return self::$pdo;
    }
}