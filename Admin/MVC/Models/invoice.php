<?php
require_once("model.php");
require "public/PHPMailer-master/src/PHPMailer.php";
require "public/PHPMailer-master/src/SMTP.php"; 
require 'public/PHPMailer-master/src/Exception.php';
class Invoice extends Model
{

    var $table = "hoadon";
    var $contens = "MaHD";
     
    function limit_all_tt_hd($a, $b, $c)
    {
        $query =  "SELECT * from hoadon  where TrangThai = $a ORDER BY NgayLap DESC limit $b,$c";

        require("result.php");

        return $data;
    }
    function count_tt_hd($a)
    {
        $query = "SELECT COUNT(MaHD) as tong FROM hoadon where TrangThai = $a";

        return $this->conn->query($query)->fetch_assoc();
    }
    function chitiethoadon($id){

        $query = "SELECT * from chitiethoadon where MaHD = $id ";

        require("result.php");

        return $data;
        

    }
    function hoadon($id){
        $query =  "SELECT * from hoadon WHERE MaHD = $id";

        $result = $this->conn->query($query);

        $data = mysqli_fetch_array($result);
        return $data;
    }
    
    function duyet_hd($id,$thoigian,$email)
    {
        $query = "UPDATE hoadon SET  TrangThai= '1', NgayLap= '$thoigian'  WHERE MaHD = $id " ;

        $result = $this->conn->query($query);
        
        if ($result == true) {
           
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);  
            try {
                $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //SMTP servers
                $mail->SMTPAuth = true; 
                $nguoigui = 'theforest2912@gmail.com';
                $matkhau = 'trungto2912';
                $tennguoigui = 'The Forest';
                $mail->Username = $nguoigui; // SMTP username
                $mail->Password = $matkhau;   // SMTP password
                $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                $mail->Port = 465;  // port to connect to                
                $mail->setFrom($nguoigui, $tennguoigui ); 
                $to = "$email";
                
                
                $mail->addAddress($to); //mail và tên người nhận  
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = "Hóa đơn từ Theforest";      
                $noidungthu = "<h4>Hóa đơn của bạn đã được duyệt</h4><p>Bạn vui lòng chuẩn bị tiền để nhận hàng <br> Cảm ơn bạn đã ủng hộ shop!</p>" ;
                $mail->Body = $noidungthu;
                $mail->smtpConnect( array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send();
            
            } catch (Exception $e) {
        
            }
            setcookie('mess', 'Duyệt thành công', time() + 2);
            header('Location: ?mod=invoice&trangthai=1');
        } else {
            setcookie('messX', 'Duyệt thất bại', time() + 2);
            header('Location: ?mod=invoice');
        }
    }
    function delete_hd($id)
    {
        $query = "DELETE from hoadon where MaHD =$id";
        
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('mess', 'Xóa thành công', time() + 2);
        } else {
            setcookie('messX', 'Xóa không thành công', time() + 2);
        }
        header('Location: ?mod=invoice');
    }
}