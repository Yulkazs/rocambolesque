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
        $sql = "SELECT klantId,
                       voornaam,
                       achternaam,
                       email,
                       telefoon_nummer
        FROM klant";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function getReserveringen()
    {
        $sql = "SELECT Id,
                       aantal_personen,
                       datum,
                       tijd,
                       tafel
        FROM reserveren";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function resKlant()
    {
        $sql = "SELECT res.Id,
                res.aantal_personen,
                res.datum,
                res.tijd,
                res.tafel,
                kl.klantId,
                kl.voornaam,
                kl.achternaam,
                kl.email,
                kl.telefoon_nummer
        FROM reserveren AS res
        INNER JOIN klant AS kl
        ON kl.klantId = res.Id";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function addReservering()
    {
        $sql = "INSERT INTO reserveren (aantal_personen,datum,tijd,tafel)
        VALUES (:aantal_personen,:datum,:tijd,:tafel)";
        $this->db->query($sql);
        $this->db->bind(':aantal_personen', $_POST['aantal_personen']);
        $this->db->bind(':datum', $_POST['datum']);
        $this->db->bind(':tijd', $_POST['tijd']);
        $this->db->bind(':tafel', $_POST['tafel']);

        return $this->db->resultSet();
    }
    public function updatereservaties()
    {
        $sql = "UPDATE reserveren
        SET aantal_personen = :aantal_personen,
        datum = :datum,
        tijd = :tijd
        tafel = :tafel
        WHERE Id = Id";
        $this->db->query($sql);
        $this->db->bind(':aantal_personen', $_POST['aantal_personen']);
        $this->db->bind(':datum', $_POST['datum']);
        $this->db->bind(':tijd', $_POST['tijd']);
        $this->db->bind(':tafel', $_POST['tafel']);
        return $this->db->resultSet();
    }
}
