<?php
class User
{
    private $database;
    function __construct()
    {
        include_once("../database/db.php");
        $db = new Database();
        $this->con = $db->connect();
        if ($this->con) {
            // echo "Connected";
        }
    }
    // Checking user is registered or not...
    private function emailExists($email)
    {
        $pre_stmt = $this->con->prepare("SELECT id FROM user WHERE email = ? ");
        $pre_stmt->bind_param("s", $email);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        if ($result->num_rows > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function createUserAccount($username, $email, $password, $usertype)
    {
        if ($this->emailExists($email)) {
            return "EMAIL ALREADY REGISTERED";
        } else {
            $password_hash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 8]);
            $date = date("Y-m-d");
            $notes = "";
            $pre_stmt = $this->con->prepare("INSERT INTO `user`(`username`, `email`, `password`, `register_date`, `last_login`, `notes`, `usertype`) VALUES (?,?,?,?,?,?,?)");
            $pre_stmt->bind_param("sssssss", $username, $email, $password_hash, $date, $date, $notes, $usertype);
            $result = $pre_stmt->execute() or die($this->con->error);
            if ($result) {
                return $this->con->insert_id;
            } else {
                return "SOME ERROR";
            }
        }
        $pre_stmt = $this->con->prepare();
    }
    public function userLogin($email, $password)
    {
        $pre_stmt = $this->con->prepare("SELECT id,username,password,last_login FROM user WHERE email = ?");
        $pre_stmt->bind_param("s", $email);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        if ($result->num_rows < 1) {
            return "NOT REGISTERED";
        } else {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {
                $_SESSION["userid"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["last_login"] = $row["last_login"];

                //Here we are updating user last login time when he is performing login
                $last_login = date("Y-m-d h:m:s");
                $pre_stmt = $this->con->prepare("UPDATE user SET last_login = ? WHERE email = ?");
                $pre_stmt->bind_param("ss", $last_login, $email);
                $result = $pre_stmt->execute() or die($this->con->error);
                if ($result) {
                    return 1;
                } else {
                    return 0;
                }
            } else {
                return "PASSWORD_NOT_MATCHED";
            }
        }
    }
}

$user = new User();
// echo $user->createUserAccount("viswa", "admin@gmail.com", "viswa123", "Admin");
// echo $user->userLogin("admin@gmail.com", "viswa123");
// echo $_SESSION["username"];
