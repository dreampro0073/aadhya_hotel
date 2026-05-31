<?php /* Template Name: Book Page*/ ?>

<?php get_header(); ?>
<?php
  $image_url = get_template_directory_uri() . '/';


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
  <nav>
    <a href="<?php echo esc_url(home_url('/')) ?>" class="nav-logo">NNHP Hotel</a>
    <a href="<?php echo esc_url(home_url('/')) ?>" class="nav-back">Back to Home</a>
  </nav>

  <div class="success-overlay"  ng-if="!show_form">
    <div class="success-icon">✓</div>
    <h2 class="success-title">Booking Confirmed</h2>
    <p class="success-sub mb-2">Thank you for choosing NNHP Hotel. We look forward to welcoming you. Please present this confirmation at check-in.</p>
    <p class="success-sub sub1">
      <b>
        A confirmation email has been sent to your registered email address. Please check your inbox or spam folder.
      </b>  
    </p>
    <div class="booking-details-card" id="confirmCard">
      <table class="table">
        <tr>
          <td>Name</td>
          <td>{{booked_entry.name}}</td>
        </tr>
        <tr>
          <td>Booking Id</td>
          <td>{{booked_entry.id}}</td>
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



    <button class="btn-new-book" ng-click="resetData()">Make Another Booking</button>
  </div>

  <div ng-if="show_form" class="page">
    <form name="myForm1" novalidate="novalidate" ng-submit="onSubmit(myForm1.$valid)">
    <!-- LEFT: SINGLE-STEP FORM -->
      <div class="booking-form-section">
        <div class="form-header">
          <div class="form-eyebrow">Hotel Reservation</div>

          <h1 class="form-title">Book Sleeping Pods & Hotel Rooms in Gorakhpur</h1>

          <p class="form-subtitle">
            Book comfortable sleeping pods, cabins, and hotel rooms near Gorakhpur Railway Station with secure reservation and affordable pricing.
            </p>
        </div>

        <!-- SECTION 1: GUEST INFO -->
        <div class="form-section-label">👤 Guest Information</div>
        <div class="form-grid">
          <div class="field form-group">
            <label>Full Name <span class="required-mark">*</span></label>
            <input type="text" placeholder="Enter your full name" ng-model="formData.name"  required />
          </div>
          <div class="field form-group">
            <label>Mobile Number <span class="required-mark">*</span></label>
             <input type="number" ng-model="formData.mobile_no" required  placeholder="10-digit mobile number" maxlength="10" />
          </div>
          <div class="field form-group">
            <label>Email Address</label>
            <input type="email" ng-model="formData.email_id" required placeholder="your@email.com" />
          </div>
          <div class="field form-group">
            <label>PNR / UID Number</label>
            <input type="text" ng-model="formData.pnr_uid" placeholder="Optional — PNR or Government ID" />
          </div>
        </div>

        <!-- SECTION 2: ROOM SELECTION -->
        <div class="form-section-label">🛏 Room Type</div>
        <div class="room-type-select" id="roomTypeSelect">
          <div class="room-type-option"  ng-class="{'selected': formData.type == 3}" ng-click="selectRoom(3)">
            <div class="rt-icon">🛏</div>
            <div class="rt-name">Double Bed</div>
            <div class="rt-price">₹899</div>
          </div>
          <div class="room-type-option"  ng-class="{'selected': formData.type == 2}" ng-click="selectRoom(2)">
            <div class="rt-icon">🚪</div>
            <div class="rt-name">Single Cabin</div>
            <div class="rt-price">₹399</div>
          </div>
          <div class="room-type-option"  ng-class="{'selected': formData.type == 1}"  ng-click="selectRoom(1)">
            <div class="rt-icon">🏠</div>
            <div class="rt-name">Single Pod</div>
            <div class="rt-price">₹299</div>
          </div>
        </div>

        <!-- SECTION 3: STAY DETAILS -->
        <div class="form-section-label">📅 Stay Details</div>
        <div class="form-grid form-group">
          <div class="field form-full form-group">
            <label>Arrival Date <span class="required-mark">*</span></label>
            
            <input type="date" ng-model="formData.date" required />
          </div>
          <div class="field form-group">
            <label>Expected Check In Time <span class="required-mark">*</span></label>

            <input type="time" ng-model="formData.check_in"  ng-change="checkoutTime()" required />
            
          </div>

          <div class="field form-group">
            <label>Check Out Time <span class="required-mark">*</span></label>

            <input type="text" ng-model="formData.checkout_time"  disabled readonly />
            
          </div>
          <div class="field form-group">
            <label>Duration <span class="required-mark">*</span></label>
            <select ng-model="formData.hours_occ" ng-change="changeAmount(); checkoutTime();" required convert-to-number >
                <option value="">--Select--</option>
                <option ng-show="!(item.value == 6 && formData.type == 3)" ng-repeat="item in hours" value="{{item.value}}">{{ item.label}}</option>
            </select>
          </div>
          <div class="field form-group">
            <label>Number of Rooms <span class="required-mark">*</span></label>
            <select  ng-change="changeAmount()" type="number" min="1" convert-to-number ng-model="formData.no_of_rooms">
              <option value="1">1 Room</option>
              <option value="2">2 Rooms</option>
              <option value="3">3 Rooms</option>
              <option value="4">4 Rooms</option>
              <option value="5">5 Rooms</option>
              <option value="6">5 Rooms</option>
            </select>
          </div>
        </div>

        <!-- LIVE PRICE TOTAL -->
        <div class="total-section">
          <div class="total-rows">
            <!-- <div class="total-row"><span id="rateLabel">Room Rate</span><span id="rateValue">{{sele}} / 6 hrs</span></div> -->
            <div class="total-row"><span>Duration</span><span id="durationLabel">{{formData.hours_occ}} hours</span></div>
            <div class="total-row"><span>Rooms</span><span id="roomsLabel">{{formData.no_of_rooms}} room</span></div>
            <div class="total-row main"><span>Total (Pay at Check-In)</span><span class="amount" id="totalAmount">₹{{formData.total_amount}}</span></div>
          </div>
        </div>

        <!-- SUBMIT -->

        <button ng-disabled="processing" type="submit" class="btn-book" id="bookBtn">
            <span ng-if="!processing">Book Now</span>
            <span ng-if="processing">Loadng</span>
          </button>
        <!-- <button class="btn-book" id="bookBtn" onclick="submitBooking()">Confirm & Reserve Now</button> -->
        <p class="form-note">💳 No advance payment required. Pay at check-in.</p>
      </div>
    </form>

    <!-- RIGHT: ROOM PANEL -->
    <div class="room-panel">
      <div class="room-hero">
        <img id="roomHeroImg" src="<?php echo $image_url."front-end/images/pic1e.jpeg"; ?>" alt="Double Beds">
        <div class="room-hero-overlay"></div>
        <div class="room-hero-content">
          <span class="room-tag" id="roomHeroTag">{{selectedRoom.tag}}</span>
          <div class="room-panel-name" id="roomHeroName">{{selectedRoom.name}}</div>
        </div>
      </div>
      <div class="room-info-card">
        <div class="room-info-row">
          <span class="room-info-label">Price</span>
          <span class="room-info-value highlight" id="panelPrice">₹{{selectedRoom.price}} / <span ng-if="formData.type == 3">12</span><span ng-if="formData.type != 3">6</span> hrs</span>
        </div>
        <div class="room-info-row">
          <span class="room-info-label">Ideal For</span>
          <span class="room-info-value" id="panelIdeal">{{selectedRoom.ideal}}</span>
        </div>
        <div class="room-info-row">
          <span class="room-info-label">About</span>
          <span class="room-info-value" id="panelDesc">{{selectedRoom.desc}}</span>
        </div>
        <div class="room-amenities">
          <div class="amenities-title">Included Amenities</div>
          <div class="amenities-list">
            <div class="amenity-item">Fresh Linens</div>
            <div class="amenity-item">24/7 Power</div>
            <div class="amenity-item">Clean Interiors</div>
            <div class="amenity-item">Private Space</div>
            <div class="amenity-item">Secure Stay</div>
            <div class="amenity-item">Platform Access</div>
          </div>
        </div>
      </div>

      <div class="help-card">
        <div class="help-title">Need Help?</div>
        <a href="tel:9369023506" style="display:flex;align-items:center;gap:0.6rem;color:var(--text);text-decoration:none;font-size:0.88rem;margin-bottom:0.65rem">
          <span style="color:var(--gold)">📞</span> 9369023506
        </a>
        <a href="mailto:msnnhp11@gmail.com" style="display:flex;align-items:center;gap:0.6rem;color:var(--text);text-decoration:none;font-size:0.88rem">
          <span style="color:var(--gold)">✉</span> msnnhp11@gmail.com
        </a>
      </div>
    </div>
  </div>
</div>


<?php get_footer();?>