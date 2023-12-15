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
        // hier slaan we alle informatie die uit de model komen in een $test 
        $test = $this->reserverenModel->resKlant();
        // var_dump($test);
        // exit();
        // hier defenieeren we de $test as $reserveringen 
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
            <td>$reserveringen->klantId</td>
            <td>$reserveringen->voornaam</td>
            <td>$reserveringen->achternaam</td>
            <td>$reserveringen->email</td>
            <td>$reserveringen->telefoon_nummer</td>



            



            </tr>";
        }

        $data = [
            'test' => $rows
        ];

        // die data naar de view sturen
        $this->view('admin/index', $data);
    }


    public function overzichtKlantenGegevens()
    {
        // hier halen we alle informatie uit de database
        $klant = $this->reserverenModel->getklantGegevens();


        // $this->view('admin/index', $data);
        $this->view('admin/index');
    }
}
