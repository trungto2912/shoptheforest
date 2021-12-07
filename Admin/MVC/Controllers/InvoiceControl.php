<?php
require_once("MVC/Models/invoice.php");
class InvoiceControl
{
    var $invoice_model;
    public function __construct()
    {
        $this->invoice_model = new Invoice();
    }
    function list()
    {   if(isset($_SESSION['isLogin_Admin'])||isset($_SESSION['isLogin_Nhanvien'])){
            if (isset($_GET['trangthai'])) {
                $TrangThai = $_GET['trangthai'];
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 6;
                $start = ($page - 1) * $limit;
                $count = $this->invoice_model->count_tt_hd($TrangThai);
                $count_hd = $count['tong'];
                $total_page = $count_hd/$limit;
                if($count_hd % $limit != 0){
                    $total_page++;
                }
                $data = $this->invoice_model->limit_all_tt_hd($TrangThai,$start, $limit);
            }else{
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 6;
                $start = ($page - 1) * $limit;
                $count = $this->invoice_model->count();
                $count_hd = $count['tong'];
                $total_page = $count_hd/$limit;
                if($count_hd % $limit != 0){
                    $total_page++;
                }
                $data = $this->invoice_model->limit_all($start, $limit);
                

            }

            

             require_once('MVC/Views/index.php');  

        } else{
            header('Location: ../?act=account&xuly=login');

        }
        
     
    }
    function detail()
    {
        $data_ct= $this->invoice_model->chitiethoadon($_GET['id']);
        $data_hd = $this->invoice_model->hoadon($_GET['id']);
        $active="invoice";
        require_once("MVC/Views/index.php");
    }
    function xetduyet()
    {   
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $this->invoice_model->duyet_hd($_GET['id'],$ThoiGian,$_GET['email']);
    }
    function delete()
    {
        if (isset($_GET['id'])) {
            $this->invoice_model->delete_hd($_GET['id']);
        }
    }
    
}
?>
