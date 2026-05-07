<?php /* Template Name: Book Page*/ ?>

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
	<nav>
  <a href="index.html" class="nav-logo">NNHP Hotel</a>
  <a href="index.html" class="nav-back">Back to Home</a>
</nav>

<!-- SUCCESS OVERLAY -->
<div class="success-overlay" id="successOverlay">
  <div class="success-icon">✓</div>
  <h2 class="success-title">Booking Confirmed</h2>
  <p class="success-sub">Thank you for choosing NNHP Hotel. We look forward to welcoming you. Please present this confirmation at check-in.</p>
  <div class="booking-details-card" id="confirmCard"></div>
  <button class="btn-new-book" onclick="newBooking()">Make Another Booking</button>
</div>

<!-- PAGE -->
<div class="page">
	<form name="myForm1" novalidate="novalidate" ng-submit="onSubmit(myForm1.$valid)">
  <!-- LEFT: SINGLE-STEP FORM -->
	  <div class="booking-form-section">
	    <div class="form-header">
	      <div class="form-eyebrow">Reservation</div>
	      <h1 class="form-title">Book Your Stay</h1>
	      <p class="form-subtitle">Fill in all details below to secure your room. Payment is collected at check-in.</p>
	    </div>

	    <!-- SECTION 1: GUEST INFO -->
	    <div class="form-section-label">👤 Guest Information</div>
	    <div class="form-grid">
	      <div class="field form-group">
	        <label>Full Name <span class="required-mark">*</span></label>
	        <!-- <input type="text" id="guestName" placeholder="Enter your full name"> -->

	        <input type="text" placeholder="Enter your full name" ng-model="formData.name"  required />
	      </div>
	      <div class="field form-group">
	        <label>Mobile Number <span class="required-mark">*</span></label>
	        <!-- <input type="tel" id="guestMobile" placeholder="10-digit mobile number" maxlength="10"> -->

	         <input type="number" ng-model="formData.mobile_no" required  placeholder="10-digit mobile number" maxlength="10" />
	      </div>
	      <div class="field form-group">
	        <label>Email Address</label>
	        <!-- <input type="email" id="guestEmail" placeholder="your@email.com"> -->

	        <input type="email" ng-model="formData.email_id" class="form-control" required placeholder="your@email.com" />
	      </div>
	      <div class="field">
	        <label>PNR / UID Number</label>
	        <!-- <input type="text" id="guestPNR" placeholder="Optional — PNR or Government ID"> -->

	        <input type="text" ng-model="formData.pnr_uid" class="form-control" placeholder="Optional — PNR or Government ID" />
	      </div>
	    </div>

	    <!-- SECTION 2: ROOM SELECTION -->
	    <div class="form-section-label">🛏 Room Type</div>
	    <div class="room-type-select" id="roomTypeSelect">
	      <div class="room-type-option selected" data-type="beds" onclick="selectRoom(this,'beds',599)">
	        <div class="rt-icon">🛏</div>
	        <div class="rt-name">Double Bed</div>
	        <div class="rt-price">₹599</div>
	      </div>
	      <div class="room-type-option" data-type="cabin" onclick="selectRoom(this,'cabin',399)">
	        <div class="rt-icon">🚪</div>
	        <div class="rt-name">Single Cabin</div>
	        <div class="rt-price">₹399</div>
	      </div>
	      <div class="room-type-option" data-type="pods" onclick="selectRoom(this,'pods',299)">
	        <div class="rt-icon">🏠</div>
	        <div class="rt-name">Single Pod</div>
	        <div class="rt-price">₹299</div>
	      </div>
	    </div>

	    <!-- SECTION 3: STAY DETAILS -->
	    <div class="form-section-label">📅 Stay Details</div>
	    <div class="form-grid">
	      <div class="field form-full">
	        <label>Arrival Date <span class="required-mark">*</span></label>
	        <input type="date" id="arrivalDate">
	      </div>
	      <div class="field">
	        <label>Check-In Time <span class="required-mark">*</span></label>
	        <select id="checkinTime">
	          <option value="">Select time</option>
	          <option>00:00</option><option>01:00</option><option>02:00</option>
	          <option>03:00</option><option>04:00</option><option>05:00</option>
	          <option>06:00</option><option>07:00</option><option>08:00</option>
	          <option>09:00</option><option>10:00</option><option>11:00</option>
	          <option>12:00</option><option>13:00</option><option>14:00</option>
	          <option>15:00</option><option>16:00</option><option>17:00</option>
	          <option>18:00</option><option>19:00</option><option>20:00</option>
	          <option>21:00</option><option>22:00</option><option>23:00</option>
	        </select>
	      </div>
	      <div class="field">
	        <label>Duration <span class="required-mark">*</span></label>
	        <select id="duration" onchange="updateTotal()">
	          <option value="">Select hours</option>
	          <option value="1">6 Hours</option>
	          <option value="2">12 Hours</option>
	          <option value="3">18 Hours</option>
	          <option value="4">24 Hours</option>
	        </select>
	      </div>
	      <div class="field">
	        <label>Number of Rooms <span class="required-mark">*</span></label>
	        <select id="numRooms" onchange="updateTotal()">
	          <option value="1">1 Room</option>
	          <option value="2">2 Rooms</option>
	          <option value="3">3 Rooms</option>
	          <option value="4">4 Rooms</option>
	        </select>
	      </div>
	    </div>

	    <!-- LIVE PRICE TOTAL -->
	    <div class="total-section">
	      <div class="total-rows">
	        <div class="total-row"><span id="rateLabel">Room Rate</span><span id="rateValue">₹599 / 6 hrs</span></div>
	        <div class="total-row"><span>Duration</span><span id="durationLabel">6 hours</span></div>
	        <div class="total-row"><span>Rooms</span><span id="roomsLabel">1 room</span></div>
	        <div class="total-row main"><span>Total (Pay at Check-In)</span><span class="amount" id="totalAmount">₹599</span></div>
	      </div>
	    </div>

	    <!-- SUBMIT -->
	    <button class="btn-book" id="bookBtn" onclick="submitBooking()">Confirm & Reserve Now</button>
	    <p class="form-note">💳 No advance payment required. Pay at check-in.</p>
	  </div>
	</form>

  <!-- RIGHT: ROOM PANEL -->
  <div class="room-panel">
    <div class="room-hero">
      <img id="roomHeroImg" src="https://hotel.aadhyasriwebsolutions.com/wp-content/themes/aadhya_theme/front-end/images/pic1e.jpeg" alt="Double Beds">
      <div class="room-hero-overlay"></div>
      <div class="room-hero-content">
        <span class="room-tag" id="roomHeroTag">Double Bed</span>
        <div class="room-panel-name" id="roomHeroName">Double Bed Room</div>
      </div>
    </div>
    <div class="room-info-card">
      <div class="room-info-row">
        <span class="room-info-label">Price</span>
        <span class="room-info-value highlight" id="panelPrice">₹599 / 6 hrs</span>
      </div>
      <div class="room-info-row">
        <span class="room-info-label">Ideal For</span>
        <span class="room-info-value" id="panelIdeal">Couples & guests</span>
      </div>
      <div class="room-info-row">
        <span class="room-info-label">About</span>
        <span class="room-info-value" id="panelDesc">Spacious rooms with cozy bedding, clean interiors.</span>
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



<script>
  const roomData = {
    beds: {
      name: 'Double Bed Room', tag: 'Double Bed', price: 599,
      img: 'https://hotel.aadhyasriwebsolutions.com/wp-content/themes/aadhya_theme/front-end/images/pic1e.jpeg',
      ideal: 'Couples & guests', desc: 'Spacious rooms with cozy bedding, clean interiors and peaceful atmosphere.'
    },
    cabin: {
      name: 'Single Cabin', tag: 'Single Cabin', price: 399,
      img: 'https://hotel.aadhyasriwebsolutions.com/wp-content/themes/aadhya_theme/front-end/images/pic1f.jpeg',
      ideal: 'Solo travelers', desc: 'Private, well-designed cabins for short stays with calm environment.'
    },
    pods: {
      name: 'Single Pod', tag: 'Single Pod', price: 299,
      img: 'https://hotel.aadhyasriwebsolutions.com/wp-content/themes/aadhya_theme/front-end/images/pic1c.jpeg',
      ideal: 'Transit travelers', desc: 'Modern capsule-style pods for quick rest and budget-friendly stays.'
    }
  };

  const durationMap = { '1': 1, '2': 2, '3': 3, '4': 4 };
  const durationLabels = { '1': '6 hours', '2': '12 hours', '3': '18 hours', '4': '24 hours' };

  let selectedType = 'beds';
  let basePrice = 599;

  function getURLParam(p) {
    return new URLSearchParams(window.location.search).get(p);
  }

  function initFromURL() {
    const t = getURLParam('type');
    if (t && roomData[t]) {
      document.querySelectorAll('.room-type-option').forEach(o => o.classList.remove('selected'));
      const el = document.querySelector(`[data-type="${t}"]`);
      if (el) { el.classList.add('selected'); selectRoomData(t); }
    }
    // Set today as default date
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('arrivalDate').min = today;
    document.getElementById('arrivalDate').value = today;
    updateTotal();
  }

  function selectRoom(el, type, price) {
    document.querySelectorAll('.room-type-option').forEach(o => o.classList.remove('selected'));
    el.classList.add('selected');
    selectRoomData(type);
  }

  function selectRoomData(type) {
    selectedType = type;
    const d = roomData[type];
    basePrice = d.price;
    document.getElementById('roomHeroImg').src = d.img;
    document.getElementById('roomHeroTag').textContent = d.tag;
    document.getElementById('roomHeroName').textContent = d.name;
    document.getElementById('panelPrice').textContent = `₹${d.price} / 6 hrs`;
    document.getElementById('panelIdeal').textContent = d.ideal;
    document.getElementById('panelDesc').textContent = d.desc;
    updateTotal();
  }

  function updateTotal() {
    const dur = document.getElementById('duration').value;
    const rooms = parseInt(document.getElementById('numRooms').value) || 1;
    const multiplier = dur ? durationMap[dur] : 1;
    const total = basePrice * multiplier * rooms;
    const label = durationLabels[dur] || '6 hours';
    const rname = roomData[selectedType].tag;
    document.getElementById('rateLabel').textContent = `${rname} — base rate`;
    document.getElementById('rateValue').textContent = `₹${basePrice} / 6 hrs`;
    document.getElementById('durationLabel').textContent = label;
    document.getElementById('roomsLabel').textContent = `${rooms} room${rooms > 1 ? 's' : ''} × ${multiplier} block${multiplier > 1 ? 's' : ''}`;
    document.getElementById('totalAmount').textContent = `₹${total}`;
  }

  function submitBooking() {
    const name = document.getElementById('guestName').value.trim();
    const mobile = document.getElementById('guestMobile').value.trim();
    const date = document.getElementById('arrivalDate').value;
    const checkin = document.getElementById('checkinTime').value;
    const dur = document.getElementById('duration').value;

    if (!name) { alert('Please enter your full name.'); return; }
    if (!mobile || mobile.length < 10) { alert('Please enter a valid 10-digit mobile number.'); return; }
    if (!date) { alert('Please select arrival date.'); return; }
    if (!checkin) { alert('Please select check-in time.'); return; }
    if (!dur) { alert('Please select stay duration.'); return; }

    const btn = document.getElementById('bookBtn');
    btn.textContent = 'Confirming...';
    btn.disabled = true;

    setTimeout(() => {
      const rooms = parseInt(document.getElementById('numRooms').value) || 1;
      const multiplier = durationMap[dur];
      const total = basePrice * multiplier * rooms;
      const label = durationLabels[dur];
      const d = roomData[selectedType];
      const ref = 'NNHP' + Date.now().toString().slice(-6);

      document.getElementById('confirmCard').innerHTML = `
        <div class="booking-detail-row"><span class="dk">Booking Ref</span><span class="dv" style="color:var(--gold);font-family:'Cormorant Garamond',serif;font-size:1.1rem">${ref}</span></div>
        <div class="booking-detail-row"><span class="dk">Guest Name</span><span class="dv">${name}</span></div>
        <div class="booking-detail-row"><span class="dk">Mobile</span><span class="dv">${mobile}</span></div>
        <div class="booking-detail-row"><span class="dk">Room Type</span><span class="dv">${d.name}</span></div>
        <div class="booking-detail-row"><span class="dk">Arrival</span><span class="dv">${date} at ${checkin}</span></div>
        <div class="booking-detail-row"><span class="dk">Duration</span><span class="dv">${label}</span></div>
        <div class="booking-detail-row"><span class="dk">Rooms</span><span class="dv">${rooms}</span></div>
        <div class="booking-detail-row"><span class="dk">Amount Due at Check-In</span><span class="dv" style="color:var(--gold);font-family:'Cormorant Garamond',serif;font-size:1.2rem">₹${total}</span></div>
      `;

      document.getElementById('successOverlay').classList.add('show');
    }, 1000);
  }

  function newBooking() {
    document.getElementById('successOverlay').classList.remove('show');
    document.getElementById('guestName').value = '';
    document.getElementById('guestMobile').value = '';
    document.getElementById('guestEmail').value = '';
    document.getElementById('guestPNR').value = '';
    document.getElementById('checkinTime').value = '';
    document.getElementById('duration').value = '';
    document.getElementById('numRooms').value = '1';
    document.getElementById('bookBtn').textContent = 'Confirm & Reserve Now';
    document.getElementById('bookBtn').disabled = false;
    updateTotal();
  }

  initFromURL();
</script>
</div>


<?php get_footer();?>