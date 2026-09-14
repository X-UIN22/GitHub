<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"></head>
<body>
<center>
	<div style="width: 30%;">
	<form method="post" action="create_covid.php">
		<br/><input name="rank" class="form-control" placeholder="RANK" required />
		<br/><input name="country" class="form-control" placeholder="COUNTRY" required />
		<br/><input name="continent" class="form-control" placeholder="COUNTINENT" required />
		<br/><input name="cases_2020" class="form-control" placeholder="CASES IN 2020" required />
		<br/><input name="percent_population" class="form-control" placeholder="% OF POPULATION" required />
		<br><input type="submit" name="tombol_simpan" value="SAVE" class="btn btn-warning btn-sm">
<br><a href="read_covid.php">BACK</a>
</form>
</div>
<?php
if(isset($_POST['tombol_simpan']))
{
	include 'koneksi.php';
	$kueri = "insert into covid values(
	         '$_POST[rank]',
	         '$_POST[country]',
	         '$_POST[continent]',
	         '$_POST[cases_2020]',
	         '$_POST[percent_population]')";

	    mysqli_query($koneksi,$kueri);
	    header('location:read_covid.php');
}  ?>
</center></body></html>