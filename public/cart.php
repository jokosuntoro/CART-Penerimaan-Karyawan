<?php
require '../vendor/autoload.php';
use jokodm\Datamining\Klasifikasi\DecisionTree; //ubah
use jokodm\Datamining\Dataset\Demo\PenerimaanPekerja; //ubah

$dataset = new PenerimaanPekerja(); //ubah

$klasifikasi = new DecisionTree(); //ubah
$klasifikasi->train($dataset->getSamples(),$dataset->getTargets());

$txtNama = $_POST['txtNama']; //ubah
$numUsia = $_POST['numUsia']; //ubah
$status = $_POST['status']; //ubah
$test = $_POST['tes']; //ubah
$sosial = $_POST['sosial']; //ubah
$kinerja = $_POST['kinerja']; //ubah

//Status,Test Tertulis,Hubungan Sosial,Kinerja
$pred = $klasifikasi->predict([$status, $test, $sosial, $kinerja]); //ubah

if ($pred == "Ya") {
	echo "Diterima bekerja";
} else {
	echo "Tidak diterima";
}
