<?php
     require_once("Models/home.php");
class HomeControl
{
    var $home_model;
    public function __construct()
    {
       $this->home_model = new Home();
    }
    
    function list()
    {
        $data_top4_1 = $this->home_model->top4Product(1);
        $data_top4_2 = $this->home_model->top4Product(2);
        $data_danhmuc = $this->home_model->danhmuc();
        $data_banner = $this->home_model->banner();
        $active="home";


        

        require_once('Views/index.php');
    }
}
?>