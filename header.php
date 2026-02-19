<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php wp_head(); ?>
</head>
<body <?php body_class();?> >
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="logo">
						<a href="<?php echo esc_url(home_url('/')) ?>">NNHP Hotel</a>
					</div>
					
				</div>
				<div class="col-6 d-block d-md-none">
					<div class="toggle-menu-cont">
						<a class="toggle-menu" href="javascript:;">
							<i></i>
							<i></i>
							<i></i>
						</a>
					</div>
				</div>
				<div class="col-md-9">
					<ul class="menu">
						<li>
						  	<a class="scroll-link" href="<?php echo esc_url(home_url('/#home')) ?>">Home</a>
						</li>
						
						<li>
							<a class="scroll-link" href="<?php echo esc_url(home_url('/#services')) ?>">Services</a>

						</li>
						
						<li>
							<a class="scroll-link" href="<?php echo esc_url(home_url('/#contect')) ?>">
								Contact
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url(home_url('/book')) ?>">
								Book Now
							</a>
						</li>
					</ul>
				</div>
				
				
			</div>
		</div>
	</header>

