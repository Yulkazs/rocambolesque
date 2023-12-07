<?php
class AdminOverzicht extends BaseController
{

    private $reserverenModel;

    public function __construct()
    {
        // verwijzen naar de model
        $this->reserverenModel = $this->model('reserverenModel');
    }


    public function index()
    {

        $result = $this->reserverenModel->getklantGegevens();
        // var_dump($result);

        $rows = "";
        foreach ($result as $klantGegevens) {


            $rows .= "<tr>
            <td>$klantGegevens->klantId</td>
            <td>$klantGegevens->voornaam</td>
            <td>$klantGegevens->achternaam</td>
            <td>$klantGegevens->email</td>
            <td>$klantGegevens->telefoon_nummer</td>
            </tr>";
        }

        $data = [
            'title' => 'Home',
            'result' => $rows
        ];
        $this->view('admin/index', $data);
    }

    public function getReserveringen()
    {
        $result = $this->reserverenModel->getReserveringen();
        // var_dump($result);

        $rows = "";
        foreach ($result as $reserveringen) {


            $rows .= "<tr>
            <td>$reserveringen->Id</td>
            <td>$reserveringen->aantal_personen</td>
            <td>$reserveringen->datum</td>
            <td>$reserveringen->tijd</td>
            <td>$reserveringen->tafel</td>
            <td>
            <a href='" . URLROOT . "/adminOverzicht/klantGegevens/$reserveringen->Id'>
            <img src = '\public\Images\Icons\chat.png'>
            </a>
</td>
            </tr>";
        }

        $data = [
            'title' => 'Home',
            'result' => $rows
        ];
        $this->view('admin/index', $data);
    }
    public function klantGegevens($reserveringen)
    {
        $this->reserverenModel->getklantGegevens($reserveringen);
        $this->view('AdminOverzicht/getklantGegevens');
    }












    // public function overzichtReserveren()
    // {
    //     // hier halen we alle informatie uit de database


    //     // $this->view('admin/index', $data);
    //     $this->view('adminOverzicht/index', $data);
    // }
}
