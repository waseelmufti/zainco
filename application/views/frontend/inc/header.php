<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
    <!--[if gt IE 8]><!-->
    <!--<![endif]-->

    <title></title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/'); ?>style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/'); ?>custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/'); ?>slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/'); ?>slick-theme.css">
    <link rel="canonical" href="<?php echo site_url(); ?>">
    <link rel="icon" type="image/png" href="<?php echo site_url(" assets/img/ "); ?>favicon.png">
    <!--    <link rel="alternate" type="application/rss+xml" title="Globe Motors Feed" href="rss.php" />-->

   <script type="text/javascript" src="<?= site_url('assets/js/') ?>jquery.min.js"></script>
    <script type="text/javascript">
        window.onload = function() {
            var script = document.createElement('script');
            script.id = 'jquery';
            script.src = '<?php echo site_url("assets/js/"); ?>jquery-ui.min.js';

            if (msieversion() >= 9) {
                document.head.appendChild(script);
            } else if (msieversion() >= 3) {
                $(script).appendTo("body");
            } else {
                document.head.appendChild(script);
            }
            var script = document.createElement('script');
            script.id = 'formCaptcha';
            script.src = '<?php echo site_url("assets/js/"); ?>captcha_form.min.js';

            if (msieversion() >= 9) {
                document.head.appendChild(script);
            } else if (msieversion() >= 3) {
                $(script).appendTo("body");
            } else {
                document.head.appendChild(script);
                console.log("This is NOT Internet Explorer");
            }
        }

        function msieversion() {
            var ua = window.navigator.userAgent
            var msie = ua.indexOf("MSIE ")

            if (msie > 0) {
                return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)))
            } else {
                return 0
            }
        }

        function track_(obj) {
            $.post("quote_tracker.html", {
                href: obj.href
            });
        }

    </script>
    <script type="text/javascript">
        var RecaptchaOptions = {
            theme: 'custom'
        };

    </script>

    <!-- Google Webmaster -->
    <META name="google-site-verification" content="" />
    <!-- // END Google Webmaster -->



    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '<?php echo site_url("assets/js/"); ?>analytics.js', 'ga');
        ga('create', 'UA-64911382-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- // END Google Analytics -->

    <!-- Piwik -->
    <!-- <script type="text/javascript">
	var _paq = _paq || [];
	/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	_paq.push(["setCustomVariable", ["1","vehicle_id", "", "page"]]);
	_paq.push(['trackPageView']);
	_paq.push(['enableLinkTracking']);
	(function() {
		var u="//178.62.60.143/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', 1]);
		_paq.push(['idsite', '{SITE_DOMAIN}']);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	})();
</script> -->
    <!-- End Piwik Code -->


    <script>
        modelItems = [
            [6, 2984, 'A1(1)'],
            [6, 40, 'A6(1)'],
            [8, 1276, '1 SERIES(3)'],
            [8, 1204, '3 SERIES(4)'],
            [8, 1214, '5 SERIES(2)'],
            [8, 2724, 'X1(2)'],
            [8, 1333, 'X3(2)'],
            [8, 1238, 'X5(2)'],
            [25, 230, 'FOCUS(1)'],
            [25, 235, 'MONDEO(1)'],
            [25, 1475, 'S-MAX(1)'],
            [32, 3634, 'VELOSTER(1)'],
            [34, 2046, 'XF(1)'],
            [51, 2795, 'COUNTRYMAN(1)'],
            [51, 3691, 'HATCH COOPER(1)'],
            [55, 1883, 'QASHQAI(2)'],
            [60, 1608, '207(1)'],
            [84, 2202, 'SCIROCCO(1)'],
            [84, 2195, 'TIGUAN(1)'],
            [85, 1620, 'V50(1)'],
            [224, 2344, 'B CLASS(1)'],
            [224, 2402, 'C CLASS(2)'],
            [224, 2690, 'M CLASS(2)']
        ]

        function fillItems(intStart) {

            var makeSel = document.getElementById('make');
            var modelSel = document.getElementById('model');

            var a = modelItems;

            var b, c, d, intMake, intModel

            if (intStart > 0) {
                for (b = 0; b < a.length; b++) {
                    if (a[b][1] == intStart)
                        intModel = a[b][0];
                }

                for (c = 0; c < makeSel.length; c++) {
                    if (makeSel.options[c].value == intMake)
                        makeSel.selectedIndex = c;
                }
            }


            if (intMake == null)
                intMake = makeSel.options[makeSel.selectedIndex].value;

            modelSel.options.length = 0;

            modelSel.options[modelSel.options.length] = new Option('Any model', 0);

            for (d = 0; d < a.length; d++) {
                if (a[d][0] == intMake)
                    modelSel.options[modelSel.options.length] = new Option(a[d][2], a[d][1]);

                if (a[d][1] == intStart)
                    modelSel.selectedIndex = modelSel.options.length - 1;
            }


            try {
                var priceSel = document.getElementsByName('price')[0];
                priceSel.style.visibility = 'hidden';
            } catch (e) {
                //alert(e);	
            }
            try {
                var fuel_type = document.getElementsByName('fuel_type')[0];
                fuel_type.style.visibility = 'hidden';
            } catch (e) {
                //alert(e);
            }
        }

    </script>


</head>

<body id="index" class="index loc-0">

    <noscript>
  <div id="noscript-top">
  <div class="container">
    Warning: For full functionality of this site it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com/" target="_blank">instructions how to enable JavaScript in your web browser</a>.
  </div>
  </div>
</noscript>


    <!-- Page Wrapper -->
    <div itemscope itemtype="http://schema.org/AutoDealer" id="wrapper">
        <a id="top" title="Navigate to the top of the site"></a>
        <!-- Header -->

        <header id="header" class="clear-fix">

            <div class="header-top-bar">
                <div class="wrapper">
                    <div class="container">

                        <div class="fivecolx">
                            <div class="address mobile-hidden">
                                <p><span aria-hidden="true" class="fa fa-map-marker"></span> ---- ---, ------, --- ---</p>
                            </div>
                        </div>

                        <div class="sevencolx hdr-contact">
                            <div class="contact-box">

                                <ul class="telephone">
                                    <li><span class="fa fa-phone"></span> <a href="" title="Contact us">0123 4567890</a></li>
                                    <li><span class="fa fa-phone"></span> <a href="" title="Contact us">0123 4567890</a></li>
                                </ul>



                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="header-main">
                <div class="wrapper">
                    <div class="container">
                        <div class="row header-content">

                            <div class="sixcolx" id="hdr-logo">
                                <a href="index.php" title="Best Motors"><img src="<?= site_url('assets/img/')?>logo.jpg" class="responsive-img" alt="best motors" height="50" width="124"></a>
                            </div>
                            <div class="sixcolx mobile-hidden" id="hdr-promo">
                                <div class="est">
                                    Established Since <span>----</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation premier -->
            <div id="dropdown-navwrap">
                <div class="wrapper">
                    <div class="container page-nav">
                        <div class="row">
                            <div class="twelvecol dropdown-bar">
                                <div>
                                    <a class="toggleMenu desktop-hidden">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar one"></span>
                  <span class="icon-bar two"></span>
                  <span class="icon-bar three"></span>
                </a>
                                    <ul id="dropdown-nav" class="nav">
                                        <li class="n1 current"><a class="n1 current " href="<?= site_url() ?>" title="Home">Used Cars <span aria-hidden="true" class="icon icon-arrow-down"></span></a>
                                        </li>
                                        <li class="n2 "><a class="n2  " href="<?= site_url('showroom') ?>" title="Showroom">Car Servicing <span aria-hidden="true" class="icon icon-arrow-down"></span></a>
                                        </li>

                                        <li class="n4 "><a class="n4  parent" href="#" onclick="return false;" title="Vehicle Valuation">Vehicle Health <span aria-hidden="true" class="icon icon-arrow-down"></span></a>
                                            <ul>
                                                <li class="n2 "><a class="n1 " href="<?= site_url('sellcar') ?>" title="Looking to sell?">Check </a></li>

                                                <li class="n2 "><a class="n2 " href="<?= site_url('sellcar') ?>" title="Looking to sell?">Car Dignose </a></li>
                                            </ul>
                                        </li>
                                        <li class="n5 "><a class="n5  parent" href="#" onclick="return false;" title="Our Services">Sell Your Car <span aria-hidden="true" class="icon icon-arrow-down"></span></a>
                                            <!--<ul>
                                                <li class="n1 "><a class="n1 " href="<?= site_url('car-locator') ?>" title="Vehicle Sourcing">Vehicle Sourcing</a></li>
                                                <li class="n2 "><a class="n2 " href="<?= site_url('services') ?>" title="Servicing">Servicing</a></li>
                                            </ul>-->
                                        </li>
                                        <li class="n6 "><a class="n6  parent" href="#" onclick="return false;" title="About Us">Warrenty <span aria-hidden="true" class="icon icon-arrow-down"></span></a>
                                            <!--<ul>
                                                <li class="n1 "><a class="n1 " href="<?= site_url('about-us') ?>" title="About Us">About Us</a></li>
                                                <li class="n2 "><a class="n2 " href="<?= site_url('testimonials') ?>" title="Testimonials">Testimonials</a></li>
                                            </ul>-->
                                        </li>
                                        <li class="n7 "><a class="n7  " href="<?= site_url('contact') ?>" title="Contact">Break Down Recovery <span aria-hidden="true" class="icon icon-arrow-down"></span></a>
                                        </li>
                                        <li class="n7 "><a class="n7  " href="<?= site_url('contact') ?>" title="Contact">Part Exchange <span aria-hidden="true" class="icon icon-arrow-down"></span></a>
                                        </li>
                                        <li class="n7 "><a class="n7  " href="<?= site_url('contact') ?>" title="Contact">Contact <span aria-hidden="true" class="icon icon-arrow-down"></span></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- // Navigation -->

        </header>
        <!-- // Header -->
