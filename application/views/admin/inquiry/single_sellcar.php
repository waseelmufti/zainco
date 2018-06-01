<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sell
      <small>Car</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Sell Car Inquiry</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
       <p>
          <h4>Registration: <?= $sellcar[0]->reg_no ?></h4>
          <h4>Make of: <?= $sellcar[0]->make_of_car ?></h4>
          <h4>Model: <?= $sellcar[0]->model ?></h4>
          <h4>Year: <?= $sellcar[0]->year ?></h4>
          <h4>Mileage: <?= $sellcar[0]->milage ?></h4>
           <h4>Name: <?= $sellcar[0]->name ?></h4>
            <h4>Email: <?= $sellcar[0]->email ?></h4>
            <h4>Telephone#: <?= $sellcar[0]->phone ?></h4>
       </p>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right">
            <a href="mailto:<?= $sellcar[0]->email ?>" class="btn btn-success">Reply</a>
            <a href="<?= site_url('admin/dashboard/sell-car') ?>" class="btn btn-danger">Cancel</a>
        </div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
