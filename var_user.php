<?php
 // definisikan variables
  $nama = 'Amelia Putri Royani';
  $umur = 21;
  $berat = 55.4;

echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';

echo "<br/>Hello $nama Apakabar";

?>


echo "<br>"

// variable system
 echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
 echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

 echo "<br>"

// variable konstan
// define: Untuk memanggil variable konstanta
define('PELAJARAN', 'Pemograman Web');

echo PELAJARAN;


?>