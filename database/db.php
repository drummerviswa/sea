<?php
class Database
{
    private $con;
    public function connect()
    {
        include_once("constants.php");
        $this->con = new mysqli(HOST, USER, PASS, DB);

        if ($this->con) {
            return $this->con;
        }
        return mysqli_error($this->con) . "DATABASE IS NOT CONNECTED";
    }
}

// $db = new Database();
// $db->connect();
