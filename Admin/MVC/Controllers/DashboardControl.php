
<?php
require_once("MVC/Models/dashboard.php");
class DashboardControl
{
    var $dashboard_model;
    public function __construct()
    {
        $this->dashboard_model = new Dashboard();
    }
    function list(){
        if(isset($_SESSION['isLogin_Admin'])||isset($_SESSION['isLogin_Nhanvien'])){
            $count_sp = $this->dashboard_model->count_sp();
            $count_hd_cd = $this->dashboard_model->count_hd_cd();
            $count_nhanvien = $this->dashboard_model->count_nhanvien();
            $count_khachhang = $this->dashboard_model->count_khachhang();
            $d = date("d");
            $hd_daduyet_hn = $this->dashboard_model->hd_daduyet_homnay($d);
            $dtngay = $this->dashboard_model->dtngay($d);
            $m = date("m");
            $dtthang = $this->dashboard_model->dtthang($m);
            $y = "20".date("y");
            $dtnam = $this->dashboard_model->dtnam($y);
    
            require_once('MVC/Views/index.php');
        }else{
        
            header('Location: ../?act=account&xuly=login');

        }
    }

}
?>
