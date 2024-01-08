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

        $result = $this->reserverenModel->getReserveringen();
        var_dump($result);
        exit();

        $rows = "";
        foreach ($result as $reserveringen) {

            $reserveringen = $this->reserverenModel->getReserveringen();

            $rows .= "<tr>
            <td>$reserveringen->voornaam</td>
            <td>$reserveringen->achternaam</td>
            <td>$reserveringen->email</td>
            <td>$reserveringen->telefoon_nummer</td>
            </tr>";
         
        }

        $data = [
            'title' => 'Home',
            $result => 'result'
        ];
        // $data = [
        //     'title' => 'Home'
        // ];

        $this->view('adminOverzicht/index', $data);
    }
   

    // public function overzichtReserveren()
    // {
    //     // hier halen we alle informatie uit de database
       

    //     // $this->view('admin/index', $data);
    //     $this->view('adminOverzicht/index', $data);
    // }
}
