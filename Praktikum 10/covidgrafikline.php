<?php
include('koneksi2.php');
$india = mysqli_query($koneksi, "SELECT * FROM tb_covidcase WHERE country='India'");
$japan = mysqli_query($koneksi, "SELECT * FROM tb_covidcase WHERE country='Japan'");
$korsel = mysqli_query($koneksi, "SELECT * FROM tb_covidcase WHERE country='S.Korea'");
$turkey = mysqli_query($koneksi, "SELECT * FROM tb_covidcase WHERE country='Turkey'");
$vietnam = mysqli_query($koneksi, "SELECT * FROM tb_covidcase WHERE country='Vietnam'");
$taiwan = mysqli_query($koneksi, "SELECT * FROM tb_covidcase WHERE country='Taiwan'");
$iran = mysqli_query($koneksi, "SELECT * FROM tb_covidcase WHERE country='Iran'");
$indo = mysqli_query($koneksi, "SELECT * FROM tb_covidcase WHERE country='Indonesia'");
$malay = mysqli_query($koneksi, "SELECT * FROM tb_covidcase WHERE country='Malaysia'");
$israel = mysqli_query($koneksi, "SELECT * FROM tb_covidcase WHERE country='Israel'");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Grafik Line Covid Cases</title>
    <script src="Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style type="text/css">
        body {
                padding-top: 2%;
            }
        .container {
            width: 1400px;
            height: 625px;
            }
    </style>
</head>

<body>
    <center><h2>Grafik Line Chart Covid</h2></center>
    <br>
    <div class="container">
        <canvas id="linechart" width="100" height="100"></canvas>
    </div>

</body>
</html>

<script  type="text/javascript">
var ctx = document.getElementById("linechart").getContext("2d");
var data = {
            labels: ["Total Cases","Total Deaths","Total Recovered","Active Cases","Total Tests"],
            datasets: [
                {
                    label: "India",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#ADD8E6",
                    borderColor: "#ADD8E6",
                    pointHoverBackgroundColor: "#ADD8E6",
                    pointHoverBorderColor: "#ADD8E6",
                    data: [<?php while ($p = mysqli_fetch_array($india)) { echo '"' . $p['totalcases'] . '","' . $p['totaldeath'] . '","' . $p['totalrecovered'] . '","' . $p['activecases'] . '","' . $p['totaltests'] . '",';}?>]
                },
                {
                    label: "Japan",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#FFA07A",
                    borderColor: "#FFA07A",
                    pointHoverBackgroundColor: "#FFA07A",
                    pointHoverBorderColor: "#FFA07A",
                    data: [<?php while ($p = mysqli_fetch_array($japan)) { echo '"' . $p['totalcases'] . '","' . $p['totaldeath'] . '","' . $p['totalrecovered'] . '","' . $p['activecases'] . '","' . $p['totaltests'] . '",';}?>]
                },
                {
                    label: "S.Korea",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#20B2AA",
                    borderColor: "#20B2AA",
                    pointHoverBackgroundColor: "#20B2AA",
                    pointHoverBorderColor: "#20B2AA",
                    data: [<?php while ($p = mysqli_fetch_array($korsel)) { echo '"' . $p['totalcases'] . '","' . $p['totaldeath'] . '","' . $p['totalrecovered'] . '","' . $p['activecases'] . '","' . $p['totaltests'] . '",';}?>]
                },
                {
                    label: "Turkey",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F0E68C",
                    borderColor: "#F0E68C",
                    pointHoverBackgroundColor: "#F0E68C",
                    pointHoverBorderColor: "#F0E68C",
                    data: [<?php while ($p = mysqli_fetch_array($turkey)) { echo '"' . $p['totalcases'] . '","' . $p['totaldeath'] . '","' . $p['totalrecovered'] . '","' . $p['activecases'] . '","' . $p['totaltests'] . '",';}?>]
                },
                {
                    label: "Vietnam",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#228B22",
                    borderColor: "#228B22",
                    pointHoverBackgroundColor: "#228B22",
                    pointHoverBorderColor: "#228B22",
                    data: [<?php while ($p = mysqli_fetch_array($vietnam)) { echo '"' . $p['totalcases'] . '","' . $p['totaldeath'] . '","' . $p['totalrecovered'] . '","' . $p['activecases'] . '","' . $p['totaltests'] . '",';}?>]
                },
                {
                    label: "Taiwan",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#DA70D6",
                    borderColor: "#DA70D6",
                    pointHoverBackgroundColor: "#DA70D6",
                    pointHoverBorderColor: "#DA70D6",
                    data: [<?php while ($p = mysqli_fetch_array($taiwan)) { echo '"' . $p['totalcases'] . '","' . $p['totaldeath'] . '","' . $p['totalrecovered'] . '","' . $p['activecases'] . '","' . $p['totaltests'] . '",';}?>]
                },
                {
                    label: "Iran",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#FFE4C4",
                    borderColor: "#FFE4C4",
                    pointHoverBackgroundColor: "#FFE4C4",
                    pointHoverBorderColor: "#FFE4C4",
                    data: [<?php while ($p = mysqli_fetch_array($iran)) { echo '"' . $p['totalcases'] . '","' . $p['totaldeath'] . '","' . $p['totalrecovered'] . '","' . $p['activecases'] . '","' . $p['totaltests'] . '",';}?>]
                },
                {
                    label: "Indonesia",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#9370DB",
                    borderColor: "#9370DB",
                    pointHoverBackgroundColor: "#9370DB",
                    pointHoverBorderColor: "#9370DB",
                    data: [<?php while ($p = mysqli_fetch_array($indo)) { echo '"' . $p['totalcases'] . '","' . $p['totaldeath'] . '","' . $p['totalrecovered'] . '","' . $p['activecases'] . '","' . $p['totaltests'] . '",';}?>]
                },
                {
                    label: "Malaysia",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#6495ED",
                    borderColor: "#6495ED",
                    pointHoverBackgroundColor: "#6495ED",
                    pointHoverBorderColor: "#6495ED",
                    data: [<?php while ($p = mysqli_fetch_array($malay)) { echo '"' . $p['totalcases'] . '","' . $p['totaldeath'] . '","' . $p['totalrecovered'] . '","' . $p['activecases'] . '","' . $p['totaltests'] . '",';}?>]
                },
                {
                    label: "Israel",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#CD5C5C",
                    borderColor: "#CD5C5C",
                    pointHoverBackgroundColor: "#CD5C5C",
                    pointHoverBorderColor: "#CD5C5C",
                    data: [<?php while ($p = mysqli_fetch_array($israel)) { echo '"' . $p['totalcases'] . '","' . $p['totaldeath'] . '","' . $p['totalrecovered'] . '","' . $p['activecases'] . '","' . $p['totaltests'] . '",';}?>]
                }
                ]
        };

var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
            responsive:true,
            maintainAspectRatio: false,
            legend: {
            display: true
            },
            barValueSpacing: 20,
            scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                }
            }],
            xAxes: [{
                    gridLines: {
                        color: "rgba(11, 18, 39, 70)",
                        }
                    }]
            }
        }
        });
</script>