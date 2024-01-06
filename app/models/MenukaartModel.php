<?php

class MenukaartModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMenu()
    {
        $query = "SELECT Menu, Categories, Menu_Categories, Gerechten, Categorieen_Gerechten,  
        FROM rocambolesque
        INNER JOIN Menu ON Menu.Menu_ID = Menu_Categories.Menu_ID
        INNER JOIN Categories ON Categories.Categories_ID = Menu_Categories.Categories_ID
        INNER JOIN Gerechten ON Gerechten.Gerechten_ID = Categorieen_Gerechten.Gerechten_ID
        INNER JOIN Categorieen_Gerechten ON Categorieen_Gerechten.Categorieen_Gerechten_ID = Menu_Categories.Categorieen_Gerechten_ID
        ORDER BY Menu.Menu_ID ASC";

        try {

            $this->db->query($query);
            return $this->db->resultSet();

        } catch (PDOException $e) {

            echo "Fout bij ophalen van gegevens!";
            exit;

        }
    }
}

?>