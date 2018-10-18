<?php
    require "manufacturerController.php";
    $manufacturerController = new ManufacturerController();

    $action = $_POST['action'];
    //Action manager
    switch ($action){
        case 'addManufacturer':
            $result = $manufacturerController->addManufacturer($_POST);
            if ($result) {
                header("Location: ../views/manufacturers_list.php");
            }
            break;
        case 'editManufacturer':
            $result = $manufacturerController->editManufacturer($_POST);
            if ($result) {
                header("Location: ../views/manufacturers_list.php");
            }
            break;
        case 'deleteManufacturer':
            $result = $manufacturerController->deleteManufacturer($_POST['id']);
            if ($result) {
                header("Location: ../views/manufacturers_list.php");
            }
            break;
    }

?>