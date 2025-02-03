<?php
namespace App\Core;

use Dotenv\Dotenv;
use PDO;
use PDOException;

class Database{
    public static $conn;

    public static function connection()
    {
        $dotenv = Dotenv::createImmutable(__DIR__."/../../");
        $dotenv->load();
        if (!self::$conn) {
            try {
                self::$conn = new PDO("pgsql:host=".$_ENV["LOCALHOST"].";port=".$_ENV["PORT"].";dbname=".$_ENV["DATABASE"],$_ENV["USER"],$_ENV["USER_PASSWORD"]);
                return self::$conn;
            } catch (PDOException $e) {
                die("connection faild".$e-->getMessage());
            }
        }
        return self::$conn;
    }
}

?>