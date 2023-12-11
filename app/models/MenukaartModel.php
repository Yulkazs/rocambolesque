<?php

class MenukaartModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMenuItems() {
        $query = "SELECT * FROM rocambolesque";
        $result = $this->db->query($query);
        $menuItems = [];

        while ($row = $result->fetch_assoc()) {
            $menuItems[] = $row;
        }

        return $menuItems;
    }
}

