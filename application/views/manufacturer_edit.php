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
            echo "<form action='../controllers/spriter.php' method='post' enctype='multipart/form-data' id='man_form'>
                    <input type='hidden' value='editManufacturer' id='action' name='action' />
                    <input type='hidden' value='". $manufacturer['id']. "' id='id' name='id' />
                    <div class='form-group'>
                        <label>Manufacturer</label>
                        <input type='text' id='man_name' name='man_name' class='form-control' placeholder='Manufacturer's name' value='". $manufacturer['name']. "' />
                    </div>
                    <div class='form-group'>
                        <label>URL</label>
                        <input type='text' id='man_url' name='man_url' class='form-control' placeholder='Manufacturer's url' value='". $manufacturer['url']. "' />
                    </div>
                    <div class='form-group'>
                            <input type='text' name='man_logo' id='man_logo' value='". $manufacturer['logo']. "' />
                    </div>
                    <input class='btn btn-primary' type='submit' value='Save' />
                </form>";
        }
    } else {
        echo 'No results';
    }
?>
</body>
<script src="../../lib/jquery-3.2.1.min.js"></script>
<script src="../../lib/bootstrap.min.js"></script>
<script src="../../js/sprite.js"></script>
</html>