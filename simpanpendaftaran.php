<?php
include "koneksi.php";

$sql = "INSERT INTO data_siswa (nama_lengkap,jenis_kelamin,nisn,nik,tempat_lahir,tanggal_lahir,nomor_regis,agama,kewarganegaraan,kebutuhan_khusus,alamat,rt,rw,nama_dusun,kode_pos,lintang,bujur,tempat_tinggal,transport,nomor_kks,anak_ke,penerima_kps,nomor_kps) VALUES('Khusnia Nur Rachmah','Perempuan','0007510010','3578204206000003','Denpasar','07/02/2000','1','Islam','WNI','Tidak','Wiyung Surabaya','2','3','Gemol','60229','-90 41.20338','-180 41.20338','Rumah bersama Orang Tua','Kendaraan Pribadi','001','1','Ya','0001')";
$hasil=mysqli_query($kon,$sql);
if ($hasil) {
	echo "Berhasil simpan data siswa";
	exit;
}
else {
	echo "Gagal simpan data siswa";
	exit;
}
?>