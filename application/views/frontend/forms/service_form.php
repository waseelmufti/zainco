<p>
    Our online application is quick, simple and secure.<br> Once completed, one of our team will contact you straight back.
</p>

<?= form_open('servicing', array('class' => 'site_form')) ?>
   <?php if($this->session->flashdata('error')){ ?>
     <div class="twelvecol" style="padding: 5px; background: #ed2728; color: #fff;"><?= $this->session->flashdata('error') ?></div>
<?php } ?>
    <fieldset>
        <input type="hidden" name="form_type" value="<?php echo $form_type; ?>">

        <div class="row">
            <div class="threecol"><label>Reg Number<span class="required">*</span></label></div>
            <div class="ninecol last"><input size=40 name="reg_num" placeholder="Registration Number (Required)" type="text" required></div>
        </div>

        <div class="row">
            <div class="threecol"><label>Make Of Car<span class="required">*</span></label></div>
            <div class="ninecol last"><input size=40 name="make_of_car" placeholder="Make Of Car (Required)" type="text" required></div>
        </div>
        
        <div class="row">
            <div class="threecol"><label>Model<span class="required">*</span></label></div>
            <div class="ninecol last"><input size=40 name="model" placeholder="Model (Required)" type="text" required></div>
        </div>
        
        <div class="row">
            <div class="threecol"><label>Year<span class="required">*</span></label></div>
            <div class="ninecol last"><input size=40 name="year" placeholder="Year (Required)" type="text" required></div>
        </div>
        
        <div class="row">
            <div class="threecol"><label>Mileage<span class="required"></span></label></div>
            <div class="ninecol last"><input size=40 name="mileage" placeholder="Mileage" type="text"></div>
        </div>
        
        <div class="row">
            <div class="threecol"><label>Name<span class="required">*</span></label></div>
            <div class="ninecol last"><input size=40 name="name" placeholder="Name (Required)" type="text" required></div>
        </div>
        
        <div class="row">
            <div class="threecol"><label>Email<span class="required">*</span></label></div>
            <div class="ninecol last"><input name="email" placeholder="Email (Required)" type="email" required></div>
        </div>
        
        <div class="row">
            <div class="threecol"><label>Telephone<span class="required">*</span></label></div>
            <div class="ninecol last"><input size=40 name="phone" placeholder="Phone (Required)" type="text" required></div>
        </div>
        <div class="row">
        <?php
        if($form_type == 'servicing'){ 
        ?>
            <div class="threecol">
                <label for="vehicle">Which service you want to done on your veachile? <span class="required">*</span></label>
                </div>
            <div class="ninecol last">
               <label class="label">
                <input type="checkbox" class="checkbox" name="want_service[]" id="" value="Engine Service" checked> Engine Service </label>
                <label class="label">
                <input type="checkbox" class="checkbox" name="want_service[]" id="" value="Breaks"> Breaks</label>
                <label class="label">
                <input type="checkbox" class="checkbox" name="want_service[]" id="" value="Tyers"> Tyers</label>
                <label class="label">
                <input type="checkbox" class="checkbox" name="want_service[]" id="" value="Air Conditioning"> Air Conditioning</label>
                <label class="label">
                <input type="checkbox" class="checkbox" name="want_service[]" id="" value="Suspension"> Suspension</label>
                <label class="label">
                <input type="checkbox" class="checkbox" name="want_service[]" id="" value="Batteries"> Batteries</label>
            </div>
        <?php }elseif($form_type == 'cardignose'){?>
                
                <div class="threecol">
                <label for="vehicle">Options <span class="required">*</span></label>
                </div>
            <div class="ninecol last">
               <label class="label">
                <input type="checkbox" class="checkbox" name="daignose_opt[]" id="" value="Mobile Car Dignose" checked> Mobile Car Dignose</label>
                <label class="label">
                <input type="checkbox" class="checkbox" name="daignose_opt[]" id="" value="Book in our Garage"> Book in our Garage</label>
            </div>
        
        <?php }?>
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