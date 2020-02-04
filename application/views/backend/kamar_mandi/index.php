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
							<div class="ui blue ribbon icon label">KAMAR MANDI</div>
							<br><br>
							<a class="ui blue button" href="<?= base_url('kamar_mandi/tambah');  ?>">
							    <i class="plus icon"></i>
							    TAMBAH DATA
							</a>
							<br><br>
							<table id="example" class="ui celled table responsive nowrap unstackable" style="width:100%">
							    <thead>
							        <tr>
							            <th>NAMA KOST</th>
							            <th>KAMAR MANDI DI DALAM</th>
							            <th>SHOWER</th>
							            <th>KLOSET DUDUK</th>
							            <th>EMBER</th>
							            <th>AIR PANAS</th>
							            <th>ACTION</th>
							        </tr>
							    </thead>
								<tbody>
							   <?php foreach ($data as $data) { ?>
							        <tr>
							        	<td><?= $data->nama_kost; ?></td>
							            <td><?= $data->kamar_mandi_dalam; ?></td>
							            <td><?= $data->shower; ?></td>
							            <td><?= $data->kloset_duduk; ?></td>
							            <td><?= $data->ember_mandi; ?></td>
							            <td><?= $data->air_panas; ?></td>
							            <td style="text-align: center;">
							                <div class="ui buttons">
							                    <a href="<?= base_url('kamar_mandi/edit/').$data->id_kamar_mandi ?>" class="ui green button"><i class="pen icon"></i></a>
							                    <div class="or" data-text="/"></div>
							                    <a href="<?= base_url('kamar_mandi/hapus/').$data->id_kamar_mandi ?>" class="ui red button"><i class="trash alternate icon"></i></a>
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