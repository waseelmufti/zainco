<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $page; ?>
      <small>Form</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><?php echo $page?></a></li>
      <li class="active">Show</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
       <p>
          <h2 class="text-center text-uppercase"><?php echo $result['form_data'][0]->form_type; ?> Form</h2>
           <h4>Registration Number: <?= $result['form_data'][0]->reg_no ?></h4>
           <h4>Make of car: <?= $result['form_data'][0]->make_of_car ?></h4>
            <h4>Model: <?= $result['form_data'][0]->model ?></h4>
            <h4>Year: <?= $result['form_data'][0]->year ?></h4>
            <h4>Mileage: <?= $result['form_data'][0]->mileage ?></h4>
            <h4>Name: <?= $result['form_data'][0]->name ?></h4>
            <h4>Email: <?= $result['form_data'][0]->email ?></h4>
            <h4>Phone: <?= $result['form_data'][0]->phone ?></h4>
            
            <?php if($result['form_data'][0]->form_type == 'servicing'){ ?>
                <h4>Which service you want to done on your veachile: </h4>
                <ul>
                <?php foreach($result['services'] as $res){ ?>
                    <li><?php echo $res->service ?></li>
                <?php }?>
                </ul>
            <?php }elseif($result['form_data'][0]->form_type == 'cardignose'){ ?>
                <h4>Options: </h4>
                <ul>
                <?php foreach($result['services'] as $res){ ?>
                    <li><?php echo $res->service ?></li>
                <?php }?>
                </ul>
            <?php }?>
       </p>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right">
            <a href="mailto:<?= $result['form_data'][0]->email ?>" class="btn btn-success">Reply</a>
            <a href="<?= site_url('admin/dashboard/'.$page) ?>" class="btn btn-danger">Back</a>
        </div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
