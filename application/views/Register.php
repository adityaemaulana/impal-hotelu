<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	<style>
		.coverBg{
			background-image: url(backhotel.png);
			background-repeat: no-repeat;
			
			width: 100%;
			height: 100%;
			background-size: 100%;
		}
		
		h3{
			margin-top: 2%;
			margin-bottom: 5%;
			font-size: 40px;
			font-family: Cusive,monospace;
			color: #0BD3D5;
			font-weight: bold;
		}
		
		.btn{
			background-color: #0BD3D5;
			color: white;
			margin-top: 5%;
		}
		
		.form-group{
			color: black;
			font-size: 25px;
			font-family: Cusive,monospace;
			margin-top: 8%;
		}
		
		.footer{
			background: #2D2D2D;
			color: white;
			margin-top: 3%;
			padding-top: 50px;
			padding-bottom: 50px;
			text-align: left;
		}
		
		h5{
			color: #0BB59D;
			font-family: Arial Rounded MT Bold;
		}
		
		.atas{
			margin-top: 1%;
			margin-left: 4%;
		}
		
		.logoFol{
			height: 25px;
			margin-left: 12%;
		}
		
		.logoPay{
			margin-left: 5%;
			margin-top: 4%;
		}
	</style>
</head>

<body>
	
	<div class="container ">
		<img class="coverBg" src="backhotel.png">	
	</div>
	
	<div class="container">
		
		
		<div class="row">
			<div class="col-md-5">
				<div class="form-group">
					<label for="username">Username</label>
				   <input class="form-control" type="text" name="username" placeholder="Username" required/>
			  	</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control" type="text" name="email" placeholder="Email" />
				</div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" placeholder="Password" />
        		</div>
				
				<div class="form-group">
					<label for="nama">Name</label>
					<input class="form-control" type="text" name="nama" placeholder="Name" />
        		</div>
				
				<div class="form-group">
					<label for="jk">Gender</label>
					<input class="form-control" type="text" name="jk" placeholder="Male/Female" />
        		</div>
				
				<div class="form-group">
					<label for="umur">Age</label>
					<input class="form-control" type="text" name="umur" placeholder="Age is just a number" />
        		</div>
			</div>
			
			
			<div class="col-md-5 my-auto mx-auto">
				<h3 class="text-center">Register To HotelU</h3>
				<center><img src="cash-register.png"></center>
       			<center><button type="submit" class="btn btn-lg btn-info">Register</button></center>
				<center>
					<p>Sudah Punya Akun? 
           				<a href="#">Login disini.</a>
          			</p>
				</center>
			</div>
			
			
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
						<img src="facebook.png" class="logoFol" alt="Fb">
					</a>
					
					<a href="http://facebook.com/">
						<img src="instagram.png" class="logoFol" alt="Ig">
					</a>
					
					<a href="http://facebook.com/">
						<img src="twitter.png" class="logoFol" alt="Tw">
					</a>
					
            	</div>
				
				<div class="col-sm-2 atas">
					<center><h5>Payment</h5></center>
					
					<img src="if_BCA_2425807.png" class="logoPay" alt="BCA">
					<img src="if_BNI_2425812.png" class="logoPay" alt="BCA">
					<img src="if_BRI_2425806.png" class="logoPay" alt="BCA">
					<img src="if_Mandiri_2425804.png" class="logoPay"alt="BCA">
					
            	</div>
			</div>
		</div>
	
	</footer>
	
</body>
</html>