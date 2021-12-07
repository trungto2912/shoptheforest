<?php
require_once("model.php");
class Cart extends Model
{
	function save_order($data){
    $f = "";
    $v = "";
    foreach ($data as $key => $value) {
        $f .= $key . ",";
        $v .= "'" . $value . "',";
    }
    $f = trim($f, ",");
    $v = trim($v, ",");
    $query = "INSERT INTO hoadon($f) VALUES ($v);";
    
    $status = $this->conn->query($query);

    $query_mahd = "select MaHD from hoadon ORDER BY NgayLap DESC LIMIT 1";
    $data_mahd = $this->conn->query($query_mahd)->fetch_assoc();
   

    foreach ($_SESSION['sanpham'] as $value) {
        $MaSP =$value['ID'];
        $TenSP = $value['Name'];
        $Gia = $value['Price'];
        $SoLuong = $value['Quantity'];
        $DonGia = $value['ThanhTien'];
        $MaHD = $data_mahd['MaHD'];
        $query_ct = "INSERT INTO chitiethoadon(MaHD,MaSP,TenSP,Gia,SoLuong,DonGia) VALUES ('$MaHD','$MaSP','$TenSP','$Gia','$SoLuong','$DonGia')";

        $status_ct = $this->conn->query($query_ct);
    }
    
    if ($status == true and $status_ct = true) {
    	unset($_SESSION['sanpham']);
        setcookie('messTC', 'Đơn hàng của bạn đang chờ nhân viên xét duyệt', time() + 2);
        header('location: ?act=cart&xuly=order_complete');
    } else {
        setcookie('messTB', 'Thất bại', time() + 2);
        header('location: ?act=cart&xuly=checkout');
    }
  }
	
}
?>