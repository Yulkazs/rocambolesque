<?php

class ReserverenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getklantGegevens()
    {
        $sql = "SELECT *
        FROM klant";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function getReserveringen()
    {
        $sql = "SELECT *
        FROM reserveren";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function addReservering($Id)
    {
        $sql = "INSERT INTO reserveren (Id,aantal_personen,datum,tijd,tafel)
        VALUES (:id,:aantal_personen,:datum,:tijd,:tafel)";
        $this->db->query($sql);
        $this->db->bind(':id', $Id);
        $this->db->bind(':aantal_personen', $_POST['aantal_personen']);
        $this->db->bind(':datum', $_POST['datum']);
        $this->db->bind(':tijd', $_POST['tijd']);
        $this->db->bind(':tafel', $_POST['tafel']);

        return $this->db->resultSet();
    }
}
