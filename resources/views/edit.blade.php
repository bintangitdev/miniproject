<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<br/>
	<br/>

	<h3 style="margin-bottom:10px; margin-left:10px; text-align:center;">Edit Pegawai</h3>
	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" style="margin-left:630px">
	{{ csrf_field() }}
	<div class="container">
			<div class="form-group w-50 mb-4">
				<input type="hidden" name="id" require="required" class="form-control" id="id" value="{{ $p->pegawai_id }}">
			</div>
			<div class="form-group w-50 mb-4">
				<label class="form-label">Nama</label>
				<input type="text" name="nama" require="required" class="form-control" id="nama" value="{{ $p->pegawai_nama }}">
			</div>
			<div class="form-group w-50 mb-4">
				<label class="form-label">Jabatan</label>
				<input type="text" name="jabatan" require="required" class="form-control" id="jabatan" value="{{ $p->pegawai_jabatan }}">
			</div>
			<div class="form-group w-50 mb-4">
				<label class="form-label">Umur</label>
				<input type="number" name="umur" require="required" class="form-control" id="umur" value="{{ $p->pegawai_umur }}">
			</div>
			<div class="form-group w-50 mb-4">
				<label  class="form-label">Alamat</label>
				<textarea name="alamat" require="required" class="form-control" id="alamat" rows="5">{{ $p->pegawai_alamat }}</textarea>
			</div>
		<!-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> -->
		
		<a class="btn btn-secondary" style="margin-right:430px" href="/pegawai">Kembali</a>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
</div>
	</form>
	@endforeach


</body>
</html
