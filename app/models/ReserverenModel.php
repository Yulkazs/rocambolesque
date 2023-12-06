<?php

class ReserverenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getReserveringen()
    {
        $sql = "SELECT *
        FROM klant";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
}
