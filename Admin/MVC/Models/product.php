<?php
require("model.php");
class Product extends Model
{

    var $table = "product";
    var $contens = "ID";
   
    function searchName($a)
    {
        $a = "'%".$a."%'";
        $query = "SELECT * FROM product WHERE Name LIKE $a LIMIT 0,9";
        require("result.php");

        return $data;

    }
    function danhmuc()
    {
        $query =  "SELECT * from category";
        require("result.php");

        return $data;

    }
    
}
