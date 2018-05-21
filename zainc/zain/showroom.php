<?php include 'header.php';?>








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
      $("#search-advanced").html('<div class="row"><br/><center>Loading . . . . </center><br/></div>');
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
<div class="row-block results-adv-search">
  <div class="container">
    <div class="row">

      <div class="container">
        <div id="advanced-sticky-wrap">
          <div class="wrapper">

            <div id="search-advanced" class="widget">
            
            </div>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
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
                          <form class="alpha" name="sortform" id="sortform" action="https://www.globemotorswalsall.co.uk/search_page.php?" method="GET">
                            <label class="alpha mobile-hidden tablet-hidden">Sort</label>
                            <SELECT id="sort" class="select" onChange="doSort()" NAME="sort"><OPTION SELECTED VALUE="h">Price (high to low)<OPTION VALUE="l">Price (low to high)<OPTION VALUE="m">Make/model<OPTION VALUE="nis">Latest Arrivals<OPTION VALUE="rr">Recently Reduced</SELECT>
                          </form>
                        </div>
              
                        <!-- Pagination -->
                        <div class="sixcol last" id="vehicle-search-pagination-top"> 
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
<div class="row-block listing  veh-loc-1 veh-odd">
  <div class="container">
    <div class="row">


      <section class="container vehicle  veh-loc-1">
        <div class="pad-10 overflow-hidden">

          <!-- Section 1 -->
          <div class="row section1">

            <!-- Vehicle Image -->
          	<div class="fourcol">
            	<a href="used-bmw-x5-walsall-west-midlands-1200339.html" title="2009 09 BMW X5 3.0 XDRIVE30D M SPORT 5d AUTO 232 BHP" class="vehicle-image"><img src="../images.clickdealer.co.uk/vehicles/1200/1200339/full/13599614.jpg" alt="View our BMW X5" /></a>
              <div class="button-block">
                <a href="used-bmw-x5-walsall-west-midlands-1200339.html" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> 18 Images</a>
                <a href="used-bmw-x5-walsall-west-midlands-1200339.html" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
              </div>

              <div class="clear"></div>

              <div class="row">
              	<div class="twelvecol mobile-hidden dt-partners">
                	<div class="row">
            		    
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Vehicle Image -->

            <!-- Eightcol Vehicle Data -->
          	<div class="eightcol last">
              <!-- Title -->
              <div class="eightcol vehicle-title">
          			<h3><a href="used-bmw-x5-walsall-west-midlands-1200339.html" title="View Vehicle Details">2009 09 BMW X5 3.0 XDRIVE30D M SPORT 5d AUTO 232 BHP</a></h3>
                <cite class="mobile-hidden"></cite>
                <p class="price-save"><span class="price-was">was &pound;15,495</span> save &pound;508!</p>
              </div>

            	<!-- Price -->
              <div class="fourcol last right">
                <div class="price">
            	     <span class="price-is">&pound;14,987<br /><span class="results_monthly_payment"><span class="row results-finance-from">
	<a rel="nofollow" href="used-bmw-x5-walsall-west-midlands-1200339.html#tabs-here" id="nop_vehicle_id_1200339">Finance From &pound;348.44 <span>p/m*</span></a>
</span>
</span></span>
                </div>
				
              </div>

              <div class="clear"></div>


              <div class="row">
              	<div class="twelvecol desktop-hidden mob-partners">
                	<div class="row">
            				
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                	</div>
                </div>
              </div>


              <div class="clear"></div>

				      <!-- Meta Info -->
				     <div class="row">

					      <!--
                <div class="threecol spec-one mobile-half-col">
					        <div class="spec one">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-mileage"></span> 98000 Miles</li>
					              <li><span aria-hidden="true" class="icon-color-palette"></span> Grey</li>
					              <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
					              <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
					              <li><span aria-hidden="true" class="icon-capacity"></span> 3.0 L</li>
					            </ul>
					          </div>
					        </div>
					       </div>

					       <div class="fourcol spec-two mobile-half-col">
					        <div class="spec two">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-road"></span> 34.9 Avg. MPG</li>
					              <li><span aria-hidden="true" class="icon-insurance"></span> Group 44 Ins.</li>
					              <li><span aria-hidden="true" class="icon-upload"></span> 214 CO&sup2; (g/km)</li>
					              <li><span aria-hidden="true" class="icon-tax12"></span> &pound;315.00 12m Tax</li>
					              <li><span aria-hidden="true" class="icon-tax6"></span> &pound;173.25 6m Tax</li>
					            </ul>
					          </div>
					        </div>
					      </div>-->

                <!-- Meta Info -->
<div class="threecol spec-one mobile-half-col">
  <div class="spec one">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-mileage"></span> 98000 miles</li>
        <li><span aria-hidden="true" class="icon-color-palette"></span> Grey</li>
        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
        <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
        <li><span aria-hidden="true" class="icon-capacity"></span> 3.0 L</li>
      </ul>
    </div>
  </div>
 </div>
 
 <div class="fourcol spec-two mobile-half-col">
  <div class="spec two">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-road"></span> 34.9 Avg. MPG</li>
        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: 44</li>
        <li><span aria-hidden="true" class="icon-upload"></span> 214 CO&sup2; (g/km)</li>
        <li><span aria-hidden="true" class="icon-tax12"></span> &pound;315.00 12m Tax</li>
        <li><span aria-hidden="true" class="icon-tax6"></span> &pound;173.25 6m Tax</li>
      </ul>
    </div>
  </div>
</div>



					      <div class="fivecol spec-three last mobile-hidden">
					        <div class="spec ticks">
					          <div class="pad-10-top-bottom">
					            <ul>
                        <li><span aria-hidden="true" class="icon-checkmark"></span> Electric Windows - Front/Rear</li><li><span aria-hidden="true" class="icon-checkmark"></span> Ashtray/Lighter</li><li><span aria-hidden="true" class="icon-checkmark"></span> Chassis - Sport</li><li><span aria-hidden="true" class="icon-checkmark"></span> Seat Height Adjustment - Electric Front/Driver Memory</li><li><span aria-hidden="true" class="icon-checkmark"></span> Spare Wheel - Unspecified</li>
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
                  <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="used-bmw-x5-walsall-west-midlands-1200339.html#tabs-here" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div>
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="used-bmw-x5-walsall-west-midlands-1200339.html" class="button black full" title="View Vehicle Details"><span aria-hidden="true" class="icon icon-search"></span> View Vehicle</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->


          <!-- Section 4 -->
          <div class="row section4 mobile-hidden">

          	<div class="twelvecol">
            	<!-- Desktop & iPad Finance Table -->
<div class="twelvecol mobile-hidden">
	<div class="finance-table-wrap">
		<table  class="finance-table" id="finance_1200339">
			<tr>
				
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
		    <td id="td_finance_deposit">&pound;1499.00</td>
		    <td id="td_finance_balance">&pound;13488.00</td>
		    <td id="td_finance_fees">&pound;298.00</td>
		    <td id="td_finance_total_inc_deposit">&pound;18522.12</td>
		    <td id="td_finance_term">48 mths</td>
		    <td id="td_finance_rate" class="">6.00%</td>
		    <td id="td_finance_apr">11.7%</td>
		    <td id="td_finance_first_payment">&pound;497.44</td>
		    <td id="td_finance_monthly_payments">&pound;348.44 <span>p/m*</span> x 46</td>
		    <td id="td_finance_final_payment">&pound;497.44</td>
		  </tr>
		</table>
	</div>

</div>
<!-- // END Desktop & iPad Finance Table -->


<!-- Mobile Finance Table -->
<div class="twelvecol desktop-hidden">
	<div class="finance-table-wrap">

		<table  class="finance-table">
		  <tr>
		    <th>Hire Purchase</th><td></td>
		  </tr>

		  <tr>
		    <th>Deposit</th><td id="tdmb_finance_deposit">&pound;1499.00</td>
		  </tr>

		  <tr>
		    <th>Balance</th><td id="tdmb_finance_balance">&pound;13488.00</td>
		  </tr>

		  <tr>
		    <th>Fees</th><td id="tdmb_finance_fees">&pound;298.00</td>
		  </tr>

		  <tr>
		    <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">&pound;18522.12</td>
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
		    <th>1st Payment</th><td id="tdmb_finance_first_payment">&pound;497.44</td>
		  </tr>

		  <tr>
		    <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">&pound;348.44 <span>p/m*</span> x 46</td>
		  </tr>

		  <tr>
		    <th>Final Payment</th> <td id="tdmb_finance_final_payment">&pound;497.44</td>
		  </tr>
		</table>

		<!-- Don't remove - opm -->
		<div class="row">
			<div class="twelvecol" id="fin-table-apply-mob">
				<div class="pad-20-top overflow-hidden">
					<a href="finance95d7.html?vehicle_id=1200339" title="Apply for finance" class="button full green">Apply For Finance</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- // END Mobile Finance Table -->

    		      <div class="twelvecol fin-promo mobile-hidden">
	<em>
  	Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
    <a href="used-bmw-x5-walsall-west-midlands-1200339.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
   </em>
</div> 

<!--<div class="twelvecol fin-promo mobile-hidden">
	<em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-bmw-x5-walsall-west-midlands-1200339#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-bmw-x5-walsall-west-midlands-1200339#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
</div>-->

            </div>
          </div>
          <!-- // Section 4 -->

        </div>
      </section>


    </div>
  </div>
</div>
<!-- // END Vehicle Listing -->
<!-- Vehicle Listing -->
<div class="row-block listing  veh-loc-1 veh-even">
  <div class="container">
    <div class="row">


      <section class="container vehicle  veh-loc-1">
        <div class="pad-10 overflow-hidden">

          <!-- Section 1 -->
          <div class="row section1">

            <!-- Vehicle Image -->
          	<div class="fourcol">
            	<a href="used-bmw-x5-walsall-west-midlands-1316306.html" title="2009 09 BMW X5 3.0 D M SPORT 5d AUTO 232 BHP" class="vehicle-image"><img src="../images.clickdealer.co.uk/vehicles/1316/1316306/full/16056894.jpg" alt="View our BMW X5" /></a>
              <div class="button-block">
                <a href="used-bmw-x5-walsall-west-midlands-1316306.html" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> 19 Images</a>
                <a href="used-bmw-x5-walsall-west-midlands-1316306.html" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
              </div>

              <div class="clear"></div>

              <div class="row">
              	<div class="twelvecol mobile-hidden dt-partners">
                	<div class="row">
            		    
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Vehicle Image -->

            <!-- Eightcol Vehicle Data -->
          	<div class="eightcol last">
              <!-- Title -->
              <div class="eightcol vehicle-title">
          			<h3><a href="used-bmw-x5-walsall-west-midlands-1316306.html" title="View Vehicle Details">2009 09 BMW X5 3.0 D M SPORT 5d AUTO 232 BHP</a></h3>
                <cite class="mobile-hidden"></cite>
                <p class="price-save"><span class="price-was"></span> </p>
              </div>

            	<!-- Price -->
              <div class="fourcol last right">
                <div class="price">
            	     <span class="price-is">&pound;14,495<br /><span class="results_monthly_payment"><span class="row results-finance-from">
	<a rel="nofollow" href="used-bmw-x5-walsall-west-midlands-1316306.html#tabs-here" id="nop_vehicle_id_1316306">Finance From &pound;337.00 <span>p/m*</span></a>
</span>
</span></span>
                </div>
				
              </div>

              <div class="clear"></div>


              <div class="row">
              	<div class="twelvecol desktop-hidden mob-partners">
                	<div class="row">
            				
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                	</div>
                </div>
              </div>


              <div class="clear"></div>

				      <!-- Meta Info -->
				     <div class="row">

					      <!--
                <div class="threecol spec-one mobile-half-col">
					        <div class="spec one">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-mileage"></span> 89000 Miles</li>
					              <li><span aria-hidden="true" class="icon-color-palette"></span> Silver</li>
					              <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
					              <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
					              <li><span aria-hidden="true" class="icon-capacity"></span> 3.0 L</li>
					            </ul>
					          </div>
					        </div>
					       </div>

					       <div class="fourcol spec-two mobile-half-col">
					        <div class="spec two">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-road"></span> 34.9 Avg. MPG</li>
					              <li><span aria-hidden="true" class="icon-insurance"></span> Group 43 Ins.</li>
					              <li><span aria-hidden="true" class="icon-upload"></span> 214 CO&sup2; (g/km)</li>
					              <li><span aria-hidden="true" class="icon-tax12"></span> &pound;315.00 12m Tax</li>
					              <li><span aria-hidden="true" class="icon-tax6"></span> &pound;173.25 6m Tax</li>
					            </ul>
					          </div>
					        </div>
					      </div>-->

                <!-- Meta Info -->
<div class="threecol spec-one mobile-half-col">
  <div class="spec one">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-mileage"></span> 89000 miles</li>
        <li><span aria-hidden="true" class="icon-color-palette"></span> Silver</li>
        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
        <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
        <li><span aria-hidden="true" class="icon-capacity"></span> 3.0 L</li>
      </ul>
    </div>
  </div>
 </div>
 
 <div class="fourcol spec-two mobile-half-col">
  <div class="spec two">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-road"></span> 34.9 Avg. MPG</li>
        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: 43</li>
        <li><span aria-hidden="true" class="icon-upload"></span> 214 CO&sup2; (g/km)</li>
        <li><span aria-hidden="true" class="icon-tax12"></span> &pound;315.00 12m Tax</li>
        <li><span aria-hidden="true" class="icon-tax6"></span> &pound;173.25 6m Tax</li>
      </ul>
    </div>
  </div>
</div>



					      <div class="fivecol spec-three last mobile-hidden">
					        <div class="spec ticks">
					          <div class="pad-10-top-bottom">
					            <ul>
                        <li><span aria-hidden="true" class="icon-checkmark"></span> + BUY WITH CONFIDENCE PACKAGE +</li><li><span aria-hidden="true" class="icon-checkmark"></span> 12 MONTH RAC WARRANTY + BREAKDOWN COVER</li><li><span aria-hidden="true" class="icon-checkmark"></span> + 12 MONTHS NEW MOT + RAC APRROVED </li><li><span aria-hidden="true" class="icon-checkmark"></span>  + ZERO DEPOSIT FINANCE ARRANGED +</li><li><span aria-hidden="true" class="icon-checkmark"></span>  + 2 MONTHS PAUSE PLAN FINANCE DEAL +</li>
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
                    <button type="button" class="button full green addfavourite" id="favourite-1316306" title="Favourite">Add to Favourites</button>
                  </div>
                  <div class="results-btn-compare fourcol mobile-hidden">
                    <a href="compare.html" class="button white full" title="Compare">View Favourites</a>
                  </div>
                  <!-- Mobile Only -->
                  <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="used-bmw-x5-walsall-west-midlands-1316306.html#tabs-here" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div>
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="used-bmw-x5-walsall-west-midlands-1316306.html" class="button black full" title="View Vehicle Details"><span aria-hidden="true" class="icon icon-search"></span> View Vehicle</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->


          <!-- Section 4 -->
          <div class="row section4 mobile-hidden">

          	<div class="twelvecol">
            	<!-- Desktop & iPad Finance Table -->
<div class="twelvecol mobile-hidden">
	<div class="finance-table-wrap">
		<table  class="finance-table" id="finance_1316306">
			<tr>
				
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
		    <td id="td_finance_deposit">&pound;1450.00</td>
		    <td id="td_finance_balance">&pound;13045.00</td>
		    <td id="td_finance_fees">&pound;298.00</td>
		    <td id="td_finance_total_inc_deposit">&pound;17923.80</td>
		    <td id="td_finance_term">48 mths</td>
		    <td id="td_finance_rate" class="">6.00%</td>
		    <td id="td_finance_apr">11.8%</td>
		    <td id="td_finance_first_payment">&pound;486.00</td>
		    <td id="td_finance_monthly_payments">&pound;337.00 <span>p/m*</span> x 46</td>
		    <td id="td_finance_final_payment">&pound;486.00</td>
		  </tr>
		</table>
	</div>

</div>
<!-- // END Desktop & iPad Finance Table -->


<!-- Mobile Finance Table -->
<div class="twelvecol desktop-hidden">
	<div class="finance-table-wrap">

		<table  class="finance-table">
		  <tr>
		    <th>Hire Purchase</th><td></td>
		  </tr>

		  <tr>
		    <th>Deposit</th><td id="tdmb_finance_deposit">&pound;1450.00</td>
		  </tr>

		  <tr>
		    <th>Balance</th><td id="tdmb_finance_balance">&pound;13045.00</td>
		  </tr>

		  <tr>
		    <th>Fees</th><td id="tdmb_finance_fees">&pound;298.00</td>
		  </tr>

		  <tr>
		    <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">&pound;17923.80</td>
		  </tr>

		  <tr>
		    <th>Term</th><td id="tdmb_finance_term">48 mths</td>
		  </tr>

		  <tr>
		    <th class="">Fixed Rate</th><td id="tdmb_finance_rate" class="{HIDE_FINANCE_TERM}">6.00%</td>
		  </tr>

		  <tr>
		    <th>Representative APR</th><td id="tdmb_finance_apr">11.8%</td>
		  </tr>

		  <tr>
		    <th>1st Payment</th><td id="tdmb_finance_first_payment">&pound;486.00</td>
		  </tr>

		  <tr>
		    <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">&pound;337.00 <span>p/m*</span> x 46</td>
		  </tr>

		  <tr>
		    <th>Final Payment</th> <td id="tdmb_finance_final_payment">&pound;486.00</td>
		  </tr>
		</table>

		<!-- Don't remove - opm -->
		<div class="row">
			<div class="twelvecol" id="fin-table-apply-mob">
				<div class="pad-20-top overflow-hidden">
					<a href="finance7321.html?vehicle_id=1316306" title="Apply for finance" class="button full green">Apply For Finance</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- // END Mobile Finance Table -->

    		      <div class="twelvecol fin-promo mobile-hidden">
	<em>
  	Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
    <a href="used-bmw-x5-walsall-west-midlands-1316306.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
   </em>
</div> 

<!--<div class="twelvecol fin-promo mobile-hidden">
	<em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-bmw-x5-walsall-west-midlands-1316306#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-bmw-x5-walsall-west-midlands-1316306#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
</div>-->

            </div>
          </div>
          <!-- // Section 4 -->

        </div>
      </section>


    </div>
  </div>
</div>
<!-- // END Vehicle Listing -->
<!-- Vehicle Listing -->
<div class="row-block listing  veh-loc-1 veh-odd">
  <div class="container">
    <div class="row">


      <section class="container vehicle  veh-loc-1">
        <div class="pad-10 overflow-hidden">

          <!-- Section 1 -->
          <div class="row section1">

            <!-- Vehicle Image -->
          	<div class="fourcol">
            	<a href="used-mercedes-benz-m-class-walsall-west-midlands-1177746.html" title="2010 10 MERCEDES-BENZ M CLASS 3.0 ML300 CDI BLUEEFFICIENCY SPORT 5d AUTO 204 BHP" class="vehicle-image"><img src="../images.clickdealer.co.uk/vehicles/1177/1177746/full/13251762.jpg" alt="View our MERCEDES-BENZ M CLASS" /></a>
              <div class="button-block">
                <a href="used-mercedes-benz-m-class-walsall-west-midlands-1177746.html" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> 21 Images</a>
                <a href="used-mercedes-benz-m-class-walsall-west-midlands-1177746.html" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
              </div>

              <div class="clear"></div>

              <div class="row">
              	<div class="twelvecol mobile-hidden dt-partners">
                	<div class="row">
            		    
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Vehicle Image -->

            <!-- Eightcol Vehicle Data -->
          	<div class="eightcol last">
              <!-- Title -->
              <div class="eightcol vehicle-title">
          			<h3><a href="used-mercedes-benz-m-class-walsall-west-midlands-1177746.html" title="View Vehicle Details">2010 10 MERCEDES-BENZ M CLASS 3.0 ML300 CDI BLUEEFFICIENCY SPORT 5d AUTO 204 BHP</a></h3>
                <cite class="mobile-hidden"></cite>
                <p class="price-save"><span class="price-was"></span> </p>
              </div>

            	<!-- Price -->
              <div class="fourcol last right">
                <div class="price">
            	     <span class="price-is">&pound;12,995<br /><span class="results_monthly_payment"><span class="row results-finance-from">
	<a rel="nofollow" href="used-mercedes-benz-m-class-walsall-west-midlands-1177746.html#tabs-here" id="nop_vehicle_id_1177746">Finance From &pound;302.12 <span>p/m*</span></a>
</span>
</span></span>
                </div>
				
              </div>

              <div class="clear"></div>


              <div class="row">
              	<div class="twelvecol desktop-hidden mob-partners">
                	<div class="row">
            				
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                	</div>
                </div>
              </div>


              <div class="clear"></div>

				      <!-- Meta Info -->
				     <div class="row">

					      <!--
                <div class="threecol spec-one mobile-half-col">
					        <div class="spec one">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-mileage"></span> 87000 Miles</li>
					              <li><span aria-hidden="true" class="icon-color-palette"></span> Silver</li>
					              <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
					              <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
					              <li><span aria-hidden="true" class="icon-capacity"></span> 3.0 L</li>
					            </ul>
					          </div>
					        </div>
					       </div>

					       <div class="fourcol spec-two mobile-half-col">
					        <div class="spec two">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-road"></span> 32.5 Avg. MPG</li>
					              <li><span aria-hidden="true" class="icon-insurance"></span> Group 43 Ins.</li>
					              <li><span aria-hidden="true" class="icon-upload"></span> 240 CO&sup2; (g/km)</li>
					              <li><span aria-hidden="true" class="icon-tax12"></span> &pound;540.00 12m Tax</li>
					              <li><span aria-hidden="true" class="icon-tax6"></span> &pound;297.00 6m Tax</li>
					            </ul>
					          </div>
					        </div>
					      </div>-->

                <!-- Meta Info -->
<div class="threecol spec-one mobile-half-col">
  <div class="spec one">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-mileage"></span> 87000 miles</li>
        <li><span aria-hidden="true" class="icon-color-palette"></span> Silver</li>
        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
        <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
        <li><span aria-hidden="true" class="icon-capacity"></span> 3.0 L</li>
      </ul>
    </div>
  </div>
 </div>
 
 <div class="fourcol spec-two mobile-half-col">
  <div class="spec two">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-road"></span> 32.5 Avg. MPG</li>
        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: 43</li>
        <li><span aria-hidden="true" class="icon-upload"></span> 240 CO&sup2; (g/km)</li>
        <li><span aria-hidden="true" class="icon-tax12"></span> &pound;540.00 12m Tax</li>
        <li><span aria-hidden="true" class="icon-tax6"></span> &pound;297.00 6m Tax</li>
      </ul>
    </div>
  </div>
</div>



					      <div class="fivecol spec-three last mobile-hidden">
					        <div class="spec ticks">
					          <div class="pad-10-top-bottom">
					            <ul>
                        <li><span aria-hidden="true" class="icon-checkmark"></span>  FULL SERVICE HISTORY LAST @78K </li><li><span aria-hidden="true" class="icon-checkmark"></span> + BUY WITH CONFIDENCE PACKAGE +</li><li><span aria-hidden="true" class="icon-checkmark"></span> 12 MONTH RAC WARRANTY + BREAKDOWN COVER</li><li><span aria-hidden="true" class="icon-checkmark"></span> + 12 MONTHS NEW MOT + RAC APRROVED </li><li><span aria-hidden="true" class="icon-checkmark"></span>  + 2 MONTHS PAUSE PLAN FINANCE DEAL +</li>
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
                    <button type="button" class="button full green addfavourite" id="favourite-1177746" title="Favourite">Add to Favourites</button>
                  </div>
                  <div class="results-btn-compare fourcol mobile-hidden">
                    <a href="compare.html" class="button white full" title="Compare">View Favourites</a>
                  </div>
                  <!-- Mobile Only -->
                  <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="used-mercedes-benz-m-class-walsall-west-midlands-1177746.html#tabs-here" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div>
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="used-mercedes-benz-m-class-walsall-west-midlands-1177746.html" class="button black full" title="View Vehicle Details"><span aria-hidden="true" class="icon icon-search"></span> View Vehicle</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->


          <!-- Section 4 -->
          <div class="row section4 mobile-hidden">

          	<div class="twelvecol">
            	<!-- Desktop & iPad Finance Table -->
<div class="twelvecol mobile-hidden">
	<div class="finance-table-wrap">
		<table  class="finance-table" id="finance_1177746">
			<tr>
				
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
		    <td id="td_finance_deposit">&pound;1300.00</td>
		    <td id="td_finance_balance">&pound;11695.00</td>
		    <td id="td_finance_fees">&pound;298.00</td>
		    <td id="td_finance_total_inc_deposit">&pound;16099.80</td>
		    <td id="td_finance_term">48 mths</td>
		    <td id="td_finance_rate" class="">6.00%</td>
		    <td id="td_finance_apr">11.9%</td>
		    <td id="td_finance_first_payment">&pound;451.12</td>
		    <td id="td_finance_monthly_payments">&pound;302.12 <span>p/m*</span> x 46</td>
		    <td id="td_finance_final_payment">&pound;451.12</td>
		  </tr>
		</table>
	</div>

</div>
<!-- // END Desktop & iPad Finance Table -->


<!-- Mobile Finance Table -->
<div class="twelvecol desktop-hidden">
	<div class="finance-table-wrap">

		<table  class="finance-table">
		  <tr>
		    <th>Hire Purchase</th><td></td>
		  </tr>

		  <tr>
		    <th>Deposit</th><td id="tdmb_finance_deposit">&pound;1300.00</td>
		  </tr>

		  <tr>
		    <th>Balance</th><td id="tdmb_finance_balance">&pound;11695.00</td>
		  </tr>

		  <tr>
		    <th>Fees</th><td id="tdmb_finance_fees">&pound;298.00</td>
		  </tr>

		  <tr>
		    <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">&pound;16099.80</td>
		  </tr>

		  <tr>
		    <th>Term</th><td id="tdmb_finance_term">48 mths</td>
		  </tr>

		  <tr>
		    <th class="">Fixed Rate</th><td id="tdmb_finance_rate" class="{HIDE_FINANCE_TERM}">6.00%</td>
		  </tr>

		  <tr>
		    <th>Representative APR</th><td id="tdmb_finance_apr">11.9%</td>
		  </tr>

		  <tr>
		    <th>1st Payment</th><td id="tdmb_finance_first_payment">&pound;451.12</td>
		  </tr>

		  <tr>
		    <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">&pound;302.12 <span>p/m*</span> x 46</td>
		  </tr>

		  <tr>
		    <th>Final Payment</th> <td id="tdmb_finance_final_payment">&pound;451.12</td>
		  </tr>
		</table>

		<!-- Don't remove - opm -->
		<div class="row">
			<div class="twelvecol" id="fin-table-apply-mob">
				<div class="pad-20-top overflow-hidden">
					<a href="finance316b.html?vehicle_id=1177746" title="Apply for finance" class="button full green">Apply For Finance</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- // END Mobile Finance Table -->

    		      <div class="twelvecol fin-promo mobile-hidden">
	<em>
  	Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
    <a href="used-mercedes-benz-m-class-walsall-west-midlands-1177746.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
   </em>
</div> 

<!--<div class="twelvecol fin-promo mobile-hidden">
	<em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-mercedes-benz-m-class-walsall-west-midlands-1177746#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-mercedes-benz-m-class-walsall-west-midlands-1177746#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
</div>-->

            </div>
          </div>
          <!-- // Section 4 -->

        </div>
      </section>


    </div>
  </div>
</div>
<!-- // END Vehicle Listing -->
<!-- Banner -->
<div class="row-block results-banner">
	<div class="container">
		<div class="row">

			<div class="sixcol">
				<img src="img-src/_themev2-globemotors-1372/theme/PausePlan.jpg" class="responsive-img" alt="MotoNovo Finance Specialists">
			</div>
			<div class="sixcol last">
				<img src="img-src/_themev2-globemotors-1372/theme/PCP-car.jpg" class="responsive-img" alt="MotoNovo Finance Specialists">
			</div>

		</div>
	</div>
</div>
<!-- // END Widget Offers -->
<!-- Vehicle Listing -->
<div class="row-block listing  veh-loc-1 veh-even">
  <div class="container">
    <div class="row">


      <section class="container vehicle  veh-loc-1">
        <div class="pad-10 overflow-hidden">

          <!-- Section 1 -->
          <div class="row section1">

            <!-- Vehicle Image -->
          	<div class="fourcol">
            	<a href="used-bmw-x1-walsall-west-midlands-1217461.html" title="2011 11 BMW X1 2.0 XDRIVE23D SE 5d AUTO 201 BHP" class="vehicle-image"><img src="../images.clickdealer.co.uk/vehicles/1217/1217461/full/13944357.jpg" alt="View our BMW X1" /></a>
              <div class="button-block">
                <a href="used-bmw-x1-walsall-west-midlands-1217461.html" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> 17 Images</a>
                <a href="used-bmw-x1-walsall-west-midlands-1217461.html" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
              </div>

              <div class="clear"></div>

              <div class="row">
              	<div class="twelvecol mobile-hidden dt-partners">
                	<div class="row">
            		    
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Vehicle Image -->

            <!-- Eightcol Vehicle Data -->
          	<div class="eightcol last">
              <!-- Title -->
              <div class="eightcol vehicle-title">
          			<h3><a href="used-bmw-x1-walsall-west-midlands-1217461.html" title="View Vehicle Details">2011 11 BMW X1 2.0 XDRIVE23D SE 5d AUTO 201 BHP</a></h3>
                <cite class="mobile-hidden"></cite>
                <p class="price-save"><span class="price-was"></span> </p>
              </div>

            	<!-- Price -->
              <div class="fourcol last right">
                <div class="price">
            	     <span class="price-is">&pound;12,895<br /><span class="results_monthly_payment"><span class="row results-finance-from">
	<a rel="nofollow" href="used-bmw-x1-walsall-west-midlands-1217461.html#tabs-here" id="nop_vehicle_id_1217461">Finance From &pound;299.80 <span>p/m*</span></a>
</span>
</span></span>
                </div>
				
              </div>

              <div class="clear"></div>


              <div class="row">
              	<div class="twelvecol desktop-hidden mob-partners">
                	<div class="row">
            				
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                	</div>
                </div>
              </div>


              <div class="clear"></div>

				      <!-- Meta Info -->
				     <div class="row">

					      <!--
                <div class="threecol spec-one mobile-half-col">
					        <div class="spec one">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-mileage"></span> 36000 Miles</li>
					              <li><span aria-hidden="true" class="icon-color-palette"></span> Blue</li>
					              <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
					              <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
					              <li><span aria-hidden="true" class="icon-capacity"></span> 2.0 L</li>
					            </ul>
					          </div>
					        </div>
					       </div>

					       <div class="fourcol spec-two mobile-half-col">
					        <div class="spec two">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-road"></span> 44.8 Avg. MPG</li>
					              <li><span aria-hidden="true" class="icon-insurance"></span> Group 26 Ins.</li>
					              <li><span aria-hidden="true" class="icon-upload"></span> 167 CO&sup2; (g/km)</li>
					              <li><span aria-hidden="true" class="icon-tax12"></span> &pound;230.00 12m Tax</li>
					              <li><span aria-hidden="true" class="icon-tax6"></span> &pound;126.50 6m Tax</li>
					            </ul>
					          </div>
					        </div>
					      </div>-->

                <!-- Meta Info -->
<div class="threecol spec-one mobile-half-col">
  <div class="spec one">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-mileage"></span> 36000 miles</li>
        <li><span aria-hidden="true" class="icon-color-palette"></span> Blue</li>
        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
        <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
        <li><span aria-hidden="true" class="icon-capacity"></span> 2.0 L</li>
      </ul>
    </div>
  </div>
 </div>
 
 <div class="fourcol spec-two mobile-half-col">
  <div class="spec two">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-road"></span> 44.8 Avg. MPG</li>
        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: 26</li>
        <li><span aria-hidden="true" class="icon-upload"></span> 167 CO&sup2; (g/km)</li>
        <li><span aria-hidden="true" class="icon-tax12"></span> &pound;230.00 12m Tax</li>
        <li><span aria-hidden="true" class="icon-tax6"></span> &pound;126.50 6m Tax</li>
      </ul>
    </div>
  </div>
</div>



					      <div class="fivecol spec-three last mobile-hidden">
					        <div class="spec ticks">
					          <div class="pad-10-top-bottom">
					            <ul>
                        <li><span aria-hidden="true" class="icon-checkmark"></span>  FULL MAIN DEALER SERVICE HISTORY</li><li><span aria-hidden="true" class="icon-checkmark"></span> + BUY WITH CONFIDENCE PACKAGE +</li><li><span aria-hidden="true" class="icon-checkmark"></span> + 12 MONTHS NEW MOT + RAC APRROVED </li><li><span aria-hidden="true" class="icon-checkmark"></span> 12 MONTH RAC WARRANTY + BREAKDOWN COVER</li><li><span aria-hidden="true" class="icon-checkmark"></span>  + ZERO DEPOSIT FINANCE ARRANGED +</li>
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
                    <button type="button" class="button full green addfavourite" id="favourite-1217461" title="Favourite">Add to Favourites</button>
                  </div>
                  <div class="results-btn-compare fourcol mobile-hidden">
                    <a href="compare.html" class="button white full" title="Compare">View Favourites</a>
                  </div>
                  <!-- Mobile Only -->
                  <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="used-bmw-x1-walsall-west-midlands-1217461.html#tabs-here" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div>
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="used-bmw-x1-walsall-west-midlands-1217461.html" class="button black full" title="View Vehicle Details"><span aria-hidden="true" class="icon icon-search"></span> View Vehicle</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->


          <!-- Section 4 -->
          <div class="row section4 mobile-hidden">

          	<div class="twelvecol">
            	<!-- Desktop & iPad Finance Table -->
<div class="twelvecol mobile-hidden">
	<div class="finance-table-wrap">
		<table  class="finance-table" id="finance_1217461">
			<tr>
				
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
		    <td id="td_finance_deposit">&pound;1290.00</td>
		    <td id="td_finance_balance">&pound;11605.00</td>
		    <td id="td_finance_fees">&pound;298.00</td>
		    <td id="td_finance_total_inc_deposit">&pound;15978.20</td>
		    <td id="td_finance_term">48 mths</td>
		    <td id="td_finance_rate" class="">6.00%</td>
		    <td id="td_finance_apr">11.9%</td>
		    <td id="td_finance_first_payment">&pound;448.80</td>
		    <td id="td_finance_monthly_payments">&pound;299.80 <span>p/m*</span> x 46</td>
		    <td id="td_finance_final_payment">&pound;448.80</td>
		  </tr>
		</table>
	</div>

</div>
<!-- // END Desktop & iPad Finance Table -->


<!-- Mobile Finance Table -->
<div class="twelvecol desktop-hidden">
	<div class="finance-table-wrap">

		<table  class="finance-table">
		  <tr>
		    <th>Hire Purchase</th><td></td>
		  </tr>

		  <tr>
		    <th>Deposit</th><td id="tdmb_finance_deposit">&pound;1290.00</td>
		  </tr>

		  <tr>
		    <th>Balance</th><td id="tdmb_finance_balance">&pound;11605.00</td>
		  </tr>

		  <tr>
		    <th>Fees</th><td id="tdmb_finance_fees">&pound;298.00</td>
		  </tr>

		  <tr>
		    <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">&pound;15978.20</td>
		  </tr>

		  <tr>
		    <th>Term</th><td id="tdmb_finance_term">48 mths</td>
		  </tr>

		  <tr>
		    <th class="">Fixed Rate</th><td id="tdmb_finance_rate" class="{HIDE_FINANCE_TERM}">6.00%</td>
		  </tr>

		  <tr>
		    <th>Representative APR</th><td id="tdmb_finance_apr">11.9%</td>
		  </tr>

		  <tr>
		    <th>1st Payment</th><td id="tdmb_finance_first_payment">&pound;448.80</td>
		  </tr>

		  <tr>
		    <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">&pound;299.80 <span>p/m*</span> x 46</td>
		  </tr>

		  <tr>
		    <th>Final Payment</th> <td id="tdmb_finance_final_payment">&pound;448.80</td>
		  </tr>
		</table>

		<!-- Don't remove - opm -->
		<div class="row">
			<div class="twelvecol" id="fin-table-apply-mob">
				<div class="pad-20-top overflow-hidden">
					<a href="finance98ca.html?vehicle_id=1217461" title="Apply for finance" class="button full green">Apply For Finance</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- // END Mobile Finance Table -->

    		      <div class="twelvecol fin-promo mobile-hidden">
	<em>
  	Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
    <a href="used-bmw-x1-walsall-west-midlands-1217461.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
   </em>
</div> 

<!--<div class="twelvecol fin-promo mobile-hidden">
	<em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-bmw-x1-walsall-west-midlands-1217461#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-bmw-x1-walsall-west-midlands-1217461#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
</div>-->

            </div>
          </div>
          <!-- // Section 4 -->

        </div>
      </section>


    </div>
  </div>
</div>
<!-- // END Vehicle Listing -->
<!-- Vehicle Listing -->
<div class="row-block listing  veh-loc-1 veh-odd">
  <div class="container">
    <div class="row">


      <section class="container vehicle  veh-loc-1">
        <div class="pad-10 overflow-hidden">

          <!-- Section 1 -->
          <div class="row section1">

            <!-- Vehicle Image -->
          	<div class="fourcol">
            	<a href="used-bmw-x1-walsall-west-midlands-1347198.html" title="2011 BMW X1 2.0 XDRIVE20D SE 5d AUTO 174 BHP" class="vehicle-image"><img src="../images.clickdealer.co.uk/vehicles/1347/1347198/full/16664767.jpg" alt="View our BMW X1" /></a>
              <div class="button-block">
                <a href="used-bmw-x1-walsall-west-midlands-1347198.html" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> 19 Images</a>
                <a href="used-bmw-x1-walsall-west-midlands-1347198.html" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
              </div>

              <div class="clear"></div>

              <div class="row">
              	<div class="twelvecol mobile-hidden dt-partners">
                	<div class="row">
            		    
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Vehicle Image -->

            <!-- Eightcol Vehicle Data -->
          	<div class="eightcol last">
              <!-- Title -->
              <div class="eightcol vehicle-title">
          			<h3><a href="used-bmw-x1-walsall-west-midlands-1347198.html" title="View Vehicle Details">2011 BMW X1 2.0 XDRIVE20D SE 5d AUTO 174 BHP</a></h3>
                <cite class="mobile-hidden"></cite>
                <p class="price-save"><span class="price-was"></span> </p>
              </div>

            	<!-- Price -->
              <div class="fourcol last right">
                <div class="price">
            	     <span class="price-is">&pound;12,395<br /><span class="results_monthly_payment"><span class="row results-finance-from">
	<a rel="nofollow" href="used-bmw-x1-walsall-west-midlands-1347198.html#tabs-here" id="nop_vehicle_id_1347198">Finance From &pound;288.17 <span>p/m*</span></a>
</span>
</span></span>
                </div>
				
              </div>

              <div class="clear"></div>


              <div class="row">
              	<div class="twelvecol desktop-hidden mob-partners">
                	<div class="row">
            				
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                	</div>
                </div>
              </div>


              <div class="clear"></div>

				      <!-- Meta Info -->
				     <div class="row">

					      <!--
                <div class="threecol spec-one mobile-half-col">
					        <div class="spec one">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-mileage"></span> 41000 Miles</li>
					              <li><span aria-hidden="true" class="icon-color-palette"></span> Black</li>
					              <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
					              <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
					              <li><span aria-hidden="true" class="icon-capacity"></span> 2.0 L</li>
					            </ul>
					          </div>
					        </div>
					       </div>

					       <div class="fourcol spec-two mobile-half-col">
					        <div class="spec two">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-road"></span> 45.6 Avg. MPG</li>
					              <li><span aria-hidden="true" class="icon-insurance"></span> Group 24 Ins.</li>
					              <li><span aria-hidden="true" class="icon-upload"></span> 164 CO&sup2; (g/km)</li>
					              <li><span aria-hidden="true" class="icon-tax12"></span> &pound;195.00 12m Tax</li>
					              <li><span aria-hidden="true" class="icon-tax6"></span> &pound;107.25 6m Tax</li>
					            </ul>
					          </div>
					        </div>
					      </div>-->

                <!-- Meta Info -->
<div class="threecol spec-one mobile-half-col">
  <div class="spec one">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-mileage"></span> 41000 miles</li>
        <li><span aria-hidden="true" class="icon-color-palette"></span> Black</li>
        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
        <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
        <li><span aria-hidden="true" class="icon-capacity"></span> 2.0 L</li>
      </ul>
    </div>
  </div>
 </div>
 
 <div class="fourcol spec-two mobile-half-col">
  <div class="spec two">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-road"></span> 45.6 Avg. MPG</li>
        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: 24</li>
        <li><span aria-hidden="true" class="icon-upload"></span> 164 CO&sup2; (g/km)</li>
        <li><span aria-hidden="true" class="icon-tax12"></span> &pound;195.00 12m Tax</li>
        <li><span aria-hidden="true" class="icon-tax6"></span> &pound;107.25 6m Tax</li>
      </ul>
    </div>
  </div>
</div>



					      <div class="fivecol spec-three last mobile-hidden">
					        <div class="spec ticks">
					          <div class="pad-10-top-bottom">
					            <ul>
                        <li><span aria-hidden="true" class="icon-checkmark"></span> Power Socket - Front</li><li><span aria-hidden="true" class="icon-checkmark"></span> Electronic Brake Force Distribution</li><li><span aria-hidden="true" class="icon-checkmark"></span> Seat Belt Pre-Tensioners - Front</li><li><span aria-hidden="true" class="icon-checkmark"></span> Seats Heating Front</li><li><span aria-hidden="true" class="icon-checkmark"></span> Seat Height Adjustment - Driver/Passenger</li>
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
                    <button type="button" class="button full green addfavourite" id="favourite-1347198" title="Favourite">Add to Favourites</button>
                  </div>
                  <div class="results-btn-compare fourcol mobile-hidden">
                    <a href="compare.html" class="button white full" title="Compare">View Favourites</a>
                  </div>
                  <!-- Mobile Only -->
                  <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="used-bmw-x1-walsall-west-midlands-1347198.html#tabs-here" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div>
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="used-bmw-x1-walsall-west-midlands-1347198.html" class="button black full" title="View Vehicle Details"><span aria-hidden="true" class="icon icon-search"></span> View Vehicle</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->


          <!-- Section 4 -->
          <div class="row section4 mobile-hidden">

          	<div class="twelvecol">
            	<!-- Desktop & iPad Finance Table -->
<div class="twelvecol mobile-hidden">
	<div class="finance-table-wrap">
		<table  class="finance-table" id="finance_1347198">
			<tr>
				
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
		    <td id="td_finance_deposit">&pound;1240.00</td>
		    <td id="td_finance_balance">&pound;11155.00</td>
		    <td id="td_finance_fees">&pound;298.00</td>
		    <td id="td_finance_total_inc_deposit">&pound;15370.20</td>
		    <td id="td_finance_term">48 mths</td>
		    <td id="td_finance_rate" class="">6.00%</td>
		    <td id="td_finance_apr">11.9%</td>
		    <td id="td_finance_first_payment">&pound;437.17</td>
		    <td id="td_finance_monthly_payments">&pound;288.17 <span>p/m*</span> x 46</td>
		    <td id="td_finance_final_payment">&pound;437.17</td>
		  </tr>
		</table>
	</div>

</div>
<!-- // END Desktop & iPad Finance Table -->


<!-- Mobile Finance Table -->
<div class="twelvecol desktop-hidden">
	<div class="finance-table-wrap">

		<table  class="finance-table">
		  <tr>
		    <th>Hire Purchase</th><td></td>
		  </tr>

		  <tr>
		    <th>Deposit</th><td id="tdmb_finance_deposit">&pound;1240.00</td>
		  </tr>

		  <tr>
		    <th>Balance</th><td id="tdmb_finance_balance">&pound;11155.00</td>
		  </tr>

		  <tr>
		    <th>Fees</th><td id="tdmb_finance_fees">&pound;298.00</td>
		  </tr>

		  <tr>
		    <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">&pound;15370.20</td>
		  </tr>

		  <tr>
		    <th>Term</th><td id="tdmb_finance_term">48 mths</td>
		  </tr>

		  <tr>
		    <th class="">Fixed Rate</th><td id="tdmb_finance_rate" class="{HIDE_FINANCE_TERM}">6.00%</td>
		  </tr>

		  <tr>
		    <th>Representative APR</th><td id="tdmb_finance_apr">11.9%</td>
		  </tr>

		  <tr>
		    <th>1st Payment</th><td id="tdmb_finance_first_payment">&pound;437.17</td>
		  </tr>

		  <tr>
		    <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">&pound;288.17 <span>p/m*</span> x 46</td>
		  </tr>

		  <tr>
		    <th>Final Payment</th> <td id="tdmb_finance_final_payment">&pound;437.17</td>
		  </tr>
		</table>

		<!-- Don't remove - opm -->
		<div class="row">
			<div class="twelvecol" id="fin-table-apply-mob">
				<div class="pad-20-top overflow-hidden">
					<a href="finance5767.html?vehicle_id=1347198" title="Apply for finance" class="button full green">Apply For Finance</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- // END Mobile Finance Table -->

    		      <div class="twelvecol fin-promo mobile-hidden">
	<em>
  	Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
    <a href="used-bmw-x1-walsall-west-midlands-1347198.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
   </em>
</div> 

<!--<div class="twelvecol fin-promo mobile-hidden">
	<em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-bmw-x1-walsall-west-midlands-1347198#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-bmw-x1-walsall-west-midlands-1347198#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
</div>-->

            </div>
          </div>
          <!-- // Section 4 -->

        </div>
      </section>


    </div>
  </div>
</div>
<!-- // END Vehicle Listing -->
<!-- Vehicle Listing -->
<div class="row-block listing  veh-loc-1 veh-even">
  <div class="container">
    <div class="row">


      <section class="container vehicle  veh-loc-1">
        <div class="pad-10 overflow-hidden">

          <!-- Section 1 -->
          <div class="row section1">

            <!-- Vehicle Image -->
          	<div class="fourcol">
            	<a href="used-bmw-5-series-walsall-west-midlands-1052476.html" title="2011 61 BMW 5 SERIES 2.0 520D SE TOURING 5d AUTO 181 BHP" class="vehicle-image"><img src="../images.clickdealer.co.uk/vehicles/1052/1052476/full/10844529.jpg" alt="View our BMW 5 SERIES" /></a>
              <div class="button-block">
                <a href="used-bmw-5-series-walsall-west-midlands-1052476.html" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> 22 Images</a>
                <a href="used-bmw-5-series-walsall-west-midlands-1052476.html" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
              </div>

              <div class="clear"></div>

              <div class="row">
              	<div class="twelvecol mobile-hidden dt-partners">
                	<div class="row">
            		    
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Vehicle Image -->

            <!-- Eightcol Vehicle Data -->
          	<div class="eightcol last">
              <!-- Title -->
              <div class="eightcol vehicle-title">
          			<h3><a href="used-bmw-5-series-walsall-west-midlands-1052476.html" title="View Vehicle Details">2011 61 BMW 5 SERIES 2.0 520D SE TOURING 5d AUTO 181 BHP</a></h3>
                <cite class="mobile-hidden"></cite>
                <p class="price-save"><span class="price-was">was &pound;12,495</span> save &pound;795!</p>
              </div>

            	<!-- Price -->
              <div class="fourcol last right">
                <div class="price">
            	     <span class="price-is">&pound;11,700<br /><span class="results_monthly_payment"><span class="row results-finance-from">
	<a rel="nofollow" href="used-bmw-5-series-walsall-west-midlands-1052476.html#tabs-here" id="nop_vehicle_id_1052476">Finance From &pound;272.03 <span>p/m*</span></a>
</span>
</span></span>
                </div>
				
              </div>

              <div class="clear"></div>


              <div class="row">
              	<div class="twelvecol desktop-hidden mob-partners">
                	<div class="row">
            				
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                	</div>
                </div>
              </div>


              <div class="clear"></div>

				      <!-- Meta Info -->
				     <div class="row">

					      <!--
                <div class="threecol spec-one mobile-half-col">
					        <div class="spec one">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-mileage"></span> 81525 Miles</li>
					              <li><span aria-hidden="true" class="icon-color-palette"></span> Black</li>
					              <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
					              <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
					              <li><span aria-hidden="true" class="icon-capacity"></span> 2.0 L</li>
					            </ul>
					          </div>
					        </div>
					       </div>

					       <div class="fourcol spec-two mobile-half-col">
					        <div class="spec two">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-road"></span> 57.6 Avg. MPG</li>
					              <li><span aria-hidden="true" class="icon-insurance"></span> Group 32 Ins.</li>
					              <li><span aria-hidden="true" class="icon-upload"></span> 129 CO&sup2; (g/km)</li>
					              <li><span aria-hidden="true" class="icon-tax12"></span> &pound;120.00 12m Tax</li>
					              <li><span aria-hidden="true" class="icon-tax6"></span> &pound;66.00 6m Tax</li>
					            </ul>
					          </div>
					        </div>
					      </div>-->

                <!-- Meta Info -->
<div class="threecol spec-one mobile-half-col">
  <div class="spec one">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-mileage"></span> 81525 miles</li>
        <li><span aria-hidden="true" class="icon-color-palette"></span> Black</li>
        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
        <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
        <li><span aria-hidden="true" class="icon-capacity"></span> 2.0 L</li>
      </ul>
    </div>
  </div>
 </div>
 
 <div class="fourcol spec-two mobile-half-col">
  <div class="spec two">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-road"></span> 57.6 Avg. MPG</li>
        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: 32</li>
        <li><span aria-hidden="true" class="icon-upload"></span> 129 CO&sup2; (g/km)</li>
        <li><span aria-hidden="true" class="icon-tax12"></span> &pound;120.00 12m Tax</li>
        <li><span aria-hidden="true" class="icon-tax6"></span> &pound;66.00 6m Tax</li>
      </ul>
    </div>
  </div>
</div>



					      <div class="fivecol spec-three last mobile-hidden">
					        <div class="spec ticks">
					          <div class="pad-10-top-bottom">
					            <ul>
                        <li><span aria-hidden="true" class="icon-checkmark"></span>  FULL MAIN DEALER SERVICE HISTORY</li><li><span aria-hidden="true" class="icon-checkmark"></span> + BUY WITH CONFIDENCE PACKAGE +</li><li><span aria-hidden="true" class="icon-checkmark"></span> 12 MONTH RAC WARRANTY + BREAKDOWN COVER</li><li><span aria-hidden="true" class="icon-checkmark"></span> + 12 MONTHS NEW MOT + RAC APRROVED </li><li><span aria-hidden="true" class="icon-checkmark"></span> LOW RATE FINANCE ARRANGED 2 MONTH PAUSE</li>
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
                    <button type="button" class="button full green addfavourite" id="favourite-1052476" title="Favourite">Add to Favourites</button>
                  </div>
                  <div class="results-btn-compare fourcol mobile-hidden">
                    <a href="compare.html" class="button white full" title="Compare">View Favourites</a>
                  </div>
                  <!-- Mobile Only -->
                  <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="used-bmw-5-series-walsall-west-midlands-1052476.html#tabs-here" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div>
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="used-bmw-5-series-walsall-west-midlands-1052476.html" class="button black full" title="View Vehicle Details"><span aria-hidden="true" class="icon icon-search"></span> View Vehicle</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->


          <!-- Section 4 -->
          <div class="row section4 mobile-hidden">

          	<div class="twelvecol">
            	<!-- Desktop & iPad Finance Table -->
<div class="twelvecol mobile-hidden">
	<div class="finance-table-wrap">
		<table  class="finance-table" id="finance_1052476">
			<tr>
				
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
		    <td id="td_finance_deposit">&pound;1170.00</td>
		    <td id="td_finance_balance">&pound;10530.00</td>
		    <td id="td_finance_fees">&pound;298.00</td>
		    <td id="td_finance_total_inc_deposit">&pound;14525.20</td>
		    <td id="td_finance_term">48 mths</td>
		    <td id="td_finance_rate" class="">6.00%</td>
		    <td id="td_finance_apr">12.0%</td>
		    <td id="td_finance_first_payment">&pound;421.03</td>
		    <td id="td_finance_monthly_payments">&pound;272.03 <span>p/m*</span> x 46</td>
		    <td id="td_finance_final_payment">&pound;421.03</td>
		  </tr>
		</table>
	</div>

</div>
<!-- // END Desktop & iPad Finance Table -->


<!-- Mobile Finance Table -->
<div class="twelvecol desktop-hidden">
	<div class="finance-table-wrap">

		<table  class="finance-table">
		  <tr>
		    <th>Hire Purchase</th><td></td>
		  </tr>

		  <tr>
		    <th>Deposit</th><td id="tdmb_finance_deposit">&pound;1170.00</td>
		  </tr>

		  <tr>
		    <th>Balance</th><td id="tdmb_finance_balance">&pound;10530.00</td>
		  </tr>

		  <tr>
		    <th>Fees</th><td id="tdmb_finance_fees">&pound;298.00</td>
		  </tr>

		  <tr>
		    <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">&pound;14525.20</td>
		  </tr>

		  <tr>
		    <th>Term</th><td id="tdmb_finance_term">48 mths</td>
		  </tr>

		  <tr>
		    <th class="">Fixed Rate</th><td id="tdmb_finance_rate" class="{HIDE_FINANCE_TERM}">6.00%</td>
		  </tr>

		  <tr>
		    <th>Representative APR</th><td id="tdmb_finance_apr">12.0%</td>
		  </tr>

		  <tr>
		    <th>1st Payment</th><td id="tdmb_finance_first_payment">&pound;421.03</td>
		  </tr>

		  <tr>
		    <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">&pound;272.03 <span>p/m*</span> x 46</td>
		  </tr>

		  <tr>
		    <th>Final Payment</th> <td id="tdmb_finance_final_payment">&pound;421.03</td>
		  </tr>
		</table>

		<!-- Don't remove - opm -->
		<div class="row">
			<div class="twelvecol" id="fin-table-apply-mob">
				<div class="pad-20-top overflow-hidden">
					<a href="finance91c5.html?vehicle_id=1052476" title="Apply for finance" class="button full green">Apply For Finance</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- // END Mobile Finance Table -->

    		      <div class="twelvecol fin-promo mobile-hidden">
	<em>
  	Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
    <a href="used-bmw-5-series-walsall-west-midlands-1052476.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
   </em>
</div> 

<!--<div class="twelvecol fin-promo mobile-hidden">
	<em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-bmw-5-series-walsall-west-midlands-1052476#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-bmw-5-series-walsall-west-midlands-1052476#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
</div>-->

            </div>
          </div>
          <!-- // Section 4 -->

        </div>
      </section>


    </div>
  </div>
</div>
<!-- // END Vehicle Listing -->
<!-- Banner -->
<div class="row-block results-banner">
	<div class="container">
		<div class="row">

			<div class="sixcol">
				<img src="img-src/_themev2-globemotors-1372/theme/PausePlan.jpg" class="responsive-img" alt="MotoNovo Finance Specialists">
			</div>
			<div class="sixcol last">
				<img src="img-src/_themev2-globemotors-1372/theme/PCP-car.jpg" class="responsive-img" alt="MotoNovo Finance Specialists">
			</div>

		</div>
	</div>
</div>
<!-- // END Widget Offers -->
<!-- Vehicle Listing -->
<div class="row-block listing  veh-loc-1 veh-odd">
  <div class="container">
    <div class="row">


      <section class="container vehicle  veh-loc-1">
        <div class="pad-10 overflow-hidden">

          <!-- Section 1 -->
          <div class="row section1">

            <!-- Vehicle Image -->
          	<div class="fourcol">
            	<a href="used-bmw-1-series-walsall-west-midlands-1340263.html" title="2012 62 BMW 1 SERIES 1.6 116I SPORT 5d 135 BHP" class="vehicle-image"><img src="../images.clickdealer.co.uk/vehicles/1340/1340263/full/16663585.jpg" alt="View our BMW 1 SERIES" /></a>
              <div class="button-block">
                <a href="used-bmw-1-series-walsall-west-midlands-1340263.html" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> 18 Images</a>

                <a href="used-bmw-1-series-walsall-west-midlands-1340263.html" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
              </div>

              <div class="clear"></div>

              <div class="row">
              	<div class="twelvecol mobile-hidden dt-partners">
                	<div class="row">
            		    
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Vehicle Image -->

            <!-- Eightcol Vehicle Data -->
          	<div class="eightcol last">
              <!-- Title -->
              <div class="eightcol vehicle-title">
          			<h3><a href="used-bmw-1-series-walsall-west-midlands-1340263.html" title="View Vehicle Details">2012 62 BMW 1 SERIES 1.6 116I SPORT 5d 135 BHP</a></h3>
                <cite class="mobile-hidden"></cite>
                <p class="price-save"><span class="price-was"></span> </p>
              </div>

            	<!-- Price -->
              <div class="fourcol last right">
                <div class="price">
            	     <span class="price-is">&pound;10,393<br /><span class="results_monthly_payment"><span class="row results-finance-from">
	<a rel="nofollow" href="used-bmw-1-series-walsall-west-midlands-1340263.html#tabs-here" id="nop_vehicle_id_1340263">Finance From &pound;202.65 <span>p/m*</span></a>
</span>
</span></span>
                </div>
				
              </div>

              <div class="clear"></div>


              <div class="row">
              	<div class="twelvecol desktop-hidden mob-partners">
                	<div class="row">
            				
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                	</div>
                </div>
              </div>


              <div class="clear"></div>

				      <!-- Meta Info -->
				     <div class="row">

					      <!--
                <div class="threecol spec-one mobile-half-col">
					        <div class="spec one">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-mileage"></span> 43000 Miles</li>
					              <li><span aria-hidden="true" class="icon-color-palette"></span> White</li>
					              <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Petrol</li>
					              <li><span aria-hidden="true" class="icon-transmission"></span> Manual</li>
					              <li><span aria-hidden="true" class="icon-capacity"></span> 1.6 L</li>
					            </ul>
					          </div>
					        </div>
					       </div>

					       <div class="fourcol spec-two mobile-half-col">
					        <div class="spec two">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-road"></span> 49.6 Avg. MPG</li>
					              <li><span aria-hidden="true" class="icon-insurance"></span> Group 18 Ins.</li>
					              <li><span aria-hidden="true" class="icon-upload"></span> 132 CO&sup2; (g/km)</li>
					              <li><span aria-hidden="true" class="icon-tax12"></span> &pound;140.00 12m Tax</li>
					              <li><span aria-hidden="true" class="icon-tax6"></span> &pound;77.00 6m Tax</li>
					            </ul>
					          </div>
					        </div>
					      </div>-->

                <!-- Meta Info -->
<div class="threecol spec-one mobile-half-col">
  <div class="spec one">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-mileage"></span> 43000 miles</li>
        <li><span aria-hidden="true" class="icon-color-palette"></span> White</li>
        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Petrol</li>
        <li><span aria-hidden="true" class="icon-transmission"></span> Manual</li>
        <li><span aria-hidden="true" class="icon-capacity"></span> 1.6 L</li>
      </ul>
    </div>
  </div>
 </div>
 
 <div class="fourcol spec-two mobile-half-col">
  <div class="spec two">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-road"></span> 49.6 Avg. MPG</li>
        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: 18</li>
        <li><span aria-hidden="true" class="icon-upload"></span> 132 CO&sup2; (g/km)</li>
        <li><span aria-hidden="true" class="icon-tax12"></span> &pound;140.00 12m Tax</li>
        <li><span aria-hidden="true" class="icon-tax6"></span> &pound;77.00 6m Tax</li>
      </ul>
    </div>
  </div>
</div>



					      <div class="fivecol spec-three last mobile-hidden">
					        <div class="spec ticks">
					          <div class="pad-10-top-bottom">
					            <ul>
                        <li><span aria-hidden="true" class="icon-checkmark"></span> On-Board Monitor - Unspecified</li><li><span aria-hidden="true" class="icon-checkmark"></span> Child Locks - Manual</li><li><span aria-hidden="true" class="icon-checkmark"></span> External Temperature Display</li><li><span aria-hidden="true" class="icon-checkmark"></span> Seats Split Rear</li><li><span aria-hidden="true" class="icon-checkmark"></span> Tyre Pressure Control</li>
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
                    <button type="button" class="button full green addfavourite" id="favourite-1340263" title="Favourite">Add to Favourites</button>
                  </div>
                  <div class="results-btn-compare fourcol mobile-hidden">
                    <a href="compare.html" class="button white full" title="Compare">View Favourites</a>
                  </div>
                  <!-- Mobile Only -->
                  <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="used-bmw-1-series-walsall-west-midlands-1340263.html#tabs-here" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div>
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="used-bmw-1-series-walsall-west-midlands-1340263.html" class="button black full" title="View Vehicle Details"><span aria-hidden="true" class="icon icon-search"></span> View Vehicle</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->


          <!-- Section 4 -->
          <div class="row section4 mobile-hidden">

          	<div class="twelvecol">
            	<!-- Desktop & iPad Finance Table -->
<div class="twelvecol mobile-hidden">
	<div class="finance-table-wrap">
		<table  class="finance-table" id="finance_1340263">
			<tr>
				
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
		    <td id="td_finance_deposit">&pound;1040.00</td>
		    <td id="td_finance_balance">&pound;9353.00</td>
		    <td id="td_finance_fees">&pound;298.00</td>
		    <td id="td_finance_total_inc_deposit">&pound;13496.90</td>
		    <td id="td_finance_term">60 mths</td>
		    <td id="td_finance_rate" class="">6.00%</td>
		    <td id="td_finance_apr">11.9%</td>
		    <td id="td_finance_first_payment">&pound;351.65</td>
		    <td id="td_finance_monthly_payments">&pound;202.65 <span>p/m*</span> x 58</td>
		    <td id="td_finance_final_payment">&pound;351.65</td>
		  </tr>
		</table>
	</div>

</div>
<!-- // END Desktop & iPad Finance Table -->


<!-- Mobile Finance Table -->
<div class="twelvecol desktop-hidden">
	<div class="finance-table-wrap">

		<table  class="finance-table">
		  <tr>
		    <th>Hire Purchase</th><td></td>
		  </tr>

		  <tr>
		    <th>Deposit</th><td id="tdmb_finance_deposit">&pound;1040.00</td>
		  </tr>

		  <tr>
		    <th>Balance</th><td id="tdmb_finance_balance">&pound;9353.00</td>
		  </tr>

		  <tr>
		    <th>Fees</th><td id="tdmb_finance_fees">&pound;298.00</td>
		  </tr>

		  <tr>
		    <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">&pound;13496.90</td>
		  </tr>

		  <tr>
		    <th>Term</th><td id="tdmb_finance_term">60 mths</td>
		  </tr>

		  <tr>
		    <th class="">Fixed Rate</th><td id="tdmb_finance_rate" class="{HIDE_FINANCE_TERM}">6.00%</td>
		  </tr>

		  <tr>
		    <th>Representative APR</th><td id="tdmb_finance_apr">11.9%</td>
		  </tr>

		  <tr>
		    <th>1st Payment</th><td id="tdmb_finance_first_payment">&pound;351.65</td>
		  </tr>

		  <tr>
		    <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">&pound;202.65 <span>p/m*</span> x 58</td>
		  </tr>

		  <tr>
		    <th>Final Payment</th> <td id="tdmb_finance_final_payment">&pound;351.65</td>
		  </tr>
		</table>

		<!-- Don't remove - opm -->
		<div class="row">
			<div class="twelvecol" id="fin-table-apply-mob">
				<div class="pad-20-top overflow-hidden">
					<a href="finance092f.html?vehicle_id=1340263" title="Apply for finance" class="button full green">Apply For Finance</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- // END Mobile Finance Table -->

    		      <div class="twelvecol fin-promo mobile-hidden">
	<em>
  	Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
    <a href="used-bmw-1-series-walsall-west-midlands-1340263.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
   </em>
</div> 

<!--<div class="twelvecol fin-promo mobile-hidden">
	<em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-bmw-1-series-walsall-west-midlands-1340263#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-bmw-1-series-walsall-west-midlands-1340263#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
</div>-->

            </div>
          </div>
          <!-- // Section 4 -->

        </div>
      </section>


    </div>
  </div>
</div>
<!-- // END Vehicle Listing -->
<!-- Vehicle Listing -->
<div class="row-block listing  veh-loc-1 veh-even">
  <div class="container">
    <div class="row">


      <section class="container vehicle  veh-loc-1">
        <div class="pad-10 overflow-hidden">

          <!-- Section 1 -->
          <div class="row section1">

            <!-- Vehicle Image -->
          	<div class="fourcol">
            	<a href="used-bmw-3-series-walsall-west-midlands-1162814.html" title="2013 62 BMW 3 SERIES 2.0 320D EFFICIENTDYNAMICS 4d AUTO 161 BHP" class="vehicle-image"><img src="../images.clickdealer.co.uk/vehicles/1162/1162814/full/13006996.jpg" alt="View our BMW 3 SERIES" /></a>
              <div class="button-block">
                <a href="used-bmw-3-series-walsall-west-midlands-1162814.html" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> 16 Images</a>
                <a href="used-bmw-3-series-walsall-west-midlands-1162814.html" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
              </div>

              <div class="clear"></div>

              <div class="row">
              	<div class="twelvecol mobile-hidden dt-partners">
                	<div class="row">
            		    
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Vehicle Image -->

            <!-- Eightcol Vehicle Data -->
          	<div class="eightcol last">
              <!-- Title -->
              <div class="eightcol vehicle-title">
          			<h3><a href="used-bmw-3-series-walsall-west-midlands-1162814.html" title="View Vehicle Details">2013 62 BMW 3 SERIES 2.0 320D EFFICIENTDYNAMICS 4d AUTO 161 BHP</a></h3>
                <cite class="mobile-hidden">&pound;20 PER YEAR TAX</cite>
                <p class="price-save"><span class="price-was"></span> </p>
              </div>

            	<!-- Price -->
              <div class="fourcol last right">
                <div class="price">
            	     <span class="price-is">&pound;10,393<br /><span class="results_monthly_payment"><span class="row results-finance-from">
	<a rel="nofollow" href="used-bmw-3-series-walsall-west-midlands-1162814.html#tabs-here" id="nop_vehicle_id_1162814">Finance From &pound;202.65 <span>p/m*</span></a>
</span>
</span></span>
                </div>
				
              </div>

              <div class="clear"></div>


              <div class="row">
              	<div class="twelvecol desktop-hidden mob-partners">
                	<div class="row">
            				
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                	</div>
                </div>
              </div>


              <div class="clear"></div>

				      <!-- Meta Info -->
				     <div class="row">

					      <!--
                <div class="threecol spec-one mobile-half-col">
					        <div class="spec one">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-mileage"></span> 100000 Miles</li>
					              <li><span aria-hidden="true" class="icon-color-palette"></span> Black</li>
					              <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
					              <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
					              <li><span aria-hidden="true" class="icon-capacity"></span> 2.0 L</li>
					            </ul>
					          </div>
					        </div>
					       </div>

					       <div class="fourcol spec-two mobile-half-col">
					        <div class="spec two">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-road"></span> 68.9 Avg. MPG</li>
					              <li><span aria-hidden="true" class="icon-insurance"></span> Group 31 Ins.</li>
					              <li><span aria-hidden="true" class="icon-upload"></span> 109 CO&sup2; (g/km)</li>
					              <li><span aria-hidden="true" class="icon-tax12"></span> &pound;20.00 12m Tax</li>
					              <li><span aria-hidden="true" class="icon-tax6"></span> &pound;0.00 6m Tax</li>
					            </ul>
					          </div>
					        </div>
					      </div>-->

                <!-- Meta Info -->
<div class="threecol spec-one mobile-half-col">
  <div class="spec one">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-mileage"></span> 100000 miles</li>
        <li><span aria-hidden="true" class="icon-color-palette"></span> Black</li>
        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
        <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
        <li><span aria-hidden="true" class="icon-capacity"></span> 2.0 L</li>
      </ul>
    </div>
  </div>
 </div>
 
 <div class="fourcol spec-two mobile-half-col">
  <div class="spec two">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-road"></span> 68.9 Avg. MPG</li>
        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: 31</li>
        <li><span aria-hidden="true" class="icon-upload"></span> 109 CO&sup2; (g/km)</li>
        <li><span aria-hidden="true" class="icon-tax12"></span> &pound;20.00 12m Tax</li>
        <li><span aria-hidden="true" class="icon-tax6"></span> &pound;0.00 6m Tax</li>
      </ul>
    </div>
  </div>
</div>



					      <div class="fivecol spec-three last mobile-hidden">
					        <div class="spec ticks">
					          <div class="pad-10-top-bottom">
					            <ul>
                        <li><span aria-hidden="true" class="icon-checkmark"></span> FULL BMW SERVICE HISTORY 6 STAMPS @ 90K</li><li><span aria-hidden="true" class="icon-checkmark"></span> + BUY WITH CONFIDENCE PACKAGE +</li><li><span aria-hidden="true" class="icon-checkmark"></span> 12 MONTH RAC WARRANTY + BREAKDOWN COVER</li><li><span aria-hidden="true" class="icon-checkmark"></span> + 12 MONTHS NEW MOT + RAC APRROVED </li><li><span aria-hidden="true" class="icon-checkmark"></span>  + LOW RATE FINANCE ARRANGED +</li>
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
                    <button type="button" class="button full green addfavourite" id="favourite-1162814" title="Favourite">Add to Favourites</button>
                  </div>
                  <div class="results-btn-compare fourcol mobile-hidden">
                    <a href="compare.html" class="button white full" title="Compare">View Favourites</a>
                  </div>
                  <!-- Mobile Only -->
                  <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="used-bmw-3-series-walsall-west-midlands-1162814.html#tabs-here" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div>
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="used-bmw-3-series-walsall-west-midlands-1162814.html" class="button black full" title="View Vehicle Details"><span aria-hidden="true" class="icon icon-search"></span> View Vehicle</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->


          <!-- Section 4 -->
          <div class="row section4 mobile-hidden">

          	<div class="twelvecol">
            	<!-- Desktop & iPad Finance Table -->
<div class="twelvecol mobile-hidden">
	<div class="finance-table-wrap">
		<table  class="finance-table" id="finance_1162814">
			<tr>
				
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
		    <td id="td_finance_deposit">&pound;1040.00</td>
		    <td id="td_finance_balance">&pound;9353.00</td>
		    <td id="td_finance_fees">&pound;298.00</td>
		    <td id="td_finance_total_inc_deposit">&pound;13496.90</td>
		    <td id="td_finance_term">60 mths</td>
		    <td id="td_finance_rate" class="">6.00%</td>
		    <td id="td_finance_apr">11.9%</td>
		    <td id="td_finance_first_payment">&pound;351.65</td>
		    <td id="td_finance_monthly_payments">&pound;202.65 <span>p/m*</span> x 58</td>
		    <td id="td_finance_final_payment">&pound;351.65</td>
		  </tr>
		</table>
	</div>

</div>
<!-- // END Desktop & iPad Finance Table -->


<!-- Mobile Finance Table -->
<div class="twelvecol desktop-hidden">
	<div class="finance-table-wrap">

		<table  class="finance-table">
		  <tr>
		    <th>Hire Purchase</th><td></td>
		  </tr>

		  <tr>
		    <th>Deposit</th><td id="tdmb_finance_deposit">&pound;1040.00</td>
		  </tr>

		  <tr>
		    <th>Balance</th><td id="tdmb_finance_balance">&pound;9353.00</td>
		  </tr>

		  <tr>
		    <th>Fees</th><td id="tdmb_finance_fees">&pound;298.00</td>
		  </tr>

		  <tr>
		    <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">&pound;13496.90</td>
		  </tr>

		  <tr>
		    <th>Term</th><td id="tdmb_finance_term">60 mths</td>
		  </tr>

		  <tr>
		    <th class="">Fixed Rate</th><td id="tdmb_finance_rate" class="{HIDE_FINANCE_TERM}">6.00%</td>
		  </tr>

		  <tr>
		    <th>Representative APR</th><td id="tdmb_finance_apr">11.9%</td>
		  </tr>

		  <tr>
		    <th>1st Payment</th><td id="tdmb_finance_first_payment">&pound;351.65</td>
		  </tr>

		  <tr>
		    <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">&pound;202.65 <span>p/m*</span> x 58</td>
		  </tr>

		  <tr>
		    <th>Final Payment</th> <td id="tdmb_finance_final_payment">&pound;351.65</td>
		  </tr>
		</table>

		<!-- Don't remove - opm -->
		<div class="row">
			<div class="twelvecol" id="fin-table-apply-mob">
				<div class="pad-20-top overflow-hidden">
					<a href="finance99bc.html?vehicle_id=1162814" title="Apply for finance" class="button full green">Apply For Finance</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- // END Mobile Finance Table -->

    		      <div class="twelvecol fin-promo mobile-hidden">
	<em>
  	Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
    <a href="used-bmw-3-series-walsall-west-midlands-1162814.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
   </em>
</div> 

<!--<div class="twelvecol fin-promo mobile-hidden">
	<em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-bmw-3-series-walsall-west-midlands-1162814#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-bmw-3-series-walsall-west-midlands-1162814#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
</div>-->

            </div>
          </div>
          <!-- // Section 4 -->

        </div>
      </section>


    </div>
  </div>
</div>
<!-- // END Vehicle Listing -->
<!-- Vehicle Listing -->
<div class="row-block listing  veh-loc-1 veh-odd">
  <div class="container">
    <div class="row">


      <section class="container vehicle  veh-loc-1">
        <div class="pad-10 overflow-hidden">

          <!-- Section 1 -->
          <div class="row section1">

            <!-- Vehicle Image -->
          	<div class="fourcol">
            	<a href="used-mercedes-benz-c-class-walsall-west-midlands-1220698.html" title="2011 11 MERCEDES-BENZ C CLASS 2.1 C220 CDI BLUEEFFICIENCY SPORT 4d AUTO 168 BHP" class="vehicle-image"><img src="../images.clickdealer.co.uk/vehicles/1220/1220698/full/14007301.jpg" alt="View our MERCEDES-BENZ C CLASS" /></a>
              <div class="button-block">
                <a href="used-mercedes-benz-c-class-walsall-west-midlands-1220698.html" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> 18 Images</a>
                <a href="used-mercedes-benz-c-class-walsall-west-midlands-1220698.html" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
              </div>

              <div class="clear"></div>

              <div class="row">
              	<div class="twelvecol mobile-hidden dt-partners">
                	<div class="row">
            		    
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Vehicle Image -->

            <!-- Eightcol Vehicle Data -->
          	<div class="eightcol last">
              <!-- Title -->
              <div class="eightcol vehicle-title">
          			<h3><a href="used-mercedes-benz-c-class-walsall-west-midlands-1220698.html" title="View Vehicle Details">2011 11 MERCEDES-BENZ C CLASS 2.1 C220 CDI BLUEEFFICIENCY SPORT 4d AUTO 168 BHP</a></h3>
                <cite class="mobile-hidden"></cite>
                <p class="price-save"><span class="price-was">was &pound;10,485</span> save &pound;500!</p>
              </div>

            	<!-- Price -->
              <div class="fourcol last right">
                <div class="price">
            	     <span class="price-is">&pound;9,985<br /><span class="results_monthly_payment"><span class="row results-finance-from">
	<a rel="nofollow" href="used-mercedes-benz-c-class-walsall-west-midlands-1220698.html#tabs-here" id="nop_vehicle_id_1220698">Finance From &pound;232.14 <span>p/m*</span></a>
</span>
</span></span>
                </div>
				
              </div>

              <div class="clear"></div>


              <div class="row">
              	<div class="twelvecol desktop-hidden mob-partners">
                	<div class="row">
            				
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                	</div>
                </div>
              </div>


              <div class="clear"></div>

				      <!-- Meta Info -->
				     <div class="row">

					      <!--
                <div class="threecol spec-one mobile-half-col">
					        <div class="spec one">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-mileage"></span> 96000 Miles</li>
					              <li><span aria-hidden="true" class="icon-color-palette"></span> Black</li>
					              <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
					              <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
					              <li><span aria-hidden="true" class="icon-capacity"></span> 2.1 L</li>
					            </ul>
					          </div>
					        </div>
					       </div>

					       <div class="fourcol spec-two mobile-half-col">
					        <div class="spec two">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-road"></span> 56.5 Avg. MPG</li>
					              <li><span aria-hidden="true" class="icon-insurance"></span> Group 34 Ins.</li>
					              <li><span aria-hidden="true" class="icon-upload"></span> 136 CO&sup2; (g/km)</li>
					              <li><span aria-hidden="true" class="icon-tax12"></span> &pound;140.00 12m Tax</li>
					              <li><span aria-hidden="true" class="icon-tax6"></span> &pound;77.00 6m Tax</li>
					            </ul>
					          </div>
					        </div>
					      </div>-->

                <!-- Meta Info -->
<div class="threecol spec-one mobile-half-col">
  <div class="spec one">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-mileage"></span> 96000 miles</li>
        <li><span aria-hidden="true" class="icon-color-palette"></span> Black</li>
        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
        <li><span aria-hidden="true" class="icon-transmission"></span> Automatic</li>
        <li><span aria-hidden="true" class="icon-capacity"></span> 2.1 L</li>
      </ul>
    </div>
  </div>
 </div>
 
 <div class="fourcol spec-two mobile-half-col">
  <div class="spec two">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-road"></span> 56.5 Avg. MPG</li>
        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: 34</li>
        <li><span aria-hidden="true" class="icon-upload"></span> 136 CO&sup2; (g/km)</li>
        <li><span aria-hidden="true" class="icon-tax12"></span> &pound;140.00 12m Tax</li>
        <li><span aria-hidden="true" class="icon-tax6"></span> &pound;77.00 6m Tax</li>
      </ul>
    </div>
  </div>
</div>



					      <div class="fivecol spec-three last mobile-hidden">
					        <div class="spec ticks">
					          <div class="pad-10-top-bottom">
					            <ul>
                        <li><span aria-hidden="true" class="icon-checkmark"></span>  FULL MAIN DEALER SERVICE HISTORY</li><li><span aria-hidden="true" class="icon-checkmark"></span> + BUY WITH CONFIDENCE PACKAGE +</li><li><span aria-hidden="true" class="icon-checkmark"></span> 12 MONTH RAC WARRANTY + BREAKDOWN COVER</li><li><span aria-hidden="true" class="icon-checkmark"></span> + 12 MONTHS NEW MOT + RAC APRROVED </li><li><span aria-hidden="true" class="icon-checkmark"></span>  + ZERO DEPOSIT FINANCE ARRANGED +</li>
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
                    <button type="button" class="button full green addfavourite" id="favourite-1220698" title="Favourite">Add to Favourites</button>
                  </div>
                  <div class="results-btn-compare fourcol mobile-hidden">
                    <a href="compare.html" class="button white full" title="Compare">View Favourites</a>
                  </div>
                  <!-- Mobile Only -->
                  <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="used-mercedes-benz-c-class-walsall-west-midlands-1220698.html#tabs-here" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div>
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="used-mercedes-benz-c-class-walsall-west-midlands-1220698.html" class="button black full" title="View Vehicle Details"><span aria-hidden="true" class="icon icon-search"></span> View Vehicle</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->


          <!-- Section 4 -->
          <div class="row section4 mobile-hidden">

          	<div class="twelvecol">
            	<!-- Desktop & iPad Finance Table -->
<div class="twelvecol mobile-hidden">
	<div class="finance-table-wrap">
		<table  class="finance-table" id="finance_1220698">
			<tr>
				
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
		    <td id="td_finance_deposit">&pound;999.00</td>
		    <td id="td_finance_balance">&pound;8986.00</td>
		    <td id="td_finance_fees">&pound;298.00</td>
		    <td id="td_finance_total_inc_deposit">&pound;12439.64</td>
		    <td id="td_finance_term">48 mths</td>
		    <td id="td_finance_rate" class="">6.00%</td>
		    <td id="td_finance_apr">12.2%</td>
		    <td id="td_finance_first_payment">&pound;381.14</td>
		    <td id="td_finance_monthly_payments">&pound;232.14 <span>p/m*</span> x 46</td>
		    <td id="td_finance_final_payment">&pound;381.14</td>
		  </tr>
		</table>
	</div>

</div>
<!-- // END Desktop & iPad Finance Table -->


<!-- Mobile Finance Table -->
<div class="twelvecol desktop-hidden">
	<div class="finance-table-wrap">

		<table  class="finance-table">
		  <tr>
		    <th>Hire Purchase</th><td></td>
		  </tr>

		  <tr>
		    <th>Deposit</th><td id="tdmb_finance_deposit">&pound;999.00</td>
		  </tr>

		  <tr>
		    <th>Balance</th><td id="tdmb_finance_balance">&pound;8986.00</td>
		  </tr>

		  <tr>
		    <th>Fees</th><td id="tdmb_finance_fees">&pound;298.00</td>
		  </tr>

		  <tr>
		    <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">&pound;12439.64</td>
		  </tr>

		  <tr>
		    <th>Term</th><td id="tdmb_finance_term">48 mths</td>
		  </tr>

		  <tr>
		    <th class="">Fixed Rate</th><td id="tdmb_finance_rate" class="{HIDE_FINANCE_TERM}">6.00%</td>
		  </tr>

		  <tr>
		    <th>Representative APR</th><td id="tdmb_finance_apr">12.2%</td>
		  </tr>

		  <tr>
		    <th>1st Payment</th><td id="tdmb_finance_first_payment">&pound;381.14</td>
		  </tr>

		  <tr>
		    <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">&pound;232.14 <span>p/m*</span> x 46</td>
		  </tr>

		  <tr>
		    <th>Final Payment</th> <td id="tdmb_finance_final_payment">&pound;381.14</td>
		  </tr>
		</table>

		<!-- Don't remove - opm -->
		<div class="row">
			<div class="twelvecol" id="fin-table-apply-mob">
				<div class="pad-20-top overflow-hidden">
					<a href="finance581c.html?vehicle_id=1220698" title="Apply for finance" class="button full green">Apply For Finance</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- // END Mobile Finance Table -->

    		      <div class="twelvecol fin-promo mobile-hidden">
	<em>
  	Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
    <a href="used-mercedes-benz-c-class-walsall-west-midlands-1220698.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
   </em>
</div> 

<!--<div class="twelvecol fin-promo mobile-hidden">
	<em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-mercedes-benz-c-class-walsall-west-midlands-1220698#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-mercedes-benz-c-class-walsall-west-midlands-1220698#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
</div>-->

            </div>
          </div>
          <!-- // Section 4 -->

        </div>
      </section>


    </div>
  </div>
</div>
<!-- // END Vehicle Listing -->
<!-- Banner -->
<div class="row-block results-banner">
	<div class="container">
		<div class="row">

			<div class="sixcol">
				<img src="img-src/_themev2-globemotors-1372/theme/PausePlan.jpg" class="responsive-img" alt="MotoNovo Finance Specialists">
			</div>
			<div class="sixcol last">
				<img src="img-src/_themev2-globemotors-1372/theme/PCP-car.jpg" class="responsive-img" alt="MotoNovo Finance Specialists">
			</div>

		</div>
	</div>
</div>
<!-- // END Widget Offers -->
<!-- Vehicle Listing -->
<div class="row-block listing  veh-loc-1 veh-even">
  <div class="container">
    <div class="row">


      <section class="container vehicle  veh-loc-1">
        <div class="pad-10 overflow-hidden">

          <!-- Section 1 -->
          <div class="row section1">

            <!-- Vehicle Image -->
          	<div class="fourcol">
            	<a href="used-ford-s-max-walsall-west-midlands-1174402.html" title="2012 12 FORD S-MAX 2.0 TITANIUM TDCI 5d 161 BHP" class="vehicle-image"><img src="../images.clickdealer.co.uk/vehicles/1174/1174402/full/13076224.jpg" alt="View our FORD S-MAX" /></a>
              <div class="button-block">
                <a href="used-ford-s-max-walsall-west-midlands-1174402.html" class="" title="View Gallery"><span aria-hidden="true" class="icon icon-picture"></span> 22 Images</a>
                <a href="used-ford-s-max-walsall-west-midlands-1174402.html" class="youtube" title="View Video"><span aria-hidden="true" class="icon icon-youtube"></span> View Video</a>
              </div>

              <div class="clear"></div>

              <div class="row">
              	<div class="twelvecol mobile-hidden dt-partners">
                	<div class="row">
            		    
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Vehicle Image -->

            <!-- Eightcol Vehicle Data -->
          	<div class="eightcol last">
              <!-- Title -->
              <div class="eightcol vehicle-title">
          			<h3><a href="used-ford-s-max-walsall-west-midlands-1174402.html" title="View Vehicle Details">2012 12 FORD S-MAX 2.0 TITANIUM TDCI 5d 161 BHP</a></h3>
                <cite class="mobile-hidden"></cite>
                <p class="price-save"><span class="price-was">was &pound;10,395</span> save &pound;645!</p>
              </div>

            	<!-- Price -->
              <div class="fourcol last right">
                <div class="price">
            	     <span class="price-is">&pound;9,750<br /><span class="results_monthly_payment"><span class="row results-finance-from">
	<a rel="nofollow" href="used-ford-s-max-walsall-west-midlands-1174402.html#tabs-here" id="nop_vehicle_id_1174402">Finance From &pound;190.12 <span>p/m*</span></a>
</span>
</span></span>
                </div>
				
              </div>

              <div class="clear"></div>


              <div class="row">
              	<div class="twelvecol desktop-hidden mob-partners">
                	<div class="row">
            				
<div class="fourcol center"><img src="images/partners/partner-motonovo.png" alt="Partner" class="responsive-img"></div><div class="fourcol center"><img src="images/partners/partner-close.png" alt="Partner" class="responsive-img"></div><div class="fourcol last center"><img src="images/partners/partner-firstresponse.png" alt="Partner" class="responsive-img"></div>
                	</div>
                </div>
              </div>


              <div class="clear"></div>

				      <!-- Meta Info -->
				     <div class="row">

					      <!--
                <div class="threecol spec-one mobile-half-col">
					        <div class="spec one">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-mileage"></span> 68200 Miles</li>
					              <li><span aria-hidden="true" class="icon-color-palette"></span> Grey</li>
					              <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
					              <li><span aria-hidden="true" class="icon-transmission"></span> Manual</li>
					              <li><span aria-hidden="true" class="icon-capacity"></span> 2.0 L</li>
					            </ul>
					          </div>
					        </div>
					       </div>

					       <div class="fourcol spec-two mobile-half-col">
					        <div class="spec two">
					          <div class="pad-10-top-bottom">
					            <ul>
					              <li><span aria-hidden="true" class="icon-road"></span> 52.3 Avg. MPG</li>
					              <li><span aria-hidden="true" class="icon-insurance"></span> Group 19 Ins.</li>
					              <li><span aria-hidden="true" class="icon-upload"></span> 143 CO&sup2; (g/km)</li>
					              <li><span aria-hidden="true" class="icon-tax12"></span> &pound;155.00 12m Tax</li>
					              <li><span aria-hidden="true" class="icon-tax6"></span> &pound;85.25 6m Tax</li>
					            </ul>
					          </div>
					        </div>
					      </div>-->

                <!-- Meta Info -->
<div class="threecol spec-one mobile-half-col">
  <div class="spec one">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-mileage"></span> 68200 miles</li>
        <li><span aria-hidden="true" class="icon-color-palette"></span> Grey</li>
        <li><span aria-hidden="true" class="icon-gas-pump-2"></span> Diesel</li>
        <li><span aria-hidden="true" class="icon-transmission"></span> Manual</li>
        <li><span aria-hidden="true" class="icon-capacity"></span> 2.0 L</li>
      </ul>
    </div>
  </div>
 </div>
 
 <div class="fourcol spec-two mobile-half-col">
  <div class="spec two">
    <div class="pad-10-top-bottom">
      <ul>
        <li><span aria-hidden="true" class="icon-road"></span> 52.3 Avg. MPG</li>
        <li><span aria-hidden="true" class="icon-insurance"></span> Ins. Group: 19</li>
        <li><span aria-hidden="true" class="icon-upload"></span> 143 CO&sup2; (g/km)</li>
        <li><span aria-hidden="true" class="icon-tax12"></span> &pound;155.00 12m Tax</li>
        <li><span aria-hidden="true" class="icon-tax6"></span> &pound;85.25 6m Tax</li>
      </ul>
    </div>
  </div>
</div>



					      <div class="fivecol spec-three last mobile-hidden">
					        <div class="spec ticks">
					          <div class="pad-10-top-bottom">
					            <ul>
                        <li><span aria-hidden="true" class="icon-checkmark"></span> + FULL SERVICE HISTORY LAST @ 62K +</li><li><span aria-hidden="true" class="icon-checkmark"></span> + BUY WITH CONFIDENCE PACKAGE +</li><li><span aria-hidden="true" class="icon-checkmark"></span> 12 MONTH RAC WARRANTY + BREAKDOWN COVER</li><li><span aria-hidden="true" class="icon-checkmark"></span> + 12 MONTHS NEW MOT + RAC APRROVED </li><li><span aria-hidden="true" class="icon-checkmark"></span>  + ZERO DEPOSIT FINANCE ARRANGED +</li>
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
                    <button type="button" class="button full green addfavourite" id="favourite-1174402" title="Favourite">Add to Favourites</button>
                  </div>
                  <div class="results-btn-compare fourcol mobile-hidden">
                    <a href="compare.html" class="button white full" title="Compare">View Favourites</a>
                  </div>
                  <!-- Mobile Only -->
                  <div class="results-btn-finance fourcol last desktop-hidden mobile-half-col">
                    <a href="used-ford-s-max-walsall-west-midlands-1174402.html#tabs-here" class="button black full" title="View Finance Details"><span aria-hidden="true" class="icon icon-calculate"></span> Finance Options</a>
                  </div>
                  <!-- // END Mobile Only -->
                  <div class="results-btn-view fivecol last mobile-half-col">
                    <a href="used-ford-s-max-walsall-west-midlands-1174402.html" class="button black full" title="View Vehicle Details"><span aria-hidden="true" class="icon icon-search"></span> View Vehicle</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- // END Eightcol Vehicle Data-->

          </div>
          <!-- // Section 1 -->


          <!-- Section 4 -->
          <div class="row section4 mobile-hidden">

          	<div class="twelvecol">
            	<!-- Desktop & iPad Finance Table -->
<div class="twelvecol mobile-hidden">
	<div class="finance-table-wrap">
		<table  class="finance-table" id="finance_1174402">
			<tr>
				
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
		    <td id="td_finance_deposit">&pound;975.00</td>
		    <td id="td_finance_balance">&pound;8775.00</td>
		    <td id="td_finance_fees">&pound;298.00</td>
		    <td id="td_finance_total_inc_deposit">&pound;12680.50</td>
		    <td id="td_finance_term">60 mths</td>
		    <td id="td_finance_rate" class="">6.00%</td>
		    <td id="td_finance_apr">11.9%</td>
		    <td id="td_finance_first_payment">&pound;339.12</td>
		    <td id="td_finance_monthly_payments">&pound;190.12 <span>p/m*</span> x 58</td>
		    <td id="td_finance_final_payment">&pound;339.12</td>
		  </tr>
		</table>
	</div>

</div>
<!-- // END Desktop & iPad Finance Table -->


<!-- Mobile Finance Table -->
<div class="twelvecol desktop-hidden">
	<div class="finance-table-wrap">

		<table  class="finance-table">
		  <tr>
		    <th>Hire Purchase</th><td></td>
		  </tr>

		  <tr>
		    <th>Deposit</th><td id="tdmb_finance_deposit">&pound;975.00</td>
		  </tr>

		  <tr>
		    <th>Balance</th><td id="tdmb_finance_balance">&pound;8775.00</td>
		  </tr>

		  <tr>
		    <th>Fees</th><td id="tdmb_finance_fees">&pound;298.00</td>
		  </tr>


		  <tr>
		    <th>Total Payable</th><td id="tdmb_finance_total_inc_deposit">&pound;12680.50</td>
		  </tr>

		  <tr>
		    <th>Term</th><td id="tdmb_finance_term">60 mths</td>
		  </tr>

		  <tr>
		    <th class="">Fixed Rate</th><td id="tdmb_finance_rate" class="{HIDE_FINANCE_TERM}">6.00%</td>
		  </tr>

		  <tr>
		    <th>Representative APR</th><td id="tdmb_finance_apr">11.9%</td>
		  </tr>

		  <tr>
		    <th>1st Payment</th><td id="tdmb_finance_first_payment">&pound;339.12</td>
		  </tr>

		  <tr>
		    <th>Monthly Payment</th><td id="tdmb_finance_monthly_payments">&pound;190.12 <span>p/m*</span> x 58</td>
		  </tr>

		  <tr>
		    <th>Final Payment</th> <td id="tdmb_finance_final_payment">&pound;339.12</td>
		  </tr>
		</table>

		<!-- Don't remove - opm -->
		<div class="row">
			<div class="twelvecol" id="fin-table-apply-mob">
				<div class="pad-20-top overflow-hidden">
					<a href="finance2709.html?vehicle_id=1174402" title="Apply for finance" class="button full green">Apply For Finance</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- // END Mobile Finance Table -->

    		      <div class="twelvecol fin-promo mobile-hidden">
	<em>
  	Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span>
    Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span>
    <a href="used-ford-s-max-walsall-west-midlands-1174402.html#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a>
   </em>
</div> 

<!--<div class="twelvecol fin-promo mobile-hidden">
	<em>Low deposit finance available<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>Use Part Exchange as Deposit<span aria-hidden="true" class="icon icon-arrow-right"></span><span aria-hidden="true" class="icon icon-arrow-right"></span>  <a href="/used-ford-s-max-walsall-west-midlands-1174402#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span><a href="/used-ford-s-max-walsall-west-midlands-1174402#tabs-here" title="Apply For Finance"><span aria-hidden="true" class="icon icon-mouse"></span>Apply for finance here</a></a></em>
</div>-->

            </div>
          </div>
          <!-- // Section 4 -->

        </div>
      </section>


    </div>
  </div>
</div>
<!-- // END Vehicle Listing -->

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











<?php include 'footer.php';?>
