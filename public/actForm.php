<?php
error_reporting(0);
require '../vendor/autoload.php';
use jokodm\Datamining\Klasifikasi\DecisionTree;
use jokodm\Datamining\Dataset\Demo\PenerimaanPekerja;

//load dataset
$dataset = new PenerimaanPekerja();
//set data training
$dataTrain = $dataset->getSamples();
$dataClass = $dataset->getTargets();

//gunakan algoritme
$dt = new DecisionTree();
$dt->train($dataTrain, $dataClass);

//data testing
$nama = $_POST['txtNama'];
$usia = $_POST['numUsia'];
$status = $_POST['status'];
$tes = $_POST['tes'];
$sosial = $_POST['sosial'];
$kinerja = $_POST['kinerja'];

//nilai prediksi
$pred = $dt->predict([$status,$tes,$sosial,$kinerja]);
//tampil di browser
if ($pred=="Ya") {
	$hasil = "<font color=blue>diprediksi <b>diterima bekerja</b></font>";
} else {
	$hasil = "<font color=red>diprediksi <b>tidak diterima bekerja</b></font>";
}
echo "<center><table border='1'>
	<tr>
		<td>Nama:</td>
		<td>$nama</td>
	</tr>
	<tr>
		<td>Usia:</td>
		<td>$usia</td>
	</tr>
	<tr>
		<td>Status:</td>
		<td>$status</td>
	</tr>
	<tr>
		<td>Hasil Tes:</td>
		<td>$tes</td>
	</tr>
	<tr>
		<td>Hubungan Sosial:</td>
		<td>$sosial</td>
	</tr>
	<tr>
		<td>Kinerja:</td>
		<td>$kinerja</td>
	</tr>
	<tr>
		<td colspan=2>$hasil</td>
	</tr>
</table><br>";
?>

<a href="index.php">Halaman Index</a>
</center>
