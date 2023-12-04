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
        FROM reserveren";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
}
