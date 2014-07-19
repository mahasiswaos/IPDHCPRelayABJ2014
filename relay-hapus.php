<?php
require './koneksi.php';
$id = $_GET['id'];

$api->write("/ip/dhcp-relay/remove", false);
$api->write("=.id=$id");
$api->read();
?>
<br/>
<div class="container">
    
    <div class="panel panel-info">
        <div class="panel-heading">
            informasi hapus
        </div>
        <div class="panel-body">
            ID <strong><?php echo $id; ?></strong> brhasil bro di hapus!!!!!
            <br/>
            <br/>
            <a href="view_relay.php" class="btn btn-info">
                <i class="glyphicon glyphicon-backward"></i> kembali
            </a>
        </div>
    </div>
</div>