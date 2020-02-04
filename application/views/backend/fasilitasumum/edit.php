<!-- BEGIN CONTEN -->
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="fifteen wide computer sixteen wide phone centered column">
				<h2><i class="briefcase icon"></i> FORM FASILITAS UMUM</h2>
				<div class="ui divider"></div>
				<div class="ui grid">
					<div class="sixteen wide computer sixteen wide phone centered column">
						<form action="<?= base_url('fasilitasumum/aksi_edit');  ?>" method="POST">
							<?php foreach ($data as $key) { ?>
							<div class="ui stacked segment">
			                    <div class="ui form">
			                    	<div class="field">
		                                <label>RUANG MAKAN</label>
			                            <select name="ruang_makan" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>TAMU</label>
			                            <select name="ruang_tamu" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>TEMPAT JEMURAN</label>
			                            <select name="ruang_jemuran" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>TAMAN</label>
			                            <select name="taman" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>MUSHOLA</label>
			                            <select name="mushola" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>DAPUR</label>
			                            <select name="dapur" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>BAWA HEWAN</label>
			                            <select name="bawa_hewan" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>AKSES KUNCI GERBANG</label>
			                            <select name="akses_kunci_gerbang" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>CCTV</label>
			                            <select name="cctv" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div> 
			                    </div>
			                    <input type="hidden" name="id_fasilitas_umum" value="<?= $key->id_fasilitas_umum ?>">
			                    <br>
			                    <input type="hidden" name="add">
			                    <button class="ui blue button">
			                        <i class="save icon"></i>
			                        SIMPAN
			                    </button>
			                    <a class="ui button" href="<?= base_url('fasilitasumum/index');  ?>">
			                        <i class="cancel icon"></i>
			                        BATAL
			                    </a>
			                </div>
							<?php } ?>
			            </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->