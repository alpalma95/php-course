<?php

class Database 
{
    private $pdo;

    public function __construct( ) {
        $this->pdo = new PDO('sqlite:./db/db.db', '', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = []) {
        $statement = $this->pdo->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}
