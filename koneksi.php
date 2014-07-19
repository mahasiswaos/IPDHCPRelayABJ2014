<title>IP ADDRESS</title>
<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.css" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<br/>
<br/>
<br/>
<br/>


<?php

require './routeros_api.class.php';

$api = new routeros_api();

if (!$api->connect('192.168.56.10', 'admin', '')) {
    
?>

<div class="col-sm-3"></div>
<div class="col-sm-5">

<div class="panel panel-danger">
    <div class="panel-heading">
        INFORMASI
    </div>
    <div class="panel-body">
        KONEKSI gagal BRO
    </div>
</div>
</div>
<?php } ?>
