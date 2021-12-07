<?php
require_once("model.php");
class Shop extends Model
{
	function count_sp()
    {
        $query = "SELECT COUNT(ID) as tong FROM product";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_cateID($cate)
    {
        $query = "SELECT COUNT(ID) as tong FROM product WHERE cateID = $cate";

        return $this->conn->query($query)->fetch_assoc();
    }
    function searchName($a)
    {
    	$a = "'%".$a."%'";
        $query = "SELECT * FROM product WHERE Name LIKE $a LIMIT 0,9";
    	require("result.php");

        return $data;

    }
    function sanpham_nb()
    {
    	$query =  "SELECT * from product  ORDER BY Price DESC limit 4";

        require("result.php");

        return $data;

    }  
     
    function sort_A_Z($a, $b){
        $query = "SELECT * from product  ORDER BY Name limit $a,$b";
        require("result.php");

        return $data;
    }
    function sort_Z_A($a, $b){
        $query = "SELECT * from product  ORDER BY Name DESC limit $a,$b";
        require("result.php");

        return $data;
    }
    function sort_gia_tang($a, $b){
        $query = "SELECT * from product  ORDER BY Price limit $a,$b";
        require("result.php");

        return $data;
    }
    function sort_gia_giam($a, $b){
        $query = "SELECT * from product  ORDER BY Price DESC limit $a,$b";
        require("result.php");

        return $data;
    }
    function binhluan($a)
    {
        $query =  "SELECT * from comment  where MaSP = $a";

        require("result.php");

        return $data;

    } 
    function add_binhluan($a, $b, $c, $d){
        
        $query = "INSERT INTO comment(MaSP,NguoiDD,DanhGia,NgayDang) VALUES ('$a','$b','$c','$d');";
        $this->conn->query($query);

    }
    function check_hoadon($a)
    {
        $query =  "SELECT * from hoadon where MaND = $a";

        require("result.php");

        return $data;

    } 
    function check_chitiethoadon($a,$b)
    {
        $query =  "SELECT * from chitiethoadon where MaHD = '$a' and MaSP = '$b'";

        require("result.php");

        return $data;

    } 
    function load_binhluan($a, $b, $c)
    {
        $query =  "SELECT * from comment where MaSP = $a ORDER BY idbl DESC limit $b,$c";

        require("result.php");

        return $data;
    }
    
}
?>