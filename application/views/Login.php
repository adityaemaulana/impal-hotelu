<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/Login.css">
</head>

<body>
	
	<div class="container ">
		<img class="coverBg" src="<?php echo base_url();?>image/backhotel.png">	
	</div>
	
	<div class="container">
		
		<h3 class="text-center">Login To HotelU</h3>
		<div class="col-md-5 mx-auto">
		<?php 
          echo form_open("C_Akun/check"); 
        ?>
			<div class="form-group">
				<label for="email">Email</label>
			   <center><input class="form-control" type="text" name="email" placeholder="Email" required/></center> 
			  </div>
       		<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" placeholder="Password" />
        	</div>
			
			<center><button type="submit" class="btn btn-lg btn-info">Login</button></center>
			
			<p>Belum Punya Akun? 
           		<a href="<?php echo site_url('C_Regis/index')?>">Daftar disini.</a>
          	</p>
			
			</form>
		</div>
		
	</div>
	
	<footer>
		
		<div class="container footer">
			<div class="row">
				<div class="col-sm-3 atas">
					<h5>About HotelU</h5>
					<p class="about">Aplikasi ini merupakan aplikasi berbasis web.</p>
            	</div>
				
				<div class="col-sm-2 atas">
					<h5>Contact Us</h5>
					<p class="about">Jalan Soekarno Hatta No.126 ,<br>Bandung, Jawa Barat <br> 022 - 7621897 <br>HotelU@gmail.com </p>
            	</div>
				
				<div class="col-sm-2 atas">
					<center><h5>Follow Us</h5></center>
					
					<a href="http://facebook.com/">
						<img src="<?php echo base_url();?>image/facebook.png" class="logoFol" alt="Fb">
					</a>
					
					<a href="http://facebook.com/">
						<img src="<?php echo base_url();?>image/instagram.png" class="logoFol" alt="Ig">
					</a>
					
					<a href="http://facebook.com/">
						<img src="<?php echo base_url();?>image/twitter.png" class="logoFol" alt="Tw">
					</a>
					
            	</div>
				
				<div class="col-sm-2 atas">
					<center><h5>Payment</h5></center>
					
					<img src="<?php echo base_url();?>image/if_BCA_2425807.png" class="logoPay" alt="BCA">
					<img src="<?php echo base_url();?>image/if_BNI_2425812.png" class="logoPay" alt="BNI">
					<img src="<?php echo base_url();?>image/if_BRI_2425806.png" class="logoPay" alt="BRI">
					<img src="<?php echo base_url();?>image/if_Mandiri_2425804.png" class="logoPay"alt="MANDIRI">
					
            	</div>
			</div>
		</div>
	
	</footer>
	
</body>
<?php 
//$this->load->view('footer'); 
if($this->session->flashdata('message') == 'Error Login'){
  echo "<script>alert('Email or Password is Incorrect.');</script>";
}
?>
</html>
