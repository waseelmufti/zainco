<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Accident<small>Claims</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="#">Accident Claims</a></li>
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
                 <th style="width: 20%;">Name</th>
                  <th style="width: 15%;">Phone No.</th>
                  <th style="width: 15%;">Email</th>
                  <th style="width: 10%;">Time to call</th>
                  <th style="width: 10%;">Date</th>
                  <th style="width: 30%;">Options</th>
                </tr>
                <?php foreach($result as $res){ ?>
                <tr <?= ($res->active) ? '' :"class = 'read'" ?>>
                  <td><?php echo $res->name ?></td>
                  <td><?php echo $res->ph_no ?></td>
                  <td><?php echo $res->email ?></td>
                  <td><?php echo $res->time_to_call ?></td>
                  <td><?php echo $res->created_at ?></td>
                  <td>
                    <a href="<?= site_url('admin/dashboard/accident-claim/show/').$res->id ?>" class="btn btn-warning">Read</a>
                    <a class="btn btn-danger" href="<?= site_url('admin/dashboard/accident-claim/delete/').$res->id ?>" onclick="return confirm('Do you want to Delete?')">Delete</a>
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
