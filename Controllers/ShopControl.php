<?php
require_once("Models/shop.php");
class ShopControl
{
    var $shop_model;
    public function __construct()
    {
        $this->shop_model = new Shop();
    }
    function list()
    {
        $data_danhmuc = $this->shop_model->danhmuc();
        $data_spnb = $this->shop_model->sanpham_nb();

        if(isset($_POST['timkiem'])){
            $total_page =1 ;
            $tk = $_POST['timkiem'];
            $data = $this->shop_model->searchName($tk);
            $active="shop";
            require_once('Views/index.php');
        }
       
        if(isset($_GET['cateID'])){
            $cateID = $_GET['cateID'];
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 9;
            $start = ($page - 1) * $limit;
            $count = $this->shop_model->count_sp_cateID($cateID);
            $count_sp = $count['tong'];
            $total_page = $count_sp/$limit;
            if($count_sp % $limit != 0){
               $total_page++;
            }
            $data = $this->shop_model->limit_cate_sp($cateID, $start, $limit);
            
        }else{

            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 9;
            $start = ($page - 1) * $limit;
            $count = $this->shop_model->count_sp();
            $count_sp = $count['tong'];
            $total_page = $count_sp/$limit;
            if($count_sp % $limit != 0){
                $total_page++;
            }
            $data = $this->shop_model->limit_all_sp($start, $limit);
            $xep="Mặc định";
            
        }
        
        $active="shop";
        require_once('Views/index.php');  



        
    }
    function sort(){
        $data_danhmuc = $this->shop_model->danhmuc();
        $data_spnb = $this->shop_model->sanpham_nb();
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 9;
        $start = ($page - 1) * $limit;
        $count = $this->shop_model->count_sp();
        $count_sp = $count['tong'];
        $total_page = $count_sp/$limit;
        if($count_sp % $limit != 0){
                $total_page++;
        }
        if($_GET['cach'] == 1){
            
            $data = $this->shop_model->sort_A_Z($start, $limit);
            $xep="A -> Z";
            
        }
        if($_GET['cach'] == 2){
            
            $data = $this->shop_model->sort_Z_A($start, $limit);
            $xep="Z -> A";

            
        }
        if($_GET['cach'] == 3){
            
            $data = $this->shop_model->sort_gia_tang($start, $limit);
            $xep="Giá tăng dần";

            
        }
        if($_GET['cach'] == 4){
            
            $data = $this->shop_model->sort_gia_giam($start, $limit);
            $xep="Giá giảm dần";

            
        }
        $active="shop";
         require_once('Views/index.php');  

        
    }
}
?>
