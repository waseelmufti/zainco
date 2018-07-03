<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Accident
      <small>Claim</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Accident Claim</a></li>
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
           <h4>Name: <?= $result[0]->name ?></h4>
           <h4>Phone No.: <?= $result[0]->ph_no ?></h4>
            <h4>Email: <?= $result[0]->email ?></h4>
            <h4>Time to Call: <?= $result[0]->time_to_call ?></h4>
           
       </p>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right">
<!--            <a href="mailto:<?= $result['form_data'][0]->email ?>" class="btn btn-success">Reply</a>-->
            <a href="<?= site_url('admin/dashboard/accident-claim') ?>" class="btn btn-danger">Back</a>
        </div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
