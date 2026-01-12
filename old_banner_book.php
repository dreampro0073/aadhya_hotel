<section class="banner sec-padding d-none">
		<div class="container">
			<h2 class="section-title">Photo Gallary</h2>
			<div class="owl-carousel banner-slider nav-slider">
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
		</div>
		
	</section>