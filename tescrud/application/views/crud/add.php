<html>
<head>
	<title> Aplikasi Parkir Kendaraan | Mall Indah </title>
	
</head>
<body>
<div class="navbar navbar-default">
		<div class="container">
			<h2>Halaman Tambah Data Parkir Kendaraan</h2>
		</div>
	</div>
    <?php //echo validation_errors(); ?>
    <a href="<?php echo base_url('crud/index');?> " class="btn btn-default">Kembali</a>
   <form action="<?php echo base_url('crud/aksi') ?>" method="post" class="form-horizontal">
   <div class="form-group">
       <label for="id_user" class="col-md-2 text-right"> No</label>
       <div class="col-md-10">
           <input type="number" name="id_user" class="form-control"  >
        </div>
    </div>
    <?php echo form_error('id_user'); ?>
    <div class="form-group">
        <label for="jenis_kendaraan" class="col-md-2 text-right"> Jenis Kendaraan</label>
        <div class="col-md-10">
            <input type="text" name="jenis_kendaraan" class="form-control" >
        </div>
    </div>
    <?php echo form_error('jenis_kendaraan'); ?>
    <div class="form-group">
        <label for="plat_kendaraan" class="col-md-2 text-right"> Plat Kendaraan</label>
        <div class="col-md-10">
            <input type="text" name="plat_kendaraan" class="form-control" >
        </div>
    </div>
    <?php echo form_error('plat_kendaraan'); ?>
    <div class="form-group">
        <label for="biaya_per_jam" class="col-md-2 text-right"> Biaya per Jam</label>
        <div class="col-md-10">
            <input type="text" name="biaya_per_jam" class="form-control" >
        </div>
    </div>
    <?php echo form_error('biaya_per_jam'); ?>
    <div class="form-group">
        <label for="lama_parkir" class="col-md-2 text-right"> Lama Parkir</label>
        <div class="col-md-10">
            <input type="text" name="lama_parkir" class="form-control" >
        </div>
    </div>
    <?php echo form_error('lama_parkir'); ?>
    <div class="form-group">
        <label class="col-md-2 text-right"></label>
        <div class="col-md-10">
            <input type="submit" name="btnSave" class="btn btn-primary" value="Simpan">
            <input type="reset" name="btnReset" class="btn btn-primary" value="Reset">
        </div>
    </div>
</form>