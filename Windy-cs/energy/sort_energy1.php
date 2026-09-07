<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"></head>
<body>
<center>
	<form method="post" action="search_energy.php">
		<br><input name="kata_kunci" placeholder="Ketik kata kunci...">
		<input type="submit" value="Cari!" class="btn btn-warning btn-sm">
	</form>

	<form method="post" action="sort_energy.php">
		<br><select name="urutan">
		<option value="rank_asc">RANK UP
		<option value="rank_desc">RANK DOWN
		<option value="country_asc">COUNTRY A-Z
		<option value="country_desc">COUNTRY Z-A
		<option value="city_asc">CITY A-Z
		<option value="city_desc">CITY Z-A
		<option value="energy_type_asc">ENERGY TYPE A-Z
		<option value="energy_type_desc">ENERGY TYPE Z-A
		<option value="continent_asc">CONTINENT A-Z
		<option value="continent_desc">CONTINENT Z-A
		<option value="production_mw_asc">PRODUCTION MW UP
		<option value="production_mw_desc">PRODUCTION MW DOWN
		<option value="co2_reduction_asc">CO2 REDUCTION UP
		<option value="co2_reduction_desc">CO2 REDUCTION DOWN
		</select>	
		<input type="submit" value="Urutkan" class="btn btn-info btn-sm">
			</form>



<h3>Top 10 Renewable Energy Production</h3>
<table class="table table-hover">
	<tr>
		<td>RANK<td>COUNTRY<td>CITY<td>CONTINENT<td>ENERGY TYPE<td>PRODUCTION (MW)<td>CO2 REDUCTION (TONS)
	</tr>
	<?php
	include 'koneksi.php' ;
	$urutan = $_POST['urutan'];
		if ($urutan=='rank_asc')
		{$kueri = "select * from energy order by rank asc";}
	else if ($urutan=='rank_desc')
		{$kueri = "select * from energy order by rank desc";}
	else if ($urutan=='country_asc')
		{$kueri = "select * from energy order by country asc";}
	else if ($urutan=='country_desc')
		{$kueri = "select * from energy order by country desc";}
	else if ($urutan=='city_asc')
		{$kueri = "select * from energy order by city asc";}
	else if ($urutan=='city_desc')
		{$kueri = "select * from energy order by city desc";}
	else if ($urutan=='continent_asc')
		{$kueri = "select * from energy order by continent asc";}
	else if ($urutan=='continent_desc')
		{$kueri = "select * from energy order by continent desc";}
	else if ($urutan=='energy_type_asc')
		{$kueri = "select * from energy order by energy_type asc";}
	else if ($urutan=='energy_type_desc')
		{$kueri = "select * from energy order by energy_type desc";}
	else if ($urutan=='production_mw_asc')
		{$kueri = "select * from energy order by production_mw asc";}
	else if ($urutan=='production_mw_desc')
		{$kueri = "select * from energy order by production_mw desc";}
	else if ($urutan=='co2_reduction_asc')
		{$kueri = "select * from energy order by co2_reduction asc";}
	else if ($urutan=='co2_reduction_desc')
		{$kueri = "select * from energy order by co2_reduction desc";}	

	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	do{
	 ?>
	 <tr>
	<td><?php echo $kolom['rank'] ?>
 	<td><?php echo $kolom['country'] ?>
 	<td><?php echo $kolom['city'] ?>
 	<td><?php echo $kolom['continent'] ?>
 	<td><?php echo $kolom['energy_type'] ?>
 	<td><?php echo $kolom['production_mw'] ?>
 	<td><?php echo $kolom['co2_reduction'] ?>
 </tr>
<?php 
}while($kolom = mysqli_fetch_array($go));?>
	</table>

	<hr>
	<h3>PRODUCTION & CO2 REDUCTION ASIA</h3>
	<table class="table table-bordered">
		<tr bgcolor="darkgray" style="color: white;">
			<td>TOTAL PRODUCTION MW <td>AVERAGE PRODUCTION MW<td>MAX PRODUCTION MW <td>MIN PRODUCTION MW<td>TOTAL CO2 REDUCTION(TONS)  <td>AVERAGE CO2 REDUCTION(TONS) 
				<td>MIN CO2 REDUCTION(TONS)  <td> MAX CO2 REDUCTION(TONS) </tr>
	<?php
	$kueri = "select 
	sum(production_mw) as total_production,
	avg(production_mw) as average_production,
	min(production_mw) as min_production,
	max(production_mw) as max_production,
	sum(co2_reduction) as total_co2_reduction,
	avg(co2_reduction) as average_co2_reduction,
	min(co2_reduction) as min_co2_reduction,
	max(co2_reduction) as max_co2_reduction
	from energy where continent='Asia'";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	  ?>
	  <tr>
	  	<td><?php echo $kolom['total_production']  ?>
	  	<td><?php echo $kolom['average_production']  ?>
	  	<td><?php echo $kolom['min_production']  ?>
	  	<td><?php echo $kolom['max_production']  ?>
	  	<td><?php echo $kolom['total_co2_reduction']  ?>
	  	<td><?php echo $kolom['average_co2_reduction']  ?>
	  	<td><?php echo $kolom['min_co2_reduction']  ?>
	  	<td><?php echo $kolom['max_co2_reduction']  ?>

	  </tr>
	</table>

	  <hr>
	<h3>PRODUCTION & CO2 REDUCTION AMERIKA</h3>
	<table class="table table-bordered">
		<tr bgcolor="darkgreen" style="color: white;">
			<td>TOTAL PRODUCTION MW <td>AVERAGE PRODUCTION MW<td>MAX PRODUCTION MW <td>MIN PRODUCTION MW<td>TOTAL CO2 REDUCTION(TONS)  <td>AVERAGE CO2 REDUCTION(TONS) 
				<td>MIN CO2 REDUCTION(TONS)  <td> MAX CO2 REDUCTION(TONS) </tr>
	<?php
	$kueri = "select 
	sum(production_mw) as total_production,
	avg(production_mw) as average_production,
	min(production_mw) as min_production,
	max(production_mw) as max_production,
	sum(co2_reduction) as total_co2_reduction,
	avg(co2_reduction) as average_co2_reduction,
	min(co2_reduction) as min_co2_reduction,
	max(co2_reduction) as max_co2_reduction
	from energy where continent='Amerika'";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	  ?>
	  <tr>
	  	<td><?php echo $kolom['total_production']  ?>
	  	<td><?php echo $kolom['average_production']  ?>
	  	<td><?php echo $kolom['min_production']  ?>
	  	<td><?php echo $kolom['max_production']  ?>
	  	<td><?php echo $kolom['total_co2_reduction']  ?>
	  	<td><?php echo $kolom['average_co2_reduction']  ?>
	  	<td><?php echo $kolom['min_co2_reduction']  ?>
	  	<td><?php echo $kolom['max_co2_reduction']  ?>

	  </tr>
</table>
	  <hr>
	<h3>PRODUCTION & CO2 REDUCTION EUROPA</h3>
	<table class="table table-bordered">
		<tr bgcolor="darkblue" style="color: white;">
			<td>TOTAL PRODUCTION MW <td>AVERAGE PRODUCTION MW<td>MAX PRODUCTION MW <td>MIN PRODUCTION MW<td>TOTAL CO2 REDUCTION(TONS)  <td>AVERAGE CO2 REDUCTION(TONS) 
				<td>MIN CO2 REDUCTION(TONS)  <td> MAX CO2 REDUCTION(TONS) </tr>
	<?php
	$kueri = "select 
	sum(production_mw) as total_production,
	avg(production_mw) as average_production,
	min(production_mw) as min_production,
	max(production_mw) as max_production,
	sum(co2_reduction) as total_co2_reduction,
	avg(co2_reduction) as average_co2_reduction,
	min(co2_reduction) as min_co2_reduction,
	max(co2_reduction) as max_co2_reduction
	from energy where continent='Europe'";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	  ?>
	  <tr>
	  	<td><?php echo $kolom['total_production']  ?>
	  	<td><?php echo $kolom['average_production']  ?>
	  	<td><?php echo $kolom['min_production']  ?>
	  	<td><?php echo $kolom['max_production']  ?>
	  	<td><?php echo $kolom['total_co2_reduction']  ?>
	  	<td><?php echo $kolom['average_co2_reduction']  ?>
	  	<td><?php echo $kolom['min_co2_reduction']  ?>
	  	<td><?php echo $kolom['max_co2_reduction']  ?>

	  </tr>
	  </table>
	   <hr>
	<h3>PRODUCTION & CO2 REDUCTION SOLAR</h3>
	<table class="table table-bordered">
		<tr bgcolor="darkgreen" style="color: white;">
			<td>TOTAL PRODUCTION MW <td>AVERAGE PRODUCTION MW<td>MAX PRODUCTION MW <td>MIN PRODUCTION MW<td>TOTAL CO2 REDUCTION(TONS)  <td>AVERAGE CO2 REDUCTION(TONS) 
				<td>MIN CO2 REDUCTION(TONS)  <td> MAX CO2 REDUCTION(TONS) </tr>
	<?php
	$kueri = "select 
	sum(production_mw) as total_production,
	avg(production_mw) as average_production,
	min(production_mw) as min_production,
	max(production_mw) as max_production,
	sum(co2_reduction) as total_co2_reduction,
	avg(co2_reduction) as average_co2_reduction,
	min(co2_reduction) as min_co2_reduction,
	max(co2_reduction) as max_co2_reduction
	from energy where energy_type='Solar'";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	  ?>
	  <tr>
	  	<td><?php echo $kolom['total_production']  ?>
	  	<td><?php echo $kolom['average_production']  ?>
	  	<td><?php echo $kolom['min_production']  ?>
	  	<td><?php echo $kolom['max_production']  ?>
	  	<td><?php echo $kolom['total_co2_reduction']  ?>
	  	<td><?php echo $kolom['average_co2_reduction']  ?>
	  	<td><?php echo $kolom['min_co2_reduction']  ?>
	  	<td><?php echo $kolom['max_co2_reduction']  ?>

	  </tr>
</table>
 </center>
</body>
</html>