<?php
require_once("MVC/Models/banner.php");
class BannerControl
{
    var $banner_model;
    public function __construct()
    {
        $this->banner_model = new Banner();
    }
    function list()
    {   if(isset($_SESSION['isLogin_Admin'])){

            $data = $this->banner_model->All();
            
        
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

        $data = array(
            'image' => $anh,
        );

        $this->banner_model->add($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->banner_model->delete($id);
    }
     public function edit()
    {
        $id = $_GET['id'];
        $data_banner = $this->banner_model->find($id);
        $data = $this->banner_model->All();
        $active="banner";
        $editBN = "editBN";
            
        
        require_once('MVC/Views/index.php'); 
    }
    public function update()
    {
        $target = "../public/images/"; // thư mục chứa file upload

        $anh=$_FILES['image']['name'];
        $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
         move_uploaded_file($anhminhhoa_tmp,$target.$anh);

       
        if ($anh != "" || $anh != NULL) {
             $data = array(
                'id'  =>  $_POST['id'],
                'image' => $anh,
             );
        }
        $this->banner_model->update($data);
    }
   
}
?>
