<script>
	$(document).ready(function(){
		var limit = 4;
		var start = 0;
		var kondisi = "inactive";
		var kondisi2 = "";
		console.log('Start . .');
			$.ajax({
				type:'POST',
				url:'<?php echo "home/olahlokasi" ?>',
				data:'limit='+limit+'&start='+start,
				beforeSend:function(){
					console.log('Processing . .');
				},
				success:function(datahasilphp){
					console.log('Success. .');
					if (datahasilphp == '') {
						alert('Sudah tidak ada');
						kondisi = 'active';
					}else{
						kondisi = 'inactive';
						$('#tambah').css('visibility', 'visible');
						$("#percobaankuh").append(datahasilphp).fadeIn('slow');
					}
					console.log('End, OK!');
				}
			});
		$('#tambah').on('click', aksiClick);
		function aksiClick()
		{
			start = start + limit;
			if (kondisi == 'inactive'){
				$.ajax({
					type:'POST',
					url:'<?php echo "home/olahlokasi" ?>',
					data:'limit='+limit+'&start='+start,
					beforeSend:function(){
						console.log('Processing . .');
					},
					success:function(datahasilphp){
						console.log('Success. .');
						if (datahasilphp == '') {
							alert('Sudah tidak ada');
							kondisi = 'active';
						}else{
							kondisi = 'inactive';
							$('#tambah').css('visibility', 'visible');
							$("#percobaankuh").append(datahasilphp).fadeIn('slow');
						}
						console.log('End, OK!');
					}
				});
			}else{
				alert('Data sudah tidak ada');
			}
		}
	});
</script>