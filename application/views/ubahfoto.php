<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/profil.css">
<body>
	
	<div class="container ">
		<img class="coverBg" src="<?php echo base_url();?>assets/image/backhotel.png">	
	</div>
	
	<?=form_open_multipart('C_Profile/ubah')?>
	<div class="col-md-12">
	<?php foreach ($mmbr as $custom) {?>
	<center><p style="font-weight: bold; font-size: 16px; padding-top: 2%;">Your Picture</p><center>
		<div class="mx-auto">
			<img class="avatar" alt="kosong" src="<?php echo base_url()?>assets/image/<?php echo $custom->foto;?>">
		</div>
		
		<div class="col-md-6 mx-auto">
			<div class="custom-file">
					<input id="inputPicture" type="file" class="custom-file-input" name="foto" onchange="preview()">
					<label class="custom-file-label" for="customFile">Choose file</label>
					<input class="btnCP mt-2" style="margin-bottom: 11%;" type="submit" name="submit" value="Change Picture">
					<!-- <button class="btnCP mt-2" style="margin-bottom: 11%;">Change Picture</button> -->
			</div>
		</div>
	<?php } ?>
	</div>
	</form>