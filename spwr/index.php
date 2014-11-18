<?php
/**
 * Created by PhpStorm.
 * User: shinkendo
 * Date: 31.05.14
 * Time: 14:10
 */
require_once 'Data.php';
require_once 'Map.php';
$data = new Data();
$data->getData();
$dateList = $data->getDateList();
$layerList = $data->getLayerList();

if (isset($_GET['date'])) {
	$date = $_GET['date'];
} else {
	$date = $dateList[0];
}
if (isset($_GET['layer'])) {
	$layer = $_GET['layer'];
} else {
	$layer = 'rain';
}

if (isset($_GET['reload'])) {
	$reload = true;
} else {
	$reload = false;
}

//var_dump($date);
//var_dump($layer);
//var_dump($reload);
$data->getData($reload);
$map = new Map($date, $layer, $data);
$reload = false;
//var_dump($map->getMap());


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Generates and displays a weather report for Switzerland">
	<meta name="author" content="jerome.roethlisberger">
	<link rel="shortcut icon" href="bootstrap/ico/favicon.ico">

	<title>Steampilot Weather Report</title>

	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/steampilot.css" rel="stylesheet" >

</head>
<body>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">SPWR</a>
		</div>
		<div class="navbar">
			<ul class="nav navbar-nav">
				<li>
					<?php
					echo(sprintf('<a href="index.php?date=%s&layer=%s">Today</a>',$dateList[0],$layer));
					?>
				</li>
				<li>
					<?php
					echo(sprintf('<a href="index.php?date=%s&layer=%s">Tomorrow</a>',$dateList[1],$layer));
					?>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Weekly Forecast <b class="caret"></b></a>
					<ul class="dropdown-menu">

						<li>
							<?php
							echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%1$s</a>',$dateList[2],$layer));
							?>
						</li>
						<li>
							<?php
							echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%1$s</a>',$dateList[3],$layer));
							?>
						</li>
						<li>
							<?php
							echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%1$s</a>',$dateList[4],$layer));
							?>
						</li>
						<li>
							<?php
							echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%1$s</a>',$dateList[5],$layer));
							?>
						</li>
						<li>
							<?php
							echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%1$s</a>',$dateList[6],$layer));
							?>
						</li>
					</ul>
				</li>
				<li>
					<a class="btn btn-success" id="reload-btn"
						<?php echo (sprintf('href="index.php?date=%1$s&layer=%2$s&reload"',$date,$layer));?>
						>Reload Data</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
	<div class="container">
		<div class="col-lg-2">
			<div class="panel panel-primary panel-green">
				<div class="panel-heading">
					<h3 class="panel-title">Data Layer</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li>
							<?php
							echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%3$s</a>', $date , 'rain',$layerList['rain']));
							?>
						</li>
						<li>
							<?php
							echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%3$s</a>', $date , 'temp', $layerList['temp']));
							?>
						</li>
						<li>
							<?php
							echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%3$s</a>', $date , 'wind', $layerList['wind']));
							?>
						</li>
						<li>
							<?php
							echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%3$s</a>', $date , 'pollen',$layerList['pollen']));
							?>
						</li>
					</ul>
				</div>
			</div>
		</div><!-- /.col-sm-4 -->
		<div class="col-lg-10">
			<?php
			echo ($map->getMap());
			?>
			<div id="push"></div>
		</div><!-- /.col-sm-4 -->
		<div class="row">

			<div id="footer-sti">
				<div class="container">
					<p class="text-muted">SPWR createy by Jerome Roethlisberger  &copy;2014</p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
