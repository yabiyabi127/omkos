<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
	<meta name="robots" content="all,follow">
	<title>OM KOSAN</title>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.3/dist/semantic.min.css">
	<link rel="stylesheet" href="<?= base_url('asset/css/style.css'); ?>">
	<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.3/dist/semantic.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<!-- navbar -->
	<div class="ui grid">
		<div class="computer only row">
			<div class="ui fixed menu" style="background-color: #263238 ;">
				<div class="item">
					<img src="<?= base_url('asset/images/'); ?>logo.png" alt="SimpleIU">
				</div>
			    <div class="header item" style="color: #FFF;">OM KOST</div>
			    <a href="<?= base_url(); ?>" class="item right" style="color: #FFF;"><i class="home icon"></i>HOME</a>
			    <a href="<?= base_url('#'); ?>" class="item" style="color: #FFF;"><i class="info icon"></i>ABOUT</a>
			    <?php $session = $this->session->userdata('login'); if ($this->session->login['status'] != 'login') { ?>
				    <a href="<?= base_url('login'); ?>" class="item" style="color: #FFF;"><i class="sign in alternate icon"></i>LOGIN</a>
				<?php }else{ ?>
					<a href="<?= base_url('kost'); ?>" class="item" style="color: #FFF;"><i class="sign in alternate icon"></i>DASHBOARD</a>
				<?php } ?>
			    <div class="item">
			      <form action="<?= base_url('show/index');  ?>" method="POST">
			          <div class="ui form">
			          	<div class="two fields">
			              <div class="field">
			                   <input type="text" name="cari" placeholder="">
			              </div>
			              <div class="field">
			                    <button class="ui blue button">
					              <i class="search icon"></i>
					              CARI
					          </button>
			              </div>
			            </div>
			          </div>
			      </form>
			    </div>
			</div>
		</div>
		<div class="tablet and mobile only row">
			<div class="ui fixed menu" style="background-color: #263238;">
				<div class="item">
					<img src="<?= base_url('asset/images/'); ?>logo.png" alt="SimpleIU">
				</div>
			    <div class="header item" style="color: #FFF;">OM KOST</div>
			    <div id="showmenu" class="right item" style="color: #FFF;"><i class="hamburger icon"></i></div>
			</div>
			<div id="mymenu" class="mymenu hidden">
				<div class="ui right fixed vertical menu">
					<div class="item" style="text-align: center;">
					<table>
						<tr>
							<td>
								<img class="ui mini image" src="<?= base_url('asset/images/'); ?>logo.png">
							</td>
							<td>
								<span style="margin-left: 3px; margin-right: 3px;">OMKOS</span>
							</td>
						</tr>
					</table>
					</div>
						<a href="<?= base_url(); ?>" class="item">HOME</a>
						<a hhref="<?= base_url('about'); ?>" class="item">ABOUT</a>
						<a href="<?= base_url('login'); ?>" class="item">LOGIN</a>
					<div class="item" id="hidemenu" style="text-align: center;">
						<button class="fluid ui button">
							Close
						</button>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end navbar -->
	<style>
		.hidden{
			display: none;
		}
	</style>
	<script>
		/*BEGIN RESPONSIVE MENU ANIMATION*/
			$(document).ready(function(){
			    $("#showmenu").click(function(){
			        $('.mymenu .menu')
					  .transition({
					  	animation : 'swing left',
					    duration  : 1000
					  })
					;
					$('#mymenu').removeClass('hidden');
			    });
			    $("#hidemenu").click(function(){
			    	$('#mymenu').removeClass('hidden');
			        $('.mymenu .menu')
					  .transition({
					  	animation : 'fade',
					    duration  : 1000
					  });
			    });
		    });
		    /*END RESPONSIVE MENU ANIMATION*/
		    
	</script>