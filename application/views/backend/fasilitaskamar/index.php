<!-- BEGIN CONTEN -->
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="fifteen wide computer sixteen wide phone centered column">
				<h2><i class="table icon"></i>TABLE EXAMPLE</h2>
				<div class="ui divider"></div>
				<div class="ui grid">
					<div class="sixteen wide computer sixteen wide phone centered column">
						<!-- BEGIN DATATABLE -->
						<div class="ui stacked segment">
							<div class="ui blue ribbon icon label">FASILITAS KAMAR</div>
							<br><br>
							<a class="ui blue button" href="<?= base_url('fasilitaskamar/tambah');  ?>">
							    <i class="plus icon"></i>
							    TAMBAH DATA
							</a>
							<br><br>
							<table id="example" class="ui celled table responsive nowrap unstackable" style="width:100%">
							    <thead>
							        <tr>
							            <th>NAMA KOST</th>
							            <th>LUAS KAMAR</th>
							            <th>KASUR</th>
							            <th>MEJA BELAJAR</th>
							            <th>TV</th>
							            <th>AC</th>
							            <th>WIFI</th>
							            <th>PASUTRI</th>
							            <th>LEMARI</th>
							            <th>ACTION</th>
							        </tr>
							    </thead>
								<tbody>
							   <?php foreach ($data as $data) { ?>
							        <tr>
							            <td><?= $data->nama_kost; ?></td>
							            <td><?= $data->luas_kamar; ?></td>
							            <td><?= $data->bed; ?></td>
							            <td><?= $data->meja_belajar; ?></td>
							            <td><?= $data->tv; ?></td>
							            <td><?= $data->ac; ?></td>
							            <td><?= $data->wifi; ?></td>
							            <td><?= $data->pasutri; ?></td>
							            <td><?= $data->almari; ?></td>
							            <td style="text-align: center;">
							                <div class="ui buttons">
							                    <a href="<?= base_url('fasilitaskamar/edit/').$data->id_fasilitas_kamar; ?>" class="ui green button"><i class="pen icon"></i></a>
							                    <div class="or" data-text="/"></div>
							                    <a href="<?= base_url('fasilitaskamar/hapus/').$data->id_fasilitas_kamar; ?>" class="ui red button"><i class="trash alternate icon"></i></a>
							                </div>
							            </td>
							        </tr>
							   <?php } ?>
							    </tbody>
							</table>
						</div>
						<!-- END DATATABLE -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->