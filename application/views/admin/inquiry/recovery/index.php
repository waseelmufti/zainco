<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Recovery<small>Breakdown</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="#">Recovery Breakdown</a></li>
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
      <div class="box-body table-responsive no-padding">
             <?php if($this->session->flashdata('error')){ ?>
                 <div class="alert alert-danger">
                     <?= $this->session->flashdata('error') ?>
                 </div>
             <?php } ?>
              <table class="table table-hover">
                <tr>
                 <th style="width: 10%;">Recovery Type</th>
                 <th style="width: 15%;">Name</th>
                  <th style="width: 10%;">Phone No.</th>
                  <th style="width: 10%;">Vehicle Reg No.</th>
                  <th style="width: 10%;">Location</th>
                  <th style="width: 10%;">Drop Location</th>
                  <th style="width: 15%;">Date</th>
                  <th style="width: 20%;">Options</th>
                </tr>
                <?php foreach($result as $res){ ?>
                <tr <?= ($res->active) ? '' :"class = 'read'" ?>>
                  <td><?php echo $res->recovery_type ?></td>
                  <td><?php echo $res->name ?></td>
                  <td><?php echo $res->contact_no ?></td>
                  <td><?php echo $res->v_reg_no ?></td>
                  <td><?php echo $res->location ?></td>
                  <td><?php echo $res->drop_location ?></td>
                  <td><?php echo $res->created_at ?></td>
                  <td>
                    <a href="<?= site_url('admin/dashboard/recovery/show/').$res->id ?>" class="btn btn-warning">Read</a>
                    <a class="btn btn-danger" href="<?= site_url('admin/dashboard/recovery/delete/').$res->id ?>" onclick="return confirm('Do you want to Delete?')">Delete</a>
                  </td>
                </tr>
              <?php }?>
              </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="box-tools">
           <?php echo $links; ?>
          </div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
