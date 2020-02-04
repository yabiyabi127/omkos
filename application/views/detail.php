<!-- jumbtron -->
<style>
.mySlides {display:none;width: 750px !important; height: 393px !important;object-fit: contain;}
</style>
	<div class="ui grid jumbotron">
		<div class="row">
			<div class="column hero2">
			   <div style="margin-top: 5%;">
					<div class="w3-content w3-display-container" style="width: 750px !important; height: 393px !important;">
						<?php foreach ($data as $r) { ?>
							<img class="mySlides" src="<?= base_url('asset/upload/').$r->gambar_1; ?>" style="width:100%">
							<img class="mySlides" src="<?= base_url('asset/upload/').$r->gambar_2; ?>" style="width:100%">
							<img class="mySlides" src="<?= base_url('asset/upload/').$r->gambar_3; ?>" style="width:100%">
							<img class="mySlides" src="<?= base_url('asset/upload/').$r->gambar_4; ?>" style="width:100%">
						<?php } ?>
					  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
					  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div>

			   </div>
			</div>
		</div>
	</div>

	<!-- end jumbtron -->
	<!-- content -->
	<div class="ui container centered grid">
		<div class="row">
			<h2 class="ui horizontal divider header" style="margin-top: 20px; margin-bottom: 50px;">
				DETAIL KOSTAN
			</h2>
			<div class="sixteen wide computer sixteen wide phone column">
				<?php foreach ($data as $r) { ?>
				<div class="ui stacked segment">
					<a class="ui blue ribbon label">DETAIL <?= $r->nama_kost ?></a>
					<table class="ui celled table">
					  <thead>
					      <tr>
					          <th>Alamat</th>
					          <th>Harga</th>
					          <th>Kamar Tersedia</th>
					          <th>Pembayaran</th>
					          <th>Jenis Kost</th>
					          <th>Pemilik Kost</th>
					          <th>Kontak</th>
					      </tr>
					  </thead>
					  <tbody>
					      <tr>
					          <td data-label="Alamat"><?= $r->alamat_kost ?></td>
					          <td data-label="Harga"><?= $r->harga_kost ?></td>
					          <td data-label="Kamar Tersedia"><?= $r->kamar_tersedia ?></td>
					          <td data-label="Pembayaran"><?= $r->jenis_kost ?>an</td>
					          <td data-label="Jenis Kost"><?= $r->penghuni_kost ?></td>
					          <td data-label="Pemilik Kost"><?= $r->nama_pemilik ?></td>
					          <td data-label="Kontak"><?= $r->kontak_pemilik ?></td>
					      </tr>
					  </tbody>
					</table>
					<a class="ui blue ribbon label">FASILITAS <?= $r->nama_kost ?></a>
					<table class="ui celled table">
					  <thead>
					      <tr>
					          <th>Luas Kamar</th>
					          <th>Bed</th>
					          <th>Meja Belajar</th>
					          <th>Tv</th>
					          <th>Ac</th>
					          <th>Wifi</th>
					          <th>Pasutri</th>
					          <th>Almari</th>
					      </tr>
					  </thead>
					  <tbody>
					      <tr>
					          <td data-label="Luas Kamar"><?= $r->luas_kamar ?></td>
					          <td data-label="Bed"><?= $r->bed ?></td>
					          <td data-label="Meja Belajar"><?= $r->meja_belajar ?></td>
					          <td data-label="Tv"><?= $r->tv ?></td>
					          <td data-label="Ac"><?= $r->ac ?></td>
					          <td data-label="Wifi"><?= $r->wifi ?></td>
					          <td data-label="Pasutri"><?= $r->pasutri ?></td>
					          <td data-label="Almari"><?= $r->almari ?></td>
					      </tr>
					  </tbody>
					</table>
					<a class="ui blue ribbon label">KAMAR MANDI <?= $r->nama_kost ?></a>
					<table class="ui celled table">
					  <thead>
					      <tr>
					          <th>Kamar Mandi Dalam</th>
					          <th>Shower</th>
					          <th>Kloset Duduk</th>
					          <th>Ember Mandi</th>
					          <th>Air Panas</th>
					      </tr>
					  </thead>
					  <tbody>
					      <tr>
					          <td data-label="Kamar Mandi Dalam"><?= $r->kamar_mandi_dalam ?></td>
					          <td data-label="Shower"><?= $r->shower ?></td>
					          <td data-label="Kloset Duduk"><?= $r->kloset_duduk ?></td>
					          <td data-label="Ember Mandi"><?= $r->ember_mandi ?></td>
					          <td data-label="Air Panas"><?= $r->air_panas ?></td>
					      </tr>
					  </tbody>
					</table>
					<a class="ui blue ribbon label">FASILITAS UMUM <?= $r->nama_kost ?></a>
					<table class="ui celled table">
					  <thead>
					      <tr>
					          <th>Ruang Makan</th>
					          <th>Ruang Tamu</th>
					          <th>Ruang Jemuran</th>
					          <th>Taman</th>
					          <th>Mushola</th>
					          <th>Dapur</th>
					          <th>Bawa Hewan</th>
					          <th>Akses Kunci Gerbang</th>
					          <th>CCTV</th>
					          <th>Lainnya</th>
					      </tr>
					  </thead>
					  <tbody>
					      <tr>
					          <td data-label="Ruang Makan"><?= $r->ruang_makan ?></td>
					          <td data-label="Ruang Tamu"><?= $r->ruang_tamu ?></td>
					          <td data-label="Ruang Jemuran"><?= $r->ruang_jemuran ?></td>
					          <td data-label="Taman"><?= $r->taman ?></td>
					          <td data-label="Mushola"><?= $r->mushola ?></td>
					          <td data-label="Dapur"><?= $r->dapur ?></td>
					          <td data-label="Bawa Hewan"><?= $r->bawa_hewan ?></td>
					          <td data-label="Akses Kunci Gerbang"><?= $r->akses_kunci_gerbang ?></td>
					          <td data-label="CCTV"><?= $r->cctv ?></td>
					          <td data-label="Lainnya"><?= $r->fasilitas_lain ?></td>
					      </tr>
					  </tbody>
					</table>
					<a class="ui blue ribbon label">FASILITAS PARKIR <?= $r->nama_kost ?></a>
					<table class="ui celled table">
					  <thead>
					      <tr>
					          <th>Mobil</th>
					          <th>Motor</th>
					          <th>Sepeda</th>
					      </tr>
					  </thead>
					  <tbody>
					      <tr>
					          <td data-label="Mobil"><?= $r->mobil ?></td>
					          <td data-label="Motor"><?= $r->motor ?></td>
					          <td data-label="Sepeda"><?= $r->sepeda ?></td>
					      </tr>
					  </tbody>
					</table>
					<br><br>
				</div><br><br><br><br><br><br>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- end content -->