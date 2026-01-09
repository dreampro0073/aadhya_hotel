<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>
<?php

	$banner_images=[
		'front-end/images/banner6.jpg',
		'front-end/images/banner3.jpg',
		'front-end/images/banner2.jpg',
		'front-end/images/banner7.jpg',
	
	]; 
?>


<div class="main">
	<section class="banner">

		<div class="owl-carousel banner-slider">
			<?php foreach ($banner_images as $key => $banner_image) { ?>
			<div class="item">
				<div class="banner-content">
					<img src="<?php echo get_template_directory_uri() . '/' . $banner_image; ?>" alt="Banner Image">
					<div class="slider-text">
						<h4>welcome to luxen hotel</h4>
					</div>
					<div class="slide-right"></div>
	           
				</div>
				
			</div>
			<?php } ?>
			
		</div>
		
	</section>

	<section class="welcome-section sec-padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row">
						<div class="text-center mb-4">
							<h2>Welcome To Paradise</h2>
							<p class="fs-15">Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl .Nulleget urna mattis consectetur purus sit amet fermentum</p>
						</div>
						<div class="col-md-6">
							<h3 class="page-title"><small class="line"></small>Gallery</h3>
							<div class="owl-carousel banner-slider dots-slider">

								
								<div class="flexslider">

									<img src="<?php echo Theme::imagePath('pic1.jpg') ?>" >
									
								</div>
								<div class="flexslider">

									<img src="<?php echo Theme::imagePath('pic2.jpg') ?>" >
									
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="content-box">
								<h3 class="page-title"><small class="line"></small>About Us</h3>
								<p class="fs-14">Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget laci. Maecenas faucibus mollis interdum.</p>
								<p class="fs-14">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fer condimentum nibh, ut fermentum massa justo sit amet risus. mentum massa justo sit amet risus.</p>
								<p class="fs-14">Fusce dapibus, tellus ac cursus commodo ut fermentum massa. mentum massa justo sit amet risus.</p>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="luxury-rooms sec-padding">
		<div class="container">
			<div class="row">
				<h2 class="page-title text-center"><small class="line mlr-auto"></small>Explore Rooms</h2>
				<div class="col-md-4">
					<div class="home-room-box">
						<div class="room-images">
							<img src="<?php echo Theme::imagePath('pic2.jpg')?>">
							<div class="home-room-details">
								<h5><a href="#">Double Beds</a></h5>
							</div>
						
						</div>
						<div class="room-details">
							<p class="para">Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tibulum at ero</p>
							<div class="room-bottom">
								<h4>1299rs<span>/6 Hours</span></h4>
								<a href="<?php echo esc_url(home_url('/book?type=beds')) ?>" class="book-btn">
									<span>Book Now</span>
								</a>
							</div>
						</div>
						
					
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="home-room-box">
						<div class="room-images">
							<img src="<?php echo Theme::imagePath('pic4.jpg')?>">
							<div class="home-room-details">
								<h5><a href="#">Single Cabins</a></h5>
								
							</div>
						</div>
						<div class="room-details">
							<p class="para">Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tibulum at ero</p>

							<div class="room-bottom">
								<h4>1299rs<span>/6 Hours</span></h4>
								<a href="<?php echo esc_url(home_url('/book?type=cabin')) ?>" class="book-btn">
									<span>Book Now</span>
								</a>
							</div>
						</div>
						
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="home-room-box">
						<div class="room-images">
							<img src="<?php echo Theme::imagePath('pic3.jpg')?>">
							<div class="home-room-details">
								<h5><a href="#">Single Pods</a></h5>
								
							</div>
						</div>
						<div class="room-details">
							<p class="para">Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tibulum at ero</p>
							<div class="room-bottom">
								<h4>1299rs<span>/6 Hours</span></h4>
								<a href="<?php echo esc_url(home_url('/book?type=pods')) ?>" class="book-btn">
									<span>Book Now</span>
								</a>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="resort-information sec-padding max">
		<div class="container pt-100">
			<div class="row">
				<div class="col-md-4">
					<div class="flip-container">
						<div class="flipper">
							<div class="support-box pos-center front">
								<div class="title">
									<i class="fa fa-phone"></i>
								</div>
								<h4>Call Us</h4>
								<p class="fs-15">
									<a href="tel:9369023506">9369023506</a>

								</p>
							</div>
							<div class="support-box pos-center back">
								<div class="title">
									<i class="fa fa-phone"></i>
								</div>
								<h4>Phone Number</h4>
								<p class="fs-15"><a href="tel:9369023506">9369023506</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="flip-container">
						<div class="flipper">
							<div class="support-box pos-center front">
								<div class="title">
									<i class="fa-solid fa-envelope"></i>
								</div>
								<h4>SEND US E-MAIL</h4>
								<p class="fs-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.</p>
							</div>
							<div class="support-box pos-center back">
								<div class="title">
									<i class="fa-solid fa-envelope"></i>
								</div>
								<h4>E-MAIL ADDRESS</h4>
								<p class="fs-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="flip-container">
						<div class="flipper">
							<div class="support-box pos-center front">
								<div class="title">
									<i class="fa-solid fa-location-dot"></i>
								</div>
								<h4>VISIT US</h4>
								<p class="fs-15">Sleeping pod hotel Gorakhpur railway station platform number 9</p>
							</div>
							<div class="support-box pos-center back">
								<div class="title">
								<i class="fa-solid fa-location-dot"></i>
								</div>
								<h4>Address</h4>
								<p class="fs-15">Sleeping pod hotel Gorakhpur railway station platform number 9</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
</div>


<?php get_footer();?>