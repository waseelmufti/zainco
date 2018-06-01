<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Contact
      <small>Inquires</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Inquires</a></li>
      <li class="active">Contact</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Sell Cars Inquires</h3>
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
                  <th style="width: 10%;">Reg_no</th>
                  <th style="width: 10%;">Make of</th>
                  <th style="width: 10%;">Model</th>
                  <th style="width: 10%;">Year</th>
                  <th style="width: 10%;">Mileage</th>
                  <th style="width: 10%;">Name</th>
                  <th style="width: 10%;">Email</th>
                  <th style="width: 10%;">Phone</th>
                  <th style="width: 5%;">Date</th>
                  <th style="width: 30%;">Options</th>
                </tr>
                <?php foreach($sellcars as $sellcar){ ?>
                <tr <?= ($sellcar->active) ? '' :"class = 'read'" ?>>
                 <td><?php echo $sellcar->reg_no ?></td>
                 <td><?php echo $sellcar->make_of_car ?></td>
                 <td><?php echo $sellcar->model ?></td>
                 <td><?php echo $sellcar->year ?></td>
                 <td><?php echo $sellcar->milage ?></td>
                  <td><?php echo $sellcar->name ?></td>
                  <td><?php echo $sellcar->phone ?></td>
                  <td><?php echo $sellcar->email ?></td>
                  <td><?php echo $sellcar->created_at ?></td>
                  <td>
                    <a href="<?= site_url('admin/dashboard/sell-car/show/').$sellcar->id ?>" class="btn btn-warning">Read</a>
                    <a class="btn btn-danger" href="<?= site_url('admin/dashboard/sell-car/delete/').$sellcar->id ?>" onclick="return confirm('Do you want to Delete?')">Delete</a>
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
