<?php 
    class Connection{
        var $conn;
        function __construct()
        {
            //Thong so ket noi CSDL
            $severname ="mysql5045.site4now.net"; 
            $username ="a7d83e_forest";
            $password ="trungto2912"; 
            $db_name ="db_a7d83e_forest";
 
            //Tao ket noi CSDL
            $this->conn = new mysqli($severname,$username,$password,$db_name);
            $this->conn->set_charset("utf8");

            //check connection
            if ($this->conn->connect_error) {
		        die("Connection failed: " . $this->conn->connect_error);
		    }
        }

    }
?>
