<div class="ui container grid" style="padding-top: 10%">
	<?php foreach ($data as $kost) { ?>
		<div class="four wide computer sixteen wide phone column" style="margin-bottom: 20px;">
			<div class="ui centered card">
			    <div class="content">
			    	<?php if ($kost->penghuni_kost == 'PUTRA') { ?>
			    		<a class="ui blue ribbon label right">KOST <?= $kost->penghuni_kost ?></a>
			    	<?php }elseif ($kost->penghuni_kost == 'PUTRI') { ?>
			    		<a class="ui pink ribbon label">KOST <?= $kost->penghuni_kost ?></a>
			    	<?php }else{ ?>
						<a class="ui purple ribbon label">KOST <?= $kost->penghuni_kost ?></a>
			    	<?php } ?>
			    </div>
			    <div class="image">
			        <img style="height:180px !important;" src="<?= base_url('asset/upload/').$kost->gambar_1; ?>">
			    </div>
			    <div class="content">
			       <h5 style="text-align: center;"><?= $kost->nama_kost ?></h5>
			       <p>Harga Kost : Rp. <?= number_format($kost->harga_kost,2,',','.'); ?></p>
			       <p>Type : <?= $kost->jenis_kost ?>an</p>
			       <p>Tersedia : <?= $kost->kamar_tersedia ?> Kamar</p>
			    	<a href="<?= base_url('detail/show/').$kost->id_kost; ?>" class="ui primary button" style="width: 100%">LIHAT DETAIL</a>
			    </div>
			</div>
		</div>
	<?php } ?>
</div>