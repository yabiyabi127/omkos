<!-- BEGIN CONTEN -->
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="fifteen wide computer sixteen wide phone centered column">
				<h2><i class="briefcase icon"></i> FORM KAMAR MANDI</h2>
				<div class="ui divider"></div>
				<div class="ui grid">
					<div class="sixteen wide computer sixteen wide phone centered column">
						<form action="<?= base_url('kamar_mandi/aksi_edit');  ?>" method="POST">
							<?php foreach ($data as $key) { ?>
							<div class="ui stacked segment">
			                    <div class="ui form">
			                    	<div class="field">
		                                <label>KAMAR MANDI DI DALAM</label>
			                            <select name="kamar_mandi_dalam" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>SHOWER</label>
			                            <select name="shower" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>KLOSET DUDUK</label>
			                            <select name="kloset_duduk" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>EMBER</label>
			                            <select name="ember_mandi" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>AIR PANAS</label>
			                            <select name="air_panas" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
			                    </div>
			                    <br>
			                    <input type="hidden" name="id_kamar_mandi" value="<?= $key->id_kamar_mandi ?>">
			                    <input type="hidden" name="add">
			                    <button class="ui blue button">
			                        <i class="save icon"></i>
			                        SIMPAN
			                    </button>
			                    <a class="ui button" href="<?= base_url('kamar_mandi/index');  ?>">
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