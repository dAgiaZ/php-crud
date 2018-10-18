<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Adding Manufacturer</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/filepond.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
    <script src="../../lib/filepond.min.js"></script>
</head>
<body class="container">
<form action="../controllers/spriter.php" method="post" enctype="multipart/form-data" id="man_form">
    <input type="hidden" value="addManufacturer" id="action" name="action" />
    <div class="form-group">
        <label>Manufacturer</label>
        <input type="text" id="man_name" name="man_name" class="form-control" placeholder="Manufacturer's name" />
    </div>
    <div class="form-group">
        <label>URL</label>
        <input type="text" id="man_url" name="man_url" class="form-control" placeholder="Manufacturer's url" />
    </div>
    <div class="form-group">
            <input type="file" id="file_input" name="file_input" />
    </div>
    <input class="btn btn-primary" type="submit" id="submit_btn" value="Save" />
</form>
</body>
<script src="../../lib/jquery-3.2.1.min.js"></script>
<script src="../../lib/bootstrap.min.js"></script>
<!--<script src="../../lib/dropzone.js"></script>-->

<script src="../../js/sprite.js"></script>
</html>
