<?php
	$email='b191210068@sakarya.edu.tr';
	$sifre='123456';
	
	$tempmail=$_POST['email'];
	$tempsifre=$_POST['sifre'];
	
	if($tempmail==$email && $tempsifre==$sifre){
		header("Refresh:1; url=girisyapdogru.html");
		die("Kontrol Ediliyor...");
	}
	else{
		header("Location:girisyapyanlis.html");
	}
		
	
	
?>