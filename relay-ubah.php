<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

<div class="container">


    <?php
    require './koneksi.php';

    $id = $_GET['id'];

    $api->write("/ip/dhcp-relay/print", false);
    $api->write("?.id=" . $id);
    $var = $api->read();
    ?>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Pengubahan IP DHCP-RELAY
        </div>
        <div class="panel-body">
           <div class="container">
               <form class="form-horizontal" method="post" action="relay_edit_proses.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="form-group">
            <label class="control-label col-sm-3">name</label>
            <div class="col-sm-3">
                <input type="text" name="name" class="form-control"
                       placeholder="ex. NAMA">
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-sm-3">interface</label>
            <div class="col-sm-3">
                <select name="interface" class="form-control">
                    <option value="ether1">ether1</option>
                    <option value="ether2">ether2</option>
                    <option value="ether3">ether3</option>
                    <option value="ether4">ether4</option>

                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">dhcp-server</label>
            <div class="col-sm-3">
                <input type="text" name="dhcp-server" class="form-control"
                       placeholder="ex. 192.168.17.1">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">local-address</label>
            <div class="col-sm-3">
                <input type="text" name="local-address" class="form-control"
                       placeholder="ex. 202.134.13.2">
            </div>
        </div>
       
                <div class="form-group">
            <button class="btn btn-large btn-primary" 
                    type="submit" name="submit">
                <i class="glyphicon btn-success glyphicon-floppy-saved"></i>
               Ubah
            </button>
        </div>
    </form>
</div>
            