<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"></head>
<body>
<center>

<div style="width: 30%;">
	<form method="post" action="create_energy.php">
	<br><input class="form-control" name="rank" placeholder="RANK">
	<br><input class="form-control" name="country" placeholder="COUNTRY">
	<br><input class="form-control" name="city" placeholder="CITY">
	<br><input class="form-control" name="continent" placeholder="CONTINENT">
	<br><input class="form-control" name="energy_type" placeholder="ENERGY TYPE">
	<br><input class="form-control" name="production_mw" placeholder="PRODUCTION MW">
	<br><input class="form-control" name="co2_reduction" placeholder="CO2 REDUCTION">
	<br><input type="submit" name="tombol_simpan" value="SAVE" class="btn btn-warning btn-sm">
		<button>
	<a href="read_energy.php" style="text-decoration: none; color: white; background-color: blue;">BACK</a>
</button>
</form>
<?php 
	if(isset($_POST['tombol_simpan']))
	{
	include 'koneksi.php';
	$kueri = "insert into energy values('$_POST[rank]','$_POST[country]','$_POST[city]','$_POST[continent]','$_POST[energy_type]','$_POST[production_mw]','$_POST[co2_reduction]')";
	mysqli_query($koneksi,$kueri);
	header('location:read_energy.php');
}
?>

</center>
</body>
</html>