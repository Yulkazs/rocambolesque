<?php

class Menukaart extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
    
        $this->view('Menukaart/index', $data);
    }
}