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


?>
