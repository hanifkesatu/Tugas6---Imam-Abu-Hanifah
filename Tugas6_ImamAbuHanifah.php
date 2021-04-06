<!DOCTYPE html>
<!-- Tugas6 - Imam Abu Hanifah -->
<html>
<head> <!-- Membuat kepala web page -->
	<title>Kalkulator Sederhana by Imam Abu Hanifah</title> <!-- Untuk buat judul web page -->
	<link rel="stylesheet" type="text/css" href="Tugas6_ImamAbuHanifah.css"> <!-- Membuat style html dengan bantuan css dan Menghubungkan html dengan css dengan mengambil file "Tugas6_ImamAbuHanifah.css" -->
</head> <!-- Menutup tag kepala web page-->
<body> <!-- Membuat badan web page -->
	<?php 
	if(isset($_POST['hitung'])){ // untuk menangkap inputan dari form html yang diisikan dengan variabel 'hitung'
		$bil1 = $_POST['bil1']; // memeriksa data isi form dengan parameter bilangan1
		$bil2 = $_POST['bil2']; // memeriksa data isi form dengan parameter bilangan2
		$operasi = $_POST['operasi']; // membuat variabel dengan paramter operasi bilangan yang akan dihitung
		switch ($operasi) { // untuk mengecek operasi yang dipilih saat sebelum form disubmit
			case 'tambah':  // membuat pilihan sebuah operasi penjumlahan jika dipilih 
				$hasil = $bil1+$bil2; // jika dipilih maka memproses sebuah operasi tambah dari 2 parameter bil1 dan bil2
			break; // menghentikan proses switch jika dipilih tambah
			case 'kurang': // membuat pilihan sebuah operasi pengurangan jika dipilih 
				$hasil = $bil1-$bil2; // jika dipilih maka memproses sebuah operasi kurang dari 2 parameter bil1 dan bil2
			break; // menghentikan proses switch jika dipilih kurang
			case 'kali': // membuat pilihan sebuah operasi perkalian jika dipilih 
				$hasil = $bil1*$bil2; // jika dipilih maka memproses sebuah operasi kali dari 2 parameter bil1 dan bil2
			break; // menghentikan proses switch jika dipilih kali
			case 'bagi': // membuat pilihan sebuah operasi pembagian jika dipilih 
				$hasil = $bil1/$bil2; // jika dipilih maka memproses sebuah operasi bagi dari 2 parameter bil1 dan bil2
			break; // menghentikan proses switch jika dipilih bagi	
		}
	}
	?>
	<div class="kalkulator"> <!-- Membuat sebuah kelompok tag baru dengan mendefinisikan kelas dari CSS yang dinamai 'kalkulator'-->
		<h2 class="judul">KALKULATOR SEDERHANA</h2> <!-- membuat judul 'KALKULATOR' pada form dengan font size h2-->
		<form method="post" action="Tugas6_ImamAbuHanifah.php">	<!-- membuat form yang diambil dan diproses ke "Tugas6_ImamAbuHanifah.php"  -->
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama"> <!--Membuat inputan form yang dapat diisi dengan kelas yg dinamai bil, kemudian memberikan saran bilangan inputan sebelumnya dengan 'autocomplete', dan menampilkan text 'Masukan Bilangan Pertama' sebelum user mengisi form-->
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">  <!--Membuat inputan form yang dapat diisi dengan kelas yg dinamai bi2, kemudian memberikan saran bilangan inputan sebelumnya dengan 'autocomplete', dan menampilkan text 'Masukan Bilangan Kedua' sebelum user mengisi form-->
			<select class="opt" name="operasi"> <!-- Membuat dan menampilkan pilihan untuk melakukan operasi yang akan dipilih -->
				<option value="tambah">+</option> <!-- Menampilkan opsi 'tambah' untuk pemrosesan penjumlahan dari 2 parameter bil1 dan bil2, proses disini akan dikirimkan ke php-->
				<option value="kurang">-</option> <!-- Menampilkan opsi 'kurang' untuk pemrosesan pengurangan dari 2 parameter bil1 dan bil2, proses disini akan dikirimkan ke php-->
				<option value="kali">x</option> <!-- Menampilkan opsi 'kali' untuk pemrosesan perkalian dari 2 parameter bil1 dan bil2, proses disini akan dikirimkan ke php-->
				<option value="bagi">/</option> <!-- Menampilkan opsi 'bagi' untuk pemrosesan pembagian dari 2 parameter bil1 dan bil2, proses disini akan dikirimkan ke php-->
			</select> <!-- Menutup tag pilihan -->
			<input type="submit" name="hitung" value="Hitung" class="tombol"> <!-- Membuat tombol submit yang jika di pilih akan dikirim ke php untuk melakukan proses perrhitungan yang dinamai 'hitung' -->
		</form> <!-- Menutup tag Form -->
		<?php if(isset($_POST['hitung'])){ ?>  <!--memeriksa apakah submit dilakukan dari pengisian form sebelumnya -->
			<input type="text" value="<?php echo $hasil; ?>" class="bil"> <!-- jika form sudah terubmit maka akan menampilkan hasil dari proses operasi yang sudah dilakukan -->
		<?php }else{ ?> <!-- percabangan jika terdapat kondisi lain -->
			<input type="text" value="0" class="bil"> <!-- jika form belum disubmit maka yang ditampilkan pada hasil adalah '0' -->
		<?php } ?>			
	</div> <!-- Menutup tag kelompok -->
</body> <!-- Menutup badan web page -->
</html>

