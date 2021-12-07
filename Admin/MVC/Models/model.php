<?php
require_once("Connection.php");
class Model
{
    var $conn;
    var $table;
    var $contens;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function All()
    {
        $query = "SELECT * from $this->table ORDER BY $this->contens DESC ";

        require("result.php");

        return $data;
        
    }
    function find($id)
    {
        $query = "SELECT * from $this->table where $this->contens =$id";
        return $this->conn->query($query)->fetch_assoc();
    }
    function delete($id)
    {
        $query = "DELETE from $this->table where $this->contens=$id";
        
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('mess', 'Xóa thành công', time() + 2);
        } else {
            setcookie('messX', 'Xóa không thành công', time() + 2);
        }
        header('Location: ?mod=' . $this->table);
    }
    function add($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO $this->table($f) VALUES ($v);";

        $status = $this->conn->query($query);

        if ($status == true) {
            setcookie('mess', 'Thêm mới thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('messX', 'Thêm vào không thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        }
    }
    function update($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $query = "UPDATE $this->table SET  $v   WHERE $this->contens = " . $data[$this->contens];

        $result = $this->conn->query($query);
        
        if ($result == true) {
            setcookie('mess', 'Cập nhật thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('messX', 'Cập nhật thất bại', time() + 2);
            header('Location: ?mod=' . $this->table);
        }
    }
    function limit_all($a, $b)
    {
        $query =  "SELECT * from $this->table  ORDER BY $this->contens DESC limit $a,$b";

        require("result.php");

        return $data;
    }
    function count()
    {
        $query = "SELECT COUNT($this->contens) as tong FROM $this->table";

        return $this->conn->query($query)->fetch_assoc();
    }
}
