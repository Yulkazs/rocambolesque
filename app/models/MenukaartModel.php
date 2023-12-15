<?php

class MenukaartModel
 {
//     private $db;

//     public function __construct()
//     {
//         $this->db = new Database();
//     };


    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addDish($name, $price)
    {
        $query = "INSERT INTO Gerechten (gerecht_name, gerecht_prijs) VALUES (:name, :price)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        return $stmt->execute();
    }
}

