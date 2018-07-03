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
        <h1>Contact Best Motors</h1>
      </div>
    </div>

    <!-- Contact Widget -->
    <div class="fourcol">
      <div class="row">
        <div class="contact-widget">
          <div class="pad-20 overflow-hidden">

            <h3><span aria-hidden="true" class=""></span> Address</h3>
            <p><strong>Best Motors</strong></p>
            <address>----- Road<br>-----<br>-------<br>-- ----<br></address>

          </div>
        </div>
      </div>
    </div>


    <!-- Contact Widget -->
    <div class="fourcol">
  <div class="row">
    <div class="contact-widget">
      <div class="pad-20 overflow-hidden">

        <h3><span aria-hidden="true" class=""></span> Contact</h3>
        <p>Why not contact us directly?</p>

        <div class="contact-box">
          <ul id="get-in-touch">
            <li class="mobile-hidden"><span aria-hidden="true" class=""></span> <a href="#">0123 456789</a></li>
<li class="desktop-hidden"><span aria-hidden="true" class=""></span> <a href="tel:0123456789">0123456789</a></li>

            <li class="mobile-hidden"><span aria-hidden="true" class=""></span> <a href="#">0012 3456789</a></li>

            <li class="mobile-hidden"><span aria-hidden="true" class="desktop-hidden mobile-hidden desktop-hidden"></span> <a href="#"></a></li>
<li class="desktop-hidden"><span aria-hidden="true" class="desktop-hidden mobile-hidden desktop-hidden"></span> <a href="tel:"></a></li>

            <li><span aria-hidden="true" class=""></span> <a href="mailto:" title="Email Us">Email Us</a></li>

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
<?php echo form_open('contact-form', array('class' => 'site_form')); ?>
  <input type="hidden" name="subject" value="contact_form">

  <fieldset title="Contact Form">
    <h3><span aria-hidden="true" class=""></span> Email Us</h3>

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
    
    <div class="row">
            <div class="threecol"><label>Security</label></div>
            <div class="ninecol last">

                <div id="recaptcha_widget">

                </div>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit Enquiry" class="button black full">
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
          <h3><span aria-hidden="true" class=""></span> Map</h3>
          <div class="flexible-frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11892.678581556853!2d-71.402593!3d41.824645!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e4453c442f5b9f%3A0x22d5b1cf16b79db7!2s21+Brown+St%2C+Providence%2C+RI+02906%2C+USA!5e0!3m2!1sen!2s!4v1528404802498" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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

<meta itemprop="telephone" content="0123 4567890">
<meta itemprop="email" content="bestmotors@hotmail.co.uk">

>
</span>
</div>
