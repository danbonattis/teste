<!DOCTYPE html>
	<html lang="pt-br" ng-app="estadosModulo">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description ?>">
		<meta name="base_url" content="{{ URL::to('') }}">
		<link rel="stylesheet" href="<?= url('assets/Site/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?= url('assets/Site/css/estilo.css'); ?>">
		<script src="<?= url('assets/Site/js/angular.min.js'); ?>"></script>
		<script src="<?= url('assets/Site/js/Angular/estados.js') ?>"></script>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?= url('/') ?>">Logo</a>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="<?= url('/') ?>">Home <span class="sr-only">(current)</span></a></li>
			      </ul>
			    </div>
			  </div>
			</nav>
		</header>