<?php
include('koneksi2.php');
$covidcase = mysqli_query($koneksi,"select * from tb_covidcase");
while($row = mysqli_fetch_array($covidcase)){
	$nama_negara[] = $row['country'];

    $query = mysqli_query($koneksi,"select activecases from tb_covidcase where id_case='".$row['id_case']."'");
	$row = $query->fetch_array();
	$active_cases[] = $row['activecases'];
}
?>
<!doctype html>
<html>
<head>
	<title>Active Cases Covid Case</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<center><h1>Grafik Pie Active Cases</h1>
	<br>
	<div id="canvas-holder" style="width:50%">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($active_cases); ?>,
					backgroundColor: [ 
					'rgba(220, 220, 220, 0.2)',
					'rgba(65, 105, 225, 0.2)',
					'rgba(218, 112, 214, 0.2)',
					'rgba(221, 160, 221, 0.2)',
					'rgba(240, 128, 128, 0.2)',
					'rgba(60, 179, 113, 0.2)',
					'rgba(252, 182, 193, 0.2)',
					'rgba(173, 216, 230, 0.2)',
					'rgba(255, 227, 200, 0.2)',
					'rgba(135, 206, 250, 0.2)'
					],
					borderColor: [ 
					'rgba(128, 128, 128, 1)',
					'rgba(0, 0, 139, 1)',
					'rgba(249, 0, 255, 1)',
					'rgba(147, 112, 219, 1)',
					'rgba(250, 128, 114, 1)',
					'rgba(46, 139, 87, 1)',
					'rgba(219, 112, 147, 1)',
					'rgba(135, 206, 235, 1)',
					'rgba(210, 180, 140, 1)',
					'rgba(72, 209, 204, 1)'
					],
					label: 'Presentase Penjualan Barang'
				}],
				labels: <?php echo json_encode($nama_negara); ?>},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myPie.update();
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myPie.update();
		});
		
	</script>
	</center>
</body>
</html>