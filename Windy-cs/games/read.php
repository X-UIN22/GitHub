
<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<center>
		<h3>Top 10 Games Sales In History</h3>
		<hr>
		<!-- tabel-hover, striped,bordered,condensed,primary,success,info,warning,danger -->
		<table class="table table-hover">
			<tr>
				<td>RANK
				<td>GAME
				<td>PLATFORM
				<td>YEAR
				<td>GENRE
				<td>PUBLISHER
				<td>NA SALES
				<td>EU SALES
				<td>JP SALES
				<td>OTHER SALES
			</tr>
			<?php
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'db1';
			$kueri = 'select * from games';
			$konesi = mysqli_connect($server,$username,$password,$database);
			$go = mysqli_query($konesi,$kueri);
			$kolom = mysqli_fetch_array($go);

			do
			{
			?>
			<tr>
				
			<td><?php echo $kolom['rank'] ?>
			<td><?php echo $kolom['game'] ?>
			<td><?php echo $kolom['platform'] ?>
			<td><?php echo $kolom['year'] ?>
			<td><?php echo $kolom['genre'] ?>
			<td><?php echo $kolom['publisher'] ?>
			<td><?php echo $kolom['na_sales'] ?>
			<td><?php echo $kolom['eu_sales'] ?>
			<td><?php echo $kolom['jp_sales'] ?>
			<td><?php echo $kolom['other_sales'] ?>
			</tr>

			<?php  
		
		}
		while ($kolom = mysqli_fetch_array($go));

		?>
		</table>
		<hr/>
		<h3>PLATFORM PS</h3>
		<table class="table tabel table-bordered">
			<tr style="color:white" bgcolor="green">
				<td>TOTAL NA SALES
				<td>AVERAGE NA SALES
				<td>MAX NA SALES
				<td>MIN NA SALES
				<td>TOTAL EU SALES
				<td>AVERAGE EU SALES
				<td>MAX EU SALES
				<td>MIN EU SALES
				<td>TOTAL JP SALES
				<td>AVERAGE JP SALES
				<td>MAX JP SALES
				<td>MIN JP SALES
				<td>TOTAL OTHER SALES
				<td>AVERAGE OTHER SALES
				<td>MAX OTHER SALES
				<td>MIN OTHER SALES
			</tr>
			<?php
			$kueri = "select round(sum(na_sales),2) as total_na_sales,
			round(avg(na_sales),2) as avg_na_sales,
			round(max(na_sales),2) as max_na_sales,
			round(min(na_sales),2) as min_na_sales,
			round(sum(eu_sales),2) as total_eu_sales,
			round(avg(eu_sales),2) as avg_eu_sales,
			round(max(eu_sales),2) as max_eu_sales,
			round(min(eu_sales),2) as min_eu_sales,
			round(sum(jp_sales),2) as total_jp_sales,
			round(avg(jp_sales),2) as avg_jp_sales,
			round(max(jp_sales),2) as max_jp_sales,
			round(min(jp_sales),2) as min_jp_sales,
			round(sum(other_sales),2) as total_other_sales,
			round(avg(other_sales),2) as avg_other_sales,
			round(max(other_sales),2) as max_other_sales,
			round(min(other_sales),2) as min_other_sales
			from games where platform= 'PS'";
			$go = mysqli_query($konesi,$kueri);
			$kolom = mysqli_fetch_array($go);

			 ?>
			<tr>
				<td><?php echo $kolom['total_na_sales']  ?>
				<td><?php echo $kolom['avg_na_sales']  ?>
				<td><?php echo $kolom['max_na_sales']  ?>
				<td><?php echo $kolom['min_na_sales']  ?>
				<td><?php echo $kolom['total_eu_sales']  ?>
				<td><?php echo $kolom['avg_eu_sales']  ?>
				<td><?php echo $kolom['max_eu_sales']  ?>
				<td><?php echo $kolom['min_eu_sales']  ?>
				<td><?php echo $kolom['total_jp_sales']  ?>
				<td><?php echo $kolom['avg_jp_sales']  ?>
				<td><?php echo $kolom['max_jp_sales']  ?>
				<td><?php echo $kolom['min_jp_sales']  ?>
				<td><?php echo $kolom['total_other_sales']  ?>
				<td><?php echo $kolom['avg_other_sales']  ?>
				<td><?php echo $kolom['max_other_sales']  ?>
				<td><?php echo $kolom['min_other_sales']  ?>
			</tr>

		</table>
		<hr/>
		<h3>PLATFORM PS2</h3>
		<table class="table tabel table-bordered">
			<tr style="color:white" bgcolor="black">
				<td>TOTAL NA SALES
				<td>AVERAGE NA SALES
				<td>MAX NA SALES
				<td>MIN NA SALES
				<td>TOTAL EU SALES
				<td>AVERAGE EU SALES
				<td>MAX EU SALES
				<td>MIN EU SALES
				<td>TOTAL JP SALES
				<td>AVERAGE JP SALES
				<td>MAX JP SALES
				<td>MIN JP SALES
				<td>TOTAL OTHER SALES
				<td>AVERAGE OTHER SALES
				<td>MAX OTHER SALES
				<td>MIN OTHER SALES
			</tr>
			<?php
			$kueri = "select round(sum(na_sales),2) as total_na_sales,
			round(avg(na_sales),2) as avg_na_sales,
			round(max(na_sales),2) as max_na_sales,
			round(min(na_sales),2) as min_na_sales,
			round(sum(eu_sales),2) as total_eu_sales,
			round(avg(eu_sales),2) as avg_eu_sales,
			round(max(eu_sales),2) as max_eu_sales,
			round(min(eu_sales),2) as min_eu_sales,
			round(sum(jp_sales),2) as total_jp_sales,
			round(avg(jp_sales),2) as avg_jp_sales,
			round(max(jp_sales),2) as max_jp_sales,
			round(min(jp_sales),2) as min_jp_sales,
			round(sum(other_sales),2) as total_other_sales,
			round(avg(other_sales),2) as avg_other_sales,
			round(max(other_sales),2) as max_other_sales,
			round(min(other_sales),2) as min_other_sales
			from games where platform= 'PS2'";
			$go = mysqli_query($konesi,$kueri);
			$kolom = mysqli_fetch_array($go);

			 ?>
			<tr>
				<td><?php echo $kolom['total_na_sales']  ?>
				<td><?php echo $kolom['avg_na_sales']  ?>
				<td><?php echo $kolom['max_na_sales']  ?>
				<td><?php echo $kolom['min_na_sales']  ?>
				<td><?php echo $kolom['total_eu_sales']  ?>
				<td><?php echo $kolom['avg_eu_sales']  ?>
				<td><?php echo $kolom['max_eu_sales']  ?>
				<td><?php echo $kolom['min_eu_sales']  ?>
				<td><?php echo $kolom['total_jp_sales']  ?>
				<td><?php echo $kolom['avg_jp_sales']  ?>
				<td><?php echo $kolom['max_jp_sales']  ?>
				<td><?php echo $kolom['min_jp_sales']  ?>
				<td><?php echo $kolom['total_other_sales']  ?>
				<td><?php echo $kolom['avg_other_sales']  ?>
				<td><?php echo $kolom['max_other_sales']  ?>
				<td><?php echo $kolom['min_other_sales']  ?>
			</tr>

		</table>

		<hr/>
		<h3>PLATFORM X360</h3>
		<table class="table tabel table-bordered">
			<tr style="color:white" bgcolor="blue">
				<td>TOTAL NA SALES
				<td>AVERAGE NA SALES
				<td>MAX NA SALES
				<td>MIN NA SALES
				<td>TOTAL EU SALES
				<td>AVERAGE EU SALES
				<td>MAX EU SALES
				<td>MIN EU SALES
				<td>TOTAL JP SALES
				<td>AVERAGE JP SALES
				<td>MAX JP SALES
				<td>MIN JP SALES
				<td>TOTAL OTHER SALES
				<td>AVERAGE OTHER SALES
				<td>MAX OTHER SALES
				<td>MIN OTHER SALES
			</tr>
			<?php
			$kueri = "select round(sum(na_sales),2) as total_na_sales,
			round(avg(na_sales),2) as avg_na_sales,
			round(max(na_sales),2) as max_na_sales,
			round(min(na_sales),2) as min_na_sales,
			round(sum(eu_sales),2) as total_eu_sales,
			round(avg(eu_sales),2) as avg_eu_sales,
			round(max(eu_sales),2) as max_eu_sales,
			round(min(eu_sales),2) as min_eu_sales,
			round(sum(jp_sales),2) as total_jp_sales,
			round(avg(jp_sales),2) as avg_jp_sales,
			round(max(jp_sales),2) as max_jp_sales,
			round(min(jp_sales),2) as min_jp_sales,
			round(sum(other_sales),2) as total_other_sales,
			round(avg(other_sales),2) as avg_other_sales,
			round(max(other_sales),2) as max_other_sales,
			round(min(other_sales),2) as min_other_sales
			from games where platform= 'X360'";
			$go = mysqli_query($konesi,$kueri);
			$kolom = mysqli_fetch_array($go);

			 ?>
			<tr>
				<td><?php echo $kolom['total_na_sales']  ?>
				<td><?php echo $kolom['avg_na_sales']  ?>
				<td><?php echo $kolom['max_na_sales']  ?>
				<td><?php echo $kolom['min_na_sales']  ?>
				<td><?php echo $kolom['total_eu_sales']  ?>
				<td><?php echo $kolom['avg_eu_sales']  ?>
				<td><?php echo $kolom['max_eu_sales']  ?>
				<td><?php echo $kolom['min_eu_sales']  ?>
				<td><?php echo $kolom['total_jp_sales']  ?>
				<td><?php echo $kolom['avg_jp_sales']  ?>
				<td><?php echo $kolom['max_jp_sales']  ?>
				<td><?php echo $kolom['min_jp_sales']  ?>
				<td><?php echo $kolom['total_other_sales']  ?>
				<td><?php echo $kolom['avg_other_sales']  ?>
				<td><?php echo $kolom['max_other_sales']  ?>
				<td><?php echo $kolom['min_other_sales']  ?>
			</tr>

		</table>
		<hr/>
		<h3>GENRE RACING</h3>
		<table class="table tabel table-bordered">
			<tr style="color:white" bgcolor="skyblue">
				<td>TOTAL NA SALES
				<td>AVERAGE NA SALES
				<td>MAX NA SALES
				<td>MIN NA SALES
				<td>TOTAL EU SALES
				<td>AVERAGE EU SALES
				<td>MAX EU SALES
				<td>MIN EU SALES
				<td>TOTAL JP SALES
				<td>AVERAGE JP SALES
				<td>MAX JP SALES
				<td>MIN JP SALES
				<td>TOTAL OTHER SALES
				<td>AVERAGE OTHER SALES
				<td>MAX OTHER SALES
				<td>MIN OTHER SALES
			</tr>
			<?php
			$kueri = "select round(sum(na_sales),2) as total_na_sales,
			round(avg(na_sales),2) as avg_na_sales,
			round(max(na_sales),2) as max_na_sales,
			round(min(na_sales),2) as min_na_sales,
			round(sum(eu_sales),2) as total_eu_sales,
			round(avg(eu_sales),2) as avg_eu_sales,
			round(max(eu_sales),2) as max_eu_sales,
			round(min(eu_sales),2) as min_eu_sales,
			round(sum(jp_sales),2) as total_jp_sales,
			round(avg(jp_sales),2) as avg_jp_sales,
			round(max(jp_sales),2) as max_jp_sales,
			round(min(jp_sales),2) as min_jp_sales,
			round(sum(other_sales),2) as total_other_sales,
			round(avg(other_sales),2) as avg_other_sales,
			round(max(other_sales),2) as max_other_sales,
			round(min(other_sales),2) as min_other_sales
			from games where genre= 'racing'";
			$go = mysqli_query($konesi,$kueri);
			$kolom = mysqli_fetch_array($go);

			 ?>
			<tr>
				<td><?php echo $kolom['total_na_sales']  ?>
				<td><?php echo $kolom['avg_na_sales']  ?>
				<td><?php echo $kolom['max_na_sales']  ?>
				<td><?php echo $kolom['min_na_sales']  ?>
				<td><?php echo $kolom['total_eu_sales']  ?>
				<td><?php echo $kolom['avg_eu_sales']  ?>
				<td><?php echo $kolom['max_eu_sales']  ?>
				<td><?php echo $kolom['min_eu_sales']  ?>
				<td><?php echo $kolom['total_jp_sales']  ?>
				<td><?php echo $kolom['avg_jp_sales']  ?>
				<td><?php echo $kolom['max_jp_sales']  ?>
				<td><?php echo $kolom['min_jp_sales']  ?>
				<td><?php echo $kolom['total_other_sales']  ?>
				<td><?php echo $kolom['avg_other_sales']  ?>
				<td><?php echo $kolom['max_other_sales']  ?>
				<td><?php echo $kolom['min_other_sales']  ?>
			</tr>

		</table>

		<hr/>
		<h3>GENRE RACING</h3>
		<table class="table tabel table-bordered">
			<tr style="color:white" bgcolor="whiteblue">
				<td>TOTAL NA SALES
				<td>AVERAGE NA SALES
				<td>MAX NA SALES
				<td>MIN NA SALES
				<td>TOTAL EU SALES
				<td>AVERAGE EU SALES
				<td>MAX EU SALES
				<td>MIN EU SALES
				<td>TOTAL JP SALES
				<td>AVERAGE JP SALES
				<td>MAX JP SALES
				<td>MIN JP SALES
				<td>TOTAL OTHER SALES
				<td>AVERAGE OTHER SALES
				<td>MAX OTHER SALES
				<td>MIN OTHER SALES
			</tr>
			<?php
			$kueri = "select round(sum(na_sales),2) as total_na_sales,
			round(avg(na_sales),2) as avg_na_sales,
			round(max(na_sales),2) as max_na_sales,
			round(min(na_sales),2) as min_na_sales,
			round(sum(eu_sales),2) as total_eu_sales,
			round(avg(eu_sales),2) as avg_eu_sales,
			round(max(eu_sales),2) as max_eu_sales,
			round(min(eu_sales),2) as min_eu_sales,
			round(sum(jp_sales),2) as total_jp_sales,
			round(avg(jp_sales),2) as avg_jp_sales,
			round(max(jp_sales),2) as max_jp_sales,
			round(min(jp_sales),2) as min_jp_sales,
			round(sum(other_sales),2) as total_other_sales,
			round(avg(other_sales),2) as avg_other_sales,
			round(max(other_sales),2) as max_other_sales,
			round(min(other_sales),2) as min_other_sales
			from games where genre= 'sport'";
			$go = mysqli_query($konesi,$kueri);
			$kolom = mysqli_fetch_array($go);

			 ?>
			<tr>
				<td><?php echo $kolom['total_na_sales']  ?>
				<td><?php echo $kolom['avg_na_sales']  ?>
				<td><?php echo $kolom['max_na_sales']  ?>
				<td><?php echo $kolom['min_na_sales']  ?>
				<td><?php echo $kolom['total_eu_sales']  ?>
				<td><?php echo $kolom['avg_eu_sales']  ?>
				<td><?php echo $kolom['max_eu_sales']  ?>
				<td><?php echo $kolom['min_eu_sales']  ?>
				<td><?php echo $kolom['total_jp_sales']  ?>
				<td><?php echo $kolom['avg_jp_sales']  ?>
				<td><?php echo $kolom['max_jp_sales']  ?>
				<td><?php echo $kolom['min_jp_sales']  ?>
				<td><?php echo $kolom['total_other_sales']  ?>
				<td><?php echo $kolom['avg_other_sales']  ?>
				<td><?php echo $kolom['max_other_sales']  ?>
				<td><?php echo $kolom['min_other_sales']  ?>
			</tr>

		</table>

		<hr/>
		<h3>PUBLISHER ELEKTRONIC ARTS</h3>
		<table class="table tabel table-bordered">
			<tr style="color:white" bgcolor="darkblue">
				<td>TOTAL NA SALES
				<td>AVERAGE NA SALES
				<td>MAX NA SALES
				<td>MIN NA SALES
				<td>TOTAL EU SALES
				<td>AVERAGE EU SALES
				<td>MAX EU SALES
				<td>MIN EU SALES
				<td>TOTAL JP SALES
				<td>AVERAGE JP SALES
				<td>MAX JP SALES
				<td>MIN JP SALES
				<td>TOTAL OTHER SALES
				<td>AVERAGE OTHER SALES
				<td>MAX OTHER SALES
				<td>MIN OTHER SALES
			</tr>
			<?php
			$kueri = "select round(sum(na_sales),2) as total_na_sales,
			round(avg(na_sales),2) as avg_na_sales,
			round(max(na_sales),2) as max_na_sales,
			round(min(na_sales),2) as min_na_sales,
			round(sum(eu_sales),2) as total_eu_sales,
			round(avg(eu_sales),2) as avg_eu_sales,
			round(max(eu_sales),2) as max_eu_sales,
			round(min(eu_sales),2) as min_eu_sales,
			round(sum(jp_sales),2) as total_jp_sales,
			round(avg(jp_sales),2) as avg_jp_sales,
			round(max(jp_sales),2) as max_jp_sales,
			round(min(jp_sales),2) as min_jp_sales,
			round(sum(other_sales),2) as total_other_sales,
			round(avg(other_sales),2) as avg_other_sales,
			round(max(other_sales),2) as max_other_sales,
			round(min(other_sales),2) as min_other_sales
			from games where publisher= 'electronic arts'";
			$go = mysqli_query($konesi,$kueri);
			$kolom = mysqli_fetch_array($go);

			 ?>
			<tr>
				<td><?php echo $kolom['total_na_sales']  ?>
				<td><?php echo $kolom['avg_na_sales']  ?>
				<td><?php echo $kolom['max_na_sales']  ?>
				<td><?php echo $kolom['min_na_sales']  ?>
				<td><?php echo $kolom['total_eu_sales']  ?>
				<td><?php echo $kolom['avg_eu_sales']  ?>
				<td><?php echo $kolom['max_eu_sales']  ?>
				<td><?php echo $kolom['min_eu_sales']  ?>
				<td><?php echo $kolom['total_jp_sales']  ?>
				<td><?php echo $kolom['avg_jp_sales']  ?>
				<td><?php echo $kolom['max_jp_sales']  ?>
				<td><?php echo $kolom['min_jp_sales']  ?>
				<td><?php echo $kolom['total_other_sales']  ?>
				<td><?php echo $kolom['avg_other_sales']  ?>
				<td><?php echo $kolom['max_other_sales']  ?>
				<td><?php echo $kolom['min_other_sales']  ?>
			</tr>

		</table>

		<hr/>
		<h3>PUBLISHER KONAMI</h3>
		<table class="table tabel table-bordered">
			<tr style="color:white" bgcolor="red">
				<td>TOTAL NA SALES
				<td>AVERAGE NA SALES
				<td>MAX NA SALES
				<td>MIN NA SALES
				<td>TOTAL EU SALES
				<td>AVERAGE EU SALES
				<td>MAX EU SALES
				<td>MIN EU SALES
				<td>TOTAL JP SALES
				<td>AVERAGE JP SALES
				<td>MAX JP SALES
				<td>MIN JP SALES
				<td>TOTAL OTHER SALES
				<td>AVERAGE OTHER SALES
				<td>MAX OTHER SALES
				<td>MIN OTHER SALES
			</tr>
			<?php
			$kueri = "select round(sum(na_sales),2) as total_na_sales,
			round(avg(na_sales),2) as avg_na_sales,
			round(max(na_sales),2) as max_na_sales,
			round(min(na_sales),2) as min_na_sales,
			round(sum(eu_sales),2) as total_eu_sales,
			round(avg(eu_sales),2) as avg_eu_sales,
			round(max(eu_sales),2) as max_eu_sales,
			round(min(eu_sales),2) as min_eu_sales,
			round(sum(jp_sales),2) as total_jp_sales,
			round(avg(jp_sales),2) as avg_jp_sales,
			round(max(jp_sales),2) as max_jp_sales,
			round(min(jp_sales),2) as min_jp_sales,
			round(sum(other_sales),2) as total_other_sales,
			round(avg(other_sales),2) as avg_other_sales,
			round(max(other_sales),2) as max_other_sales,
			round(min(other_sales),2) as min_other_sales
			from games where publisher= 'konami'";
			$go = mysqli_query($konesi,$kueri);
			$kolom = mysqli_fetch_array($go);

			 ?>
			<tr>
				<td><?php echo $kolom['total_na_sales']  ?>
				<td><?php echo $kolom['avg_na_sales']  ?>
				<td><?php echo $kolom['max_na_sales']  ?>
				<td><?php echo $kolom['min_na_sales']  ?>
				<td><?php echo $kolom['total_eu_sales']  ?>
				<td><?php echo $kolom['avg_eu_sales']  ?>
				<td><?php echo $kolom['max_eu_sales']  ?>
				<td><?php echo $kolom['min_eu_sales']  ?>
				<td><?php echo $kolom['total_jp_sales']  ?>
				<td><?php echo $kolom['avg_jp_sales']  ?>
				<td><?php echo $kolom['max_jp_sales']  ?>
				<td><?php echo $kolom['min_jp_sales']  ?>
				<td><?php echo $kolom['total_other_sales']  ?>
				<td><?php echo $kolom['avg_other_sales']  ?>
				<td><?php echo $kolom['max_other_sales']  ?>
				<td><?php echo $kolom['min_other_sales']  ?>
			</tr>

		</table>

		<hr/>
		<h3>PUBLISHER NITENDO</h3>
		<table class="table tabel table-bordered">
			<tr style="color:white" bgcolor="darkblue">
				<td>TOTAL NA SALES
				<td>AVERAGE NA SALES
				<td>MAX NA SALES
				<td>MIN NA SALES
				<td>TOTAL EU SALES
				<td>AVERAGE EU SALES
				<td>MAX EU SALES
				<td>MIN EU SALES
				<td>TOTAL JP SALES
				<td>AVERAGE JP SALES
				<td>MAX JP SALES
				<td>MIN JP SALES
				<td>TOTAL OTHER SALES
				<td>AVERAGE OTHER SALES
				<td>MAX OTHER SALES
				<td>MIN OTHER SALES
			</tr>
			<?php
			$kueri = "select round(sum(na_sales),2) as total_na_sales,
			round(avg(na_sales),2) as avg_na_sales,
			round(max(na_sales),2) as max_na_sales,
			round(min(na_sales),2) as min_na_sales,
			round(sum(eu_sales),2) as total_eu_sales,
			round(avg(eu_sales),2) as avg_eu_sales,
			round(max(eu_sales),2) as max_eu_sales,
			round(min(eu_sales),2) as min_eu_sales,
			round(sum(jp_sales),2) as total_jp_sales,
			round(avg(jp_sales),2) as avg_jp_sales,
			round(max(jp_sales),2) as max_jp_sales,
			round(min(jp_sales),2) as min_jp_sales,
			round(sum(other_sales),2) as total_other_sales,
			round(avg(other_sales),2) as avg_other_sales,
			round(max(other_sales),2) as max_other_sales,
			round(min(other_sales),2) as min_other_sales
			from games where publisher= 'nitendo'";
			$go = mysqli_query($konesi,$kueri);
			$kolom = mysqli_fetch_array($go);

			 ?>
			<tr>
				<td><?php echo $kolom['total_na_sales']  ?>
				<td><?php echo $kolom['avg_na_sales']  ?>
				<td><?php echo $kolom['max_na_sales']  ?>
				<td><?php echo $kolom['min_na_sales']  ?>
				<td><?php echo $kolom['total_eu_sales']  ?>
				<td><?php echo $kolom['avg_eu_sales']  ?>
				<td><?php echo $kolom['max_eu_sales']  ?>
				<td><?php echo $kolom['min_eu_sales']  ?>
				<td><?php echo $kolom['total_jp_sales']  ?>
				<td><?php echo $kolom['avg_jp_sales']  ?>
				<td><?php echo $kolom['max_jp_sales']  ?>
				<td><?php echo $kolom['min_jp_sales']  ?>
				<td><?php echo $kolom['total_other_sales']  ?>
				<td><?php echo $kolom['avg_other_sales']  ?>
				<td><?php echo $kolom['max_other_sales']  ?>
				<td><?php echo $kolom['min_other_sales']  ?>
			</tr>

		</table>
	</center>
</body>
</html>