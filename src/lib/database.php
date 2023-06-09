<?php

namespace Application\Lib\Database;

class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'ecommerce', 'ecommerce123');
        }

        return $this->database;
    }
}
