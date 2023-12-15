
<?php
//require_once 'MenukaartModel';



class Menukaart extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
    
        $this->view('Menukaart/index', $data);
    }
}



//require_once 'DishModel.php';

class DishController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function addDish($name, $price, $season, $cuisine)
    {
        return $this->model->addDish($name, $price, $season, $cuisine);
    }
}
?>

?>
