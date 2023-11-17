<?php

class dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
    
        $this->view('dashboard/index', $data);
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login/index');
    }



}

