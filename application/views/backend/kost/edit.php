<!-- BEGIN CONTEN -->
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="fifteen wide computer sixteen wide phone centered column">
				<h2><i class="briefcase icon"></i> FORM EDIT INFO KOST</h2>
				<div class="ui divider"></div>
				<div class="ui grid">
					<div class="sixteen wide computer sixteen wide phone centered column">
						<form action="<?= base_url('kost/aksi_edit');  ?>" method="POST">
			                <div class="ui stacked segment">
			                	<?php foreach ($data as $r) { ?>
			                		<div class="ui form">
			                		<input type="hidden" name="id_kost" value="<?= $r->id_kost ?>">
			                    	<div class="field">
		                                <label>NAMA KOSAN</label>
		                                <input value="<?= $r->nama_kost ?>" type="text" name="nama_kost" placeholder="">
		                            </div>
		                            <div class="field">
		                                <label>ALAMAT</label>
		                                <textarea name="alamat_kost" placeholder=""><?= $r->alamat_kost ?></textarea>
		                            </div>
		                            <div class="field">
		                                <label>HARGA KOST</label>
		                                <input value="<?= $r->harga_kost ?>" type="number" name="harga_kost" placeholder="">
		                            </div>
			                    	<div class="field">
		                                <label>JENIS KOST</label>
			                            <select name="jenis_kost" id="" class="ui dropdown">
			                            	<option value="bulan">BULANAN</option>
			                            	<option value="tahun">TAHUNAN</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>JUMLAH KAMAR</label>
		                                <input value="<?= $r->jumlah_kamar ?>" type="number" name="jumlah_kamar" placeholder="">
		                            </div>
		                            <div class="field">
		                                <label>KAMAR KOSONG</label>
		                                <input value="<?= $r->kamar_tersedia ?>" type="number" name="kamar_tersedia" placeholder="">
		                            </div>
		                            <div class="field">
		                                <label>PENGHUNI KOST</label>
			                            <select name="penghuni_kost" id="" class="ui dropdown">
			                            	<option value="PUTRI">PUTRI</option>
			                            	<option value="PUTRA">PUTRA</option>
			                            	<option value="CAMPUR">CAMPUR</option>
			                            </select>
		                            </div>
			                    </div>
			                	<?php } ?>
			                    <br>
			                    <input type="hidden" name="add">
			                    <button class="ui blue button">
			                        <i class="save icon"></i>
			                        SIMPAN
			                    </button>
			                    <a class="ui button" href="<?= base_url('kost/index');  ?>">
			                        <i class="cancel icon"></i>
			                        BATAL
			                    </a>
			                </div>
			            </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->