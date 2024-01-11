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
    public function store($Id)
    {
        echo "hoi";
        $this->ReserverenModel->addReservering($Id);
        // header('Refresh:3; url=/AdminOverzicht');
    }
}
