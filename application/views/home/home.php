<?php
$this->load->view('home/header');
?>
	<body>
		<?php
		$this->load->view('home/navbar');
		?>
		
		<Image Carousel>
		
	    		<img class="banner-images" src="<?php echo base_url(); ?>assets/images/Capture.png	">
    			<img class="banner-images" src="<?php echo base_url(); ?>assets/images/banner-image-1.jpg">
    			
    			
  		</div>	
  			<!--a class="carousel-control-prev" href="#banner-images" data-slide="prev">
	    		<span class="carousel-image-prev"></span>
  			</a>
  			<a class="carousel-control-next" href="#banner-images" data-slide="next">
    			<span class="carousel-image-next"></span>
  			</a>
		</div-->	

		
		<!--Contents-->
		<div class="container site-content">
			<div class="row">
				<div class="col-lg-8">
					
					
					
							</div>
						</div>
						<div class="tab-pane container" id="content2">
  							<div class="container-fluid">
								<div class="row">
									<div class="col-md-4 content-item">
										<div class="card">
										<?php foreach ($kamar -> result() as  $value) { ?>
  											<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/kamar.jpg">
											<div class="card-body">
												<a href="#">
													<h4 class="card-title"><?php echo $value->nama ?></h4>
												</a>
												<h6 class="card-text"><?php echo $value->tipe ?></h6>
								    			<span class="card-text old-price"><?php echo $value->harga ?></span><br> 
								    			
								    			<a href="#" class="btn btn-block">Booking Now</a>
											</div>
											<?php }?>
										</div>
									</div>
								
								<div class="row">
									<div class="col-md-4 content-item">
										
									</div>
									<div class="col-md-4 content-item">
									</div>
									<div class="col-md-4 content-item">
									</div>
								</div>
							</div>
  						</div>
  						<div class="tab-pane container" id="content3">
  							
  						</div>
					</div>
				</div>
				
			</div>
		</div>

		<!--Footer-->
		<div class="container-fluid bg-dark" id="main-footer">
			<div class="row mx-5 py-3">
				<div class="col-xs-4 w-50 text-right pr-3">
					<a href="#">
						About us
					</a>
				</div>
				<div class="col-xs-6 w-50">
					&copy; HotelU 2018. All rights reserved.
				</div>
			</div>
		</div>
<?php
$this->load->view('home/footer');
?>