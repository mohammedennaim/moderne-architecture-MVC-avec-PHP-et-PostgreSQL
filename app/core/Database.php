<?php

namespace App\Core;

use Dotenv\Dotenv;
use PDO;
use PDOException;


class Database
{
    private $pdo;

    public function connect()
    {
        try {
            if ($this->pdo) {
                return $this->pdo;
            } else {
                $dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
                $dotenv->load();

                $dsn = "pgsql:host=postgres-server;port=5432;dbname=my_database";
                return $this->pdo = new PDO($dsn, "root", "123456789");
            }

        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
?>