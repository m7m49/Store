<?php

namespace Core;
use PDO;

class Database {
    public $connection;
    public $statement;

    function __construct($config, $username = 'root', $pass = '')
    {
        $dsn = "mysql:". http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $pass, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    
    public function query($query, $params = []) {

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    } 

    public function find() {
        return $this->statement->fetch();
    }

    public function findOrFail() {
        $res = $this->find();
        if (!$res) abort();
        return $res;
    }

    public function get() {
        return $this->statement->fetchAll();
    }
}