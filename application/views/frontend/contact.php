<div id="main-wrap">
  <div id="page-warrior">
	<div id="contact-pg">
	  <div class="container">
	    <div class="wrapper">
	      <div class="row">
	      	<!-- Contact Info -->
<div class="twelvecol block">
  <div class="row">

    <div class="twelvecol">
      <div class="pad-20 overflow-hidden">
        <h1>Contact Globe Motors</h1>
      </div>
    </div>

    <!-- Contact Widget -->
    <div class="fourcol">
      <div class="row">
        <div class="contact-widget">
          <div class="pad-20 overflow-hidden">

            <h3><span aria-hidden="true" class="icon icon-location"></span> Address</h3>
            <p><strong>Globe Motors</strong></p>
            <address>Darlaston Road<br>Walsall<br>West Midlands<br>WS2 9SG<br></address>

          </div>
        </div>
      </div>
    </div>


    <!-- Contact Widget -->
    <div class="fourcol">
  <div class="row">
    <div class="contact-widget">
      <div class="pad-20 overflow-hidden">

        <h3><span aria-hidden="true" class="icon icon-phone"></span> Contact</h3>
        <p>Why not contact us directly?</p>

        <div class="contact-box">
          <ul id="get-in-touch">
            <li class="mobile-hidden"><span aria-hidden="true" class="icon icon-phone-2"></span> <a href="contact.html">0121 5262220</a></li>
<li class="desktop-hidden"><span aria-hidden="true" class="icon icon-phone-2"></span> <a href="tel:01215262220">01215262220</a></li>

            <li class="mobile-hidden"><span aria-hidden="true" class="icon icon-mobile"></span> <a href="contact.html">07944 706957</a></li>

            <li class="mobile-hidden"><span aria-hidden="true" class="desktop-hidden mobile-hidden desktop-hidden"></span> <a href="contact.html"></a></li>
<li class="desktop-hidden"><span aria-hidden="true" class="desktop-hidden mobile-hidden desktop-hidden"></span> <a href="tel:"></a></li>

            <li><span aria-hidden="true" class="icon icon-mail"></span> <a href="mailto:" title="Email Us">Email Us</a></li>

          </ul>
        </div>



      </div>
    </div>
  </div>
</div>

    <!-- Contact Widget -->

    <!-- Contact Widget -->
    <div class="fourcol last">
      <div class="row">
        <div class="contact-widget">
          <div class="pad-20 overflow-hidden">

            <h3><span aria-hidden="true" class="icon icon-calendar"></span> Open Times</h3>

            <ul class="row open-times">
              <li class="twelvecol"><div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Mon</div><div class="open-times">09:00 - 18:00</div></li>
              <li class="twelvecol"><div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Tue</div><div class="open-times">09:00 - 18:00</div></li>
              <li class="twelvecol"><div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Wed</div><div class="open-times">09:00 - 18:00</div></li>
              <li class="twelvecol"><div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Thu</div><div class="open-times">09:00 - 18:00</div></li>
              <li class="twelvecol"><div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Fri</div><div class="open-times">09:00 - 18:00</div></li>
              <li class="twelvecol"><div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Sat</div><div class="open-times">09:00 - 17:00</div></li>
              <li class="twelvecol"><div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Sun</div><div class="open-times">By Appointment</div></li>
              <li class="twelvecol  "><div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Bank Hol.</div><div class="open-times">By Appointment</div></li>
            </ul>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- // END Contact Info -->


<!-- Form & Map -->
<div class="twelvecol block">
	<div class="row">

    <!-- Enquiry Form -->
    <div class="fourcol mobile-hidden">
      <div class="contact-widget">
        <div class="pad-20 overflow-hidden">
          <a id="email-us"></a>
<?php echo form_open('contact-form', array('class' => '_form')); ?>
  <input type="hidden" name="subject" value="contact_form">

  <fieldset title="Contact Form">
    <h3><span aria-hidden="true" class="icon icon-mail"></span> Email Us</h3>

<!--  Show Success or Error Message -->
    <?php if($this->session->flashdata('success')) {?>
    <div class="twelvecol" style="padding: 5px 5px; background: rgba(67, 188, 71, 0.7); color: #fff;"><?= $this->session->flashdata('success') ?></div>
  <?php } ?>
  <?php if($this->session->flashdata('error')) {?>
  <div class="twelvecol" style="padding: 5px; background: rgba(242, 36, 36, 0.7); color: #fff;"><?= $this->session->flashdata('error') ?></div>
<?php } ?>
    <div class="row">
      <div class="twelvecol"><input size=40 name="name" value="Name" placeholder="Name" type="text" required></div>
    </div>
    <div class="row">
      <div class="twelvecol"><input size=40 name="phone" value="Tel / Mob" placeholder="Tel / Mob" type="text"></div>
    </div>
    <div class="row">
      <div class="twelvecol"><input size=40 name="email" value="Email" placeholder="Email" type="text" required></div>
    </div>
    <div class="row">
      <div class="twelvecol"><textarea rows=5 cols=40 name="message" placeholder="Enter your enquiry">Enter your enquiry</textarea></div>
    </div>


    <!-- CAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <div class="row">
    <div class="twelvecol">
      <div class="g-recaptcha" data-sitekey="6Le7RFsUAAAAAPXnED-n8tIogLAF30sl5YgWxrC_"></div>
      <noscript>
      <div>
        <div style="width: 302px; height: 422px; position: relative;">
          <div style="width: 302px; height: 422px; position: absolute;">
            <iframe src="https://www.google.com/recaptcha/api/fallback?k=6Le7RFsUAAAAAPXnED-n8tIogLAF30sl5YgWxrC_"
                    frameborder="0" scrolling="no"
                    style="width: 302px; height:422px; border-style: none;">
            </iframe>
          </div>
        </div>
        <div style="width: 300px; height: 60px; border-style: none; bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px; background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
          <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                       class="g-recaptcha-response"
                       style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;" >
          </textarea>
        </div>
      </div>
      </noscript>
    </div>
    </div>
    <!-- //CAPTCHA -->


    <div class="row">
      <div class="twelvecol"><input type="submit" value="Send"></div>
    </div>
  </fieldset>

<?php echo form_close(); ?>
        </div>
      </div>
    </div>
    <!-- // Enquiry Form -->

    <!-- Google Map -->
    <div class="eightcol last">
      <div class="contact-widget">
        <div class="pad-20 overflow-hidden">
          <h3><span aria-hidden="true" class="icon icon-location"></span> Map</h3>
          <div class="flexible-frame">
            <iframe class="contact-map" src="google/google_map7f3a.html?id=1574&amp;api_key=AIzaSyCGuNIIRmhgIuzO76NWGpMnCMSj5nu5pm8"></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- // Google Map -->

  </div>
</div>
<!-- // END Form & Map -->
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
