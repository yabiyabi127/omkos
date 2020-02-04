<!-- BEGIN CONTEN -->
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="fifteen wide computer sixteen wide phone centered column">
				<h2><i class="briefcase icon"></i> FORM INFO KOST</h2>
				<div class="ui divider"></div>
				<div class="ui grid">
					<div class="sixteen wide computer sixteen wide phone centered column">
						<?php echo form_open_multipart('galery/aksi_edit');?>
			                <div class="ui stacked segment">
			                    <div class="ui form">
		                            <div class="field">
		                                <label>GAMBAR UTAMA</label>
		                                <input type="file" name="gambar_1" placeholder="">
		                            </div>
		                            <div class="field">
		                                <label>GAMBAR DETAIL 2</label>
		                                <input type="file" name="gambar_2" placeholder="">
		                            </div>
			                    	<div class="field">
		                                <label>GAMBAR DETAIL 3</label>
			                            <input type="file" name="gambar_3" placeholder="">
		                            </div>
		                            <div class="field">
		                                <label>GAMBAR DETAIL 4</label>
		                                <input type="file" name="gambar_4" placeholder="">
		                            </div>
			                    </div>
			                    <br>
			                    <?php foreach ($data as $key) { ?>
			                    <input type="hidden" name="id_gambar_detail" value="<?= $key->id_gambar_detail ?>">
			                    <?php } ?>
			                    <button class="ui blue button">
			                        <i class="save icon"></i>
			                        SIMPAN
			                    </button>
			                    <a class="ui button" href="<?= base_url('galery/index');  ?>">
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