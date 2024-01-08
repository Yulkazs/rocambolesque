<?php

class MenukaartModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = new Database();
    }

    public function addDish($name, $price, $season, $cuisine)
    {
        $query = "INSERT INTO Gerechten (gerecht_name, gerecht_prijs, season, cuisine) VALUES (:name, :price, :season, :cuisine)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':season', $season);
        $stmt->bindParam(':cuisine', $cuisine);
        return $stmt->execute();
    }
}

?>