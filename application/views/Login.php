<html>
	<head>
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>assets/css/loginn.css">
		<title>Hotelu - Hotel Management System</title>
		<link rel="icon" type="image/png'?>" sizes="16x16" href="<?php echo base_url().'/assets/plugins/images/admin-logo-hotelu.png'?>">
	</head>
	<body>
		<div class="container gambar">
			<img class="coverBg" src="<?php echo base_url();?>assets/image/backhotel.png">	
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
	</body>
<?php 
//$this->load->view('footer'); 
if($this->session->flashdata('message') == 'Error Login'){
  echo "<script>alert('Username or Password is Incorrect.');</script>";
}
?>
</html>

</html>