<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pages
      <small>Manager</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Page</a></li>
      <li class="active">List</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><a class="btn btn-info" href="<?= site_url('admin/dashboard/page/add') ?>">Add New Page</a></h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body table-responsive no-padding">
             <!--  Show Success or Error Message -->
          <?php if($this->session->flashdata('success')) {?>
          <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
        <?php } ?>
        <?php if($this->session->flashdata('error')) {?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
      <?php } ?>
            
              <table class="table table-hover">
                <tr>
                  <th style="width: 10%;">Title</th>
                  <th style="width: 15%;">Slug</th>
                  <th style="width: 15%;">Image</th>
                  <th style="width: 15%;">Content</th>
                  <th style="width: 15%;">Date</th>
                  <th style="width: 30%;">Options</th>
                </tr>
                <?php foreach($pages as $page){ ?>
                <tr>
                  <td><?php echo $page->title ?></td>
                  <td><?php echo $page->slug ?></td>
                  <td><?php echo $page->image ?></td>
                  <td><?php echo character_limiter($page->content, 100) ?></td>
                  <td><?php echo $page->created_at ?></td>
                  <td>
                    <a href="<?= site_url('admin/dashboard/page/edit/').$page->id ?>" class="btn btn-warning">Update</a>
                    <a class="btn btn-danger" href="<?= site_url('admin/dashboard/page/delete/').$page->id ?>" onclick="return confirm('Do you want to Delete?')">Delete</a>
                  </td>
                </tr>
              <?php }?>
              </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
    
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
