<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title><?php echo $template['title'] ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>">
</head>
<body>
	<header>
		<div class="header-container">
			<ul class="nav nav-pills">
			    <li class="dropdown">
			        <a <?php echo ($_SERVER['PATH_INFO'] === '/adminpbtournament') ? 'class="active"' : '' ?> href="<?php echo base_url('adminpbtournament');?>">Dashboard</a>
			    </li>
			    <li class="dropdown">
			        <a <?php echo ($_SERVER['PATH_INFO'] === '/adminpbtournament/banner') ? 'class="active"' : '' ?> href="<?php echo base_url('adminpbtournament/banner');?>">Banner</a>
			    </li>
			    <li class="dropdown">
			        <a <?php echo ($_SERVER['PATH_INFO'] === '/adminpbtournament/team/list' || $_SERVER['PATH_INFO'] === '/adminpbtournament/team/member') ? 'class="active"' : '' ?> href="#" data-toggle="dropdown" class="dropdown-toggle">Team <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			            <li><a href="<?php echo base_url('adminpbtournament/team/list');?>">Team List</a></li>
			            <li><a href="<?php echo base_url('adminpbtournament/team/member');?>">Team Member</a></li>
			        </ul>
			    </li>
			    <li class="dropdown">
			        <a <?php echo ($_SERVER['PATH_INFO'] === '/adminpbtournament/member/list' || $_SERVER['PATH_INFO'] === '/adminpbtournament/member/banned') ? 'class="active"' : '' ?> href="#" data-toggle="dropdown" class="dropdown-toggle">Member <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			            <li><a href="<?php echo base_url('adminpbtournament/member/list');?>">Member List</a></li>
			            <li><a href="<?php echo base_url('adminpbtournament/member/banned');?>">Member Banned</a></li>
			        </ul>
			    </li>
			    <li class="dropdown">
			        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Tournament <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			            <li><a href="<?php echo base_url('adminpbtournament/tournament-list');?>">Tournament List</a></li>
			            <li><a href="<?php echo base_url('adminpbtournament/tournament-table');?>">Tournament Table</a></li>
			        </ul>
			    </li>
		    </ul>
		</div>
	</header>
	<div class="container">
		<?php  echo $template['body']; ?>
	</div>
	
	<script src="<?php echo base_url('assets/js/jquery2.1.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>