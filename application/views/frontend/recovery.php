<!-- Main Content -->
<div id="main-wrap">
  <div id="page-warrior">
	<div id="servicing-pg">
	  <div class="container">
	    <div class="wrapper">
	      <div class="row">
					<!-- Servicing Content -->
<div class="eightcol block">
  <div class="pad-20 overflow-hidden">

    <div class="row mobile-hidden">
      <div class="twelvecol page-hdr" id="page-hdr-service" style="background: url(<?= site_url('assets/img/theme/page-hdr-service.jpg')?>) center top no-repeat;
background-size: cover;">
        <h1>Recovery and Breakdown</h1>
      </div>
    </div>

    <div class="clear"></div>

    <div class="twelvecol desktop-hidden">
      <h2>Recovery and Breakdown</h2>
    </div>
    <!-- Servicing -->
    <h3 id="service"><span aria-hidden="true" class=" -heart-2"></span>Recovery and Breakdown</h3>
    
    <p>
    A vehicle breakdown can be a stressful situation. Often mechanical failures can mean that a car needs to be taken off the road to a nearby garage for extensive repairs. 
    </p>
    <p>
    Best Car Trading recovery specialists goal is to ensure that your vehicle is safely relocated for further examination and that whatever repairs are required are carried out in the quickest possible time .
    </p>
    <div class="form">
        <p>
    Our online application is quick, simple and secure.<br> Once completed, one of our team will contact you straight back.
</p>

<?= form_open('recovery-form') ?>
   <?php if($this->session->flashdata('error')){ ?>
     <div class="twelvecol" style="padding: 5px; background: #ed2728; color: #fff;"><?= $this->session->flashdata('error') ?></div>
<?php } ?>
    <fieldset>
        <input type="hidden" name="form_type" value="recovery">

        <div class="row">
            <div class="threecol"><label>Recovery and Breakdown<span class="required"></span></label></div>
            <div class="ninecol last">
            <select name="recovery_type" id="" class="form-field">
                <option value="Vehicle Transportation">Vehicle Transportation</option>
                <option value="Accident Recovery">Accident Recovery</option>
                <option value="Garage Services">Garage Services</option>
                <option value="Vehicle Disposal">Vehicle Disposal</option>
            </select>
            </div>
        </div>
        
        <div class="row">
            <div class="threecol"><label>Name<span class="required">*</span></label></div>
            <div class="ninecol last"><input name="name" placeholder="Name (Required)" type="text" required></div>
        </div>

        <div class="row">
            <div class="threecol"><label>Contact No.<span class="required">*</span></label></div>
            <div class="ninecol last"><input name="contact_no" placeholder="Contact Number (Required)" type="text" required></div>
        </div>
        
        <div class="row">
            <div class="threecol"><label>Vehicle Registration Number<span class="required">*</span></label></div>
            <div class="ninecol last"><input name="v_reg_no" placeholder="Vehicle Registration No. (Required)" type="text" required></div>
        </div>
        
        <div class="row">
            <div class="threecol"><label>Your Location<span class="required"></span></label></div>
            <div class="ninecol last"><input name="location" placeholder="Post Code or Street Name" type="text"></div>
        </div>
        
        <div class="row">
            <div class="threecol"><label>Drop off Location<span class="required"></span></label></div>
            <div class="ninecol last"><input name="drop_location" placeholder="Post Code" type="text"></div>
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
    </fieldset>
    <?= form_close() ?>
    </div>
  </div>
</div>
<!-- // END Servicing Content -->


<!-- Servicing Sidebar -->
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
<!-- // END Servicing Sidebar -->
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
