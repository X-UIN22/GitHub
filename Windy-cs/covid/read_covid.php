<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"></head>
<body>
<center>
	<h3>Top 10 Covid Cases in 2020</h3>
	<hr>
	<a href="create_covid.php" >add data</a>
	<form method="post" action="search_covid.php">
		<br><input name="kata_kunci" placeholder="ketik kata kunci...">
		<input type="submit" value="Cari" class="btn btn-info btn-sm">
	</form>
	<br>
	<form method="post" action="sort_covid.php">
		<select name="urutan">
			<option> --Urutkan Berdasarkan--
			<option value="rank_asc">Rank (Up)
			<option value="rank_desc">Rank (Down)
			<option value="country_asc">Country (A - Z)
			<option value="country_desc">Country (Z - A)
			<option value="continent_asc">Continent (A - Z)
			<option value="continent_desc">Continent (Z - A)
			<option value="cases_asc">Cases In 2020 (Up)
			<option value="cases_desc">Cases In 2020 (Down)
			<option value="percent_population_asc">% of populatiom (Up)
			<option value="percent_population_desc">% of populatiom (Down)
			</select>
				<input type="submit" value="Urutkan" class="btn btn-warning btn-sm">
			</form>
			
		<table class="table table-hover">
	<tr>

		<td>RANK<td>COUNTRY<td>CONTINENT<td>CASE IN 2020<td>% OF POPULATION
	</tr>
	<?php
	include 'koneksi.php';
	$kueri = "select * from covid";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	do{
	?>
	<tr>
		<td><?php echo $kolom['rank']?>
		<td><?php echo $kolom['country']?>
		<td><?php echo $kolom['continent']?>
		<td><?php echo $kolom['cases_2020']?>
		<td><?php echo $kolom['percent_population']?>
		<td><a href="update_covid.php?pk=<?php echo $kolom['rank']?>">Update</a>
		<td><a href="delete_covid.php?pk=<?php echo $kolom['rank']?>">Delete</a>
	</tr>
	<?php
	}while($kolom = mysqli_fetch_array($go));
	?>
	<table>
		<hr><h3>Cases In America (2020)</h3>
		<table class="table table-bordered">
			<tr bgcolor="sky" style="color: white;">
				<td>TOTAL CASES<td>AVG CASES<td>MAX CASES<td>MIN CASES<td>TOTAL % POPULATION<td>AVG % POPULATION<td>MAX % POPULATION<td>MIN % POPULATION<td>
				</tr>
		<?php
		$kueri ="select sum(cases_2020) as total_cases,
		avg(cases_2020) as avg_cases,
		max(cases_2020) as max_cases,
		min(cases_2020) as min_cases,
		sum(percent_population) as total_population,
		avg(percent_population) as avg_population,
		max(percent_population) as max_population,
		min(percent_population) as min_population
		from covid where continent='America' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
		  ?>
		  <td>
		  	<td><?php echo $kolom['total_cases'] ?>
		  	<td><?php echo $kolom['avg_cases'] ?>
		  	<td><?php echo $kolom['max_cases'] ?>
		  	<td><?php echo $kolom['min_cases'] ?>
		  	<td><?php echo $kolom['total_population'] ?>
		  	<td><?php echo $kolom['avg_population'] ?>
		  	<td><?php echo $kolom['max_population'] ?>
		  	<td><?php echo $kolom['min_population'] ?>
		  </tr>

	</table>
	<table>
		<hr><h3>Cases In Europa (2020)</h3>
		<table class="table table-bordered">
			<tr bgcolor="sky" style="color: white;">

				<td>TOTAL CASES
				<td>AVG CASES
				<td>MAX CASES
				<td>MIN CASES
				<td>TOTAL % POPULATION
				<td>AVG % POPULATION
				<td>MAX % POPULATION
				<td>MIN % POPULATION
				</tr>
		<?php
		$kueri ="select sum(cases_2020) as total_cases,
		avg(cases_2020) as avg_cases,
		max(cases_2020) as max_cases,
		min(cases_2020) as min_cases,
		sum(percent_population) as total_population,
		avg(percent_population) as avg_population,
		max(percent_population) as max_population,
		min(percent_population) as min_population
		from covid where continent='Europe' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
		  ?>
		  <td>
		  	<td><?php echo $kolom['total_cases'] ?>
		  	<td><?php echo $kolom['avg_cases'] ?>
		  	<td><?php echo $kolom['max_cases'] ?>
		  	<td><?php echo $kolom['min_cases'] ?>
		  	<td><?php echo $kolom['total_population'] ?>
		  	<td><?php echo $kolom['avg_population'] ?>
		  	<td><?php echo $kolom['max_population'] ?>
		  	<td><?php echo $kolom['min_population'] ?>
		  </tr>

	</table>
	<table>
		<hr><h3>Cases In Asia (2020)</h3>
		<table class="table table-bordered">
			<tr bgcolor="sky" style="color: white;">

				<td>TOTAL CASES<td>AVG CASES<td>MAX CASES<td>MIN CASES<td>TOTAL % POPULATION<td>AVG % POPULATION<td>MAX % POPULATION<td>MIN % POPULATION<td>
				</tr>
		<?php
		$kueri ="select sum(cases_2020) as total_cases,
		avg(cases_2020) as avg_cases,
		max(cases_2020) as max_cases,
		min(cases_2020) as min_cases,
		sum(percent_population) as total_population,
		avg(percent_population) as avg_population,
		max(percent_population) as max_population,
		min(percent_population) as min_population
		from covid where continent='Asia' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
		  ?>
		  <td>
		  	<td><?php echo $kolom['total_cases'] ?>
		  	<td><?php echo $kolom['avg_cases'] ?>
		  	<td><?php echo $kolom['max_cases'] ?>
		  	<td><?php echo $kolom['min_cases'] ?>
		  	<td><?php echo $kolom['total_population'] ?>
		  	<td><?php echo $kolom['avg_population'] ?>
		  	<td><?php echo $kolom['max_population'] ?>
		  	<td><?php echo $kolom['min_population'] ?>
		  </tr>

	</table>
</center>
</body>
</html>