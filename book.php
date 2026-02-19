<?php /* Template Name: Book Page */ ?>

<?php get_header(); ?>
<?php
	$banner_images=[
		'front-end/images/banner6.jpg',
		'front-end/images/banner3.jpg',
		'front-end/images/banner2.jpg',
		'front-end/images/banner7.jpg',
	]; 

	$type = isset($_GET['type']) ? esc_attr($_GET['type']) : '';
	$title = 'Room Detials';

	switch ($type) {
		case 'beds':
			$title = 'Room Detials - Double Beds';
			break;
		case 'cabin':
			$title = 'Room Detials - Cabins';
			break;
		case 'pods':
			$title = 'Room Detials - Pods';
			break;
		
		default:
			$title = 'Room Detials';
			break;
	}

?>
<div class="main ng-cloak" ng-app="app" ng-controller="bookCtrl" ng-init="init();">
	<section class="inside-banner">
		<h1 class="heading">
			<?php echo $title; ?>
		</h1>
	</section>
	
	<?php if($type == 'beds') : ?>
	<section class="sec-padding">
		<div class="container">
			
			<div class="row">
				<div class="col-md-8">
					<h2 class="section-title">ROOM DESCRIPTION</h2>
					<p class="fs-14 para">
						Our Double Bed rooms are designed for guests who value comfort and space. These rooms offer a relaxing environment with a well-maintained interior, ideal for couples or guests looking for a peaceful stay.
					</p>
					
					<div>
						<h3 class="section-title">
							Ideal For
						</h3>
						<p class="fs-14 para">
							Couples, friends, or guests seeking a comfortable and private stay.
						</p>

					</div>
					<div>
						<h3 class="section-title">
							Stay Duration
						</h3>
						<p class="fs-14 para">
							₹599 / 6 Hours
							(Extended stay options available)
						</p>
					</div>
					
				</div>
				<div class="col-md-4">
					<h2 class="section-title">Room Service</h2>
					<p class="fs-14 para">
						&#128197; Comfortable double bed with fresh linens
					</p>
					<p class="fs-14 para">
						&#128187; Clean and spacious room layout
					</p>
					<p class="fs-14 para">
						&#9200; 24/7 Power backup
					</p>
				
				</div>
			</div>
		</div>
		
	</section>
	<?php endif; ?>
	<?php if($type == 'cabin') : ?>
	<section class="sec-padding">
		<div class="container">
			
			<div class="row">
				<div class="col-md-8">
					<h2 class="section-title">ROOM DESCRIPTION</h2>
					<p class="fs-14 para">
						Single Cabins offer privacy and convenience for solo travelers. These cabins are thoughtfully designed to provide a quiet and secure stay at an affordable price.
					</p>
					
					<div>
						<h3 class="section-title">
							Ideal For
						</h3>
						<p class="fs-14 para">
							Solo travelers, working professionals, and short stays.
						</p>

					</div>
					<div>
						<h3 class="section-title">
							Stay Duration
						</h3>
						<p class="fs-14 para">
							₹399 / 6 Hours
							(Flexible stay options available)
						</p>
					</div>
					
				</div>
				<div class="col-md-4">
					<h2 class="section-title">Room Service</h2>
					<p class="fs-14 para">
						&#128197;Private single cabin
					</p>
					<p class="fs-14 para">
						&#128187; Comfortable single bed
					</p>
					<p class="fs-14 para">
						&#9200; 24/7 Power backup
					</p>
				
				</div>
			</div>
		</div>
		
	</section>
	<?php endif; ?>
	<?php if($type == 'pods') : ?>
	<section class="sec-padding">
		<div class="container">
			
			<div class="row">
				<div class="col-md-8">
					<h2 class="section-title">ROOM DESCRIPTION</h2>
					<p class="fs-14 para">
						Single Pods are modern, capsule-style accommodations designed for budget-friendly and short-duration stays. They provide a unique experience while maintaining privacy and safety.
					</p>
					
					<div>
						<h3 class="section-title">
							Ideal For
						</h3>
						<p class="fs-14 para">
							Transit travelers, backpackers, and budget-conscious guests.
						</p>

					</div>
					<div>
						<h3 class="section-title">
							Stay Duration
						</h3>
						<p class="fs-14 para">
							₹299 / 6 Hours
							(Hourly extensions available)
						</p>
					</div>
					
				</div>
				<div class="col-md-4">
					<h2 class="section-title">Room Service</h2>
					<p class="fs-14 para">
						&#128197; Compact sleeping pod
					</p>
					<p class="fs-14 para">
						&#128187; Personal light and fan
					</p>
					<p class="fs-14 para">
						&#9200; 24/7 Power backup
					</p>
				
				</div>
			</div>
		</div>
		
	</section>
	<?php endif; ?>
	<section class="books sec-padding pt-0">
		<div class="container">
			<div ng-if="show_form">
				<div class="pt-5">
					
				</div>
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
			                <input type="date" ng-model="formData.date" class="form-control" required />
			            </div>  
			            <div class="col-md-4 form-group">
			                <label>Expected Check In Time</label>
			                <input type="time" ng-model="formData.check_in" class="form-control" ng-change="checkoutTime()" required />
			            </div> 
			            <div class="col-md-4 form-group">
			                <label>Check Out Time</label>
			                <input type="text" ng-model="formData.checkout_time" class="form-control" disabled readonly />
			            </div> 

			                           
			            <div class="col-md-4 form-group">
			                <label>Hours</label>
			                <select ng-model="formData.hours_occ" class="form-select" ng-change="changeAmount(); checkoutTime();" required convert-to-number >
			                    <option value="">--Select--</option>
			                    <option ng-repeat="item in hours" value="{{item.value}}">{{ item.label}}</option>
			                    
			                </select>
			            </div>
			           
			            <div class="col-md-4 form-group">
			                <label>No of Rooms</label>
			                <input ng-change="changeAmount()" type="number" min="1" ng-model="formData.no_of_rooms" class="form-control" />
			            </div> 

			            <div class="col-md-4 form-group">
			                <label>Total Amount (Will Be Pay Check In Time)</label>
			                <input type="text" min="1" ng-model="formData.total_amount" class="form-control" disabled readonly />
			            </div> 
			            <!-- <div class="col-md-4 form-group">
			                <label>Booking Amount</label>
			                <br>
			                <label><input type="radio"  ng-model="formData.full_payment" value="1" required />&nbsp;Full Payment&nbsp;</label>
			                <label><input type="radio"  ng-model="formData.full_payment" value="2" required />&nbsp;Booking Amount&nbsp;</label>
			            </div>
			            <div class="col-md-4 form-group" ng-if="formData.full_payment == 1">
			                <label>Paid Amount</label>
			                <input type="text" min="1" ng-model="formData.total_amount" class="form-control" disabled readonly />
			            </div> 
			            <div class="col-md-4 form-group" ng-if="formData.full_payment == 2">
			                <label>Booking Amount</label>
			                <input type="text"  ng-model="formData.booking_amount" class="form-control" disabled readonly />
			            </div>  -->
			             
					</div>
					<div class="text-center">
						<button ng-disabled="processing" type="submit" class="book-btn wid">
							<span ng-if="!processing">Book Now</span>
							<span ng-if="processing">Loadng</span>
						</button>
					</div>
				</form>
			</div>
			<div ng-if="!show_form">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div>
							<div class="text-center">
								<h4>Thank you for choosing our hotel.</h4>
								<p>
									We truly appreciate your reservation and look forward to welcoming you.<br>
									We hope you have a comfortable and pleasant stay with us.
								</p>
								
							</div>
							<table class="table">
								<tr>
									<td>Name</td>
									<td>{{booked_entry.name}}</td>
								</tr>
								<tr>
									<td>Mobile</td>
									<td>{{booked_entry.mobile_no}}</td>
								</tr>
								<tr>
									<td>Date</td>
									<td>{{booked_entry.show_time}}</td>
								</tr>
								<tr>
									<td>Room</td>
									<td>
										<span ng-if="booked_entry.type == 1">
											Pods
										</span>
										<span ng-if="booked_entry.type == 2">
											Single Cabins
										</span>
										<span ng-if="booked_entry.type == 3">
											Double Beds
										</span> - 
										{{booked_entry.show_e_ids}} (Room)
									</td>
								</tr>
								
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
</div>


<?php get_footer();?>