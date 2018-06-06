<!-- Main Content -->
<div id="main-wrap">
  <script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script language="javascript">

  function doSort() {
      var sort = document.getElementById('sort');
      document.location = 'search_page0c17.html?&amp;sort='+sort.value;
  }

  function doSortBottom() {
    var sort = document.getElementById('sort_bottom');
    document.location = 'search_page0c17.html?&amp;sort='+sort.value;
  }

  //redbox additional

  function loadSearch(onrefresh, changed) {
    //get existing values
    var strmake;
    var strmodel;
    var strprice;
    var strbody;
    var strgearbox;
    var strfuel_type;
	var location_id;
    var url = document.URL;
    url = url.replace(/&/g,'<and>');

    var button_class = $("#button_class_hidden").val();

    if (onrefresh==0) {
      strmake = $("#make option:selected").val();
      strmodel = $("#model option:selected").val();
      strprice = $("#price option:selected").val();
      strbody = $("#body option:selected").val(); //body is reserved!!
      strgearbox = $("#gearbox option:selected").val();
      strfuel_type = $("#fuel_type option:selected").val();
	  location_id = $("#location_id").val();
      url ='nothing'; //no longer reliable
    } else {
      strmake = '-1';
      strmodel = '-1';
      strprice = '-1';
      strbody = '';
      strgearbox = '';
      strfuel_type = '';
      //url ='nothing'; //no longer reliable
    }

    if (changed==1) {
      url = 'nothing'; //no longer needed
    }

    if (onrefresh==1) {
      
    }
    $.ajax({
      type: "POST",
      url: "/ajax/loadSearch_type1.php",
      data: "make=" + strmake + "&model=" + strmodel + "&price=" + strprice + "&body=" + strbody + "&gearbox=" + strgearbox + "&fuel_type=" + strfuel_type + "&changed=" + changed + "&url=" + url + "&button_class=" + button_class + "&location_id=" + location_id,
      success: function(resp){
        $("#search-advanced").html(resp);
      },
      error: function(e){
        //alert('Error: loadSearch' + e);
      }
    });
  }

</script>

<!-- Advanced Search Form -->
  <!-- Advanced Search Form -->
<div class="breadcrumb clear-fix">

    <div class="wrapper">
        <div class="container">

            <ol class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li class="breadcrumb__listitem" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/">
        <span itemprop="name">Home</span>
    </a>
    <meta itemprop="position" content="1" />
</li><li class="breadcrumb__listitem" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="javascript:void(0)">
        <span itemprop="name">Used Cars</span>
    </a>
    <meta itemprop="position" content="2" />
</li>
            </ol>

        </div>
    </div>

</div>

<div class="row-block results-adv-search">
    <div class="container">
        <div class="row">

            <div class="container">
                <div id="advanced-sticky-wrap">
                    <div class="wrapper">

                        <div id="search-advanced" class="widget">
                            <form action="" method="get">
    <div class="row">
        <div class="threecol">
            <select name="make" id="make" onchange="loadSearch(0,1);  ">
                <option value="" selected="selected">Any Make</option>
            </select>
        </div>
        <div class="threecol">
            <select name="model" id="model" onchange="loadSearch(0,1);  ">
                <option value="" selected="selected">Any Model</option>
            </select>
        </div>
        <div class="threecol">
            <select name="price" id="price" onchange="loadSearch(0,1);  ">
                <option value="" selected="selected">Maximum Price</option>
            </select>
        </div>
        <div class="threecol last">
            <button type="reset" class="button green full mobile-hidden" onclick="resetSearch();">
                <span aria-hidden="true" class="icon-search"></span> Reset selections
            </button>
        </div>
    </div>
    <div class="row">

        <div class="threecol">
            <select name="body" id="body" onchange="loadSearch(0,1);">
                <option value="" selected="selected">Any Body Style</option>
            </select></div>
        <div class="threecol">
            <select name="gearbox" id="gearbox" onchange="loadSearch(0,1);  ">
                <option value="" selected="selected">Any Transmission</option>
            </select>
        </div>
        <div class="threecol">
            <select name="fuel_type" id="fuel_type" onchange="loadSearch(0,1);  ">
                <option value="" selected="selected">Any Fuel type</option>
            </select>
        </div>
        <div class="threecol last">
            <button type="button" class="button green full" onclick="submit();"><span aria-hidden="true" class="icon-search"></span> Search</button>
        </div>

    </div>

</form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- //Advanced Search Form -->
<!-- //Advanced Search Form -->

<input type="hidden" id="button_class_hidden" value="button green full"/>
<script>loadSearch(1,0);</script>

<div id="page-warrior">
  <div id="results-pg">
    <div id="results" class="veh-loc-1">
      <div class="">

        <!-- Filters & Webzation -->
        <div class="row-block results-filters-top">
          <div class="container">
            <div class="row">

              <div id="results-filters">
                <div class="container">

                  <div class="res-filt widget">
                    <div class="row">
                      <div class="pad-15 overflow-hidden">

                        <!-- Showing -->
                        <div class="threecol mobile-hidden">
                        	<span id="vehicle-search-showing-top"><span class="tablet-hidden">Showing </span><span><strong>1 - 10</strong> (of <strong>35</strong>)</span></span>
                        </div>

                        <!-- Sort -->
                        <div class="threecol" id="vehicle-search-sortform-top">
                          <form class="alpha" name="sortform" id="sortform" action="" method="GET">
                            <label class="alpha mobile-hidden tablet-hidden">Sort</label>
                            <SELECT id="sort" class="select" onChange="doSort()" NAME="sort"><OPTION SELECTED VALUE="h">Price (high to low)<OPTION VALUE="l">Price (low to high)<OPTION VALUE="m">Make/model<OPTION VALUE="nis">Latest Arrivals<OPTION VALUE="rr">Recently Reduced</SELECT>
                          </form>
                        </div>

                        <!-- Pagination -->
                        <div class="sixcol last" id="vehicle-search-pagination-top">
                          <ol class="pagenavi">
    <li><a rel="nofollow" href="" class="next" title="Next">&raquo;</a></li>
                    <li><a href="" >4</a></li>
                <li><a href="" >3</a></li>
                <li><a href="" >2</a></li>
                <li><a href="" class="active">1</a></li>
    <li><a rel="nofollow" href="" class="next" title="Previous">&laquo;</a></li>

</ol>
                        </div>

                      </div>
                    </div>
                  </div>



                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- // Filters & Webzation -->


        <!-- SEO Text -->
        <div id="results-meta" class="mobile-hidden">
          <div class="container">
            <section id="seo-text" class="row results-header">
              <h1></h1>


            </section>
          </div>
        </div>
        <!-- //SEO Text -->


        <!-- Main Body -->
        <div class="row">
          <div class="twelvecol">

            <!-- Super Banner -->
            <div class="row-block super-banner">
              <div class="wrapper">
                <div class="container">
                  <div class="row">

                       </div>
                    </div>
                </div>
            </div>
    		    <!-- End Super Banner -->

            <section class="results-vehicleresults" id="vehicle-search-results">
              <!-- Vehicle Listing -->
              <?php foreach( $cars as $car) {
                    $imgs = $this->car_model->get_imgs($car->id);
                ?>
                <div class="row-block listing  veh-loc-1 veh-odd">
                  <div class="container">
                    <div class="row">
                      <section class="container vehicle  veh-loc-1">
                        <div class="pad-10 overflow-hidden">
                          <!-- Section 1 -->
                          <div class="row section1">
                            <!-- Vehicle Image -->
                            <div class="fourcol">
                              <a href="#" title="<?php echo $car->title; ?>" class="vehicle-image">
                                <?php
                                  $img = isset($imgs[0]) ? $imgs[0]->image : '';
                                ?>
                                <img src="<?= site_url('/uploads/images/').$img ?>" alt="View our <?= $car->makeof .' '.$car->model ?>"></a>
                              <div class="button-block ">
                                <a href="" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> <?= count($imgs) ?> Images</a>
                                <a href="" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
                              </div>
                              <div class="clear"></div>
                              <div class="row">
                                <div class="twelvecol mobile-hidden dt-partners">
                                  <!--<div class="row">
                                    <div class="fourcol center">
                                      <img src="" alt="Partner" class="responsive-img">
                                    </div>
                                    <div class="fourcol center">
                                      <img src="" alt="Partner" class="responsive-img">
                                    </div>
                                    <div class="fourcol last center">
                                      <img src="" alt="Partner" class="responsive-img">
                                    </div>
                                  </div>-->
                                </div>
                              </div>
                            </div>
                            <!-- // Vehicle Image -->

                            <!-- Eightcol Vehicle Data -->
                            <div class="eightcol last">
                              <!-- Title -->
                              <div class="eightcol vehicle-title">
                                <h3>
                                  <a href="" title="View Vehicle Details"><?= $car->title?></a>
                                </h3>
                                <cite class="mobile-hidden"></cite>
                                <p class="price-save"><?php echo ($car->discount) ? "<span class='price-was'>".$car->price."</span> save Rs.".$car->discount : '' ?></p>
                              </div>

                              <!-- Price -->
                              <div class="fourcol last right">
                                <div class="price">
                                   <span class="price-is">Rs. <?php
                                   $newPrice = $car->price - $car->discount;
                                   echo ($car->discount)? $newPrice : $car->price; ?><br>
                                     <!-- <span class="results_monthly_payment">
                                       <span class="row results-finance-from">
                                         <a rel="nofollow" href="" id="nop_vehicle_id_1200339">Finance From £348.44 <span>p/m*</span></a>
                                       </span>
                                     </span> -->
                                   </span>
                                </div>
                              </div>

                              <div class="clear"></div>

                              <div class="row">
                                <div class="twelvecol desktop-hidden mob-partners">
                                  <div class="row">
                                    <div class="fourcol center">
                                      <img src="" alt="Partner" class="responsive-img">
                                    </div>
                                    <div class="fourcol center">
                                      <img src="" alt="Partner" class="responsive-img">
                                    </div>
                                    <div class="fourcol last center">
                                      <img src="" alt="Partner" class="responsive-img">
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="clear"></div>
                              <!-- Meta Info -->
                             <div class="row">


                <div class="threecol spec-one mobile-half-col">
                  <div class="spec one">
                    <div class="pad-10-top-bottom">
                      <ul>
                        <li><span aria-hidden="true" class="icon-mileage"></span> <?= $car->mileage ?> miles</li>
                        <li><span aria-hidden="true" class="icon-color-palette"></span> <?= $car->color ?></li>
                        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> <?= $car->fuel_type ?></li>
                        <li><span aria-hidden="true" class="icon-transmission"></span> <?= $car->transmission ?></li>
                        <li><span aria-hidden="true" class="icon-capacity"></span> <?= $car->engine_capacity ?> L</li>
                      </ul>
                    </div>
                  </div>
                 </div>

                 <div class="fourcol spec-two mobile-half-col">
                  <div class="spec two">
                    <div class="pad-10-top-bottom">
                      <ul>
                        <li><span aria-hidden="true" class="icon-road"></span> <?= $car->mpg ?> Avg. MPG</li>
                        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: <?= $car->ins_grp ?></li>
                        <li><span aria-hidden="true" class="icon-upload"></span> <?= $car->co_emission ?> CO² (g/km)</li>
                        <!-- <li><span aria-hidden="true" class="icon-tax12"></span> £315.00 12m Tax</li>
                        <li><span aria-hidden="true" class="icon-tax6"></span> £173.25 6m Tax</li> -->
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="fivecol spec-three last mobile-hidden">
                  <div class="spec ticks">
                    <div class="pad-10-top-bottom">
                      <ul>
                        <li>
                          <span aria-hidden="true" class="icon-checkmark"></span> <?= $car->fea_1 ?></li>
                          <li><span aria-hidden="true" class="icon-checkmark"></span> <?= $car->fea_2 ?></li>
                          <li><span aria-hidden="true" class="icon-checkmark"></span> <?= $car->fea_3 ?></li>
                          <li><span aria-hidden="true" class="icon-checkmark"></span> <?= $car->fea_4 ?></li>
                          <li><span aria-hidden="true" class="icon-checkmark"></span> <?= $car->fea_5 ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- // END Meta Info -->
              <div class="clear"></div>
              <div class="row">
                <div class="container">
                  <div class="results-btn-add threecol mobile-hidden">
                    <button type="button" class="button full green addfavourite" id="favourite-1200339" title="Favourite">Add to Favourites</button>
                  </div>
                  <div class="results-btn-compare fourcol mobile-hidden">
                    <a href="compare.html" class="button white full" title="Compare">View Favourites</a>
                  </div>
                  <!-- Mobile Only -->
                  <!-- <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div> -->
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="<?php echo site_url().'showroom/'.$car->id ?>" class="button black full" title="View Vehicle Details">
                      <span aria-hidden="true" class="icon icon-search"></span> View Vehicle
                    </a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->
          <!-- Section 4 -->
          <!-- <div class="row section4 mobile-hidden">
            <div class="twelvecol"> -->

              <!-- Desktop & iPad Finance Table -->

              <!-- <div class="twelvecol mobile-hidden">
                  <div class="finance-table-wrap">
                    <table class="finance-table" id="finance_1200339">
                      <tbody><tr>

                      </tr>
                      <tr>
                        <th></th>
                        <th>Deposit</th>
                        <th>Balance</th>
                        <th>Fees</th>
                        <th>Total Payable</th>
                        <th>Term</th>
                        <th class="">Fixed Rate</th>
                        <th>Representative APR</th>
                        <th>1st Payment</th>
                        <th>Monthly Payment</th>
                        <th>Final Payment</th>
                      </tr>
                      <tr class="hp">
                        <td><strong>HP</strong></td>
                        <td id="td_finance_deposit">£1499.00</td>
                        <td id="td_finance_balance">£13488.00</td>
                        <td id="td_finance_fees">£298.00</td>
                        <td id="td_finance_total_inc_deposit">£18522.12</td>
                        <td id="td_finance_term">48 mths</td>
                        <td id="td_finance_rate" class="">6.00%</td>
                        <td id="td_finance_apr">11.7%</td>
                        <td id="td_finance_first_payment">£497.44</td>
                        <td id="td_finance_monthly_payments">£348.44 <span>p/m*</span> x 46</td>
                        <td id="td_finance_final_payment">£497.44</td>
                      </tr>
                    </tbody></table>
                  </div>

                </div> -->
                <!-- // END Desktop & iPad Finance Table -->


                <!-- Mobile Finance Table -->
                <!-- <div class="twelvecol desktop-hidden">
                  <div class="finance-table-wrap">

                    <table class="finance-table">
                      <tbody><tr>
                        <th>Hire Purchase</th><td></td>
                      </tr>

                      <tr>
                        <th>Deposit</th><td id="tdmb_finance_deposit">£1499.00</td>
                      </tr>

                      <tr>
                        <th>Balance</th><td id="tdmb_finance_balance">£13488.00</td>
                      </tr>

                      <tr>
                        <th>Fees</th><td id="tdmb_finance_fees">£298.00</td>
                      </tr>

                      <tr>
                        <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">£18522.12</td>
                      </tr>

                      <tr>
                        <th>Term</th><td id="tdmb_finance_term">48 mths</td>
                      </tr>

                      <tr>
                        <th class="">Fixed Rate</th><td id="tdmb_finance_rate" class="{HIDE_FINANCE_TERM}">6.00%</td>
                      </tr>

                      <tr>
                        <th>Representative APR</th><td id="tdmb_finance_apr">11.7%</td>
                      </tr>

                      <tr>
                        <th>1st Payment</th><td id="tdmb_finance_first_payment">£497.44</td>
                      </tr>

                      <tr>
                        <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">£348.44 <span>p/m*</span> x 46</td>
                      </tr>

                      <tr>
                        <th>Final Payment</th> <td id="tdmb_finance_final_payment">£497.44</td>
                      </tr>
                    </tbody></table>

                    <!-- Don't remove - opm -->
                    <!-- <div class="row">
                      <div class="twelvecol" id="fin-table-apply-mob">
                        <div class="pad-20-top overflow-hidden">
                          <a href="finance95d7.html?vehicle_id=1200339" title="Apply for finance" class="button full green">Apply For Finance</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div> -->
                <!-- // END Mobile Finance Table -->

                              <!-- <div class="twelvecol fin-promo mobile-hidden">
                  <em>
                    Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
                    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
                    <a href="used-bmw-x5-walsall-west-midlands-1200339.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
                   </em>
                </div> -->

                <!--<div class="twelvecol fin-promo mobile-hidden">
                  <em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-bmw-x5-walsall-west-midlands-1200339#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-bmw-x5-walsall-west-midlands-1200339#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
                </div>-->

                            <!-- </div>
                          </div> -->
                          <!-- // Section 4 -->

                        </div>
                      </section>


                    </div>
                  </div>
                </div>
              <?php } ?>
              <!-- end -->

            </section>
			<div id = "loading_div" style="display:none;"></div>

          </div>
        </div>
        <!-- // Main Body -->

        <!-- Filters & Webzation -->
        <div id="results-filters-foot">
          <div class="container">

            <div class="res-filt widget">
              <div class="row">
                <div class="pad-15 overflow-hidden">

                  <!-- Showing -->
                  <div class="threecol mobile-hidden">
                  		<span id="vehicle-search-showing-bottom"><span class="tablet-hidden">Showing </span><span><strong>1 - 10</strong> (of <strong>35</strong>)</span></span>
                  </div>

                  <!-- Sort -->
                  <div class="threecol" id="vehicle-search-sortform-bottom">
                    <form class="alpha" name="sortform" id="sortform" action="https://www.globemotorswalsall.co.uk/search_page.php?" method="GET">
                      <label class="alpha mobile-hidden tablet-hidden">Sort</label>
                      <SELECT id="sort_bottom" class="select" onChange="doSortBottom()" id="sort" class="select" onChange="doSort()" NAME="sort"><OPTION SELECTED VALUE="h">Price (high to low)<OPTION VALUE="l">Price (low to high)<OPTION VALUE="m">Make/model<OPTION VALUE="nis">Latest Arrivals<OPTION VALUE="rr">Recently Reduced</SELECT>
                    </form>
                  </div>

                  <!-- Pagination -->
                  <div class="sixcol last" id="vehicle-search-pagination-bottom">
                    <ol class="pagenavi">
    <li><a rel="nofollow" href="search_pagede11.html?sort=h&amp;p=4" class="next" title="Next">&raquo;</a></li>
                    <li><a href="search_pagede11.html?sort=h&amp;p=4" >4</a></li>
                <li><a href="search_page1f84.html?sort=h&amp;p=3" >3</a></li>
                <li><a href="search_page3464.html?sort=h&amp;p=2" >2</a></li>
                <li><a href="search_pagebf0a.html?sort=h&amp;p=1" class="active">1</a></li>

    <li><a rel="nofollow" href="search_pagebf0a.html?sort=h&amp;p=1" class="next" title="Previous">&laquo;</a></li>

</ol>
                  </div>

                </div>
              </div>
            </div>




          </div>
        </div>
        <!-- // Filters & Webzation -->

        <!-- Webzation Finance Test -->
        <div id="webzation-text" class="mobile-hiddeb">
          <div class="container">
            <div class="widget">
              <div class="twelvecol">
                <div class="pad-15">

                  <!-- SEO Text -->
                  <div id="results-meta" class="mobile-hidden">
                    <div class="container">
                      <div id="seo-text-replace" class="row results-header">

                      </div>
                    </div>
                  </div>
                  <!-- //SEO Text -->

                  <h1>Used cars for sale in Walsall</h1>

<p>Please view the latest range of quality used cars for sale from Globe Motors.</p>

<p>Every effort has been made to ensure the accuracy of the above vehicles information but errors may occur. Please check with a salesperson.</p>
<p>The representative finance examples shown above are for illustrative purposes only. Fees, rates and monthly payments may change subject to underwriting decision.</p>
<p><strong>Representative APR See Above Examples</strong></p>
<p><em>*Fees are already accounted for within the payments displayed and are included within the total amount payable.</em></p>
<p><em>Finance is available to UK residents aged 18 years or older, subject to status. Terms &amp; Conditions apply. Indemnities may be required. Other finance offers may be available but cannot be used in conjunction with this offer. We work with a number of carefully selected credit providers who may be able to offer you finance for your purchase, commission may be received. We are only able to offer finance products from these providers. Postal Address: <strong>Globe Motors, Darlaston Road, Walsall, West Midlands WS2 9SG</strong>, find contact details <a href="contact.html" title="Contact Details">here.</a></em></p>


                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // Webzation Finance Test -->

      </div>
    </div>
  </div>
</div>
<!-- // END Page Warrior -->


<!-- Extra Scripts: For location based Nav Current Class fixes -->



<!-- Video Modal Window-->
	<!--WEB Z VIDEO. NO HTML REQUIRED-->
<!-- //Video Modal Window -->
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
