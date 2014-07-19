<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

<?php
require './koneksi.php';

$id = $_POST['id'];
$name = $_POST['name'];
$int = $_POST['interface'];
$dhcp = $_POST['dhcp-server'];
$local = $_POST['local-address'];


$api->write("/ip/dhcp-relay/set", false);
$api->write("=.id=" . $id, false);
$api->write("=name=" . $name, false);
$api->write("=interface=" . $int, false);
$api->write("=dhcp-server=" . $dhcp, false);
$api->write("=local-address=" . $local);
$var = $api->read();
?>
<div class="container">
    
    <div class="panel panel-info">
        <div class="panel-heading">
            Informasi bahwa IP DHCP-RELAY telah berhasil
        </div>
        <div class="panel-body">
            IP Address dengan ID <strong><?php echo $id; ?></strong>telah berhasil di ubah pada Mikrotik.
            <br/>
            <br/>
            <a href="view_relay.php" class="btn btn-info">
                <i class="glyphicon glyphicon-backward"></i> kembali
            </a>
        </div>
    </div>
</div>
