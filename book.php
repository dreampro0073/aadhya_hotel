<?php /* Template Name: Book Page */ ?>

<?php get_header(); ?>
<?php
	$banner_images=[
		'front-end/images/banner6.jpg',
		'front-end/images/banner3.jpg',
		'front-end/images/banner2.jpg',
		'front-end/images/banner7.jpg',
	]; 
?>
<div class="main ng-cloak" ng-app="app" ng-controller="bookCtrl" ng-init="init();">
	<section class="inside-banner">
		<h1 class="heading">
			Room Detials
		</h1>
	</section>
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

	<section class="sec-padding">
		<div class="container">
			
			<div class="row">
				<div class="col-md-8">
					<h2 class="section-title">ROOM DESCRIPTION</h2>
					<p class="fs-14 para">
						Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus nibh Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac blandit Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac blandit tempus.
					</p>

					<p class="fs-14 para">
						Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus nibh Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amr. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac blandit tempus.
					</p>
				</div>
				<div class="col-md-4">
					<h2 class="section-title">Room Service</h2>
					<p class="fs-14 para">
						&#128197; CALENDAR
					</p>
					<p class="fs-14 para">
						&#128187; Wi Fi
					</p>
					<p class="fs-14 para">
						&#9200; 24/7 Services
					</p>
				
				</div>
			</div>
		</div>
		
	</section>
	<section class="books sec-padding pt-0">
		<div class="container">
			<h3 class="section-title text-center">Book Now</h3>
			<form name="myForm1" novalidate="novalidate" ng-submit="onSubmit(myForm1.$valid)">
				<div class="row">
					<div class="col-md-4 form-group">
		                <label>Name</label>
		                <input type="text" ng-model="formData.name" class="form-control" required />
		            </div>
		            <div class="col-md-4 form-group">
		                <label>Mobile No.</label>
		                <input type="number" ng-model="formData.mobile_no" class="form-control" required />
		            </div>
		            <div class="col-md-4 form-group">
		                <label>Email Id</label>
		                <input type="email" ng-model="formData.email_id" class="form-control" required />
		            </div>
		           	<div class="col-md-4 form-group">
		                <label>PNR/UID</label>
		                <input type="text" ng-model="formData.pnr_uid" class="form-control" />
		            </div> 
		            <div class="col-md-4 form-group">
		                <label>Select Room Types</label>
		                <select ng-model="formData.type" class="form-select" ng-change="changeAmount()" required convert-to-number >
		                    <option value="">--Select--</option>
		                    <option ng-repeat="item in types" value="{{item.value}}">{{ item.label}}</option>
		                    
		                </select>
		            </div>
		            <div class="col-md-4 form-group">
		                <label>Arivals Date</label>
		                <input type="date" ng-model="formData.date" class="form-control" />
		            </div>  
		            <div class="col-md-4 form-group">
		                <label>Expected Check In Time</label>
		                <input type="time" ng-model="formData.check_in" class="form-control" ng-change="checkoutTime()" />
		            </div> 
		            <div class="col-md-4 form-group">
		                <label>Check Out Time</label>
		                <input type="text" ng-model="formData.checkout_time" class="form-control" disabled readonly />
		            </div> 

		                           
		            <div class="col-md-4 form-group">
		                <label>Hours</label>
		                <select ng-model="formData.hours_occ" class="form-select" ng-change="changeAmount()" required convert-to-number >
		                    <option value="">--Select--</option>
		                    <option ng-repeat="item in hours" value="{{item.value}}">{{ item.label}}</option>
		                    
		                </select>
		            </div>
		           
		            <div class="col-md-4 form-group">
		                <label>No of Rooms</label>
		                <input ng-change="changeAmount()" type="number" min="1" ng-model="formData.no_of_rooms" class="form-control" />
		            </div> 

		            <div class="col-md-4 form-group">
		                <label>Total Amount</label>
		                <input type="text" min="1" ng-model="formData.total_amount" class="form-control" disabled readonly />
		            </div> 
		            <div class="col-md-4 form-group">
		                <label>Booking Amount</label>
		                <br>
		                <label><input type="radio"  ng-model="formData.full_payment" value="1" />&nbsp;Full Payment&nbsp;</label>
		                <label><input type="radio"  ng-model="formData.full_payment" value="2" />&nbsp;Booking Amount&nbsp;</label>
		            </div>
		            <div class="col-md-4 form-group" ng-if="formData.full_payment == 1">
		                <label>Paid Amount</label>
		                <input type="text" min="1" ng-model="formData.total_amount" class="form-control" disabled readonly />
		            </div> 
		            <div class="col-md-4 form-group" ng-if="formData.full_payment == 2">
		                <label>Booking Amount</label>
		                <input type="text"  ng-model="formData.booking_amount" class="form-control" disabled readonly />
		            </div> 
		             
				</div>
				<div class="text-center">
					<button type="submit" class="book-btn wid">
						<span>Book</span>
					</button>
				</div>
			</form>
		</div>
		
	</section>
</div>


<?php get_footer();?>