<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

<?php

require 'koneksi.php';

$name = $_POST['name'];
$int = $_POST['interface'];
$dhcp = $_POST['dhcp-server'];
$local = $_POST['local-address'];

$api->write("/ip/dhcp-relay/add", false);
$api->write("=name=" . $name, false);
$api->write("=interface=" . $int, false);
$api->write("=dhcp-server=" . $dhcp, false);
$api->write("=local-address=" . $local);
$var = $api->read();
?>
<br/>
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Informasi Penambahan IP pada DHCP-RELAY
        </div>
        <div class="panel-body">
            IP Address dengan address <?php echo $addr; ?>
            telah berhasil di tambahkan pada Mikrotik.
            <br/>
            <br/>
            <a class="btn btn-info" href="view_relay.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>
