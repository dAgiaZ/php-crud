<?php
    require "../controllers/manufacturerController.php";

    $manufacturerController = new ManufacturerController();

    $manufacturers = $manufacturerController->getManufacturer($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Editing Manufacturer</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">

</head>
<body class="container">
<?php
if ($manufacturers) {
    foreach ($manufacturers as $manufacturer) {
        echo "<h2>Are you sure about delete ". $manufacturer['name'] . "?</h2>";
        echo "<form action='../controllers/spriter.php' method='post' enctype='multipart/form-data' id='man_form'>
                    <input type='hidden' value='deleteManufacturer' id='action' name='action' />
                    <input type='hidden' value='". $manufacturer['id']. "' id='id' name='id' />
                    <a class='btn btn-default' href='manufacturers_list.php'>Cancel</a>
                    <input class='btn btn-primary' type='submit' value='Delete' />
                </form>";
    }
} else {
    echo 'No results';
}
?>
</body>
<script src="../../lib/jquery-3.2.1.min.js"></script>
<script src="../../lib/bootstrap.min.js"></script>
<script src="../../lib/dropzone.js"></script>
<script src="../../js/sprite.js"></script>
</html>