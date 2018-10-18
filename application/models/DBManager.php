<?php
define ("DB", "spriting");
require "../config/config.php";


class DBManager
{
    //connection Data
    private $server, $user, $passwd;

    //Connection Ids
    private $ConnID, $QueryID, $MysqliID;

    //Constructor
    public function __construct()
    {
        $conf = new Configuration();
        $this->server = $conf->db_server;
        $this->user = $conf->db_user;
        $this->passwd = $conf->db_passwd;
    }

    //Destructor
    public function __destruct()
    {
        $this->ConnID->close();
        $this->MysqliID->close();
    }

    //Connecting to server
    public function Connect()
    {
        $this->ConnID = new mysqli ($this->server, $this->user, $this->passwd);
        $this->MysqliID = new mysqli ($this->server, $this->user, $this->passwd, DB);
    }

    //List Manufacturers
    public function listManufacturers(){
        $result = $this->MysqliID->query('SELECT * FROM manufacturers');
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        $result->free();
        return $rows;
    }

    public function addManufacturer($data){
        $name = $this->MysqliID->real_escape_string($data['man_name']);
        $url  = $this->MysqliID->real_escape_string($data['man_url']);
        $logo = $this->MysqliID->real_escape_string($data['man_logo']);

        $result = $this->MysqliID->query("INSERT INTO manufacturers (name, url, logo) VALUES ('$name', '$url', '$logo')");
        return $result;
    }

    public function getManufacturer($_id){
        $id = $this->MysqliID->real_escape_string($_id);
        $result = $this->MysqliID->query("SELECT * FROM manufacturers WHERE id = $id");
        $row = $result->fetch_all(MYSQLI_ASSOC);
        $result->free();
        return $row;
    }

    public function editManufacturer($data){
        $name   = $this->MysqliID->real_escape_string($data['man_name']);
        $url    = $this->MysqliID->real_escape_string($data['man_url']);
        $logo   = $this->MysqliID->real_escape_string($data['man_logo']);
        $id     = $this->MysqliID->real_escape_string($data['id']);

        $result = $this->MysqliID->query("UPDATE manufacturers SET name = '$name', url = '$url', logo = '$logo' WHERE id = $id");
        return $result;
    }

    public function deleteManufacturer($_id){
        $id = $this->MysqliID->real_escape_string($_id);
        $result = $this->MysqliID->query("DELETE FROM manufacturers WHERE id = $id");
        return $result;
    }
}
?>