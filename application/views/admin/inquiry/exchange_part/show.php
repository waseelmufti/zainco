<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Part Exchange
      <small>Form</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Part Exchange</a></li>
      <li class="active">Show</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Part Exchange</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
       <p>
           <h4>First Name: <?= $form[0]->fname ?></h4>
           <h4>Last Name: <?= $form[0]->lname ?></h4>
            <h4>Vehicle: <?= $form[0]->vehicle ?></h4>
            <h4>Telephone#: <?= $form[0]->phone ?></h4>
            <h4>Postcode: <?= $form[0]->postcode ?></h4>
            <h4>Postcode: <?= $form[0]->vehicle_model ?></h4>
            <h4>Engine Size: <?= $form[0]->engine_size ?></h4>
            <h4>Color: <?= $form[0]->color ?></h4>
            <h4>Vehicle Mileage: <?= $form[0]->vehicle_mileage ?></h4>
            <h4>Number of Owners: <?= $form[0]->no_owners ?></h4>
            <h4>First registered: <?= $form[0]->first_reg ?></h4>
            <h4>MOT expires: <?= $form[0]->mot_exp ?></h4>
            <h4>Last service: <?= $form[0]->last_service ?></h4>
            <h4>Service History: <?= $form[0]->service_his ?></h4>
            <h4>Last Service Mileage: <?= $form[0]->last_service_mileage ?></h4>
            <h4>General condition: <?= $form[0]->general_condition ?></h4>
            <p>
                <h4>Describe your vehicle in your words :</h4>
                <?= $form[0]->message ?>
            </p>
       </p>
       <div class="row">
           <?php foreach($images as $img){?>
           <div class="col-md-3">
              <a href="<?php echo site_url('/uploads/images/').$img->image ?>" target="_blank">
                  <img src="<?php echo site_url('/uploads/images/').$img->image ?>" alt="" class="img-responsive">
              </a>
           </div>
           <?php }?>
       </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right">
<!--            <a href="mailto:<?= $contact[0]->email ?>" class="btn btn-success">Reply</a>-->
            <a href="<?= site_url('admin/dashboard/part-exchange') ?>" class="btn btn-danger">Back</a>
        </div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
