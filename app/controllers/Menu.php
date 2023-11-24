<?php

class Menu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
    
        $this->view('Menu/index', $data);
    }
}