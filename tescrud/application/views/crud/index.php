<html>
<head>
	<title> Aplikasi Parkir Kendaraan | Mall Indah </title>
	
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container">
			<h2>Data Parkir Kendaraan</h2>
		</div>
	</div>
	<div class="container">
		<?php
		if($this->session->flashdata('success_msg')){ 
			?>
			<div class="alert alert-success">
				<?php echo $this->session->flashdata('success_msg');?>
			</div>
			<?php
			}
			?>
			<?php
			if($this->session->flashdata('eror_msg')){
				?>
				<div class="alert alert-success">
					<?php echo $this->session->flashdata('eror_msg');?>
			</div>
			<?php
			}
			?>
			<a href="<?php echo base_url('crud/add');?> " class="btn btn-primary">Tambah Data </a> 
			<br><br>
			<h2> Data Parkir</h2>
			<table class="table table-bordered table-reponsive">
				<thead>
					<tr>
						<td>No</td>
						<th>Jenis Kendaraan</th>
						<th>Plat Kendaraan</th>
						<th>Biaya per Jam</th>
						<th>Lama Parkir</th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
					<?php
					if($crud){
						foreach($crud as $Data){
							?>
							<tr>
								<td><?php echo $Data->id_user; ?></td>
								<td><?php echo $Data->jenis_kendaraan; ?></td>
								<td><?php echo $Data->plat_kendaraan; ?></td>
								<td><?php echo $Data->biaya_per_jam; ?></td>
								<td><?php echo $Data->lama_parkir; ?></td>
								<td>
									<a href="<?php echo base_url('crud/edit/'.$Data->id_user); ?> " class="btn btn-info"> Edit Data </a> <br><br>
									<a href="<?php echo base_url('crud/delete/'.$Data->id_user); ?>" class="btn btn-danger" onclick="return confirm('Yakin Mau di Hapus');"> Hapus Data </a>
								</td>
							</tr>
							<?php
							}
						}
						?>
						</tbody>
					</div>				
				</body>
				</html>