<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Dashboard';

// being really pedantic about asset order...
p2made\theme\sbAdmin\web\SBAdminAsset::register($this);
p2made\assets\pub\MorrisAsset::register($this);
p2made\assets\cdn\Html5shivAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2made\theme\sbAdmin\demo\MorrisDemoAsset::register($this);

/* pub
p2made\theme\sbAdmin\web\SBAdmin2Asset::register($this);
p2made\theme\sbAdmin\web\SBAdmin2UserAsset::register($this);
p2made\theme\sbAdmin\web\SBAdminAsset::register($this);
p2made\theme\sbAdmin\web\TimelineAsset::register($this);

p2made\assets\pub\BootstrapSocialAsset::register($this);
p2made\assets\pub\DataTablesAsset::register($this);
p2made\assets\pub\ExcanvasAsset::register($this);
p2made\assets\pub\FlotChartsAsset::register($this);
p2made\assets\pub\FlotTooltipAsset::register($this);
p2made\assets\pub\FullCalendarAsset::register($this);
p2made\assets\pub\Html5shivAsset::register($this);
p2made\assets\pub\MetisMenuAsset::register($this);
p2made\assets\pub\MomentAsset::register($this);
p2made\assets\pub\MomentTimezoneAsset::register($this);
p2made\assets\pub\MorrisAsset::register($this);
p2made\assets\pub\RaphaelAsset::register($this);
p2made\assets\pub\SweetAlertAsset::register($this);

		'p2made\assets\pub\BootstrapSocialAsset',
		'p2made\assets\pub\DataTablesAsset',
		'p2made\assets\pub\ExcanvasAsset',
		'p2made\assets\pub\FlotChartsAsset',
		'p2made\assets\pub\FlotTooltipAsset',
		'p2made\assets\pub\FullCalendarAsset',
		'p2made\assets\pub\Html5shivAsset',
		'p2made\assets\pub\MetisMenuAsset',
		'p2made\assets\pub\MomentAsset',
		'p2made\assets\pub\MomentTimezoneAsset',
		'p2made\assets\pub\MorrisAsset',
		'p2made\assets\pub\RaphaelAsset',
		'p2made\assets\pub\SweetAlertAsset',
 */

/* cdn
p2made\assets\cdn\BootstrapSocialAsset::register($this);
p2made\assets\cdn\DataTablesAsset::register($this);
p2made\assets\cdn\ExcanvasAsset::register($this);
p2made\assets\cdn\FlotChartsAsset::register($this);
p2made\assets\cdn\FlotTooltipAsset::register($this);
p2made\assets\cdn\FullCalendarAsset::register($this);
p2made\assets\cdn\Html5shivAsset::register($this);
p2made\assets\cdn\MetisMenuAsset::register($this);
p2made\assets\cdn\MomentAsset::register($this);
p2made\assets\cdn\MomentTimezoneAsset::register($this);
p2made\assets\cdn\MorrisAsset::register($this);
p2made\assets\cdn\RaphaelAsset::register($this);
p2made\assets\cdn\SweetAlertAsset::register($this);

		'p2made\assets\cdn\BootstrapSocialAsset',
		'p2made\assets\cdn\DataTablesAsset',
		'p2made\assets\cdn\ExcanvasAsset',
		'p2made\assets\cdn\FlotChartsAsset',
		'p2made\assets\cdn\FlotTooltipAsset',
		'p2made\assets\cdn\FullCalendarAsset',
		'p2made\assets\cdn\Html5shivAsset',
		'p2made\assets\cdn\MetisMenuAsset',
		'p2made\assets\cdn\MomentAsset',
		'p2made\assets\cdn\MomentTimezoneAsset',
		'p2made\assets\cdn\MorrisAsset',
		'p2made\assets\cdn\RaphaelAsset',
		'p2made\assets\cdn\SweetAlertAsset',
 */
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-info alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-comments fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">26</div>
							<div>New Comments!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-green">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-tasks fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">12</div>
							<div>New Tasks!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-shopping-cart fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">124</div>
							<div>New Orders!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-red">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-support fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">13</div>
							<div>Support Tickets!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
				</div>
				<div class="panel-body">
					<div id="morris-area-chart"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
				</div>
				<div class="panel-body">
					<div id="morris-donut-chart"></div>
					<div class="text-right">
						<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<span class="badge">just now</span>
							<i class="fa fa-fw fa-calendar"></i> Calendar updated
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">4 minutes ago</span>
							<i class="fa fa-fw fa-comment"></i> Commented on a post
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">23 minutes ago</span>
							<i class="fa fa-fw fa-truck"></i> Order 392 shipped
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">46 minutes ago</span>
							<i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">1 hour ago</span>
							<i class="fa fa-fw fa-user"></i> A new user has been added
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">2 hours ago</span>
							<i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">yesterday</span>
							<i class="fa fa-fw fa-globe"></i> Saved the world
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">two days ago</span>
							<i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
						</a>
					</div>
					<div class="text-right">
						<a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>Order #</th>
									<th>Order Date</th>
									<th>Order Time</th>
									<th>Amount (USD)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>3326</td>
									<td>10/21/2013</td>
									<td>3:29 PM</td>
									<td>$321.33</td>
								</tr>
								<tr>
									<td>3325</td>
									<td>10/21/2013</td>
									<td>3:20 PM</td>
									<td>$234.34</td>
								</tr>
								<tr>
									<td>3324</td>
									<td>10/21/2013</td>
									<td>3:03 PM</td>
									<td>$724.17</td>
								</tr>
								<tr>
									<td>3323</td>
									<td>10/21/2013</td>
									<td>3:00 PM</td>
									<td>$23.71</td>
								</tr>
								<tr>
									<td>3322</td>
									<td>10/21/2013</td>
									<td>2:49 PM</td>
									<td>$8345.23</td>
								</tr>
								<tr>
									<td>3321</td>
									<td>10/21/2013</td>
									<td>2:23 PM</td>
									<td>$245.12</td>
								</tr>
								<tr>
									<td>3320</td>
									<td>10/21/2013</td>
									<td>2:15 PM</td>
									<td>$5663.54</td>
								</tr>
								<tr>
									<td>3319</td>
									<td>10/21/2013</td>
									<td>2:13 PM</td>
									<td>$943.45</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="text-right">
						<a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- /#content-wrapper -->

----- ^ ----- ^ ----- ^ ----- ^ ----- ^ -----

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin - Bootstrap Admin Template</title>

	<!-- Bootstrap Core CSS -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="../assets/css/sb/sb-admin.css" rel="stylesheet" type="text/css">

	<!-- Morris Charts CSS -->
	<link href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
