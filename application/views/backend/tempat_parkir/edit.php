<!-- BEGIN CONTEN -->
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="fifteen wide computer sixteen wide phone centered column">
				<h2><i class="briefcase icon"></i> FORM TEMPAT PARKIR</h2>
				<div class="ui divider"></div>
				<div class="ui grid">
					<div class="sixteen wide computer sixteen wide phone centered column">
						<form action="<?= base_url('tempat_parkir/aksi_edit');  ?>" method="POST">
							<?php foreach ($data as $key) { ?>
							<div class="ui stacked segment">
			                    <div class="ui form">
			                    	<div class="field">
		                                <label>MOBIL</label>
			                            <select name="mobil" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>MOTOR</label>
			                            <select name="motor" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
		                            <div class="field">
		                                <label>SEPEDA</label>
			                            <select name="sepeda" id="" class="ui dropdown">
			                            	<option value="ya">YA</option>
			                            	<option value="tidak">TIDAK</option>
			                            </select>
		                            </div>
			                    </div>
			                    <br>
			                    <input type="hidden" name="id_parkir" value="<?= $key->id_parkir ?>">
			                    <input type="hidden" name="add">
			                    <button class="ui blue button">
			                        <i class="save icon"></i>
			                        SIMPAN
			                    </button>
			                    <a class="ui button" href="<?= base_url('tempat_parkir/index');  ?>">
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