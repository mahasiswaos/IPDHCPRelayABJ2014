<title>PENAMBAHAN IP ADDRESS</title>
<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<?php
require './koneksi.php';
?>

<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Penambahan IP DHCP-RELAY
        </div>
        <div class="panel-body">
         <div class="container">  
             <form class="form-horizontal" method="post" action="relay_tambah_proses.php">
        <div class="container">
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
                   placeholder="ex. 192.168.1.2">
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-3">local-address</label>
            <div class="col-sm-3">
            <input type="text" name="local-address" class="form-control"
                   placeholder="ex. 202.134.12.1">
            </div>
            </div>
            <div class="form-group">
             <div class="col-sm-9">
            <h4 align="center"><button type="submit" name="submit" class="btn btn-primary">
                    simpan
             </button>
             <button type="reset" name="reset" class="btn btn-success">
                    reset
             </button></h4>
            </div>
            </div>
        

            