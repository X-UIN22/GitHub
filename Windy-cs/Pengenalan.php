<?php 
echo 'halo';
//oprator mtk
$x = 5;
$y = 4;
$kali =$x * $y;
$bagi =$x / $y;
$kurang =$x - $y;
$tambah =$x + $y;

echo '<br> hasil kali adalah = '.$kali;
echo '<br> hasil bagi adalah = '.$bagi;
echo '<br> hasil kurang adalah = '.$kurang;
echo '<br> hasil tambah adalah = '.$tambah;

//strlen untung menghitung panjang karakter termasuk spasi
$kota = 'Bandung dingin';
echo '<br>';
echo strlen($kota);
echo '<br>';
echo strpos($kota,'i');

//konstanta untuk menyimpan nilai tetap
echo '<br>';
define('nilai_phi',3.14);
echo 'nilai phi adalah ', nilai_phi;

//perbandingan sederhana (berurutan)
echo '<br>';
$bulann= 11;
switch ($bulann) {
	case 1 :echo 'jan'; break;
	case 2 :echo 'feb'; break;
	case 3 :echo 'mar'; break;
	case 4 :echo 'apr'; break;
	case 5 :echo 'mei'; break;
	case 6 :echo 'jun'; break;
	case 7 :echo 'jul'; break;
	case 8 :echo 'agu'; break;
	case 9 :echo 'sep'; break;
	case 10 :echo 'okt'; break;
	case 11 :echo 'nov'; break;
	case 12 :echo 'des'; break;
	default:echo 'input salah';break;
}

//perbandingan kompleks (dengan operator == != > < >= <=)
echo '<br>';
$negara = 'Thailand';
if ($negara=='Thailand') {
	echo 'mata uang bath';}
else if ($negara=='Jepang') {
	echo 'mata uang yen';}
else if ($negara=='Indonesia') {
	echo 'mata uang Rupiah';}
else  
	{echo 'mata uang bath';}
//
 echo '<br>';
 $cuaca = 'hujan';
 if($cuaca != 'hujan')
 	{echo 'berangkat kuliah';}
else 
	{echo 'tidak berangkat kuliah';}
//

echo '<br>';
$nilai = 74.5;
if ($nilai >= 90 && $nilai <= 100) 
	{echo 'Indeks Niai A';}
else if ($nilai >= 75 && $nilai <= 90)
	{echo 'Indeks Niai B';}
else if ($nilai >= 60 && $nilai <= 75) 
	{echo 'Indeks Niai C';}
else if ($nilai >= 0 && $nilai <= 60) 
	{echo 'Indeks Niai D';}
else {echo 'input salah !'; }

// 
echo '<br>';
$bulan = 'Mar';
$tanggal = 19;

if( ($bulan =="Mar" && $tanggal>= 21) || ($bulan=="Apr"&& $tanggal<= 19))
		{echo "Aries";}

	else if (($bulan =="Apr" && $tanggal>= 20) || ($bulan=="Mei"&& $tanggal<= 20))
		{echo "Taurus";}

	else if (($bulan =="Mei" && $tanggal>= 21) || ($bulan=="Jun"&& $tanggal<= 20))
		{echo "Gemini";}

	else if (($bulan =="Jun" && $tanggal>= 21) || ($bulan=="Jul"&& $tanggal<= 22))
		{echo "Cancer";}

	else if (($bulan =="Jul" && $tanggal>= 23) || ($bulan=="Agu"&& $tanggal<= 22))
		{echo "Leo";}

	else if (($bulan =="Agu" && $tanggal>= 23) || ($bulan=="Sep"&& $tanggal<= 22))
		{echo "Virgo";}

	else if (($bulan =="Sep" && $tanggal>= 23) || ($bulan=="Okt"&& $tanggal<= 22))
		{echo "Libra";}

    else if (($bulan =="Okt" && $tanggal>= 23) || ($bulan=="Nov"&& $tanggal<= 21))
		{echo "Scorpio";}

    else if (($bulan =="Nov" && $tanggal>= 22) || ($bulan=="Des"&& $tanggal<= 21))
		{echo "Sagitarius";}

	else if (($bulan =="Des" && $tanggal>= 22) || ($bulan=="Jan"&& $tanggal<= 19))
		{echo "Carpicon";}

    else if (($bulan =="Jan" && $tanggal>= 20) || ($bulan=="Feb"&& $tanggal<= 19))
		{echo "Aquarius";}

    else if (($bulan =="Feb" && $tanggal>= 19) || ($bulan=="Mar"&& $tanggal<= 20))
		{echo "Pisces";}

	else
		{echo "Input Salah";}

	//Perulangan for (increment)

echo '<br>';
for ($no=1; $no<=10 ; $no+=1) 
        {echo '<br>'.$no;}

//Perulangan for (decrement)
    echo '<br>';
for ($no=100; $no>=10 ; $no-=10) 
        {echo '<br>'.$no;}

//perulangan while maju (increment)
    echo '<br>';
    $angka = 1;
    while($angka <= 20)

	{
		$angka += 2;
		echo '<br/>'.$angka;
	}
	//perulangan while mundur (decrement)
    echo '<br>';
    $angka = 20;
    while($angka >= 0)

	{
		$angka -= 5;
		echo '<br/>'.$angka;
	}

//perulangan do while maju (increment)
	echo '<br/>';
	$urutan = 0;
	do{
		$urutan+= 2;
		echo '<br/>'.$urutan;

	}
	while($urutan<=10);

		//perulangan do while mundur (decrement)
	echo '<br/>';

	$urutan = 100;
	do{
		$urutan-= 20;
		echo '<br/>'.$urutan;

	}
	while($urutan>=0);

	//array untuk menyimpan banyak nilai
	echo '<br/>';
	$buah =['apel','jeruk','mangga','anggur'];
	echo $buah[0];

  ?>