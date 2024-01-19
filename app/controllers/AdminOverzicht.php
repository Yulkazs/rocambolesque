<?php
class AdminOverzicht extends BaseController
{

    private $ReserverenModel;


    public function __construct()
    {
        // verwijzen naar de model
        $this->ReserverenModel = $this->model('ReserverenModel');
    }


    public function index()
    {
        // hier slaan we alle informatie die uit de model komen in een $test 
        $data = $this->ReserverenModel->resKlanten();
        // die data naar de view sturen
        $this->view('admin/index', $data);
    }


    public function overzichtKlantenGegevens()
    {
        // hier halen we alle informatie uit de database
        $klant = $this->ReserverenModel->getklantGegevens();


        // $this->view('admin/index', $data);
        $this->view('admin/index');
    }
    // public function update($Id)
    // {
    //     $reservatiesInfo = $this->ReserverenModel->updatereservaties($Id);
    //     // $klanten = $this->ReserverenModel->getklantGegevens();
    //     $data = [
    //         'title' => 'Update Reservaties',
    //         'reservatiesId' => $Id,
    //         'reservatiesInfo' => $reservatiesInfo
    //     ];
    //     $this->view('Admin/updateReservation', $data);
    // }
    public function showEdit($Id)
    {
        $data = $this->ReserverenModel->resKlant($Id);
        $this->view('Admin/updateReservation', $data[0]);
    }
    public function updateSave($Id)
    {
        $this->ReserverenModel->updatereservaties($Id);
        header('Refresh:0; url=/AdminOverzicht');
    }
    public function deletereservering($Id)
    {
        $succes = $this->ReserverenModel->deletereservering($Id);

        if ($succes) {
            echo "Het is niet gelukt";
        } else {
            echo "Het geselecteerde reservering is verwijderd";
        }
        header('Refresh:3; url=/AdminOverzicht');
    }
}
