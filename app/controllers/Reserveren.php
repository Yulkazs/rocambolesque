<?php
class Reserveren extends BaseController
{
    private $ReserverenModel;

    function __construct()
    {
        $this->ReserverenModel = $this->model('ReserverenModel');
    }
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        $this->view('Reserveren/index', $data);
    }
    public function store()
    {

        $this->ReserverenModel->addReservering();
        $this->view('Reserveren/result');
        header('Refresh:3; url=/');
    }
}
