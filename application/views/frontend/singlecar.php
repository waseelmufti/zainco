<!-- Main Content -->
<div id="main-wrap">
  <div id="page-warrior">
	<div id="detail-pg">
  <div class="container">
    <div class="wrapper">
      <div class="row">



	      <!-- Detail -->
	      <div id="detail" class="twelvecol block car-1316306  veh-loc-1">
		      <div class="container">
			      <div class="pad-20 overflow-hidden mobile-nopad">


			        <!-- Detail Header -->
			      	<div class="row section1 detail-header">

			        	<div class="eightcol">
			          	<h1><?php echo $car[0]->title; ?></h1>
			          	<cite class="mobile-hidden"></cite>
			          </div>

			        	<div class="fourcol last">
			            <div class="row">
			              <div class="sixcol">
			                <span class="price">
                        Rs <?php echo ($car[0]->discount) ? $car[0]->price - $car[0]->discount : $car[0]->price; ?>
                      </span>
			              </div>
			              <div class="sixcol last">
			                <a href="#" title="Go Back" class="back beta mobile-hidden">
                        <span class="icon icon-undo" aria-hidden="true"></span>
                        Go Back</a>
			              </div>
			            </div>
			          </div>

			        </div>
			        <!-- // Detail Header -->

			        <!-- Detail Presentation -->
			        <div class="row section2 detail-presentation">

			        	<div class="eightcol">
			          	<div id="gallery-2" class="royalSlider rsDefault rsHor rsFade rsWithThumbs rsWithThumbsHor" style="height: 596.094px;">
                    <div class="rsOverflow" style="width: 700px; height: 600px;">
                     <div class="slider-for">
                         <?php foreach ($car_image as $img) {  ?>
                         <img class="rsImg" src="<?= site_url('uploads/images/').$img->image ?>" style="width: 700px; height: 468px; margin-left: 0px; margin-top: 28px;">
                         <?php } ?>
                     </div>
                     <div class="slider-nav">
                         <?php foreach ($car_image as $img) {  ?>
                         <img class="rsImg" src="<?= site_url('uploads/images/').$img->image ?>">
                         <?php } ?>
                     </div>
                          
                      </div>
                   </div>

			            <div class="clear"></div>

					        <!-- Detail Features -->
					        <div class="twelvecol tablet-only">
                    <div class="row section3">

						        	<div class="fourcol mobile-half-col">
						          	<ul>
						            	<li><span aria-hidden="true" class="icon icon-mileage"></span> <?= $car[0]->mileage ?> Miles</li>
						            	<li><span aria-hidden="true" class="icon icon-gas-pump-2"></span> <?= $car[0]->fuel_type ?> </li>
						            	<li><span aria-hidden="true" class="icon icon-transmission"></span> <?= $car[0]->transmission ?> </li>
						            </ul>
						          </div>

						          <!--<div class="fourcol mobile-half-col">
						          	<ul>
						              <li><span aria-hidden="true" class="icon icon-upload"></span> <?= $car[0]->co_emission ?> CO² (g/km)</li>
						              <li><span aria-hidden="true" class="icon icon-tax12"></span> - 12m Tax</li>
						              <li><span aria-hidden="true" class="icon icon-tax6"></span> - 6m Tax</li>
						            </ul>
						          </div>
-->
						          <div class="fourcol last mobile-border-top mobile-hidden">
						            <ul>
						              <li><span aria-hidden="true" class="icon icon-capacity"></span> <?= $car[0]->engine_capacity ?> L</li>
						              <!--<li><span aria-hidden="true" class="icon icon-road"></span> <?= $car[0]->mpg ?> Avg. MPG</li>
						              <li><span aria-hidden="true" class="icon icon-insurance"></span> Group <?= $car[0]->ins_grp ?> Ins.</li>-->
						            </ul>
						          </div>

						        </div>
					      	</div>
					        <!-- // Detail Features -->
			          </div>

			          <div class="fourcol last">
			            <div class="price-wrapper">
			              <div class="pad-10 overflow-hidden">
			                <span class="detail_was">
                        <?= ($car[0]->discount) ? 'was Rs.' . $car[0]->price .' save Rs.' . $car[0]->discount : '' ?>
                      </span>

			                <span class="detail_monthly_payment">
                        <a id="tab_action" href="#tabs-here" title="Apply For Finance">
                          <span class="row detail-finance-from">
                            <!-- <span class="finance-price" id="nop_vehicle_id_1316306">
                              Finance From £337.00 <span>p/m*</span>
                            </span> -->
                          </span>
                        </a>
                      </span>
							  <div class="factory-fitted-extras"><p><a class="fitted-extras-tab-click" href="#fitted-extras" title="Factory fitted extras" target="_self">Including <span>£6,200</span> Fitted Extras</a></p></div>
			              </div>
			            </div>

									<ul class="details-cta">
	<!-- Mobile Only CTA -->
		<li class="desktop-hidden"><a href="tel:01215262220" class=""><span aria-hidden="true" class="icon icon-phone-2"></span> 0121 5262220</a></li>
	<!-- // END Mobile Only CTA -->
    <!--<li id="reserve" class=""><a href="<?= site_url('buy-it-now/').$car[0]->id ?>" class=""><span aria-hidden="true" class="icon icon-medal"></span>Reserve Vehicle</a></li>-->
    
    <li id="test" class=""><a href="<?= site_url('book-test-drive/').$car[0]->id ?>" class=""><span aria-hidden="true" class="icon icon-steering-wheel"></span>Book Test Drive</a></li>
    
    <li id="enquire" class=""><a href="<?= site_url('enquiry/').$car[0]->id ?>" class=""><span aria-hidden="true" class="icon icon-comments-2"></span>Send An Enquiry</a></li>
    
    <li id="print" class="mobile-hidden">
    <a href="<?= site_url('send-offer/').$car[0]->id ?>" title="Send Your Offer"><span aria-hidden="true" class="icon icon-printer"></span>Send Your Offer</a></li>
    <li id="pex" class="mobile-hidden"><a href="<?= site_url('part-exchange/').$car[0]->id ?>" title="Part Ex Your Car"><span aria-hidden="true" class="icon icon-spin"></span>Part Exchange</a></li>
    <li id="similar" class=""><a href="<?= site_url('get-direction') ?>" title="Location"><span aria-hidden="true" class="icon icon-cars"></span>Location</a></li>
</ul>


			            <!-- Compare Functions -->
			            <div class="row favourites-button">
			            	<div class="sixcol mobile-half-col"><button type="button" class="button full green addfavourite" id="favourite-1316306" title="Favourite">Add to Favourites</button></div>
			            	<div class="sixcol mobile-half-col last"><a href="" class="button orange full" title="Compare">View Favourites</a></div>
			            </div>
			            <!-- // Compare Functions -->
			        		<div class="clear"></div>

			            <!-- AddThis Button BEGIN
									<div class="row pad-10-top-bottom">
									<div class="addthis_native_toolbox"></div>
									<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f4633c376f3dbec" async="async"></script>
									</div>
			            -->

			          </div>

			        </div>
			        <!-- // Detail Presentation -->
			        <div class="clear"></div>

			        <div class="row">

			        </div>

			        <div class="clear"></div>

							<!-- Detail Tab Content -->
							<div id="detail-tab-content">
								<div class="wrapper">
									<div class="container">
										<h2 class="lined-heading"><span>Vehicle Information</span></h2>
										<!-- Detail Tabbed Content -->
										<div id="fitted-extras"></div>
							      <div id="tabs-here">
							        <div class="detail-tabs">
						            <ul class="tabs">
						              <li id="tab_header_details" class="current"><span aria-hidden="true" class="icon icon-clipboard"></span> Features</li>
						              <li id="tab_header_features" class=""><span aria-hidden="true" class="icon icon-checkbox"></span> Description</li>
						              <!-- <li id="tab_header_finance" class="finance-available"><span aria-hidden="true" class="icon icon-calculate"></span> Finance</li> -->
						              <li id="tab_header_gallery" class="mobile-hidden"><span aria-hidden="true" class="icon icon-pictures"></span> Gallery</li>
													<li id="tab_header_click360" style="display:none;" class="">360 Viewer<span aria-hidden="true" class="icon icon-arrow-down"></span></li>
						            </ul>

						            <!-- Tab -->
						            <div id="tab_body_details" class="box " style="display: block;">
						              <div class="row">
						                <div class="pad-10 overflow-hidden">
						                  <div class="tab-content">
						                    <div class="pad-10">

																	<div class="twelvecol accordion">

																		<div id="accordion-tech" class="ui-accordion ui-widget ui-helper-reset" role="tablist">
								                      <h3 class="ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="true" aria-expanded="true" tabindex="0">
                                        <span class="ui-accordion-header-icon ui-icon ui-icon-minus"></span>
                                        <span aria-hidden="true" class="icon icon-clipboard"></span> Vehicle Summary</h3>
								                      <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="display: block;" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
								                      	<ul class="row tablist">
                                          <li class="">
                                            <div class="list-label">Body style</div>
                                            <div class="list-stat"><?= $car[0]->body_style ?></div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Engine size</div>
                                            <div class="list-stat"><?= $car[0]->engine_size ?>cc</div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Engine capacity</div>
                                            <div class="list-stat"><?= $car[0]->engine_capacity ?> L</div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Fuel type</div>
                                            <div class="list-stat"><?= $car[0]->fuel_type ?></div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Number of doors</div>
                                            <div class="list-stat"><?= $car[0]->no_doors ?></div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Number of seats</div>
                                            <div class="list-stat"><?= $car[0]->no_seats ?></div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Transmission</div>
                                            <div class="list-stat"><?= $car[0]->transmission ?></div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">CO2 emissions</div>
                                            <div class="list-stat"><?= $car[0]->co_emission ?> g/km</div>
                                          </li><!--<li class="">
                                            <div class="list-label">Insurance group</div>
                                            <div class="list-stat"><?= $car[0]->ins_grp ?></div>
                                          </li>-->
                                        </ul>
								                      </div>

								                      <h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
                                        <span class="ui-accordion-header-icon ui-icon ui-icon-plus"></span>
                                        <span aria-hidden="true" class="icon icon-meter-fast"></span> Performance &amp; Economy
                                      </h3>
								                      <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true">
								                      	<ul class="row tablist">
                                          <li class="">
                                            <div class="list-label">Fuel consumption (urban)</div>
                                            <div class="list-stat"><?= $car[0]->fuel_cons_ur ?> mpg</div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Fuel consumption (extra urban)</div>
                                            <div class="list-stat"><?= $car[0]->fuel_cons_ex ?> mpg</div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Fuel consumption (combined)</div>
                                            <div class="list-stat"><?= $car[0]->fuel_cons_com ?> mpg</div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">0 - 60 mph</div>
                                            <div class="list-stat"><?= $car[0]->z_s_mph ?> seconds</div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Top speed</div>
                                            <div class="list-stat"><?= $car[0]->top_speed ?> mph</div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Cylinders</div>
                                            <div class="list-stat"><?= $car[0]->cylinders ?></div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Engine power</div>
                                            <div class="list-stat"><?= $car[0]->engine_pow ?> bhp</div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Engine torque</div>
                                            <div class="list-stat"><?= $car[0]->engine_tor ?> lbs/ft</div>
                                          </li>
                                        </ul>
								                      </div>

								                      <!--<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1">
                                        <span class="ui-accordion-header-icon ui-icon ui-icon-plus"></span>
                                        <span aria-hidden="true" class="icon icon-expand"></span> Dimensions
                                      </h3>-->
								                      <!--<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true">
								                      	<ul class="row tablist">
                                          <li class="">
                                            <div class="list-label">Length</div>
                                            <div class="list-stat"><?= $car[0]->length ?>mm</div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Wheelbase</div>
                                            <div class="list-stat"><?= $car[0]->wheelbase ?>mm</div>
                                          </li>
                                          <li class="">
                                            <div class="list-label">Width</div>
                                            <div class="list-stat"><?= $car[0]->width ?>mm</div>
                                          </li>
                                        </ul>
								                      </div>-->

																			<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-7" aria-controls="ui-id-8" aria-selected="false" aria-expanded="false" tabindex="-1">
                                        <span class="ui-accordion-header-icon ui-icon ui-icon-plus"></span>
                                        <span aria-hidden="true" class="icon icon-cars"></span> Interior / Exterior
                                      </h3>
																			<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" id="ui-id-8" aria-labelledby="ui-id-7" role="tabpanel" aria-hidden="true">
																				<div class="row">
																					<div class="sixcol">
																						<p>
                                              <span aria-hidden="true" class="icon icon-steering-wheel"></span> Interior
                                            </p>

																						<ul class="row tablist">
                                              <?php foreach ($interior as $int) { ?>
                                                <li class="">
                                                  <div class="list-stat"><?= $int->feature ?></div>
                                                </li>
                                              <?php } ?>
                                            </ul>
																					</div>
																					<div class="sixcol last">
																						<p>
                                              <span aria-hidden="true" class="icon icon-cars"></span> Exterior
                                            </p>
																						<ul class="row tablist">
                                              <?php foreach ($exterior as $ext) { ?>
                                                <li class="">
                                                  <div class="list-stat"><?= $ext->feature ?></div>
                                                </li>
                                              <?php } ?>
                                            </ul>
																					</div>
																				</div>
																				<div class="row">
																					<div class="sixcol">
																						<p>
                                              <span aria-hidden="true" class="fa fa-bed"></span> Comfort
                                            </p>
																						<ul class="row tablist">
                                              <?php foreach ($comfort as $com) { ?>
                                                <li class="">
                                                  <div class="list-stat"><?= $com->feature ?></div>
                                                </li>
                                              <?php } ?>
                                              </ul>
																					</div>
																					<div class="sixcol last">
																					</div>
																				</div>
																			</div>

														<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-9" aria-controls="ui-id-10" aria-selected="false" aria-expanded="false" tabindex="-1">
                              <span class="ui-accordion-header-icon ui-icon ui-icon-plus"></span>
                              <span aria-hidden="true" class="icon icon-safety"></span> Safety / Other
                            </h3>
														<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" id="ui-id-10" aria-labelledby="ui-id-9" role="tabpanel" aria-hidden="true">
															<div class="row">
																	<div class="sixcol">
																		<p>
                                      <span aria-hidden="true" class="icon icon-safety"></span> Safety
                                    </p>
																		<ul class="row tablist">
                                      <?php foreach ($safety as $saf) { ?>
                                        <li class="">
                                          <div class="list-stat"><?= $saf->feature ?></div>
                                        </li>
                                      <?php } ?>
                                      </ul>
																	</div>
																	<div class="sixcol last">
																		<p>
                                      <span aria-hidden="true" class="icon icon-wrench"></span> Other
                                    </p>
																		<ul class="row tablist">
                                      <?php foreach ($other as $oth) { ?>
                                        <li class="">
                                          <div class="list-stat"><?= $oth->feature ?></div>
                                        </li>
                                      <?php } ?>
                                      </ul>
																	</div>
															</div>
														</div>
							            </div>
                    		<div class="row">
                        	<p>For more info on this vehicle call our showroom on 0121 5262220<br>
                        	Every effort has been made to ensure the
  accuracy of the above information but errors 	may occur. Please check
  with a salesperson.</p>
                        </div>
  										</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

						            <!-- Tab -->
						            <div id="tab_body_features" class="box " style="display: none;">
						              <div class="row">
						                <div class="pad-10 overflow-hidden">
						                  <div class="tab-content">
						                    <div class="pad-10">

						                      <h2><span aria-hidden="true" class="icon icon-checkbox"></span> Description</h2>
																	<div class="fourcol">
																		<ul class="summary-list">
																			<li class="twelvecol"><div class="list-label"><span aria-hidden="true" class="fa fa-calendar"></span> Registered: <></div></li>
																			<li class="twelvecol"><div class="list-label"><span aria-hidden="true" class="icon-mileage"></span> Mileage: <?= $car[0]->mileage ?> miles</div></li>
																			<li class="twelvecol"><div class="list-label"><span aria-hidden="true" class="icon icon-capacity"></span> Engine Size: <?= $car[0]->engine_size ?> L</div></li>
																			<li class="twelvecol"><div class="list-label"><span aria-hidden="true" class="icon icon-gas-pump-2"></span> Fuel Type: <?= $car[0]->transmission ?></div></li>
																			<li class="twelvecol"><div class="list-label"><span aria-hidden="true" class="icon-transmission"></span> Gearbox: <></div></li>
																			<li class="twelvecol"><div class="list-label"><span aria-hidden="true" class="fa fa-car"></span> Body Style: <?= $car[0]->body_style ?></div></li>
																			<li class="twelvecol"><div class="list-label"><span class="fa fa-paint-brush"></span> Colour: <?= $car[0]->color ?></div></li>
																			<li class="twelvecol"><div class="list-label"><span class="fa fa-user"></span> Owners: <></div></li>
																		</ul>
																	</div>
																	<div class="eightcol last">
							                      <p id="location-text"><b>For more info on this vehicle call our showroom on 0121 5262220</b></p>

							                      <!-- New Style -->
																		<p><span id="custom-text"><?= $car[0]->description ?></span></p>
																		<p>
                                      <span id="dealer-strapline"></span>
                                    </p>

							                      <p>Every effort has been made to ensure the
 accuracy of the above information but errors may occur. Please check
with a salesperson.</p>
																	</div>
						                    </div>
						                  </div>
						                </div>
						              </div>
						            </div>

						            <!-- Tab -->

						            <!-- Tab -->
						            <div id="tab_body_gallery" class="box mobile-hidden " style="display: none;">
						              <div class="row ">
						                <div class="pad-10 overflow-hidden">
						                  <div class="tab-content">
						                    <div class="pad-10">

						                      <h2><span aria-hidden="true" class="icon icon-pictures"></span> Gallery</h2>

						                      <!-- Vehicle Images-->
						                      <ul class="row image-grid">
                                    <?php  $i=1; ?>
                                    <?php foreach ($car_image as $img) { ?>
                                      <li class="twocol">
                                        <a class="group4 cboxElement" title="<?= $car[0]->title.' - image '. $i  ?>image 1"
                                          href="<?php echo site_url('uploads/images/').$img->image ?>">
                                          <img src="<?= site_url('uploads/images/').$img->image?>" alt="<?= $car[0]->title ?>">
                                        </a>
                                      </li>
                                    <?php } ?>
						                      </ul>
						                      <!-- //Vehicle Images -->
						                    </div>
						                  </div>
						                </div>
						              </div>
						            </div>
												<div id="tab_body_click360" class="box" style="display:none;">
						              <div class="row">
						                <div class="pad-10 overflow-hidden">
						                  <div class="tab-content">
						                    <div class="pad-10">

						                    	<div class="flexible-frame">



						                      </div>

						                    </div>
						                  </div>
						                </div>
						              </div>
						            </div>

							        </div>
							      </div>
							      <!-- // Detail Tabbed Content -->
						      </div>
						    </div>
							</div>
							<!-- // Detail Tab Content -->


							<!-- Detail Document Upload -->
							<div id="section7" class="section7 mobile-hidden mobile-hidden tablet-hidden desktop-hidden">
								<div class="wrapper">
									<div class="container">
										<h2><span aria-hidden="true" class="icon icon-copy"></span> Documents</h2>
										<p>The following documents are available for this vehicle:</p>
										<!-- Document List -->
										<div class="document-list">

										</div>
										<!-- // Document List -->
									</div>
								</div>
							</div>
							<!-- // Detail Document Upload -->



<div class="scrollbar-holder">
  <div class="scrollbar dark" style="width: 430px; left: 89px;"></div>
</div>
</div>

</div>
</div>
</div>
			      </div>
		      </div>
	      </div>

				</div>
    </div>
  </div>
</div>
</div>

</div>
<!-- // Main Content -->
