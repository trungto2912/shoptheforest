<?php
require_once("MVC/Models/category.php");
class CategoryControl
{
    var $category_model;
    public function __construct()
    {
        $this->category_model = new Category();
    }
    function list()
    {   if(isset($_SESSION['isLogin_Admin'])||isset($_SESSION['isLogin_Nhanvien'])){

            $data = $this->category_model->All();
            
        
            require_once('MVC/Views/index.php');  

        } else{
            header('Location: ../?act=account&xuly=login');

        }
        
     
    }
    public function add()
    
    {
        $data = array(
            'cname' => $_POST['name'],
        );

        $this->category_model->add($data);
    }
    public function delete()
    {
        $cid = $_GET['id'];
        $this->category_model->delete($cid);
    }
     public function edit()
    {
        $cid = $_GET['id'];
        $data_dm = $this->category_model->find($cid);
        $data = $this->category_model->All();
        $active="category";
        $editDM = "editDM";
            
        
        require_once('MVC/Views/index.php'); 
    }
    public function update()
    {
        $data = array(
            'cid'  =>  $_POST['id'],
            'cname'  =>   $_POST['name'],
        );
        
        $this->category_model->update($data);
    }
   
}
?>
