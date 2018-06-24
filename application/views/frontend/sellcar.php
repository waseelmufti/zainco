
<!-- Main Content -->
<div id="main-wrap">
  <div id="page-warrior">
	<div id="valuation-pg">
	  <div class="container">
	    <div class="wrapper">
	      <div class="row">
	   		<!-- Valuation Content -->
        <div class="eightcol block">
          <div class="pad-20 overflow-hidden">


            <div class="row mobile-hidden">
      		<div class="twelvecol page-hdr" id="page-hdr-sellcar" style="background: url(<?= site_url('assets/img/theme/page-hdr-sellcar.jpg')?>) center top no-repeat;
background-size: cover;">
        	   <h1>Sell Your Car</h1>
      		</div>
   	    </div>

            <div class="clear"></div>

            <div class="twelvecol desktop-hidden">
              <h2>Sell Your Car</h2>
            </div>

		<p><strong>Why Sell To Best Car Trading?</strong></p>

              <p>Reasons why we're your best option</p> 
        
        <p>We can optimize our inventory to get the right cars to the right place, so if we see a vehicle we like, we'll pay more to get it. 
        </p>
        
        <p>Our evaluation process is free, and you're under no obligation to take our offer once we present it to you. Best of all, we won't waste your time. In other words, you have nothing to lose. Even if you plan to someone else, we're happy to give you a second opinion. </p>
        
        <p>We'll buy your vehicle even if you don't want to buy something new from a Best Car Trading. We're just looking for pre-owned vehicles. We're not looking to rope you into a vehicle you don't want to buy. </p>
        
        <p>We can often get you cash for your vehicle the very same day. If you accept our offer later in the day, then you might have to wait up to 24 hours. Either way, you get to avoid the hassle of selling your vehicle privately. </p>

		<p>Complete our simple to use valuation form below to get started.</p>

<?php echo form_open_multipart('sell-form'); ?>
  <h3>Car Valuation</h3>

  <!--  Show Success or Error Message -->
      <?php if($this->session->flashdata('success')) {?>
      <div class="twelvecol" style="padding: 5px 5px; background: rgba(67, 188, 71, 0.7); color: #fff;"><?= $this->session->flashdata('success') ?></div>
    <?php } ?>
    <?php if($this->session->flashdata('error')) {?>
    <div class="twelvecol" style="padding: 5px; background: rgba(242, 36, 36, 0.7); color: #fff;"><?= $this->session->flashdata('error') ?></div>
  <?php } ?>
  
<!--  <input type="hidden" name="form_type" value="sellcar">-->

  <div class="row">
    <div class="threecol"><label>You filling this form for <span class="required"></span></label></div>
    <div class="ninecol last">
    <label for="form_for">
    <input type="radio" id="form_for" name="form_type" value="sellcar" checked/> Sell Your Car</label>
    <label><input type="radio" name="form_type" value="carvaluation" /> Your Car Valuation</label></div>
</div>

    <div class="row">
    <div class="threecol"><label>First Name<span class="required">*</span></label></div>
    <div class="ninecol last"><input size=40 name="fname" value="" placeholder="First Name (Required)" type="text" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>Last Name<span class="required">*</span></label></div>
    <div class="ninecol last"><input size=40 name="lname" value="" placeholder="Last Name (Required)" type="text" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>Best Phone Number<span class="required">*</span></label></div>
    <div class="ninecol last"><input size=40 name="phone" value="" placeholder="Phone Number (Required)" type="text" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>Postcode<span class="required">*</span></label></div>
    <div class="ninecol last"><input size=40 name="postcode" value="" placeholder="Postcode (Required)" type="text" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>Vehicle Model<span class="required">*</span></label></div>
    <div class="ninecol last"><input size=40 name="vehicle_model" value="" placeholder="Vehicle Model (Required)" type="text" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>Engine Size<span class="required">*</span></label></div>
    <div class="ninecol last"><input size=40 name="engine_size" value="" placeholder="Engine Size  (Required)" type="text" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>Colour<span class="required">*</span></label></div>
    <div class="ninecol last"><input size=40 name="color" value="" placeholder="Colour (Required)" type="text" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>Vehicle Mileage<span class="required">*</span></label></div>
    <div class="ninecol last"><input size=40 name="vehicle_mileage" value="" placeholder="Vehicle Mileage (Required)" type="text" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>Number of owners<span class="required">*</span></label></div>
    <div class="ninecol last"><input name="no_owners" value="" placeholder="Number of owners (Required)" type="text" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>First registered<span class="required">*</span></label></div>
    <div class="ninecol last"><input class="datepicker" name="first_reg" value="" placeholder="First registered (Required)" type="datetime" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>MOT expires<span class="required">*</span></label></div>
    <div class="ninecol last"><input class="datepicker" name="mot_exp" value="" placeholder="MOT expires  (Required)" type="datetime" required></div>
    </div>

    <div class="row">
    <div class="threecol"><label>Last service<span class="required">*</span></label></div>
    <div class="ninecol last"><input class="datepicker" name="last_service" value="" placeholder="Last service  (Required)" type="datetime" required></div>
    </div>

    <div class="row">
    <div class="threecol">
    <label for="vehicle">Service History<span class="required">*</span></label></div>
    <div class="ninecol last">
        <select name="service_his" class="form-field" id="service_his" required>
            <option value="full" selected>Full</option>
            <option value="part">Part</option>
            <option value="non">Non</option>
        </select>
    </div>
    </div>

    <div class="row">
    <div class="threecol"><label>Last Service Mileage<span class="required">*</span></label></div>
    <div class="ninecol last"><input name="last_service_mileage" value="" placeholder="Last Service Mileage (Required)" type="text" required></div>
    </div>

    <div class="row">
    <div class="threecol">
    <label for="vehicle">General condition<span class="required">*</span></label></div>
    <div class="ninecol last">
        <select name="general_condition" class="form-field" id="general_condition" required>
            <option value="full" selected>Excelent</option>
            <option value="part">Good</option>
            <option value="non">Poor</option>
            <option value="non">Non Runner</option>
        </select>
    </div>
    </div>

    <div class="row">
    <div class="threecol"><label>Describe your vehicle in your words <span class="required"></span></label></div>
    <div class="ninecol last"><textarea rows=5 cols=40 name="message" placeholder="Description"></textarea></div>
    </div>

    <div class="row">
    <div class="threecol"><label>Upload Photos<span class="required"></span></label></div>
    <div class="ninecol last">
        <input type="file" name="car_photos[]" multiple>
    </div>
    </div>

    <div class="row">
    <div class="threecol"><label>Security</label></div>
    <div class="ninecol last">

        <div id="recaptcha_widget">

        </div>

        <div class="row">
            <input type="submit" value="Submit Enquiry" class="button black full">
        </div>
    </div>
    </div>
<?php echo form_close(); ?>


          </div>
        </div>
        <!-- // END Valuation Content -->
              </div>
  		<!-- Vehicle Locator Sidebar -->
        <div class="fourcol last mobile-hidden" id="sidebar">
          <div class="row sidebar">

              <!-- Widget -->
              <div class="sidebar-widget widget search">
    <div class="pad-20 overflow-hidden">

        <h3><span aria-hidden="true" class=" -search"></span> Vehicles for Sale</h3>

            <noscript><div class="noscript message_red">Please enable Javascript to use this function.</div></noscript>

            <form action="https://www.globemotorswalsall.co.uk/search.php" method="get">

                <div id="sidebar-search-make">
                <select name="make" id="make" onChange="fillItems(0)">
                <option value="" selected="selected">Any make</option>
                                 <option value="6" >AUDI (2)</option>
                 <option value="8" >BMW (15)</option>
                 <option value="25" >FORD (3)</option>
                 <option value="32" >HYUNDAI (1)</option>
                 <option value="34" >JAGUAR (1)</option>
                 <option value="224" >MERCEDES-BENZ (5)</option>
                 <option value="51" >MINI (2)</option>
                 <option value="55" >NISSAN (2)</option>
                 <option value="60" >PEUGEOT (1)</option>
                 <option value="84" >VOLKSWAGEN (2)</option>
                 <option value="85" >VOLVO (1)</option>

                </select>
                </div>

                <div id="sidebar-search-model">
                <select name="model" id="model">
                <option selected="selected">Any model</option>
                </select>
                </div>

                <div id="sidebar-search-price">
                <select name="price">
                <option value="" selected="selected">Maximum price</option>
                <option value="2000">&pound;2000</option>
<option value="2500">&pound;2500</option>
<option value="3000">&pound;3000</option>
<option value="3500">&pound;3500</option>
<option value="4000">&pound;4000</option>
<option value="4500">&pound;4500</option>
<option value="5000">&pound;5000</option>
<option value="5500">&pound;5500</option>
<option value="6000">&pound;6000</option>
<option value="6500">&pound;6500</option>
<option value="7000">&pound;7000</option>
<option value="7500">&pound;7500</option>
<option value="8000">&pound;8000</option>
<option value="8500">&pound;8500</option>
<option value="9000">&pound;9000</option>
<option value="9500">&pound;9500</option>
<option value="10000">&pound;10000</option>
<option value="10500">&pound;10500</option>
<option value="11000">&pound;11000</option>
<option value="11500">&pound;11500</option>
<option value="12000">&pound;12000</option>
<option value="12500">&pound;12500</option>
<option value="13000">&pound;13000</option>
<option value="13500">&pound;13500</option>
<option value="14000">&pound;14000</option>
<option value="14500">&pound;14500</option>

                </select>
            	</div>

            <div><input type="submit" class="button black" value="Search" aria-hidden="true" data-icon="F" /></div>

        </form>

    </div>
</div>

              <!-- // Widget -->

              <!-- Widget -->
               <div class="sidebar-widget widget contact">
<div class="pad-20 overflow-hidden">

<h3><span aria-hidden="true" class=" -phone"></span> Get In Touch</h3>

<p>Why not contact us directly?</p>
 <div class="elevencol contact-box">
    <ul id="get-in-touch">
      <!--<li><a href="tel:01215262220" title="Call Us"><span aria-hidden="true" class=" -phone-2"></span> 0121 5262220</a></li>
      <li><a href="tel:07944706957" title="Ring Us"><span aria-hidden="true" class=" -mobile"></span> 07944 706957</a></li>
      <li><a href="mailto:globemotors@hotmail.co.uk" title="Email Us"><span aria-hidden="true" class=" -mail"></span> Email Us</a></li>-->
      <li class="mobile-hidden"><span aria-hidden="true" class=" -phone-2"></span> <a href="contact.html">0121 5262220</a></li>
<li class="desktop-hidden"><span aria-hidden="true" class=" -phone-2"></span> <a href="tel:01215262220">01215262220</a></li>

      <li class="mobile-hidden"><span aria-hidden="true" class=" -mobile"></span> <a href="contact.html">07944 706957</a></li>

      <li class="mobile-hidden"><span aria-hidden="true" class="desktop-hidden mobile-hidden desktop-hidden"></span> <a href="contact.html"></a></li>
<li class="desktop-hidden"><span aria-hidden="true" class="desktop-hidden mobile-hidden desktop-hidden"></span> <a href="tel:"></a></li>

      <li><span aria-hidden="true" class=" -mail"></span> <a href="mailto:globemotors@hotmail.co.uk" title="Email Us">Email Us</a></li>

    </ul>
</div>
</div>
</div>

              <!-- // Widget -->

              <!-- Widget -->
               <div class="sidebar-widget widget testimonials">
    <div class="pad-20 overflow-hidden">

      <h3><span aria-hidden="true" class=" -comments"></span> What They Say</h3>
      <blockquote>
        <div class="quote"><div class="pad-15">Contact us with your comments.</div></div>
        <cite></cite>
      </blockquote>

    </div>
</div>

              <!-- // Widget -->

              <!-- Widget -->
              <div class="sidebar-widget widget partners tablet-hidden">
	<div class="pad-20 overflow-hidden">
      <h3><span aria-hidden="true" class=" -users"></span> Our Partners</h3>
      <div class="row sidebar-partners">

<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-experian.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-cards.png" alt="Partner" class="responsive-img"></div>
      </div>
	</div>
</div>

              <!-- // Widget -->

          </div>
        </div>
        <!-- // END Vehicle Locator Sidebar -->
	      </div>
	    </div>
	  </div>
	</div>
</div>







</div>
<!-- // Main Content -->
   <span itemprop="openingHoursSpecification" itemscope itemtype="https://schema.org/OpeningHoursSpecification">
  <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
    <meta itemprop="name" content="Mo">
  </span>
  <meta itemprop="opens" content="09:00">
  <meta itemprop="closes" content="18:00">
  <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
    <meta itemprop="name" content="Tu">
  </span>
  <meta itemprop="opens" content="09:00">
  <meta itemprop="closes" content="18:00">
  <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
    <meta itemprop="name" content="We">
  </span>
  <meta itemprop="opens" content="09:00">
  <meta itemprop="closes" content="18:00">
  <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
    <meta itemprop="name" content="Th">
  </span>
  <meta itemprop="opens" content="09:00">
  <meta itemprop="closes" content="18:00">
  <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
    <meta itemprop="name" content="Fr">
  </span>
  <meta itemprop="opens" content="09:00">
  <meta itemprop="closes" content="18:00">
  <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
    <meta itemprop="name" content="Sa">
  </span>
  <meta itemprop="opens" content="09:00">
  <meta itemprop="closes" content="17:00">
  <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
    <meta itemprop="name" content="Su">
  </span>
  <meta itemprop="opens" content="">
  <meta itemprop="closes" content="By Appointment">
</span>

<meta itemprop="telephone" content="0121 5262220">
<meta itemprop="email" content="globemotors@hotmail.co.uk">

<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
  <meta itemprop="streetAddress" content="Darlaston Road, ">
  <meta itemprop="addressLocality" content="Walsall">
  <meta itemprop="addressRegion" content="West Midlands">
  <meta itemprop="postalCode" content="WS2 9SG">
  <meta itemprop="addressCountry" content="United Kingdom">
</span>
