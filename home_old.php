<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>
<?php

	// $banner_images=[
	// 	'front-end/images/banner6.jpg',
	// 	'front-end/images/banner3.jpg',
	// 	'front-end/images/banner2.jpg',
	// 	'front-end/images/banner7.jpg',
	
	// ]; 
	$banner_images=[
		'front-end/images/pic1d.jpeg',
		'front-end/images/pic1c.jpeg',
		'front-end/images/pic1f.jpeg',
	]; 
?>

x
<div class="main">
	<section class="banner" id="home">

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
							<h2>Welcome</h2>
							<p class="fs-15">Discover a place where comfort meets serenity. From stylish rooms to warm hospitality, NNHP Pods/Hotels Service offers a peaceful retreat with world-class amenities and personalized service for every guest.</p>
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
								<p class="fs-15">
									NNHP Pods/Hotels Service is a premium destination designed for travelers seeking comfort, quality, and tranquility. Located in a peaceful setting, our resort offers beautifully furnished rooms, modern amenities, and exceptional service.
								</p>

								<p class="fs-15">
									Our mission is to provide a memorable stay through warm hospitality, clean and elegant spaces, and attention to every detail. Whether you are visiting for leisure, business, or celebration, our team ensures a seamless and enjoyable experience.
								</p>

								<p class="fs-15">
									With comfortable accommodations, serene surroundings, and guest-focused services, Paradise Resort is your perfect getaway from the everyday rush.
								</p>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="luxury-rooms sec-padding" id="services">
		<div class="container">
			<div class="row">
				<h2 class="page-title text-center"><small class="line mlr-auto"></small>Explore Rooms</h2>
				<div class="col-md-4 mob-mb-20">
					<div class="home-room-box">
						<div class="room-images">
							<img src="<?php echo Theme::imagePath('pic1e.jpeg')?>">
							<div class="home-room-details">
								<h5><a href="#">Double Beds</a></h5>
							</div>
						
						</div>
						<div class="room-details">
							<p class="para">Spacious and comfortable rooms ideal for couples or guests who prefer extra comfort. Designed with cozy bedding, clean interiors, and a peaceful atmosphere for complete relaxation.</p>
							<div class="room-bottom">
								<h4>599 ₹<span>/6 Hours</span></h4>
								<a href="<?php echo esc_url(home_url('/book?type=beds')) ?>" class="book-btn">
									<span>Book Now</span>
								</a>
							</div>
						</div>
						
					
					</div>
					
				</div>
				<div class="col-md-4 mob-mb-20">
					<div class="home-room-box">
						<div class="room-images">
							<img src="<?php echo Theme::imagePath('pic1f.jpeg')?>">
							<div class="home-room-details">
								<h5><a href="#">Single Cabins</a></h5>
								
							</div>
						</div>
						<div class="room-details">
							<p class="para">Private and well-designed cabins perfect for solo travelers or short stays. Enjoy privacy, cleanliness, and a calm environment at an affordable price.</p>

							<div class="room-bottom">
								<h4>399 ₹<span>/6 Hours</span></h4>
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
							<img src="<?php echo Theme::imagePath('pic1c.jpeg')?>">
							<div class="home-room-details">
								<h5><a href="#">Single Pods</a></h5>
								
							</div>
						</div>
						<div class="room-details">
							<p class="para">Modern capsule-style pods offering a smart, affordable, and unique stay experience. Perfect for quick rest, transit travelers, or budget-friendly accommodation.</p>
							<div class="room-bottom">
								<h4>299 ₹<span>/6 Hours</span></h4>
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
	<section class="resort-information sec-padding max" id="contect">
		<div class="container pt-100">
			<div class="row">
				<div class="col-md-4 mob-mb-40">
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
				<div class="col-md-4 mob-mb-40">
					<div class="flip-container">
						<div class="flipper">
							<div class="support-box pos-center front">
								<div class="title">
									<i class="fa-solid fa-envelope"></i>
								</div>
								<h4>SEND US E-MAIL</h4>
								<p class="fs-15"><a href="mailto:msnnhp11@gmail.com">msnnhp11@gmail.com</a></p>
							</div>
							<div class="support-box pos-center back">
								<div class="title">
									<i class="fa-solid fa-envelope"></i>
								</div>
								<h4>E-MAIL ADDRESS</h4>
								<p class="fs-15"><a href="mailto:msnnhp11@gmail.com">msnnhp11@gmail.com</a></p>
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