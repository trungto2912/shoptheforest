<?php
require_once("Models/login.php");
class LoginControl
{
    var $login_model;
    public function __construct()
    {
        $this->login_model = new Login();
    }
    function login()
    {
        $data_top4_1 = $this->login_model->top4Product(1);
        $data_top4_2 = $this->login_model->top4Product(2);
        $data_danhmuc = $this->login_model->danhmuc();
        $data_banner = $this->login_model->banner();
        $active="home";
        $DNlai="DNlai";
        
        require_once('Views/index.php');
    }
    function signup()
    {
        $data_top4_1 = $this->login_model->top4Product(1);
        $data_top4_2 = $this->login_model->top4Product(2);
        $data_danhmuc = $this->login_model->danhmuc();
        $data_banner = $this->login_model->banner();
        $active="home";
        $DKlai="DKlai";
        
        require_once('Views/index.php');
    }
    function login_action()
    {
        $taikhoan = $_POST['user'];
        $matkhau = md5($_POST['pass']);
        $rememMK = ($_POST['pass']);
        $remember = $_POST['remember'];
        if (strpos($taikhoan, "'") != false) {
            $taikhoan = str_replace("'", "\'", $taikhoan);
        }
        $data = array(
            'taikhoan' => $taikhoan,
            'matkhau' => $matkhau,
            'remember' => $remember,
            'rememMK' => $rememMK,
        );
        $this->login_model->login_action($data);
    }
    function dangky()
    {
        $check1 = 0;
        $check2 = 0;
        $check3 = 0;
        $data_check = $this->login_model->check_account();
        foreach ($data_check as $value) {
            if ($value['user'] == $_POST['user']) {
                $check1 = 1;
            }
        }

        if ($_POST['pass'] != $_POST['repass']) {
            $check2 = 1;
        }
        if ($_POST['dieukhoan'] == NULL){
            $check3 = 1;
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'Ho' => $_POST['ho'],
            'Ten' => $_POST['ten'],
            'user' => $_POST['user'],
            'pass' => md5($_POST['pass']),
            'email' =>    $_POST['email'],
            'phone' => $_POST['phone'],
            'MaQuyen' => '3',
            'Time' => $ThoiGian
        );

        $this->login_model->dangky_action($data, $check1, $check2, $check3);
    }
    function dangxuat()
    {
        $this->login_model->logout();
    }
    function account()
    {
        $active="account";
        require_once('Views/index.php');
    }
    function update()
    {

        if (isset($_POST['ho'])) {
            $data = array(
                'Ho' =>    $_POST['ho'],
                'Ten'  =>   $_POST['ten'],
                'email' => $_POST['email'],
                'phone' =>    $_POST['phone'],
            );
            $this->login_model->update_account($data);
        } else {

            if (md5($_POST['pass']) == $_SESSION['login']['pass']) {
                if ($_POST['passNew'] == $_POST['XNpassNew']) {
                
                    $data = array(
                        'pass' => md5($_POST['passNew']),
                    );
                    $this->login_model->update_account($data);
                } else {
                    setcookie('messTB', 'Mật khấu mới không trùng nhau', time() + 2);
                }
            } else {
                setcookie('messTB', 'Mật khẩu không đúng', time() + 2);
            }
        }
        header('location: ?act=account&xuly=tk#form-checkout');
    }
}
