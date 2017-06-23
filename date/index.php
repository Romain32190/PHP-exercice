<?php


print_r('Exercice1 :');
echo date('d-m-Y');


print_r('Exercice2 : ');
echo date('d-m-y');


print_r('Exercice3 : ');
echo date('l j F Y');
setlocale (LC_TIME, 'fr_FR.utf8','fra');
echo (strftime("%A %d %B %Y"));

print_r('Exercice4 : ');
echo time();
echo mktime(15,0,0,8,2,2016);

print_r('Exercice5:');
$date1 = "23/06/2017";
		$date2 = "16/05/2016";

		list($jour1, $mois1, $annee1) = explode('/', $date1);
		list($jour2, $mois2, $annee2) = explode('/', $date2);

		$timestamp1 = mktime(0,0,0,$mois1,$jour1,$annee1);
		$timestamp2 = mktime(0,0,0,$mois2,$jour2,$annee2);
		$nbJours = abs($timestamp2 - $timestamp1)/86400;
		echo "Nombre de jours : ".$nbJours;

print_r('Exercice6 :');
$nombredejours = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo $nombredejours;

print_r('Exercice7 : ');
echo date("d/m/Y",strtotime('+20 days'));

print_r('Exercice8 : ');

echo date("d/m/Y",strtotime('-22 days'));



?>
