<?php
    require "../controllers/manufacturerController.php";

    $manufacturerController = new ManufacturerController();

    $manufacturers = $manufacturerController->listManufacturers();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>List of Manufacturers</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="container">
    <a class="btn btn-primary" href="manufacturer_add.php">Add manufacturer</a>
    <br>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <td>Manufacturer</td>
            <td>URL</td>
            <td>Logo</td>
            <td>Actions</td>
        </thead>
        <tbody>
        <?php
            if ($manufacturers) {
                   foreach ($manufacturers as $manufacturer) {
                      echo "<tr>
                            <td>". $manufacturer['name']. "</td>
                            <td>". $manufacturer['url']. "</td>
                            <td><img height='60px' width='100px' src='../../images/manufacturers/". $manufacturer['logo']. "' /></td>
                            <td>
                                <a class='btn btn-primary' href='manufacturer_edit.php?id=" . $manufacturer['id'] . "'>Edit</a>
                                <a class='btn btn-danger' href='manufacturer_delete.php?id=" . $manufacturer['id'] . "'>Delete</a>

                            </td>
                          </tr>";
                }
            } else {
                echo 'No results';
            }
        ?>
        </tbody>
    </table>

</body>

</html>
<script src="../../lib/jquery-3.2.1.min.js" type="application/javascript"></script>
<script src="../../lib/bootstrap.min.js" type="application/javascript"></script>
<script src="../../js/sprite.js" type="application/javascript"></script>
