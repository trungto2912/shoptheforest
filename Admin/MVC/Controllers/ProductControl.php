<?php
require_once("MVC/Models/product.php");
class ProductControl
{
    var $product_model;
    public function __construct()
    {
        $this->product_model = new Product();
    }
    function list()
    {   if(isset($_SESSION['isLogin_Admin'])||isset($_SESSION['isLogin_Nhanvien'])){
        $data_danhmuc=$this->product_model->danhmuc();

            if(isset($_POST['timkiem'])){
                $total_page =1 ;
                $tk = $_POST['timkiem'];
                $data = $this->product_model->searchName($tk);
                $active="product";
                $timkiem="tk";
                $quaylai="ql";
                require_once('MVC/Views/index.php');
            }
       
        

                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 9;
                $start = ($page - 1) * $limit;
                $count = $this->product_model->count();
                $count_sp = $count['tong'];
                $total_page = $count_sp/$limit;
                if($count_sp % $limit != 0){
                    $total_page++;
                }
                $data = $this->product_model->limit_all($start, $limit);
                $timkiem="tk";
            
        
         require_once('MVC/Views/index.php');  

        } else{
            header('Location: ../?act=account&xuly=login');

        }
        
     
    }
    public function add()
    
    {
    
        $target = "../public/images/"; // thư mục chứa file upload

        $anh=$_FILES['image']['name'];
        $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
         move_uploaded_file($anhminhhoa_tmp,$target.$anh);

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'Name'  =>   $_POST['name'],
            'Price' => $_POST['price'],
            'Image' => $anh,
            'Des' => $_POST['des'],
            'Note' => $_POST['note'],
            'cateID' => $_POST['category'],
        
            'Time' => $ThoiGian
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->product_model->add($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->product_model->delete($id);
    }
     public function edit()
    {
        $id = $_GET['id'];
        $data_danhmuc=$this->product_model->danhmuc();
        $data_pro=$this->product_model->find($id);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 9;
        $start = ($page - 1) * $limit;
        $count = $this->product_model->count();
        $count_sp = $count['tong'];
        $total_page = $count_sp/$limit;
        if($count_sp % $limit != 0){
            $total_page++;
        }
        $data = $this->product_model->limit_all($start, $limit);
        $timkiem="tk";
        $editSP="editSP";
            
        
         require_once('MVC/Views/index.php');  
    }
    public function update()
    {
        $target = "../public/images/"; // thư mục chứa file upload

        $anh=$_FILES['image']['name'];
        $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
         move_uploaded_file($anhminhhoa_tmp,$target.$anh);

        
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'ID'  =>  $_POST['id'],
            'Name'  =>  $_POST['name'],
            'Price' => $_POST['price'],
            'Image' => $anh,
            'Des' => $_POST['des'],
            'Note' => $_POST['note'],
            'cateID' => $_POST['category'],
        
            'Time' => $ThoiGian
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($anh == "" || $anh == NULL) {
            unset($data['Image']);
        }
        
        $this->product_model->update($data);
    }
    function detail(){
        $data_ct = $this->product_model->find($_GET['id']);

        require_once('MVC/Views/index.php');
    }
}
?>
