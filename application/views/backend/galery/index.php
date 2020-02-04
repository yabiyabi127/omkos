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
							<div class="ui blue ribbon icon label">KOSAN</div>
							<br><br>
							<a class="ui blue button" href="<?= base_url('galery/tambah');  ?>">
							    <i class="plus icon"></i>
							    TAMBAH DATA
							</a>
							<br><br>
							<table id="example" class="ui celled table responsive nowrap unstackable" style="width:100%">
							    <thead>
							        <tr>
							            <th>NAMA KOST</th>
							            <th>GAMBAR UTAMA</th>
							            <th>GAMBAR DETAIL 1</th>
							            <th>GAMBAR DETAIL 2</th>
							            <th>GAMBAR DETAIL 3</th>
							            <th>ACTION</th>
							        </tr>
							    </thead>
								<tbody>
							    <?php foreach ($data as $r) { ?>
							        <tr>
							            <td><?= $r->nama_kost; ?></td>
							            <td><?= $r->gambar_1; ?></td>
							            <td><?= $r->gambar_2; ?></td>
							            <td><?= $r->gambar_3; ?></td>
							            <td><?= $r->gambar_4; ?></td>
							            <td style="text-align: center;">
							                <div class="ui buttons">
							                    <a href="<?= base_url('galery/edit/').$r->id_gambar_detail; ?>" class="ui green button"><i class="pen icon"></i></a>
							                    <div class="or" data-text="/"></div>
							                    <a href="<?= base_url('galery/hapus/').$r->id_gambar_detail; ?>" class="ui red button"><i class="trash alternate icon"></i></a>
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