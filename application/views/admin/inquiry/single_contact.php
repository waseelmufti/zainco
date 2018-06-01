<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blank page
      <small>it all starts here</small>
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
        <h3 class="box-title">Contact Inquiry</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
       <p>
           <h4>Name: <?= $contact[0]->name ?></h4>
            <h4>Email: <?= $contact[0]->email ?></h4>
            <h4>Telephone#: <?= $contact[0]->phone ?></h4>
            <p>
                <h4>Message:</h4>
                <?= $contact[0]->message ?>
            </p>
       </p>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right">
            <a href="mailto:<?= $contact[0]->email ?>" class="btn btn-success">Reply</a>
            <a href="<?= site_url('admin/dashboard/contact') ?>" class="btn btn-danger">Cancel</a>
        </div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
