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

        $test = $this->reserverenModel->getReserveringen();
        // var_dump($test);
        // exit();

        $rows = "";
        foreach ($test as $reserveringen) {

            // $reserveringen = $this->reserverenModel->getReserveringen();
            // var_dump($reserveringen);
            $rows .= "<tr>
            <td>$reserveringen->Id</td>
            <td>$reserveringen->aantal_personen</td>
            <td>$reserveringen->datum</td>
            <td>$reserveringen->tijd</td>
            <td>$reserveringen->tafel</td>

            </tr>";
        }

        $data = [
            // 'title' => 'Home',
            'test' => $rows
        ];
        // $data = [
        //     'title' => 'Home'
        // ];

        $this->view('admin/index', $data);
    }


    // public function overzichtReserveren()
    // {
    //     // hier halen we alle informatie uit de database


    //     // $this->view('admin/index', $data);
    //     $this->view('adminOverzicht/index', $data);
    // }
}
