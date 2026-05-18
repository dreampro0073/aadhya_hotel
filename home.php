<?php /* Template Name: Home Page Old */ ?>

<?php get_header(); ?>
<?php
	$image_url = get_template_directory_uri() . '/';
	// $banner_images=[
	// 	'front-end/images/banner6.jpg',
	// 	'front-end/images/banner3.jpg',
	// 	'front-end/images/banner2.jpg',
	// 	'front-end/images/banner7.jpg',
	// ]; 
	$banner_images=[
		'front-end/images/pic1f.jpeg',
		'front-end/images/banner13.jpeg',
		'front-end/images/banner12.jpg',

	]; 
?>


<div class="main">
	<!-- NAVIGATION -->
		<nav id="nav">
		  <a href="#home" class="nav-logo">NNHP Hotel</a>
		  <ul class="nav-links">
		    <li><a href="#home">Home</a></li>
		    <li><a href="#services">Rooms</a></li>
		    <li><a href="#about">About</a></li>
		    <li><a href="#contect">Contact</a></li>
		    <li><a href="<?php echo esc_url(home_url('/book')) ?>" class="nav-cta">Book Now</a></li>
		  </ul>
		  <div class="hamburger" onclick="toggleMenu()">
		    <span></span><span></span><span></span>
		  </div>
		</nav>

		<!-- HERO -->
		<section class="hero" id="home">
		  <div class="hero-slides" id="heroSlides">

		  	<?php foreach ($banner_images as $key => $image) { ?>
			    <div 
			        class="hero-slide active" 
			        style="background-image: url('<?php echo $image_url . $image; ?>');">
			    </div>
			<?php } ?>
		    
		  </div>


		  <div class="hero-content">
		    <div class="hero-eyebrow">New Nabratana Pvt Hospitality</div>
		    <h1 class="hero-title">Gorakhpur Sleeping<br><em>Pods Hotels</em></h1>
		    <p class="hero-sub">Comfortable sleeping pods, premium cabins, and peaceful double bed rooms near Gorakhpur railway station — affordable luxury stays with modern amenities and secure hotel booking.</p>
		    <div class="hero-actions">
		      <a href="<?php echo esc_url(home_url('/book')) ?>" class="btn-primary" aria-label="Book Room">Reserve a Room</a>
		      <a href="#services" class="btn-outline">Explore Rooms</a>
		    </div>
		  </div>
		  <div class="hero-dots" id="heroDots">
		    <div class="hero-dot active" onclick="goSlide(0)"></div>
		    <div class="hero-dot" onclick="goSlide(1)"></div>
		    <div class="hero-dot" onclick="goSlide(2)"></div>
		  </div>
		</section>

		<!-- WELCOME -->
		<section id="welcome">
		  <div class="welcome">
		    <div class="welcome-images">
		      <div class="welcome-img-main">
		        <img src="<?php echo $image_url."front-end/images/banner14.jpg"; ?>" alt="Hotel interior">
		      </div>
		      <div class="welcome-img-accent">
		        <img src="<?php echo $image_url."front-end/images/banner15.jpg"; ?>" alt="Room detail">
		      </div>
		      <div class="welcome-badge">Est. Gorakhpur</div>
		    </div>
		    <div>
		      <p class="section-label">Welcome</p>

					<h2 class="section-title">Best Sleeping Pods &<br>Comfortable Hotel Rooms in Gorakhpur</h2>

					<div class="divider"></div>

					<p class="section-body">
					Experience premium sleeping pods, modern cabins, and comfortable hotel rooms at NNHP Pods/Hotels Service in Gorakhpur. Located near the railway station, we provide affordable luxury stays, peaceful surroundings, clean accommodations, and modern amenities for travelers, families, and business guests.
					</p>

					<p class="section-body" style="margin-top:1rem">
					Whether you are looking for a short transit stay, overnight rest, or a relaxing vacation in Gorakhpur, our hotel ensures secure booking, warm hospitality, high-speed WiFi, hygienic rooms, and a seamless guest experience at budget-friendly prices.
					</p>

					<a href="#services" class="btn-primary" style="margin-top:2rem; display:inline-block">
					Our Rooms
					</a>
		    </div>
		  </div>
		</section>

		<!-- ROOMS -->
		<section id="services">
		  <div class="rooms-header">
		    <div>
		      <p class="section-label">Accommodations</p>
		      <h2 class="section-title" style="margin-bottom:0">Explore Our Rooms</h2>
		    </div>
		    <a href="<?php echo esc_url(home_url('/book')) ?>" class="btn-outline" style="margin-bottom:0.5rem" aria-label="Book NNHP Room">Book a Stay</a>
		  </div>
		  <div class="rooms-grid">
		    <div class="room-card">
		      <div class="room-img">
		        <img src="<?php echo $image_url."front-end/images/banner14.jpg"; ?>" alt="Double Beds">
		        <span class="room-type-tag">Double Beds</span>
		      </div>
		      <div class="room-body">
		       <h3 class="room-name">Double Bed Room</h3>

						<p class="room-desc">
						Enjoy spacious double bed rooms designed for couples, families, and travelers seeking comfort in Gorakhpur. Featuring cozy bedding, clean interiors, air-conditioned rooms, free WiFi, and a peaceful atmosphere for a relaxing stay near the railway station.
						</p>
		        <div class="room-footer">
		          <div class="room-price">
		            <span class="amount">₹899</span>
		            <span class="per">per 12 hours</span>
		          </div>
		          <a href="<?php echo esc_url(home_url('/book?type=beds')); ?>" class="room-book" aria-label="Book Double Bed Room">Book Now</a>
		        </div>
		      </div>
		    </div>
		    <div class="room-card">
		      <div class="room-img">
		      	<img src="<?php echo $image_url."front-end/images/banner16.jpg"; ?>" alt="Single Cabin">
		        
		        <span class="room-type-tag">Single Cabin</span>
		      </div>
		      <div class="room-body">
		        <h3 class="room-name">Single Cabin</h3>

						<p class="room-desc">
						Stay in our private single cabins designed for solo travelers, business guests, and short transit stays in Gorakhpur. Enjoy a peaceful environment, hygienic interiors, comfortable bedding, modern amenities, and affordable accommodation near the railway station.
						</p>
		        <div class="room-footer">
		          <div class="room-price">
		            <span class="amount">₹399</span>
		            <span class="per">per 6 hours</span>
		          </div>
		          <a href="<?php echo esc_url(home_url('/book?type=cabin')); ?>" class="room-book" aria-label="Book Double Single Cabin">Book Now</a>
		        </div>
		      </div>
		    </div>
		    <div class="room-card">
		      <div class="room-img">
		      	<img src="<?php echo $image_url."front-end/images/pic1f.jpeg"; ?>" alt="Single Pod">

		        
		        <span class="room-type-tag">Single Pod</span>
		      </div>
		      <div class="room-body">
		        <h3 class="room-name">Single Pod</h3>

						<p class="room-desc">
						Experience modern capsule-style single pods in Gorakhpur, ideal for solo travelers and transit guests seeking affordable and comfortable accommodation. Enjoy smart space design, clean interiors, privacy, peaceful surroundings, and essential amenities for a relaxing short stay near the railway station.
						</p>
		        <div class="room-footer">
		          <div class="room-price">
		            <span class="amount">₹299</span>
		            <span class="per">per 6 hours</span>
		          </div>
		          <a href="<?php echo esc_url(home_url('/book?type=pods')); ?>" class="room-book" aria-label="Book Double Single Pod">Book Now</a>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>

		<!-- GALLERY -->
		<section>
		  <div class="gallery-section">
		    <div style="text-align:center">
		      <p class="section-label">Gallery</p>
		      <h2 class="section-title">A Glimpse Inside</h2>
		    </div>
		    <div class="gallery-grid">
		      <div class="gallery-item">

		      	<img src="<?php echo $image_url."front-end/images/pic1d.jpeg"; ?>" alt="Hotel">

		      </div>
		      <div class="gallery-item">
		      	<img src="<?php echo $image_url."front-end/images/banner17.jpg"; ?>" alt="Room">

		      </div>
		      <div class="gallery-item">
		      	<img src="<?php echo $image_url."front-end/images/banner15.jpg"; ?>" alt="Amenity">
		        
		      </div>
		      <div class="gallery-item">
		      	<img src="<?php echo $image_url."front-end/images/pic1f.jpeg"; ?>" alt="Cabin">

		      </div>
		      <div class="gallery-item">
		      	<img src="<?php echo $image_url."front-end/images/pic1c.jpeg"; ?>" alt="Pod">
		      </div>
		    </div>
		  </div>
		</section>

		<!-- ABOUT -->
		<section id="about">
		  <div class="about-section">
		    <div>
		     <p class="section-label">About Us</p>

					<h2 class="section-title">Affordable Sleeping Pods<br>in Gorakhpur</h2>

					<div class="divider"></div>

					<p class="section-body">
					NNHP Pods/Hotels Service offers modern sleeping pods, private cabins, and comfortable hotel rooms for travelers seeking convenience, affordability, and relaxation. Located near Gorakhpur Railway Station Platform 9, we provide clean accommodations, essential amenities, and a peaceful environment for every guest.
					</p>

					<p class="section-body" style="margin-top:1rem">
					Our goal is to deliver a smooth and comfortable stay with hygienic spaces, friendly hospitality, secure booking, and quality service for transit travelers, tourists, and business visitors.
					</p>
		      <div class="about-stats">
		        <div class="stat-box">
		          <div class="stat-number">3</div>
		          <div class="stat-label">Room Types</div>
		        </div>
		        <div class="stat-box">
		          <div class="stat-number">24/7</div>
		          <div class="stat-label">Power Backup</div>
		        </div>
		        <div class="stat-box">
		          <div class="stat-number">₹299</div>
		          <div class="stat-label">Starting From</div>
		        </div>
		        <div class="stat-box">
		          <div class="stat-number">Pltfm 9</div>
		          <div class="stat-label">Location</div>
		        </div>
		      </div>
		    </div>
		    <div class="about-img">
		      <img src="<?php echo $image_url."front-end/images/banner16.jpg"; ?>" alt="Hotel room">

		      
		      <div class="about-quote">
		        <p>"Comfort, rest, and quiet elegance — right at the station."</p>
		      </div>
		    </div>
		  </div>
		</section>

		<!-- CONTACT -->
		<section id="contect">
		  <div class="contact-inner">
		    <div>
		      <p class="section-label">Contact Us</p>
		      <h2 class="section-title">Get in Touch</h2>
		      <div class="divider"></div>
		      <p class="section-body">We're here to assist with your booking or any queries. Reach out and our team will respond promptly.</p>
		      <div class="contact-items">
		        <div class="contact-item">
		          <div class="contact-icon">📞</div>
		          <div class="contact-text">
		            <div class="label">Phone</div>
		            <a href="tel:9369023506">9369023506</a>
		          </div>
		        </div>
		        <div class="contact-item">
		          <div class="contact-icon">✉️</div>
		          <div class="contact-text">
		            <div class="label">Email</div>
		            <a href="mailto:msnnhp11@gmail.com">msnnhp11@gmail.com</a>
		          </div>
		        </div>
		        <div class="contact-item">
		          <div class="contact-icon">📍</div>
		          <div class="contact-text">
		            <div class="label">Address</div>
		            <p>Sleeping Pod Hotel, Gorakhpur Railway Station, Platform No. 9</p>
		          </div>
		        </div>
		      </div>
		    </div>
		    <div>
		      <div class="contact-map">
		        <p>Gorakhpur Railway Station, Platform 9</p>
		      </div>
		      <div style="margin-top:2rem; text-align:center">
		        <a href="<?php echo esc_url(home_url('/	book')); ?>" class="btn-primary" style="display:inline-block; width:100%; text-align:center" aria-label="Book Room">Book Your Stay Now</a>
		      </div>
		    </div>
		  </div>
		</section>
		
</div>
<script>
    let mobile_site = false;

    if (window.innerWidth <= 768) {
        mobile_site = true;
    }
</script>
<script>
  let currentSlide = 0;
  const slides = document.querySelectorAll('.hero-slide');
  const dots = document.querySelectorAll('.hero-dot');

  function goSlide(n) {
    slides[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');
    currentSlide = n;
    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
  }

  setInterval(() => {
    goSlide((currentSlide + 1) % slides.length);
  },3000);

  function toggleMenu() {
    const links = document.querySelector('.nav-links');
    const isVisible = links.style.display === 'flex';
    links.style.display = isVisible ? 'none' : 'flex';
    links.style.flexDirection = 'column';
    links.style.position = 'absolute';
    links.style.top = '60px';
    links.style.left = '0';
    links.style.right = '0';
    links.style.background = 'rgba(245,242,236,0.98)';
    links.style.padding = '1.5rem 2rem';
    links.style.gap = '1.25rem';
    links.style.borderBottom = '1px solid rgba(184,146,42,0.2)';
  }

  window.addEventListener('scroll', () => {
    const nav = document.getElementById('nav');
    nav.style.background = window.scrollY > 60 ? 'rgba(245,242,236,0.99)' : 'rgba(245,242,236,0.96)';
    const links = document.querySelector('.nav-links');
    if(mobile_site){
    	const isVisible = links.style.display === 'flex';
    	links.style.display = isVisible ? 'none' : 'none';
    }
    

  });
</script>
<?php get_footer();?>