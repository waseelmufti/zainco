<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Recovery
      <small>Breakdown</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Recovery Breakdown</a></li>
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
           <h4>Recovery Type: <?= $result[0]->recovery_type ?></h4>
           <h4>Name: <?= $result[0]->name ?></h4>
           <h4>Contact No.: <?= $result[0]->contact_no ?></h4>
            <h4>Vehicle Registration No.: <?= $result[0]->v_reg_no ?></h4>
            <h4>Location: <?= $result[0]->location ?></h4>
            <h4>Drop Location: <?= $result[0]->drop_location ?></h4>
           
       </p>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right">
            <a href="<?= site_url('admin/dashboard/recovery') ?>" class="btn btn-danger">Back</a>
        </div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
