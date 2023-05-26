<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<div style="height: 10px; width: 10%; background-color: red;" title="..."></div>
</head>
<body>
	<div class="content-wrapper">
<?php

// koneksi ke mysql
 $masuk = mysqli_connect("localhost", "root", "", "data");

// mencari jumlah laki-laki dari database
$query = "SELECT count(*) AS data_calon_1 FROM pemilih WHERE pilih = 'calon_1'";
$hasil = mysqli_query($masuk ,$query);
$data  = mysqli_fetch_array($hasil);
$jum1 = $data['data_calon_1'];

// mencari jumlah perempuan dari database
$query = "SELECT count(*) AS data_calon_2 FROM pemilih WHERE pilih = 'calon_2'";
$hasil = mysqli_query($masuk ,$query);
$data  = mysqli_fetch_array($hasil);
$jum2 = $data['data_calon_2'];

// mencari jumlah perempuan dari database
$query = "SELECT count(*) AS data_calon_3 FROM pemilih WHERE pilih = 'calon_3'";
$hasil = mysqli_query($masuk ,$query);
$data  = mysqli_fetch_array($hasil);
$jum3 = $data['data_calon_3'];

// menghitung total mahasiswa
$total = $jum1 + $jum2 + $jum3;

// menghitung prosentase laki-laki dan perempuan
$prosen1 = $jum1/$total * 100;
$prosen2 = $jum2/$total * 100;
$prosen3 = $jum3/$total * 100;

// menentukan panjang grafik batang berdasarkan prosentase
$panjangGrafik1 = $prosen1 * 30 / 100;
$panjangGrafik2 = $prosen2 * 30 / 100;
$panjangGrafik3 = $prosen3 * 30 / 100;
?>

<h2>Statistik Mahasiswa Berdasarkan Jenis Kelamin</h2>

<p><b>Laki-laki</b> (Jumlah: <?php echo $jum1; ?> | <?php echo $prosen1; ?>%) <div style="height: 10px; width: <?php echo $panjangGrafik1; ?>%; background-color: red;" title="Laki-laki (Jumlah: <?php echo $jumCowok; ?> | <?php echo $prosen1; ?>%)"></div></p>

<p><b>Perempuan</b> (Jumlah: <?php echo $jum2; ?> | <?php echo $prosen2; ?>%) <div style="height: 10px; width: <?php echo $panjangGrafik2; ?>%; background-color: red;" title="Perempuan (Jumlah: <?php echo $jumCewek; ?> | <?php echo $prosen2; ?>%)"></div></p>

<p><b>Perempuan</b> (Jumlah: <?php echo $jum3; ?> | <?php echo $prosen3; ?>%) <div style="height: 10px; width: <?php echo $panjangGrafik3; ?>%; background-color: red;" title="Perempuan (Jumlah: <?php echo $jumCewek; ?> | <?php echo $prosen3; ?>%)"></div></p>
</div>
</body>
</html>
