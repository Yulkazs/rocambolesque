<?php

class Menukaart extends BaseController
{

    private $MenukaartModel;

    function __construct()
    {
        $this->MenukaartModel = $this->model('MenukaartModel');
    }
    
    public function index()
    {

        $data = [
            'title' => 'Home'
        ];
    
        $this->view('Menukaart/index', $data);
    }

    public function dish()
    {
        $this->MenukaartModel->addDish();
    }
}


