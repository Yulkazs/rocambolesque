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
=======
   


>>>>>>> c08199fbca4e3ac4c1b28ff8220903ddf993a145
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
