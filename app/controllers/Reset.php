<?php

class Reset extends BaseController
{
    private $userModel;

    function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    public function index()
    {
        session_start();

        $error = $_SESSION['error'] ?? null;
        unset($_SESSION['error']);

        $data = [
            'title' => 'Reset',
            'error' => $error,
        ];

        $this->view('reset/index', $data);
    }

    public function resetpassword()
    {
        session_start();

        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $password2 = $_POST['password2'] ?? null;

        if (empty($email) || empty($password) || empty($password2)) {
            $_SESSION['error'] = 'Vul alle velden in';
            header('Location: /reset');
            exit();
        }

        if ($password !== $password2) {
            $_SESSION['error'] = 'Wachtwoorden komen niet overeen';
            header('Location: /reset');
            exit();
        }

        $user = $this->userModel->findUserByEmail($email);

        if (!$user) {
            $_SESSION['error'] = 'Gebruiker niet gevonden';
            header('Location: /reset');
            exit();
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $this->userModel->updatePassword($email, $password);

        header('Location: /login/index');
    }
}