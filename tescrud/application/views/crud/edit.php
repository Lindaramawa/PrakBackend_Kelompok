<h2> Halaman Tambah Edit Data Parkir Kendaraan</h2>
   <a href="<?php echo base_url('crud/index');?> " class="btn btn-default">Kembali</a>
   <form action="<?php echo base_url('crud/update') ?>" method="post" class="form-horizontal">
   <div class="form-group">
       <label for="id_user" class="col-md-2 text-right"> No</label>
       <div class="col-md-10">
           <input type="text" value="<?php echo $crud->id_user; ?>" name="id_user" class="form-control" >
        </div>
    </div>
    <div class="form-group">
        <label for="jenis_kendaraan" class="col-md-2 text-right"> Jenis Kendaraan</label>
        <div class="col-md-10">
            <input type="text" name="jenis_kendaraan" class="form-control" ><?php echo $crud->jenis_kendaraan; ?>
        </div>
    </div>
    <div class="form-group">
        <label for="plat_kendaraan" class="col-md-2 text-right"> Plat Kendaraan</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $crud->plat_kendaraan; ?>" name="plat_kendaraan" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="biaya_per_jam" class="col-md-2 text-right"> Biaya per Jam</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $crud->biaya_per_jam; ?>" name="biaya_per_jam" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="lama_parkir" class="col-md-2 text-right"> Lama Parkir</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $crud->lama_parkir; ?>" name="lama_parkir" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 text-right"></label>
        <div class="col-md-10">
            <input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
            <input type="reset" name="btnReset" class="btn btn-primary" value="Reset">
        </div>
    </div>
</form>
