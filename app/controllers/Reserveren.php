<?php

class Reserveren extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
    
        $this->view('Reserveren/index', $data);
    }
}