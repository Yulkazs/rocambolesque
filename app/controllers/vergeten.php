<?php

class Vergeten extends BaseController
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
            'title' => 'Vergeten',
            'error' => $error,
        ];

        $this->view('vergeten/index', $data);
    }

    public function emailControlle()

    {
        session_start();

        $email = $_POST['email'] ?? null;

        if (empty($email)) {
            $_SESSION['error'] = 'Vul alle velden in';
            header('Location: /vergeten');
            exit();
        }

        $user = $this->userModel->findUserByEmail($email);

        if (!$user) {
            $_SESSION['error'] = 'Gebruiker niet gevonden';
            header('Location: /vergeten');
            exit();
        }

        $this->userModel->sendEmail($email);

        header('Location: /vergeten');
    }
}