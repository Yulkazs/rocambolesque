<?php

class Login extends BaseController
{
    private $userModel;

    function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    public function index()
    {
        session_start();

        // Haal de foutmelding op uit de sessie als die er is en verwijder het daarna
        $error = $_SESSION['error'] ?? null;
        unset($_SESSION['error']);

        $data = [
            'title' => 'Login',
            'error' => $error,
        ];

        // Zorg ervoor dat je foutmeldingen toont in je 'login/index' view
        $this->view('login/index', $data);
    }

    public function login()
    {
        session_start();

        $email = $_POST['email'] ?? "";
        $password = $_POST['password'] ?? "";

        // Valideer of beide velden zijn ingevuld
        if (empty($email) || empty($password)) {
            $_SESSION['error'] = "Vul zowel e-mail als wachtwoord in.";
            header("Location: /Login/index");
            exit; // Zorg ervoor dat het script stopt na de redirect
        }

        $user = $this->userModel->findUserByEmail($email);

        if ($user) {
            // Haal het gehashte wachtwoord op uit de database
            $hashedPassword = $user->password;

            if (password_verify($password, $hashedPassword)) {
                $_SESSION['user_id'] = $user->id; // Sla de gebruikerssessie op
                header("Location: /Dashboard/index");
                exit; // Zorg ervoor dat het script stopt na de redirect
            } else {
                $_SESSION['error'] = "Onjuist wachtwoord";
                header("Location: /Login/index");
                exit; 
            }
        } else {
            $_SESSION['error'] = "Gebruiker niet gevonden, wilt u zich registreren?";
            header("Location: /Login/index");
            exit; 
        }
    }
}
