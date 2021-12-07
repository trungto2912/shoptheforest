<?php
require_once("Connection.php");
class model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    function top4Product($a)
    {
        $query =  "SELECT * from product WHERE cateID = $a  ORDER BY ID DESC limit 4";

        require("result.php");

        return $data;
    }
    
    function danhmuc()
    {
        $query =  "SELECT * from category";
        require("result.php");

        return $data;

    }
    function limit_all_sp($a, $b)
    {
        $query =  "SELECT * from product  ORDER BY ID DESC limit $a,$b";

        require("result.php");

        return $data;
    }
    function limit_cate_sp($a, $b, $c)
    {
        $query =  "SELECT * from product WHERE cateID = $a ORDER BY ID DESC limit $b,$c";

        require("result.php");

        return $data;
    }
    function banner()
    {
        $query =  "SELECT * from banner";

        require("result.php");

        return $data;
    }
    function chitiet_sp($a)
    {
        $query =  "SELECT * from product WHERE ID = $a";

        $result = $this->conn->query($query);

        $data = mysqli_fetch_array($result);
        return $data;
    }
    
}
?>
