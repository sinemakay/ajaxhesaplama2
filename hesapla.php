<?php
$sayi1 = $_POST['sayi1']; 
$sayi2 = $_POST['sayi2'];
$islem = $_POST['islem'];

if ($islem == 'toplama') { 
	$sonuc = $sayi1 + $sayi2;
} else if ($islem == 'cikarma') {
	$sonuc = $sayi1 - $sayi2;
} else if ($islem == 'carpma') {
	$sonuc = $sayi1 * $sayi2;
} else if ($islem == 'bolme') {
	if ($sayi2 != 0) { 
		$sonuc = $sayi1 / $sayi2;
	} else {
		$sonuc = "Sıfıra bölme hatası!";
	}
}

echo $sonuc; 
?>
