<!-- Main Content -->
<div id="main-wrap">
    <div id="page-warrior">
        <div id="email-pg">
            <div class="container">
                <div class="wrapper">
                    <div class="row">


                        <!-- Threecol Last -->
                        <div class="threecol">
                        </div>
                        <!-- // END Threecol Last -->


                        <!-- sixcol (Content) -->
                        <div class="sixcol block">
                            <div class="pad-20">
                               <h2>Part Exchange</h2>
                                <p>Our online application is quick, simple and secure.<br>
                                    Once completed, one of our team will contact you straight back.
                                    </p>

                                <?= form_open_multipart('save_parts', array('class' => 'site_form')) ?>
                                    <fieldset>
                                       <input type="hidden" name="form_type" value="partexchange">
                                        <!--input type="hidden" name="vehicle_id" value="<?= $car[0]->id ?>"-->
                                        <!--input type="hidden" name="subject" value="Send your offer: <?= $car[0]->registered . ' ' . $car[0]->makeof . ' ' . $car[0]->model?>"-->
                                        
                                        <div class="row">
                                            <div class="threecol">
                                            <label for="vehicle">Select Vehicle<span class="required"></span></label></div>
                                            <div class="ninecol last">
                                                <select name="vehicle" class="form-field" id="vehicle">
                                                   <?php foreach($cars as $car){ ?>
                                                       <option value="<?php echo $car->makeof.'-'.$car->model;?>"><?php echo $car->makeof.'-'.$car->model;?></option>
                                                   <?php } ?>
                                                </select>
                                            </div>
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
                                    </fieldset>
                                <?= form_close() ?>

                            </div>
                        </div>
                        <!-- // Sixcol (Content) -->


                        <!-- Threecol Last -->
                        <div class="threecol last">
                        </div>
                        <!-- // END Threecol Last -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Main Content -->
