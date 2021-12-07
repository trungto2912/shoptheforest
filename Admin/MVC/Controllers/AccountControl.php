<?php
require_once("MVC/Models/account.php");
class AccountControl
{
    var $account_model;
    public function __construct()
    {
        $this->account_model = new Account();
    }
    function list()
    {   if(isset($_SESSION['isLogin_Admin'])){

            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 6;
            $start = ($page - 1) * $limit;
            $count = $this->account_model->count();
            $count_acc = $count['tong'];
            $total_page = $count_acc/$limit;
            if($count_acc % $limit != 0){
                $total_page++;
            }
            $data = $this->account_model->limit_all($start, $limit);
            $data_phanquyen = $this->account_model->phanquyen();
    
            
        
             require_once('MVC/Views/index.php');  

        } else{
            header('Location: ../?act=account&xuly=login');

        }
        
     
    }
    public function add()
    
    {

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'Ho'  =>   $_POST['ho'],
            'Ten' =>   $_POST['ten'],
            'user'  =>   $_POST['user'],
            'pass' => md5($_POST['pass']),
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'MaQuyen' => $_POST['quyen'],
        
            'Time' => $ThoiGian
        );
        

        $this->account_model->add($data);
    }
    public function delete()
    {
        $aid = $_GET['id'];
        $this->account_model->delete($aid);
    }
     public function edit()
    {
        $aid = $_GET['id'];

        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 6;
        $start = ($page - 1) * $limit;
        $count = $this->account_model->count();
        $count_acc = $count['tong'];
        $total_page = $count_acc/$limit;
        if($count_acc % $limit != 0){
            $total_page++;
        }
        $data = $this->account_model->limit_all($start, $limit);
        $data_acc = $this->account_model->find($aid);
        $data_phanquyen = $this->account_model->phanquyen();
        $editTK="editTK";
            
        
        require_once('MVC/Views/index.php');  
    }
    public function update()
    {
        $data_acc = $this->account_model->find($_POST['id']);
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $data = array(
            'ID'  =>  $_POST['id'],
            'Ho' => $_POST['ho'],
            'Ten' => $_POST['ten'],
            'user'  =>   $_POST['user'],
            'pass' => (strcmp($data_acc['pass'],$_POST['pass'])!= 0) ? md5($_POST['pass']) : $_POST['pass'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'MaQuyen' => $_POST['quyen'],
        
            'Time' => $ThoiGian
        );
        $this->account_model->update($data);
    }
}
?>
