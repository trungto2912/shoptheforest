<?php
require_once("model.php");
class Login extends Model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function login_action($data)
    {
        $query = "SELECT * from account  WHERE user = '" . $data['taikhoan'] . "' AND pass = '" . $data['matkhau'] . "'";

        $login = $this->conn->query($query)->fetch_assoc();
        if ($login !== NULL) {
            if($login['MaQuyen'] == 1){
                $_SESSION['isLogin_Admin'] = true;
                $_SESSION['login'] = $login;
                setcookie('user', $login['user'], time() + 60*10);
                if ($data['remember'] !== NULL) {
                    setcookie('pass', $data['rememMK'], time() + 60*10);
                }else{
                    setcookie('pass', $data['rememMK'], time() + 0);
                }
            }else{
                if($login['MaQuyen'] == 2){
                $_SESSION['isLogin_Nhanvien'] = true;
                $_SESSION['login'] = $login;
                }else{
                    $_SESSION['isLogin'] = true;
                    $_SESSION['login'] = $login;
                }
                setcookie('user', $login['user'], time() + 60*5);
                if ($data['remember'] !== NULL) {
                    setcookie('pass', $data['rememMK'], time() + 60*5);
                }else{
                    setcookie('pass', $data['rememMK'], time() + 0);
                }

            }
            header('Location: ?act=home');
        } else {
            setcookie('mess', 'Đăng nhập không thành công', time() + 2);
            header('Location: ?act=account&xuly=login');
        }
        
    }
    function logout()
    {
        if(isset($_SESSION['isLogin_Admin'])){
            unset($_SESSION['isLogin_Admin']);
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['isLogin_Nhanvien'])){
            unset($_SESSION['isLogin_Nhanvien']);
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['isLogin'])){
            unset($_SESSION['isLogin']);
            unset($_SESSION['login']);
        }
        header('location: ?act=home');
    }
    function check_account()
    {
        $query =  "SELECT * from account";

        require("result.php");

        return $data;
    }
    function dangky_action($data, $check1, $check2, $check3)
    {
        if ($check1 == 0) {
            if ($check2 == 0) {
                if($check3 == 0){
                    $$f = "";
                    $v = "";
                    foreach ($data as $key => $value) {
                        $f .= $key . ",";
                        $v .= "'" . $value . "',";
                    }
                    $f = trim($f, ",");
                    $v = trim($v, ",");
                    $query = "INSERT INTO account ($f) VALUES ($v);";

                    $status = $this->conn->query($query);
                    if ($status == true) {
                        setcookie('mess', 'Đăng ký thành công', time() + 2);
                        header('Location: ?act=account&xuly=login');
                    } else {
                        setcookie('mess1', 'Đăng ký không thành công', time() + 2);
                        header('Location: ?act=account&xuly=signup');
                    }

                }else{
                    setcookie('mess1', 'Bạn vui lòng đồng ý điều khoản', time() + 2);
                    header('Location: ?act=account&xuly=signup');

                }
                
            } else {
                setcookie('mess1', 'Mật khẩu không trùng nhau', time() + 2);
                header('Location: ?act=account&xuly=signup');
            }
        } else {
            setcookie('mess1', 'Tên tài khoản đã tồn tại', time() + 2);
            header('Location: ?act=account&xuly=signup');
        }
        
    }
    function account($id)
    {
      
        return $this->conn->query("SELECT * from account where ID = $id")->fetch_assoc();
    }
    function update_account($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");

        $query = "UPDATE account SET  $v   WHERE  ID = " . $_SESSION['login']['ID'];

        $result = $this->conn->query($query);

        $query_updateSS = "SELECT * from account  WHERE ID = " . $_SESSION['login']['ID'];
        $login = $this->conn->query($query_updateSS)->fetch_assoc();
        $_SESSION['login']=$login;
        
        if ($result == true) {
            setcookie('messTC', 'Cập nhật tài khoản thành công', time() + 2);
            header('Location: ?act=account&xuly=tk#form-checkout');
        } else {
            setcookie('messTB', 'Cập nhật thất bại', time() + 2);
            header('Location: ?act=account&xuly=tk#form-checkout');
        }
    }
   
}
