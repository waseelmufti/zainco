<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Page
      <small>Manager</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Page</a></li>
      <li class="active">Add</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Add Page</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <?= form_open_multipart('admin/dashboard/page/store') ?>
      <div class="box-body">
         <div class="row">
        <div class="form-group col-sm-6">
          <label for="title">Page Title</label>
          <input class="form-control" id="title" name="title" placeholder="Page Title" type="text" required>
        </div>
        <div class="form-group col-sm-6">
          <label for="slug">Page Slug</label>
          <input class="form-control" id="slug" name="slug" placeholder="Page Slug" type="text">
        </div>
        </div>
        <div class="form-group">
            <div class="box-body pad"><label for="content">Page Content</label>
                <textarea class="textarea" id="content" name="content" placeholder="Enter Page Content Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
            </div>
        </div>
         <div class="form-group">
          <label for="image">File input</label>
          <input id="image" name="image" type="file">
        
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
       <div class="pull-right">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-danger" href="<?= site_url('admin/dashboard/page') ?>">Cancel</a>
        </div>
      </div>
      <?= form_close() ?>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
