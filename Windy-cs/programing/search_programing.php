<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<center>
	<h3>Top 10 Programming Language</h3>
	<hr/>
	<form method="post" action="search_programing.php">
		<br><input name="kata_kunci" placeholder="ketik kata kunci...">
		<input type="submit" value="Cari!" class="btn btn-warning btn-sm">
	</form>
	<form method="post" action= "sort_programing.php">
		<br><select name="urutan">
			<option value="rank_asc">Rank (Up)
			<option value="rank_desc">Rank (Down)
			<option value="language_asc">Language (A - Z)
			<option value="language_desc">Language (Z - A)
			<option value="most_use_case_asc">Most Use Case (A - Z)
			<option value="most_use_case_desc">Most Use Case (Z - A)
			<option value="salary_year_asc">Year Salary (Up)
			<option value="salary_year_desc">Year Salary (Down)
			<option value="founder_asc">Founder (A - Z)
			<option value="founder_desc">Founder (Z - A)
		</select>
		<input type="submit" value="Urutkan!" class="btn btn-info btn-sm">
	</form>
	<table class="table table-hover">
		<tr>
			<td>RANK
			<td>LANGUAGE
			<td>MOST USE CASE
			<td>YEAR AVG SALARY (USD)
			<td>FOUNDER
		</tr>
		<?php 
		include 'koneksi.php';
		$kueri = "select * from programing where 
		rank like '%$_POST[kata_kunci]%' or
		language like '%$_POST[kata_kunci]%' or 
		most_use_case like '%$_POST[kata_kunci]%' or
		salary_year like '%$_POST[kata_kunci]%' or
		founder like '%$_POST[kata_kunci]%' ";

		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
		do{
		 ?>
		 <tr>
			<td><?php echo $kolom['rank'] ?>
			<td><?php echo $kolom['language'] ?>
			<td><?php echo $kolom['most_use_case'] ?>
			<td><?php echo $kolom['salary_year'] ?>
			<td><?php echo $kolom['founder'] ?>
		</tr>
		<?php
		}while ($kolom = mysqli_fetch_array($go) ) 
		 ?>


	</table>
	<hr>
		 <h3>WEB DEVELOPMENT SALARY</h3>
		 <table class="table table-bordered">
		 <tr bgcolor="yellow" style="color:white">
		 	<td>AVERAGE SALARY
		 	<td>MAX SALARY
		 	<td>MIN SALARY
		 <tr>
		 <?php 
		 $kueri = "select 
		 avg (salary_year) as avg_salary,
		 max(salary_year) as max_salary,
		 min(salary_year) as min_salary
		 from programing where most_use_case = 'Web Development' ";
		 $go = mysqli_query($koneksi,$kueri);
$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['avg_salary'] ?>
		<td><?php echo $kolom['max_salary'] ?>
		<td><?php echo $kolom['min_salary'] ?>


			
		 </table>
</center>
</body>
</html>