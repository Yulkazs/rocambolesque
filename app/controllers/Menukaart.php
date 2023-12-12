<?php

class Menukaart extends BaseController
{
    private $MenukaartModel;

    public function __construct() {
        $this->MenukaartModel = $this->model('MenukaartModel');
    }

    public function index()
    {
        $menu = $this->MenukaarModel->getMenu();

        $data = [
            'title' => 'Home'
        ];
    
        $this->view('Menukaart/index', $data);
    }
    /** 
    public function items()
    {
        session_start();

        $gerecht = "";
        $prijs = "";
        $descNL = "";
        $descEN = "";

        // Validation field empty
        if (empty($_POST['gerecht'])) {
            $gerechtError = "Gerecht is verplicht";
        }
        if (empty($_POST['prijs'])) {
            $prijsError = "Prijs is verplicht";
        }
        if (empty($_POST['descNL'])) {
            $descNLError = "Beschrijving is verplicht";
        }
        if (empty($_POST['descEN'])) {
            $descENError = "Description is verplicht";
        }

        // Get the items from form 
        if (isset($_POST['gerecht'])) {
            $gerecht = $_POST['gerecht'];
        }
        if (isset($_POST['prijs'])) {
            $prijs = $_POST['prijs'];
        }
        if (isset($_POST['descNL'])) {
            $descNL = $_POST['descNL'];
        }
        if (isset($_POST['descEN'])) {
            $descEN = $_POST['descEN'];
        }
        // Add the item to the array when opslaan is clicked
        if (isset($_POST['opslaan'])) {
            $itemArray = array(
                'gerecht' => $gerecht,
                'prijs' => $prijs,
                'descNL' => $descNL,
                'descEN' => $descEN
            );
            $_SESSION['items'][] = $itemArray;
        }

        // Delete the item from the array when verwijderen is clicked
        if (isset($_POST['verwijderen'])) {
            foreach ($_SESSION['items'] as $key => $value) {
                if ($value['gerecht'] == $_POST['gerecht']) {
                    unset($_SESSION['items'][$key]);
                }
            }
        }
    }*/
}

   


