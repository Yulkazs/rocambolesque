<?php

class Database
{
    private $dbHandler;
    private $statement;

    public function __construct()
    {
        $conn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=UTF8';
        $this->dbHandler = new PDO($conn, DB_USER, DB_PASS);
    }



    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

<<<<<<< HEAD
    public function bind($parameter, $value)
    {
        $this->statement->bindValue($parameter, $value);
    }
=======
     public function bind($parameter, $value)
    {
        $this->statement->bindValue($parameter, $value);
    }

>>>>>>> b0048831ff62fede3ef402dad371975ba534200d

    public function execute()
    {
        $this->statement->execute();
    }

    public function result()
    {
        $this->statement->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    public function resultSet()
    {
        $this->statement->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}
