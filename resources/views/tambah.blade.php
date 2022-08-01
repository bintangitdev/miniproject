<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	
<br/>
	<br/>
	<h3 style="margin-bottom:10px; margin-left:10px; text-align:center;">Tambah Data Pegawai</h3>

	<br/>
	<br/>

	<form action="/pegawai/joindb" method="post" style="margin-left:630px">
		{{ csrf_field() }}
		<div class="container">

			<div class="form-group w-50 mb-4">
				<!-- <label for="exampleInputName" class="form-label">Nama</label> -->
				<input type="text" name="nama" require="required" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Name">
			</div>
			<div class="form-group w-50 mb-4">
				<!-- <label for="exampleInputJabatan" class="form-label">Jabatan</label> -->
				<input type="text" name="jabatan" require="required" class="form-control" id="jabatan" aria-describedby="emailHelp" placeholder="Jabatan">
			</div>
			<div class="form-outline w-50 mb-4">
				<!-- <label for="exampleInputUmur" class="form-label">Umur</label> -->
				<input type="number" name="umur" require="required" class="form-control" id="umur" aria-describedby="emailHelp"  placeholder="Umur">
			</div>
			<div class="form-outline mb-4 w-50">
				<!-- <label for="exampleInputAlamat" class="form-label">Alamat</label> -->
				<!-- <input type="text" name="nama" require="required" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat"> -->
				<textarea name="alamat" required="required" placeholder="Alamat"  class="form-control" rows="5"></textarea>
			</div>
</div>
<a class="btn btn-secondary" style="margin-right:500px" href="/pegawai"> Kembali</a>
<button type="submit" class="btn btn-primary">Submit</button>

	</form>

	<!-- <form action="/pegawai/joindb" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form> -->

</body>
</html>
