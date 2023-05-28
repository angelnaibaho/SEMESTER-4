<?php
include('koneksi2.php');
$label = ["India","Japan","South Korea","Turkey","Vietnam","Taiwan","Iran","Indonesia","Malaysia","Israel"];

for($negara = 1;$negara < 11;$negara++)
{
	$query = mysqli_query($koneksi,"SELECT sum(totalcases) AS total FROM tb_covidcase WHERE id_case='$negara'");
	$row = $query->fetch_array();
	$totalcases[] = $row['total'];
}

for($negara = 1;$negara < 11;$negara++)
{
	$query = mysqli_query($koneksi,"SELECT sum(totaldeath) AS total FROM tb_covidcase WHERE id_case='$negara'");
	$row = $query->fetch_array();
	$totaldeath[] = $row['total'];
}

for($negara = 1;$negara < 11;$negara++)
{
	$query = mysqli_query($koneksi,"SELECT sum(totalrecovered) AS total FROM tb_covidcase WHERE id_case='$negara'");
	$row = $query->fetch_array();
	$totalrecovered[] = $row['total'];
}

for($negara = 1;$negara < 11;$negara++)
{
	$query = mysqli_query($koneksi,"SELECT sum(activecases) AS total FROM tb_covidcase WHERE id_case='$negara'");
	$row = $query->fetch_array();
	$activecases[] = $row['total'];
}

for($negara = 1;$negara < 11;$negara++)
{
	$query = mysqli_query($koneksi,"SELECT sum(totaltests) AS total FROM tb_covidcase WHERE id_case='$negara'");
	$row = $query->fetch_array();
	$totaltests[] = $row['total'];
}
?>

<!DOCTYPE html>
<html>

<head>

	<title>Bar Chart Covid Case</title>
	<script type="text/javascript" src="Chart.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            body {
                padding-top: 1%;
            }
        .container {
            width: 1400px;
            height: 650px;
            }
        </style>

</head>

<body>
    <center><h2>Grafik Bar Covid Case</h2>
        <br>
	<div class="container">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($label); ?>,
				datasets: [{
					label: 'Total Cases Covid Case',
					data: <?php echo json_encode($totalcases); ?>,
					backgroundColor: [
					'rgba(251, 160, 122, 0.2)',
					'rgba(251, 160, 122, 0.2)',
					'rgba(251, 160, 122, 0.2)',
					'rgba(251, 160, 122, 0.2)',
					'rgba(251, 160, 122, 0.2)',
					'rgba(251, 160, 122, 0.2)',
					'rgba(251, 160, 122, 0.2)',
					'rgba(251, 160, 122, 0.2)',
					'rgba(251, 160, 122, 0.2)',
					'rgba(251, 160, 122, 0.2)'
					],
					borderColor: [
					'rgba(251, 160, 122, 1)',
					'rgba(251, 160, 122, 1)',
					'rgba(251, 160, 122, 1)',
					'rgba(251, 160, 122, 1)',
					'rgba(251, 160, 122, 1)',
					'rgba(251, 160, 122, 1)',
					'rgba(251, 160, 122, 1)',
					'rgba(251, 160, 122, 1)',
					'rgba(251, 160, 122, 1)',
					'rgba(251, 160, 122, 1)'
					],
					borderWidth: 1
				},{
					label: 'Total Death Covid Case',
					data: <?php echo json_encode($totaldeath); ?>,
					backgroundColor: [
					'rgba(72, 209, 204, 0.2)',
					'rgba(72, 209, 204, 0.2)',
					'rgba(72, 209, 204, 0.2)',
					'rgba(72, 209, 204, 0.2)',
					'rgba(72, 209, 204, 0.2)',
					'rgba(72, 209, 204, 0.2)',
					'rgba(72, 209, 204, 0.2)',
					'rgba(72, 209, 204, 0.2)',
					'rgba(72, 209, 204, 0.2)',
					'rgba(72, 209, 204, 0.2)'
					],
					borderColor: [
					'rgba(72, 209, 204, 1)',
					'rgba(72, 209, 204, 1)',
					'rgba(72, 209, 204, 1)',
					'rgba(72, 209, 204, 1)',
					'rgba(72, 209, 204, 1)',
					'rgba(72, 209, 204, 1)',
					'rgba(72, 209, 204, 1)',
					'rgba(72, 209, 204, 1)',
					'rgba(72, 209, 204, 1)',
					'rgba(72, 209, 204, 1)'
					],
					borderWidth: 1
				},{
					label: 'Total Recovered Covid Case',
					data: <?php echo json_encode($totalrecovered); ?>,
					backgroundColor: [
					'rgba(154, 205, 49, 0.2)',
					'rgba(154, 205, 49, 0.2)',
					'rgba(154, 205, 49, 0.2)',
					'rgba(154, 205, 49, 0.2)',
					'rgba(154, 205, 49, 0.2)',
					'rgba(154, 205, 49, 0.2)',
					'rgba(154, 205, 49, 0.2)',
					'rgba(154, 205, 49, 0.2)',
					'rgba(154, 205, 49, 0.2)',
					'rgba(154, 205, 49, 0.2)'
					],
					borderColor: [
					'rgba(154, 205, 49, 1)',
					'rgba(154, 205, 49, 1)',
					'rgba(154, 205, 49, 1)',
					'rgba(154, 205, 49, 1)',
					'rgba(154, 205, 49, 1)',
					'rgba(154, 205, 49, 1)',
					'rgba(154, 205, 49, 1)',
					'rgba(154, 205, 49, 1)',
					'rgba(154, 205, 49, 1)',
					'rgba(154, 205, 49, 1)'
					],
					borderWidth: 1
				},{
					label: 'Active Cases Covid Case',
					data: <?php echo json_encode($activecases); ?>,
					backgroundColor: [
					'rgba(123, 103, 238, 0.2)',
					'rgba(123, 103, 238, 0.2)',
					'rgba(123, 103, 238, 0.2)',
					'rgba(123, 103, 238, 0.2)',
					'rgba(123, 103, 238, 0.2)',
					'rgba(123, 103, 238, 0.2)',
					'rgba(123, 103, 238, 0.2)',
					'rgba(123, 103, 238, 0.2)',
					'rgba(123, 103, 238, 0.2)',
					'rgba(123, 103, 238, 0.2)'
					],
					borderColor: [
					'rgba(123, 103, 238, 1)',
					'rgba(123, 103, 238, 1)',
					'rgba(123, 103, 238, 1)',
					'rgba(123, 103, 238, 1)',
					'rgba(123, 103, 238, 1)',
					'rgba(123, 103, 238, 1)',
					'rgba(123, 103, 238, 1)',
					'rgba(123, 103, 238, 1)',
					'rgba(123, 103, 238, 1)',
					'rgba(123, 103, 238, 1)'
					],
					borderWidth: 1
				},{
					label: 'Total Tests Covid Case',
					data: <?php echo json_encode($totaltests); ?>,
					backgroundColor: [
					'rgba(119, 136, 153, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					],
					borderColor: [
					'rgba(119, 136, 153, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(119, 136, 153, 1)',
					
					],
					borderWidth: 1
				}]
			},
			options: {
				responsive:true,
				maintainAspectRatio: false,
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