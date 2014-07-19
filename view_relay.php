<title>DHCP-RELAY</title>
<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<?php
require 'koneksi.php';

$api->write("/ip/dhcp-relay/getall");
$tampil = $api->read();
//echo "<pre>";
//print_r($tampil);
//echo "</pre>";
?>
<br/>
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
        <h4 align="center"><th>IP-DHCP-RELAY</th></h4>
        </div>
        <div class="panel-body">
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>interface</th>
                <th>dhcp-server</th>
                <th>local-address</th>
                <th>action</th>
            </tr>
        </thead>
        <?php foreach ($tampil as $data) { ?>
            <tbody>
                <tr>
                    <td><?php echo $data['.id']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['interface']; ?></td>
                    <td><?php echo $data['dhcp-server']; ?></td>
                    <td><?php echo $data['local-address']; ?></td>
                    <td><a href="relay-ubah.php?id=<?php echo $data['.id']; ?>" class="btn btn-info">
                <i class="glyphicon glyphicon-edit"></i> 
                     ubah
                </a>
                        <a href="relay-hapus.php?id=<?php echo $data['.id']; ?>" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i> 
                     Hapus
                </a>
                    </tr>
                    </tbody>
                     <?php } ?>
                    </table>
            <h4 align="center"><a href="relay_add.php" class="btn btn-primary">
                 <i class="glyphicon glyphicon-plus"></i>Tambah</a></h4>
        </div>
        </div>
