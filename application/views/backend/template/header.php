<?php 
$session = $this->session->userdata('login');
if ($this->session->login['status'] != 'login') {
	redirect(base_url("login"));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
	<meta name="robots" content="all,follow">
	<title>Dashboard admin</title>
	<link rel="icon" href="<?= base_url('asset/images/'); ?>logo.png" sizes="32x32">
	<!-- inject:css -->
  	<link rel="stylesheet" href="<?= base_url('asset/vendors/'); ?>fomantic-ui/semantic.min.css">
  	<link rel="stylesheet" href="<?= base_url('asset/vendors/'); ?>datatables.net/datatables.net-se/css/dataTables.semanticui.min.css">
  	<link rel="stylesheet" href="<?= base_url('asset/vendors/'); ?>datatables.net/datatables.net-responsive-se/css/responsive.semanticui.min.css">
  	<link rel="stylesheet" href="<?= base_url('asset/vendors/'); ?>datatables.net/datatables.net-buttons-se/css/buttons.semanticui.min.css">
  	<link rel="stylesheet" href="<?= base_url('asset/css/'); ?>/main.css">
  	<!-- endinject -->
</head>
<body>
	<div class="ui grid">
		<div class="row">
			<div class="ui grid">
				<!-- BEGIN NAVBAR -->
				<!-- computer only navbar -->
				<div class="computer only row">
					<div class="column">
						<div class="ui top fixed menu" style="background-color: #263238; padding-top: 10px;">
							<div class="item" style="padding-top: 1px">
								<img src="<?= base_url('asset/images/'); ?>logo.png" alt="SimpleIU">
							</div>
							<div class="left menu">
								<div class="nav item">
									<a href="<?= base_url(); ?>" class="navtext">OM-KOSAN</a>
								</div>
							</div>
							<div class="ui top pointing dropdown admindropdown link item right">
								
								<span class="clear navtext" style="text-transform: capitalize;"><strong><?= $this->session->login['nama'] ?></strong></span>
								<i class="dropdown icon navtext"></i>
								<div class="menu">
									<div class="item"><p><i class="settings icon"></i>About</p></div>
									<a href="<?= base_url('login/logout'); ?>" class="item"><p><i class="sign out alternate icon"></i>Logout</p></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end computer only navbar -->
				<!-- mobile and tablet only navbar -->
				<div class="tablet mobile only row">
					<div class="column">
				    <div class="ui top fixed menu " style="background-color: #263238;" >
						<a id="showmobiletabletsidebar" class="item navtext"><i class="content icon"></i></a>
						<div class="right menu">
							<div class="item">
								<strong class="navtext">OM-KOS</strong>
							</div>
							<div class="item">
								<img src="<?= base_url('asset/images/'); ?>logo.png">
							</div>
						</div>
					</div>
					</div>
				</div>
				<!-- end mobile and tablet only navbar -->
				<!-- END NAVBAR -->

				<!-- BEGIN SIDEBAR -->
				<!-- mobile and tablet only sidebar -->
				<div class="tablet mobile only row">
					<div id="mobiletabletsidebar" class="mobiletabletsidebar animate hidden">
						<div class="ui left fixed vertical menu scrollable">
							<div class="item">
								<table>
									<tr>
										<td>
											<img class="ui mini image" src="<?= base_url('asset/images/'); ?>logo.png">
										</td>
										<td>
											<span class="clear"><strong>OM-KOS</strong></span>
										</td>
									</tr>
								</table>
							</div>
							<a class="item" href="<?= base_url('kost/index');  ?>"> Kosan</a>
							<a class="item" href="<?= base_url('fasilitaskamar/index');  ?>"> Fasilitas kamar</a>
							<a class="item" href="<?= base_url('fasilitasumum/index');  ?>"> Fasilitas umum</a>
							<a class="item" href="<?= base_url('kamar_mandi/index');  ?>">Kamar mandi</a>
							<a class="item" href="<?= base_url('tempat_parkir/index');  ?>"> Tempat parkir</a>
							<a class="item" href="<?= base_url('galery/index');  ?>"> Galery</a>
							<div class="item" id="hidemobiletabletsidebar">
								<button class="fluid ui button">
									Close
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- end mobile and tablet only sidebar -->
				<!-- computer only sidebar -->
				<div class="computer only row">
					<div class="left floated three wide computer column" id="computersidebar">
						<div class="ui vertical fluid menu scrollable" id="simplefluid">
							<div class="clearsidebar"></div>
							<div class="item" style="text-align: center; text-transform: uppercase;">
								<h3><?= $this->session->login['nama'] ?></h3>
							</div>
							<a class="item" href="<?= base_url('kost/index');  ?>"> Kosan</a>
							<a class="item" href="<?= base_url('fasilitaskamar/index');  ?>"> Fasilitas kamar</a>
							<a class="item" href="<?= base_url('fasilitasumum/index');  ?>"> Fasilitas umum</a>
							<a class="item" href="<?= base_url('kamar_mandi/index');  ?>">Kamar mandi</a>
							<a class="item" href="<?= base_url('tempat_parkir/index');  ?>"> Tempat parkir</a>
							<a class="item" href="<?= base_url('galery/index');  ?>"> Galery</a>
							
						</div>
					</div>
				</div>
				<!-- end computer only sidebar -->
				<!-- END SIDEBAR -->
			</div>
		</div>