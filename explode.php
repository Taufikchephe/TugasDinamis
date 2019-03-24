<?php 
	echo "CONTOH EXPLODE 1"."<br>";
	echo "Inventori 	: ";
	$inventory = " Meja, Kursi, Lemari, Komputer, Monitor, Proyektor";
	print_r($inventory);
	$inventoryurt = explode(",", $inventory);
	echo '<pre>';print_r($inventoryurt);echo'</pre>';
	echo "************************************************";
	echo "<br>"."<br>";

	echo "CONTOH EXPLODE 2"."<br>";
	echo "Mata Kuliah 	: ";
	$makul=" Agama, B.Inggris, Aljabar Linier, Pemrograman, Web Dinamis";
	print_r($makul);
	$makulurt = explode(",", $makul);
	echo '<pre>';print_r($makulurt);echo'</pre>';
	echo "************************************************";
	echo "<br>"."<br>";


	echo "CONTOH EXPLODE 3"."<br>";
	echo "Merk Laptop 	: ";
	$merk = " Dell, HP, Asus, Lenovo, Thosiba";
	print_r($merk);
	$merkurt = explode(",", $merk);
	echo'<pre>';print_r($merkurt);echo'</pre>';
	
	echo "************************************************";
	echo "<br>"."<br>";
	
	echo "CONTOH EXPLODE 4"."<br>";
	echo "Universitas di DIY 	: ";
	$univ = " STMIK EL-Rahma, Universitas Gajah Mada, Universitas Negri Yogyakarta, PGRI";
	print_r($univ);
	$univurt = explode(",", $univ);
	echo'<pre>';print_r($univurt);echo'</pre>';
	
	echo "************************************************";
	echo "<br>"."<br>";
	
	echo "CONTOH EXPLODE 5"."<br>";
	echo "Tanggal Lahir versi USA 	: ";
	$tgllhr = "04-11-199x";
	print_r($tgllhr);
	$tgllhrurt = explode("-", $tgllhr);
	echo'<pre>';print_r($tgllhrurt);echo'</pre>';
	$bln=$tgllhrurt[0];
	$tgl=$tgllhrurt[1];
	$thn=$tgllhrurt[2];

	echo "Tanggal Lahir versi INA 	: ";
	echo "$tgl - $bln - $thn <br>";
	echo "************************************************";
	echo "<br>"."<br>";
?>