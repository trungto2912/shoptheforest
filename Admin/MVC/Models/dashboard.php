<?php
require_once("model.php");
class Dashboard extends Model
{
    function count_sp()
    {
        $query = "SELECT COUNT(ID) as tong FROM product";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_hd_cd()
    {
        $query = "SELECT COUNT(MaHD) as tong FROM hoadon WHERE TrangThai = 0";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_nhanvien()
    {
        $query = "SELECT COUNT(ID) as tong FROM account WHERE MaQuyen = 2";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_khachhang()
    {
        $query = "SELECT COUNT(ID) as tong FROM account WHERE MaQuyen = 3";

        return $this->conn->query($query)->fetch_assoc();
    }
    function hd_daduyet_homnay($d)
    {
        $query = "SELECT COUNT(MaHD) as tong FROM hoadon WHERE DAY(NgayLap) = $d And TrangThai = 1";

        return $this->conn->query($query)->fetch_assoc();
    }
    function dtngay($d){
        $query = "SELECT SUM(TongTien) as tong FROM hoadon WHERE DAY(NgayLap) = $d And TrangThai = 1";

        return $this->conn->query($query)->fetch_assoc();
    }
    function dtthang($m){
        $query = "SELECT SUM(TongTien) as tong FROM hoadon WHERE MONTH(NgayLap) = $m And TrangThai = 1";

        return $this->conn->query($query)->fetch_assoc();
    }
    function dtnam($y){
        $query = "SELECT SUM(TongTien) as tong FROM hoadon WHERE YEAR(NgayLap) = $y And TrangThai = 1";

        return $this->conn->query($query)->fetch_assoc();
    }
    
}