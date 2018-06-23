<footer>
    <div class="row-block foot-head">
        <div class="wrapper">
            <div class="container">
                <div class="twelvecol">
                    <a href="#top" id="toplink" class="scrollToTop" title="Top"><span aria-hidden="true" class="icon icon-arrow-up"></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row-block foot-main">
        <div class="wrapper">
            <div class="container">


                <div class="fourcol get-in-touch">
                    <h2>Get In Touch</h2>
                    <div class="foot-contact">
                        <p>Why not talk to us directly by giving us a call or sending us an email.</p>
                        <ul>
                            <li><span class="fa fa-phone"></span> <a href="#" title="Contact us">0123 4567890</a></li>
                            <li><span class="fa fa-phone"></span> <a href="#" title="Contact us">0123 4567890</a></li>
                            <li><span class="fa fa-envelope"></span> <a href="mailto:bestmotors@hotmail.co.uk" title="Contact us">Email us</a></li>
                        </ul>

                    </div>
                </div>


                <div class="fourcol get-directions">

                    <h2>Get Directions</h2>
                    <p><strong>Best Motors</strong></p>
                    <ul class="address">
                        <li>----- Road,</li>
                        <li>-----,</li>
                        <li>---------,</li>
                        <li>-------</li>
                    </ul>

                    <div class="get-directions cf">

                        <form action="https://maps.google.com/maps" method="get" target="_blank" id="get-directions">
                            <label>Enter Postcode</label>
                            <input type="text" name="saddr" />
                            <input type="hidden" name="daddr" value="Best Motors,Darlaston Road,Walsall,West Midlands" />
                            <input type="submit" value="Get directions" />
                        </form>


                    </div>

                </div>

                <div class="fourcol opening-times last">
                    <h2>Opening Times</h2>
                    <ul class="row open-times">
                        <li class="twelvecol">
                            <div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Mon</div>
                            <div class="open-times">09:00 - 18:00</div>
                        </li>
                        <li class="twelvecol">
                            <div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Tue</div>
                            <div class="open-times">09:00 - 18:00</div>
                        </li>
                        <li class="twelvecol">
                            <div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Wed</div>
                            <div class="open-times">09:00 - 18:00</div>
                        </li>
                        <li class="twelvecol">
                            <div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Thu</div>
                            <div class="open-times">09:00 - 18:00</div>
                        </li>
                        <li class="twelvecol">
                            <div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Fri</div>
                            <div class="open-times">09:00 - 18:00</div>
                        </li>
                        <li class="twelvecol">
                            <div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Sat</div>
                            <div class="open-times">09:00 - 17:00</div>
                        </li>
                        <li class="twelvecol">
                            <div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Sun</div>
                            <div class="open-times">By Appointment</div>
                        </li>
                        <li class="twelvecol  ">
                            <div class="open-day"><span aria-hidden="true" class="icon icon-calendar"></span> Bank Hol.</div>
                            <div class="open-times">By Appointment</div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="row-block foot-bottom">
        <div class="wrapper">
            <div class="container">
                <div class="row">

                    <div class="sixcol">

                        <ul class="legal-one">
                            <li><a rel="nofollow" href="cookie_policy.html" title="Cookie Policy">Cookies</a></li>
                            <li><a rel="nofollow" href="terms.html" title="Terms and Conditions">Terms &amp; Conditions</a></li>
                            <li><a href="sitemap.html" title="Sitemap">Sitemap</a></li>
                        </ul>

                    </div>

                    <div class="sixcol last">
                        <div class="twelvecol">
                            <ul class="legal-two">
                                <li>&nbsp;VAT No. 1--------</li>
                                <li>Company No. -------</li>
                            </ul>
                        </div>
                    </div>

                    <div class="twelvecol">


                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>




<!-- Google Libraries API -->
<script defer type="text/javascript" src="<?= site_url('assets/js/') ?>slick.min.js"></script>
<!--<script type="text/javascript" src="<?= site_url('assets/js/') ?>jquery.captcha.basic.min"></script>-->
<script>
    $('document').ready(function() {

        $('.new-slider').slick({
            arrows: false,
            dots: false,
            speed: 2000,
            autoplay: true,
            slidesToScroll: 1,
            //autoplaySpeed: 2000,
        });

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 10,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: true,
            centerMode: true,
            focusOnSelect: true
        });
        $( ".datepicker" ).datepicker();
        $('._form').captcha();
    });

</script>
<script type="text/javascript" src="<?= site_url('assets/js/') ?>jquery.plugins-min.js"></script>
<script type="text/javascript" src="<?= site_url('assets/js/') ?>jquery.custom-config-min.js"></script>
<script type="text/javascript" src="<?= site_url('assets/js/') ?>jquery.config-min.js"></script>
<script type="text/javascript" src="<?= site_url('assets/js/') ?>premier-nav.js"></script>
<script src="<?= site_url('assets/js/') ?>jquery-ui.min.js"></script>
<script src="<?= site_url('assets/js/') ?>jquery.ui.touch-punch.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?= site_url('assets/js/') ?>addthis_widget.js#pubid=ra-56efd8ffeb6fa71f"></script>


<div id="wz-overlay">
    <div id="wz-o-content"><span class="icon icon-spin" aria-hidden="true"></span></div>
</div>




<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Walsall",
            "postalCode": "WS2 9SG",
            "streetAddress": "Darlaston Road , West Midlands"
        },
        "email": ""
    }

</script>




<script type="text/javascript">
    WebFontConfig = {
        google: {
            families: ['Open Sans:400,600,700', 'Cabin:400,500,700']
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = '<?= site_url("assets/js/") ?>/webfont.js';
        wf.type = 'text/javascript';
        wf.defer = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();

</script>
</body>

</html>
