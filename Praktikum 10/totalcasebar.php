<?php

include('koneksi2.php');
$covidcase = mysqli_query($koneksi,"select * from tb_covidcase");
while($row = mysqli_fetch_array($covidcase)){
	$nama_negara[] = $row['country'];

    $query = mysqli_query($koneksi,"select totalcases from tb_covidcase where id_case='".$row['id_case']."'");
	$row = $query->fetch_array();
	$total_cases[] = $row['totalcases'];
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Bar Chart Total Tests Covid Case</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<center><h1>Grafik Bar Total Cases</h1>
	<br>
	<div id="canvas-holder" style="width:50%">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($label); ?>,
				datasets: [{
					label: 'Grafik Bar Covid Case',
					data: <?php echo json_encode($total_cases); ?>,
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	</center>
</body>
</html>