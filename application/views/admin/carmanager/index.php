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
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Car List</h3>

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
                  <th>Make Of</th>
                  <th>Model</th>
                  <th>Price</th>
                  <th>Body Style</th>
                  <th>Color</th>
                  <th>Options</th>
                </tr>
                <?php foreach($results as $result){ ?>
                <tr>
                  <td><?php echo $result->makeof ?></td>
                  <td><?php echo $result->model ?></td>
                  <td><?php echo $result->price ?></td>
                  <td><?php echo $result->body_style ?></td>
                  <td><?php echo $result->color ?></td>
                  <td>
                    <a class="btn btn-warning"  href="<?= site_url('admin/dashboard/page/edit/').$result->id ?>">Update</a>
                    <a class="btn btn-danger" href="<?= site_url('admin/dashboard/car/delete/').$result->id ?>" onclick="return confirm('Do you want to Delete?')">Delete</a>
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
