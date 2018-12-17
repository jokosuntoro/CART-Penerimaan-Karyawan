<!DOCTYPE html>
<html>
<head>
	<title>:: Intelligent System ::</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h4 class="text-success text-center">
			Sistem Prediksi Penerimaan Karyawan
		</h4>
		<h5 class="text-success text-center">
			Knowledge based Application Using CART Algorithm
		</h5>
		<form class="form-horizontal" method="POST" action="actForm.php">
			<fieldset>
			<legend></legend>
			<div class="form-row">
			<div class="form-group col-md-8">
				<label class="col-form-label">Nama Lengkap</label>
					<input type="text" name="txtNama" class="form-control" placeholder="Nama Lengkap">
			</div>
			<div class="form-group col-md-4">
				<label class="col-form-label">Usia</label>
					<input type="number" name="numUsia" class="form-control" placeholder="Usia">
			</div>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Status</label>
					<div>
					<select name="status" class="form-control">
						<option value="++">--Pilih Status Perkawinan--</option>
						<option value="Lajang">Lajang</option>
						<option value="Menikah">Menikah</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Tes Tertulis</label>
					<div>
					<select name="tes" class="form-control">
						<option value="++">--Pilih Hasil Tes Tertulis--</option>
						<option value="Baik">Baik</option>
						<option value="Cukup">Cukup</option>
						<option value="Kurang">Kurang</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Hubungan Sosial</label>
					<div>
					<select name="sosial" class="form-control">
						<option value="++">--Pilih Hubungan Sosial--</option>
						<option value="Baik">Baik</option>
						<option value="Buruk">Buruk</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Kinerja</label>
					<div>
					<select name="kinerja" class="form-control">
						<option value="++">--Pilih Kinerja--</option>
						<option value="Baik">Baik</option>
						<option value="Buruk">Buruk</option>
					</select>
				</div>
			</div>	
			
			<div class="form-group">
					<button type="submit" class="btn btn-success btn-md">Proses</button>
					<button type="reset" class="btn btn-danger btn-md">Reset</button>
			</div>
			</fieldset>
		</form>
		<i>
		Created by Joko Suntoro <br>
		Algoritme: Classification and Regression Trees (CART) Algorithm
		</i>
	</div>
</body>
</html>	
