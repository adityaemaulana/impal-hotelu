<html>
	<head>
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>assets/css/kamar.css">
		<title>Hotelu - Hotel Management System</title>
		<link rel="icon" type="image/png'?>" sizes="16x16" href="<?php echo base_url().'/assets/plugins/images/admin-logo-hotelu.png'?>">
	</head>
	<body>
		<div class="container gambar">
			<img class="coverBg" src="<?php echo base_url();?>assets/image/backhotel.png">	
		</div>
		
		<div class="container">
				
				<div class="col-md-12">
					<center><button class="btn btn-md btn-info tren" type="button">Hotel</button></center>
					<div class="row kotakartikel">
						<?php foreach($kamar as $value) {?>
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 mx-auto kotak">
							<a href="<?php echo site_url('C_Kamar/halKamar/'.$value['id'])?>">
								<img src="<?php echo base_url();?>assets/image/<?php echo $value['imageUrl']?>">
								<br>
								<div class="label">
									<center><div class="label_txt"><?php echo $value['tipe']?></div></center>
									<p class="label_txt">RP. <?php echo $value['harga']?></p>
									
								</div>
								
							</a>
							<br>
						</div>
						<?php } ?>
					</div>
				</div>
			
		</div>
		
	</body>
</html>
