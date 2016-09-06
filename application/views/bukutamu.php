<html>
	<head>
		<title> latihan Buku tamu</title>
		<link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>">
	</head>
	<body>
		<div class="container">
			<div class = "row">
				<h2 class="title"><center>Form Buku Tamu</center></h2>
				<div class ="col-md-4">
					<form action = "insert_data" method="post">
						<div class="form-group">
							<label>Nama</label>
							<input class="form-control" type="text" name="nama" placeholder="masukkan nama anda..">
							<?php echo form_error('nama'); ?>
						</div>
						<div class="form-group">
							<label>alamat</label>
							<textarea class="form-control" name="alamat" placeholder="masukkan alamat anda.."></textarea>
							<?php echo form_error('alamat'); ?>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select class="form-control" name="jk">
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label>Nomor telpon</label>
							<input class="form-control" type="tel" name="tlp" placeholder="masukkan Nomor telpon anda...">
							<?php echo form_error('tlp'); ?>
						</div>
						<button class="btn btn-primary"type="submit">simpan</button>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<table class="table">
						<thead>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Jenis Kelamin</th>
							<th>Nomor Telpon</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php
							for($i=0;$i<count($raw_data);$i++){
								$id=$raw_data[$i]->id;
							echo"<tr>
							<td>".$raw_data[$i]->nama."</td>
							<td>".$raw_data[$i]->alamat."</td>
							<td>".$raw_data[$i]->jenis_kelamin."</td>
							<td>".$raw_data[$i]->no_telpon."</td>
							<td><a href=\"hapus_data/$id\" class=\"btn btn-danger\">Hapus</a><a href=\"$id\" class=\"btn btn-success\">update</button></td>
							</tr>";
							}
							?>
						</tbody>
					</table>
			</div>
		</div>
	</body>
</html>