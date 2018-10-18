<?php
require "../models/DBManager.php";


class ManufacturerController {
    private $dbManager;

    //Constructor
    public function __construct()
    {
        $this->dbManager = new DBManager();
    }

    //List Manufacturer Method
    public function listManufacturers(){
        $this->dbManager->Connect();
        return $this->dbManager->listManufacturers();
    }

    //Add Manufacturer Method
    public function addManufacturer($data){
        $this->dbManager->Connect();
        return $this->dbManager->addManufacturer($data);
    }

    //Edit Manufacturer Method
    public function editManufacturer($data){
        $this->dbManager->Connect();
        return $this->dbManager->editManufacturer($data);
    }

    //Delete Manufacturer Method
    public function deleteManufacturer($id){
        $this->dbManager->Connect();
        return $this->dbManager->deleteManufacturer($id);
    }

    //Get Manufacturer
    public function getManufacturer($id){
        $this->dbManager->Connect();
        return $this->dbManager->getManufacturer($id);
    }
}

?>