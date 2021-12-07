<?php
require_once("Models/cart.php");

class CartControl
{    
    var $cart_model;
    public function __construct()
    {
        $this->cart_model = new Cart();
    }
    function list_cart()
    {

        $total = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $total += $value['ThanhTien'];
            }
        }
        $active="cart";
         require_once('Views/index.php');   
    }
    function detail()
    {   
        foreach($_POST['pid'] as $id => $pid){
        $data_ct = $this->cart_model->chitiet_sp($pid);
        }
        $donvi = $data_ct['cateID']==3 ? "Cây" : "Kg";
        
        $str="<input type=hidden value=".$data_ct['ID']." id=cartID>";
        $str.="<div class=form-group>";
        $str.="<img src=public/images/".$data_ct['Image']." style= width:150px;height:120px>
              </div>";
        $str.="<div class=form-group><p >".$data_ct['Name']."</p></div>";
        $str.="<div class=form-group><p id=gia>".$data_ct['Price']."<sup>đ</sup></p></div>";
        $str.=" <div class=form-group>
                    <label>Số lượng:</label>
                    <input type=number name=quantity id=quantity value=1 min=1 max=50>
                    <label> ".$donvi ."</label>
                </div>";
        echo $str;

    }
    function add_cart()
    {   
        
        $id = $_POST['id'];
        $data = $this->cart_model->chitiet_sp($id);
        $total = 0;
        if (isset($_SESSION['sanpham'][$id])) {
            $arr = $_SESSION['sanpham'][$id];
            $arr['Quantity'] = $arr['Quantity'] + $_POST['quantity'];
            $arr['ThanhTien'] = $arr['Quantity'] * $arr["Price"];
            $_SESSION['sanpham'][$id] = $arr;
        } else {
            $arr['ID'] = $data['ID'];
            $arr['Name'] = $data['Name'];
            $arr['Price'] = $data['Price'];
            $arr['Quantity'] = $_POST['quantity'];
            $arr['ThanhTien'] = $arr['Price'] * $arr['Quantity'];
            $arr['Image'] = $data['Image'];
            $arr['cateID'] = $data['cateID'];
            $_SESSION['sanpham'][$id] = $arr;
        }
       
        header('Location: ?act=cart');
    

             

    }
    function update_cart()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        $arr['Quantity'] = $arr['Quantity'] + 1;
        $arr['ThanhTien'] = $arr['Quantity'] * $arr["Price"];
        $_SESSION['sanpham'][$_GET['id']] = $arr;
        header('Location: ?act=cart');
    }
    
    function delete_cart()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        if ($arr['Quantity'] == 1) {
            unset($_SESSION['sanpham'][$_GET['id']]);
        } else {
            $arr = $_SESSION['sanpham'][$_GET['id']];
            $arr['Quantity'] = $arr['Quantity'] - 1;
            $arr['ThanhTien'] = $arr['Quantity'] * $arr["Price"];
            $_SESSION['sanpham'][$_GET['id']] = $arr;
        }
        header('Location: ?act=cart');
    }
    function deleteall_cart()
    {
        unset($_SESSION['sanpham'][$_GET['id']]);
        header('Location: ?act=cart');
        setcookie('messTC', 'Xóa thành công', time() + 2);
    }
    function checkout()
    {
        if (isset($_SESSION['login'])) {
            if (!empty($_SESSION['sanpham'])) {
                $total = 0;
                foreach ($_SESSION['sanpham'] as $value) {
                    $total += $value['ThanhTien'];
                }
                $active="cart";
                require_once('Views/index.php');
            }else{
                setcookie('messTB', 'Bạn phải có sản phẩm trong giỏ hàng', time() + 2);
                header('Location: ?act=cart');
            }

            

            
        }else{
            setcookie('mess', 'Vui lòng đăng nhập trước khi đặt hàng', time() + 2);
            header('Location: ?act=account&xuly=login');
        }
      
    }
    function  save_order()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $total = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $total += $value['ThanhTien'];
            }
        }

        $data = array(
            'MaND' => $_SESSION['login']['ID'],
            'NguoiNhan' =>  $_POST['name'],
            'Email' => $_POST['email'],
            'SDT' => $_POST['phone'],
            'DiaChi' => $_POST['adress'],
            'TongTien' => $total,
            'TrangThai'  =>  0,
            'NgayLap' => $ThoiGian
        );
        $this->cart_model->save_order($data);
    }
}
?>
