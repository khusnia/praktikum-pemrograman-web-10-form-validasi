<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<div class="container">
<h2>Form Pendaftaran Siswa</h2>
	<form action="simpanpendaftran.php" method="post">
		<div class="form-group">
			<label>Nama Lengkap:</label>
			<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama" />
		</div>
		<div class="form-group">
			<label>Jenis Kelamin:</label>
			<input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukkan Jenis Kelamin" />
		</div>
		<div class="form-group">
			<label>NISN:</label>
			<input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN" />
		</div>
		<div class="form-group">
			<label>NIK:</label>
			<input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN" />
		</div>
		<div class="form-group">
			<label>Tempat Lahir:</label>
			<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat" />
		</div>
		<div class="form-group">
			<label>Tanggal lahir:</label>
			<input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Bulan Tahun" />
		</div>
        <div class="form-group">
			<label>Nomor Registrasi:</label>
			<input type="number" name="nomor_regis" class="form-control" placeholder="Masukkan Nomor" />
		</div>
		<div class="form-group">
			<label>Agama:</label>
			<input type="text" name="agama" class="form-control" placeholder="Masukkan Agama" />
		</div>
		<div class="form-group">
			<label>Kewarganegaraan:</label>
			<input type="text" name="kewarganegaraan" class="form-control" placeholder="Masukkan Kewarganegaraan" />
		</div>
		<div class="form-group">
			<label>Berkebutuhan Khusus:</label>
			<input type="text" name="kebutuhan_khusus" class="form-control" placeholder="Masukkan Riwayat" />
		</div>
		<div class="form-group">
			<label>Alamat:</label>
			<textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat" ></textarea>
		</div>
		<div class="form-group">
			<label>RT:</label>
			<input type="number" name="rt" class="form-control" placeholder="Masukkan RT" />
		</div>
		<div class="form-group">
			<label>RW:</label>
			<input type="number" name="rw" class="form-control" placeholder="Masukkan RW" />
		</div>
		<div class="form-group">
			<label>Nama Dusun:</label>
			<input type="text" name="nama_dusun" class="form-control" placeholder="Masukkan Nama Dusun" />
		</div>
		<div class="form-group">
			<label>Kode Pos:</label>
			<input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Kode Pos" />
		</div>
		<div class="form-group">
			<label>Lintang:</label>
			<input type="text" name="lintang" class="form-control" placeholder="Masukkan Lintang" />
		</div>
		<div class="form-group">
			<label>Bujur:</label>
			<input type="text" name="bujur" class="form-control" placeholder="Masukkan Bujur" />
		</div>
		<div class="form-group">
			<label>Tempat Tinggal:</label>
			<input type="text" name="tempat_tinggal" class="form-control" placeholder="Masukkan Tempat Tinggal" />
		</div>
		<div class="form-group">
			<label>Moda Transportasi:</label>
			<input type="text" name="transport" class="form-control" placeholder="Masukkan Moda Transportasi" />
		</div>
		<div class="form-group">
			<label>Nomor KKS:</label>
			<input type="text" name="nomor_kks" class="form-control" placeholder="Masukkan Nomor KKS" />
		</div>
		<div class="form-group">
			<label>Anak ke- berapa:</label>
			<input type="number" name="bujur" class="form-control" placeholder="Masukkan Anak ke-" />
		</div>
		<div class="form-group">
			<label>Penerima KPS:</label>
			<input type="text" name="penerima_kps" class="form-control" placeholder="Masukkan Keterangan" />
		</div>
		<div class="form-group">
			<label>Nomor KPS:</label>
			<input type="text" name="nomor_kps" class="form-control" placeholder="Masukkan Nomor KPS" />
		</div>

		<button type="submit" name="Kirim" class="btn btn-primary">Kirim</button>





        	


	</form>
</div>
</body>
</html>
