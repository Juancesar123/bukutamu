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
					<form action = "aksi_edit" method="post">
					<?php
					for($i=0;$i<count($edit_form);$i++){
					echo"
					<div class=\"form-group\">
						<label>Nama</label>
						<input class=\"form-control\" type=\"text\" name=\"nama\" placeholder=\"masukkan nama anda..\" value=\"".$edit_form[$i]->nama."\">
						<input class=\"form-control\" type=\"hidden\" name=\"id\" placeholder=\"masukkan nama anda..\" value=\"".$edit_form[$i]->id."\">
					</div>
					<div class=\"form-group\">
						<label>alamat</label>
						<textarea class=\"form-control\" name=\"alamat\" placeholder=\"masukkan alamat anda..\" value=\"".$edit_form[$i]->alamat."\">".$edit_form[$i]->alamat."</textarea>
					</div>
					<div class=\"form-group\">
						<label>Jenis Kelamin</label>
						<select class=\"form-control\" name=\"jk\">
							<option value=\"Laki-Laki\">Laki-Laki</option>
							<option value=\"Perempuan\">Perempuan</option>
						</select>
					</div>
					<div class=\"form-group\">
						<label>Nomor telpon</label>
						<input class=\"form-control\" value=\"".$edit_form[$i]->no_telpon."\"type=\"tel\" name=\"tlp\" placeholder=\"masukkan Nomor telpon anda...\">
					</div>
					<button class=\"btn btn-success\"type=\"submit\">Edit</button>";
					}
					?>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>