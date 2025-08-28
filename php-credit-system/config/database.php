<?php
// Simple PDO wrapper for SQLite connection
class Database {
    private static ?PDO $instance = null;

    public static function getInstance(): PDO {
        if (self::$instance === null) {
            $dbPath = __DIR__ . '/../data/app.sqlite';
            if (!file_exists(dirname($dbPath))) {
                mkdir(dirname($dbPath), 0777, true);
            }
            self::$instance = new PDO('sqlite:' . $dbPath);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
