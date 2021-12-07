<?php
     require_once("Models/shop.php");
class DetailControl
{
    var $detail_model;
    public function __construct()
    {
       $this->detail_model = new Shop();
    }
    
    function list()
    {
        $_SESSION['idSP'] = $_GET['id'];
        $data_ct = $this->detail_model->chitiet_sp($_GET['id']);

        $data_spnb = $this->detail_model->sanpham_nb();
        $data_danhmuc = $this->detail_model->danhmuc();
        $data_splq = $this->detail_model->top4Product($data_ct['cateID']);
        $limit = 3;
        $start = 0;
        $data_binhluan = $this->detail_model->load_binhluan($_GET['id'],$start,$limit);
        $binhluan = $this->detail_model->binhluan($_GET['id']);
        $active="shop";
        
        
        require_once('Views/index.php');
    }
  
    function binhluan(){
        $idSP = $_SESSION['idSP'];
        $data_hoadon = $this->detail_model->check_hoadon($_SESSION['login']['ID']);
        foreach($data_hoadon as $value){
            $data_chitietHD = $this->detail_model->check_chitiethoadon($value['MaHD'],$idSP);
            if($data_chitietHD!=null){
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ThoiGian =  date('Y-m-d H:i:s');
                $NguoiBL = $_SESSION['login']['Ho'] ." ". $_SESSION['login']['Ten'];
                $this->detail_model->add_binhluan($idSP,$NguoiBL,$_POST['noidung'],$ThoiGian);
                $limit = 3;
                $start = 0;
                $data_binhluan = $this->detail_model->load_binhluan($idSP,$start,$limit);
                $str="";
                foreach($data_binhluan as $row) { 
                    $str.= "<div class='count-bl media border p-3'>
                                <img src='public/images/user.PNG'  class='mr-3 mt-3 rounded-circle'  style='width:50px'>
                                <div class='media-body' style='margin-top:20px'>
                                    <b>". $row['NguoiDD'] ."</b> <small><i>".$row['NgayDang']."</i></small>
                                    <p>". $row['DanhGia']."</p>                                           
                                </div>
                            </div>";
                }          

                echo $str;
                break;
            }
        }
        echo false;
        
    }
    function load_binhluan(){
        $limit = 3;
        $data_binhluan = $this->detail_model->load_binhluan($_SESSION['idSP'],$_GET['start'],$limit);
        $str="";
        foreach($data_binhluan as $row) { 
            $str.= "<div class='count-bl media border p-3'>
                        <img src='public/images/user.PNG'  class='mr-3 mt-3 rounded-circle'  style='width:50px'>
                        <div class='media-body' style='margin-top:20px'>
                            <b>". $row['NguoiDD'] ."</b> <small><i>".$row['NgayDang']."</i></small>
                            <p>". $row['DanhGia']."</p>                                           
                        </div>
                    </div>";
        }          

        echo $str;
    }
}
?>