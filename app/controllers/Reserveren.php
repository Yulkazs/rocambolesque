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
        // $this->view('Reserveren/adminOverzicht', []);
        session_start();

        if (isset($_POST['submit'])) {
            $_SESSION['message'] = "Welcome! You've successfully logged in.";
            header('location:home/index.php');
            exit;
        }
    }
    public function overzichtReservaties()
    {
        $result = $this->ReserverenModel->getReserveringen();
        var_dump($result);
        $rows = "";
        foreach ($result as $reservaties) {
            $reservaties = $this->ReserverenModel->getReserveringen();
            $rows .= "<tr>        
                        <td>
                            <a href='" . URLROOT . "/Admin/updateReservation/$reservaties->Id'>
                            <i class='bi bi-pencil-square'></i>
                            </a>
                        </td> ";
            $data = [
                'rows' => $rows
            ];
            $this->view('Admin/updateReservation', $data);
        }
    }
    public function update($Id, $klanten)
    {
        $reservatiesInfo = $this->ReserverenModel->updatereservaties($Id);
        $klanten = $this->ReserverenModel->getklantGegevens();
        $data = [
            'title' => 'Update Reservaties',
            'reservatiesId' => $Id,
            'klantengegevens' => $klanten,
            'reservatiesInfo' => $reservatiesInfo
        ];
        $this->view('Admin/updateReservation', $data);
    }
}
