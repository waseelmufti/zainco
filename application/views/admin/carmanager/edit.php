  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Car Manager
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Car Manager</a></li>
        <li><a href="#">Update Car</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <!--  Multi Tabs Form -->
        <?php echo form_open_multipart('admin/dashboard/car/update'); ?>
        <div class="box-header with-border">
          <h3 class="box-title">Update Car</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Features</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Description</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="true">Gallery</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  <h3>Vehicle Information</h3>
                  <div class="form-group">
                    <label for="title">Title*</label>
                    <input class="form-control" id="title" placeholder="Enter Title" name="title" type="text" value="<?php echo $car[0]->title; ?>" required>
                  </div>

                  <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label for="make">Make Of*</label>
                      <input class="form-control" id="make" placeholder="Enter Car Make of" name="makeof" type="text" value="<?php echo $car[0]->makeof; ?>" required>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label for="model">Model*</label>
                      <input class="form-control" id="model" placeholder="Enter Model" name="model" type="text" value="<?php echo $car[0]->model;?>" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label for="price">Price*</label>
                    <input class="form-control" id="price" placeholder="Enter Price" name="price" type="text" value="<?php echo $car[0]->price;?>" required>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label for="discount">Discount - if any</label>
                    <input class="form-control" id="discount" placeholder="Enter Discount Price" name="discount" type="text" value="<?php echo $car[0]->discount;?>">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label for="register">Registered*</label>
                    <input class="form-control" id="register" placeholder="Enter Registered" name="register" type="text" value="<?php echo $car[0]->registered;?>" required>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label for="owners">Owners*</label>
                    <input class="form-control" id="owners" placeholder="Enter Owners" name="owners" type="text" value="<?php echo $car[0]->owners;?>" required>
                  </div>
                </div>
              </div>
              <h3>Vehicle Summary</h3>
              <div class="row">
              <div class="col-xs-12 col-md-3">
                <div class="form-group">
                  <label for="body_style">Body Style*</label>
                  <input class="form-control" id="body_style" placeholder="Enter Body Style" name="body_style" type="text" value="<?php echo $car[0]->body_style;?>" required>
                </div>
              </div>
              <div class="col-xs-12 col-md-3">
                <div class="form-group">
                  <label for="color">Color*</label>
                  <input class="form-control" id="color" placeholder="Enter Color" name="color" type="text" value="<?php echo $car[0]->color;?>" required>
                </div>
              </div>
              <div class="col-xs-12 col-md-3">
                <div class="form-group">
                  <label for="no_doors">Number of doors*</label>
                  <input class="form-control" id="no_doors" placeholder="Enter Number of Doors" name="no_doors" type="number" value="<?php echo $car[0]->no_doors;?>" required>
                </div>
              </div>
              <div class="col-xs-12 col-md-3">
                <div class="form-group">
                  <label for="no_seats">Number of seats*</label>
                  <input class="form-control" id="no_seats" placeholder="Enter Number of Seats" name="no_seats" type="number" value="<?php echo $car[0]->no_seats;?>" required>
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label for="engine_size">Engine Size*</label>
                <input class="form-control" id="engine_size" placeholder="Enter Engine Size" name="engine_size" type="text" value="<?php echo $car[0]->engine_size;?>" required>
              </div>
            </div>
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label for="engine_capacity">Engine Capacity*</label>
                <input class="form-control" id="engine_capacity" placeholder="Enter Engine Capacity" name="engine_capacity" type="number" step="any" value="<?php echo $car[0]->engine_capacity;?>" required>
              </div>
            </div>
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label for="fuel_type">Fuel Type*</label>
                <input class="form-control" id="fuel_type" placeholder="Enter Fuel Type" name="fuel_type" type="text" value="<?php echo $car[0]->fuel_type;?>" required>
              </div>
            </div>
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label for="transmission">Transmission*</label>
                <input class="form-control" id="transmission" placeholder="Enter Transmission" name="transmission" type="text" value="<?php echo $car[0]->transmission;?>" required>
              </div>
            </div>
          </div>

          <div class="row">
          <div class="col-xs-12 col-md-3">
            <div class="form-group">
              <label for="co_emission">CO2 emissions*</label>
              <input class="form-control" id="co_emission" placeholder="Enter CO2 emissions" name="co_emission" type="text" value="<?php echo $car[0]->co_emission;?>" required>
            </div>
          </div>
          
          <div class="col-xs-12 col-md-3">
            <div class="form-group">
              <label for="gearbox">Gearbox</label>
              <input class="form-control" id="gearbox" placeholder="Enter Gearbox" name="gearbox" type="text" value="<?php echo $car[0]->gearbox;?>" >
            </div>
          </div>
          <div class="col-xs-12 col-md-3">
            <div class="form-group">
              <label for="gearbox">Mileage</label>
              <input class="form-control" id="gearbox" placeholder="Enter Mileage" name="mileage" type="number" step="any" value="<?php echo $car[0]->mileage;?>" required>
            </div>
          </div>
        </div>
        
        <h3>Performance & Economy</h3>
        <div class="row">
        <div class="col-xs-12 col-md-3">
          <div class="form-group">
            <label for="fuel_cons_ur">Fuel consumption (urban)*</label>
            <input class="form-control" id="fuel_cons_ur" placeholder="Enter Fuel consumption (urban)" name="fuel_cons_ur" type="text" value="<?php echo $car[0]->fuel_cons_ur;?>" required>
          </div>
        </div>
        <div class="col-xs-12 col-md-3">
          <div class="form-group">
            <label for="fuel_cons_ex">Fuel consumption (extra urban)</label>
            <input class="form-control" id="fuel_cons_ex" placeholder="Enter Fuel consumption (extra urban)" name="fuel_cons_ex" type="text" value="<?php echo $car[0]->fuel_cons_ex;?>" >
          </div>
        </div>
        <div class="col-xs-12 col-md-3">
          <div class="form-group">
            <label for="fuel_cons_com">Fuel consumption (combined)</label>
            <input class="form-control" id="fuel_cons_com" placeholder="Enter Fuel consumption (combined)" name="fuel_cons_com" type="text" value="<?php echo $car[0]->fuel_cons_com;?>">
          </div>
        </div>
        <div class="col-xs-12 col-md-3">
          <div class="form-group">
            <label for="z_s_mph">0 - 60 mph</label>
            <input class="form-control" id="z_s_mph" placeholder="Enter Discount Price" name="z_s_mph" type="text" value="<?php echo $car[0]->z_s_mph;?>">
          </div>
        </div>
      </div>

      <div class="row">
      <div class="col-xs-12 col-md-3">
        <div class="form-group">
          <label for="top_speed">Top speed*</label>
          <input class="form-control" id="top_speed" placeholder="Enter Top Speed" name="top_speed" type="number" step="any" value="<?php echo $car[0]->top_speed;?>" required>
        </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="form-group">
          <label for="cylinders">Cylinders*</label>
          <input class="form-control" id="cylinders" placeholder="Enter Cylinders" name="cylinders" type="number" step="any" value="<?php echo $car[0]->cylinders;?>" required>
        </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="form-group">
          <label for="engine_pow">Engine power*</label>
          <input class="form-control" id="engine_pow" placeholder="Enter Engine Power" name="engine_pow" step="any" type="number" value="<?php echo $car[0]->engine_pow;?>" required>
        </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="form-group">
          <label for="engine_tor">Engine torque</label>
          <input class="form-control" id="engine_tor" placeholder="Enter Engine Torque" name="engine_tor" type="number" step="any" value="<?php echo $car[0]->engine_tor;?>" >
        </div>
      </div>
    </div>

    <h3>Dimensions</h3>
    <div class="row">
    <div class="col-xs-12 col-md-3">
      <div class="form-group">
        <label for="length">Length*</label>
        <input class="form-control" id="length" placeholder="Enter Length" name="length" type="number" step="any" value="<?php echo $car[0]->length;?>" required>
      </div>
    </div>
    <div class="col-xs-12 col-md-3">
      <div class="form-group">
        <label for="wheelbase">Wheelbase*</label>
        <input class="form-control" id="wheelbase" placeholder="Enter Wheelbase" name="wheelbase" type="number" step="any" value="<?php echo $car[0]->wheelbase;?>" required>
      </div>
    </div>
    <div class="col-xs-12 col-md-3">
      <div class="form-group">
        <label for="width">Width*</label>
        <input class="form-control" id="width" placeholder="Enter Width" name="width" type="number" step="any" value="<?php echo $car[0]->width;?>" required>
      </div>
    </div>
  </div>
  <h3>Interior / Exterior</h3>
  <div class="row">
  <div class="col-xs-12 col-md-4">
    <h4>Interior</h4>
    <a href="#" id="interior">Add Field</a>
    <div class="interior">
    <div class="form-group">
     <?php 
        $i=1;
        foreach($interior as $int){
            if($i == 1){
                ?>
                <input class="form-control" type="text" name="interior[]" value="<?php echo $int->feature; ?>" required>
        <?php }else{ ?>
            <div class="input-group" style="margin-top:10px;">
                <input class="form-control" type="text" name="interior[]" value="<?php echo $int->feature; ?>">
                <span class="input-group-btn">
                <button type="button" class="btn btn-danger btn-flat remove">X</button>
                </span>
            </div>
    <?php }
            $i++; 
        }
        ?>
    </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4">
    <h4>Comfort</h4>
    <a href="#" id="comfort">Add Field</a>
    <div class="comfort">
    <div class="form-group">
      <?php 
        $i=1;
        foreach($comfort as $com){
            if($i == 1){
                ?>
                <input class="form-control" type="text" name="comfort[]" value="<?php echo $com->feature; ?>" required>
        <?php }else{ ?>
            <div class="input-group" style="margin-top:10px;">
                <input class="form-control" type="text" name="comfort[]" value="<?php echo $com->feature; ?>">
                <span class="input-group-btn">
                <button type="button" class="btn btn-danger btn-flat remove">X</button>
                </span>
            </div>
    <?php }
            $i++; 
        }
        ?>
    </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4">
    <h4>Exterior</h4>
    <a href="#" id="exterior">Add Field</a>
    <div class="exterior">
    <div class="form-group">
      <?php 
        $i=1;
        foreach($exterior as $ext){
            if($i == 1){
                ?>
                <input class="form-control" type="text" name="exterior[]" value="<?php echo $ext->feature; ?>" required>
        <?php }else{ ?>
            <div class="input-group" style="margin-top:10px;">
                <input class="form-control" type="text" name="exterior[]" value="<?php echo $ext->feature; ?>">
                <span class="input-group-btn">
                <button type="button" class="btn btn-danger btn-flat remove">X</button>
                </span>
            </div>
    <?php }
            $i++; 
        }
        ?>
    </div>
    </div>
  </div>
  </div>

  <h3>Safety / Other</h3>
  <div class="row">
  <div class="col-xs-12 col-md-4">
    <h4>Safety</h4>
    <a href="#" id="safety">Add Field</a>
    <div class="safety">
    <div class="form-group">
      <?php 
        $i=1;
        foreach($safety as $safe){
            if($i == 1){
                ?>
                <input class="form-control" type="text" name="safety[]" value="<?php echo $safe->feature; ?>" required>
        <?php }else{ ?>
            <div class="input-group" style="margin-top:10px;">
                <input class="form-control" type="text" name="safety[]" value="<?php echo $safe->feature; ?>">
                <span class="input-group-btn">
                <button type="button" class="btn btn-danger btn-flat remove">X</button>
                </span>
            </div>
    <?php }
            $i++; 
        }
        ?>
    </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4">
    <h4>Other</h4>
    <a href="#" id="other">Add Field</a>
    <div class="other">
    <div class="form-group">
      <?php 
        $i=1;
        foreach($other as $oth){
            if($i == 1){
                ?>
                <input class="form-control" type="text" name="other[]" value="<?php echo $oth->feature; ?>" required>
        <?php }else{ ?>
            <div class="input-group" style="margin-top:10px;">
                <input class="form-control" type="text" name="other[]" value="<?php echo $oth->feature; ?>">
                <span class="input-group-btn">
                <button type="button" class="btn btn-danger btn-flat remove">X</button>
                </span>
            </div>
    <?php }
            $i++; 
        }
        ?>
    </div>
    </div>
  </div>
  </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
              <h3 class="box-title">Text Editor <br>
                <small>Enter Brief Car Description</small>
              </h3>
            <div class="box-body pad">
                <textarea class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $car[0]->description;?></textarea>
            </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                  <h3>Upload Car Images</h3>
                  <div class="form-group">
                    <label for="images">File input</label>
                    <input id="images" type="file" name="carImages[]" multiple>
                  </div>
                  <h3>Images</h3>
                  <hr>
                  <div id="msg"></div>
                  <div class="row">
                      <input class="car_id" type="hidden" name="car_id" value="<?php echo $car[0]->id; ?>">
                      <?php
                      $i = 1;
                      foreach($car_image as $img){ ?>
                          <div class="col-md-3">
                            <div class="img_rmv_form" id="img-<?php echo $i;?>">
                                  <input class="car_id" type="hidden" name="car_id" value="<?php echo $car[0]->id; ?>">
                                  <input type="hidden" class="img_id" name="img_id[]" value="<?php echo $img->id; ?>">
                                  <input type="hidden" class="img_name" name="img_name[]" value="<?php echo $img->image; ?>">
                                  <a class="img_rmv" onclick="return confirm('Do you want to delete Image')" name="img_submit">Remove</a>
                              </div>
                             <div style="width: 200px; height: 150px; overflow: hidden;">
                                  <img src="<?php echo site_url('/uploads/images/').$img->image; ?>" alt="<?php echo $car[0]->title;?>" id="img-<?php echo $img->id?>">
                              </div>
                          </div>
                      <?php $i++; } ?>
                  </div>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="pull-right">
            <button type="submit" class="btn btn-primary" name="save">Update</button>
            <a class="btn btn-danger" href="<?= site_url('admin/dashboard/car') ?>">Cancel</a>
          </div>
        </div>
        <!-- /.box-footer-->
        <?php echo form_close(); ?>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->