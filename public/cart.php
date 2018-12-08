<?php
require '../vendor/autoload.php';
use jokodm\Datamining\Klasifikasi\DecisionTree;
use jokodm\Datamining\Dataset\Demo\PenerimaanPekerja;

$dataset = new PenerimaanPekerja();

$klasifikasi = new DecisionTree();
$klasifikasi->train($dataset->getSamples(),$dataset->getTargets());
//Status,Test Tertulis,Hubungan Sosial,Kinerja
$pred = $klasifikasi->predict(['Lajang', 'Cukup', 'Buruk', 'Baik']);

if ($pred == "Ya") {
	echo "Diterima bekerja";
} else {
	echo "Tidak diterima";
}
