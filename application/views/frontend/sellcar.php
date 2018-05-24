
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
      		<div class="twelvecol page-hdr" id="page-hdr-sellcar">
        	   <h1>Vehicle Valuation</h1>
      		</div>
   	    </div>

            <div class="clear"></div>

            <div class="twelvecol desktop-hidden">
              <h2>Vehicle Valuation</h2>
            </div>

		<p><strong>Looking to sell your car?</strong></p>

		<h2>We buy cars</h2>

		<p>We take the hassle out of selling privately plus we have a network of industry contacts looking to pay good prices for your vehicle.</p>

		<p>Complete our simple to use valuation form below to get started.</p>

<?php echo form_open('sell-form'); ?>
  <h3>Car Valuation</h3>

  <!--  Show Success or Error Message -->
      <?php if($this->session->flashdata('success')) {?>
      <div class="twelvecol" style="padding: 5px 5px; background: rgba(67, 188, 71, 0.7); color: #fff;"><?= $this->session->flashdata('success') ?></div>
    <?php } ?>
    <?php if($this->session->flashdata('error')) {?>
    <div class="twelvecol" style="padding: 5px; background: rgba(242, 36, 36, 0.7); color: #fff;"><?= $this->session->flashdata('error') ?></div>
  <?php } ?>

  <div class="row">
    <div class="sixcol"><label>Reg number <span class="required">*</span></label></div>
    <div class="sixcol last"><input type="text" size=10 name="registration" value="" required/></div>
  </div>
  <div class="row">
    <div class="sixcol"><label>Make of car <span class="required">*</span></label></div>
    <div class="sixcol last"><input type="text" size=40 name="make" value="" required/></div>
  </div>
  <div class="row">
    <div class="sixcol"><label>Model <span class="required">*</span></label></div>
    <div class="sixcol last"><input type="text" size=40 name="model" value="" required/></div>
  </div>
  <div class="row">
    <div class="sixcol"><label>Year <span class="required">*</span></label></div>
    <div class="sixcol last"><input type="text" size=10 name="year" value="" required/></div>
  </div>
  <div class="row">
    <div class="sixcol"><label>Mileage </label></div>
    <div class="sixcol last"><input type="text" size=10 name="mileage" value="" /></div>
  </div>
  <div class="row">
    <div class="sixcol"><label>Name <span class="required">*</span></label></div>
    <div class="sixcol last"><input type="text" size=40 name="name" value="" required/></div>
  </div>
  <div class="row">
    <div class="sixcol"><label>Email <span class="required">*</span></label></div>
    <div class="sixcol last"><input type="text" size=40 name="email" value="" required/></div>
  </div>
  <div class="row">
    <div class="sixcol"><label>Telephone <span class="required">*</span></label></div>
    <div class="sixcol last"><input type="text" size=40 name="phone" value="" required/></div>
  </div>

  <div class="row">
    <div class="sixcol"></div>
    <div id="sellcar-submit" class="sixcol last"><input type="submit" value="Submit" class="button green" /></div>
  </div>

<?php echo form_close(); ?>


          </div>
        </div>
        <!-- // END Valuation Content -->

  		<!-- Vehicle Locator Sidebar -->
        <div class="fourcol last mobile-hidden" id="sidebar">
          <div class="row sidebar">

              <!-- Widget -->
              <div class="sidebar-widget widget search">
    <div class="pad-20 overflow-hidden">

        <h3><span aria-hidden="true" class="icon icon-search"></span> Vehicles for Sale</h3>

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

<h3><span aria-hidden="true" class="icon icon-phone"></span> Get In Touch</h3>

<p>Why not contact us directly?</p>
 <div class="elevencol contact-box">
    <ul id="get-in-touch">
      <!--<li><a href="tel:01215262220" title="Call Us"><span aria-hidden="true" class="icon icon-phone-2"></span> 0121 5262220</a></li>
      <li><a href="tel:07944706957" title="Ring Us"><span aria-hidden="true" class="icon icon-mobile"></span> 07944 706957</a></li>
      <li><a href="mailto:globemotors@hotmail.co.uk" title="Email Us"><span aria-hidden="true" class="icon icon-mail"></span> Email Us</a></li>-->
      <li class="mobile-hidden"><span aria-hidden="true" class="icon icon-phone-2"></span> <a href="contact.html">0121 5262220</a></li>
<li class="desktop-hidden"><span aria-hidden="true" class="icon icon-phone-2"></span> <a href="tel:01215262220">01215262220</a></li>

      <li class="mobile-hidden"><span aria-hidden="true" class="icon icon-mobile"></span> <a href="contact.html">07944 706957</a></li>

      <li class="mobile-hidden"><span aria-hidden="true" class="desktop-hidden mobile-hidden desktop-hidden"></span> <a href="contact.html"></a></li>
<li class="desktop-hidden"><span aria-hidden="true" class="desktop-hidden mobile-hidden desktop-hidden"></span> <a href="tel:"></a></li>

      <li><span aria-hidden="true" class="icon icon-mail"></span> <a href="mailto:globemotors@hotmail.co.uk" title="Email Us">Email Us</a></li>

    </ul>
</div>
</div>
</div>

              <!-- // Widget -->

              <!-- Widget -->
               <div class="sidebar-widget widget testimonials">
    <div class="pad-20 overflow-hidden">

      <h3><span aria-hidden="true" class="icon icon-comments"></span> What They Say</h3>
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
      <h3><span aria-hidden="true" class="icon icon-users"></span> Our Partners</h3>
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
</div>
