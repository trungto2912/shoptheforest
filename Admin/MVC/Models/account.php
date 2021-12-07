<?php
require_once("model.php");
class Account extends Model
{
    var $table = "account";
    var $contens = "ID";
    function phanquyen(){
        $query = "SELECT * from phanquyen ORDER BY MaQuyen DESC ";

        require("result.php");

        return $data;
    }
    
}