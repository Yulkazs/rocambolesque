<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    function findUserByEmail($email)
    {
        $this->db->query('select * from users where email = :email');
        $this->db->bind(':email', $email);
        return $this->db->result();
    }

    function register($email, $name, $number, $password, $authLevel = 1)
    {
        $this->db->query('insert into users (email, name, number, password, authLevel) values (:email, :name, :number, :password, :authLevel)');
        $this->db->bind(':email', $email);
        $this->db->bind(':name', $name);
        $this->db->bind(':number', $number);
        $this->db->bind(':password', $password);
        $this->db->bind(':authLevel', $authLevel);
        $this->db->execute();
    }

    function login($email, $password)
    {
        $this->db->query('select * from users where email = :email and password = :password');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        return $this->db->result();
    }

    public function updatePassword($email, $password)
    {
        $this->db->query('update users set password = :password where email = :email');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->execute();

    }

    public function getUserName() {
        // Voer hier de query uit om de gebruikersnaam op te halen

        $this->db->query('select name from users where id = :id');
        $this->db->bind(':id', $_SESSION['user_id']);
        return $this->db->result();
        }
        

    
     
   
}
