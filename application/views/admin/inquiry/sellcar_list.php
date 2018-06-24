<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Part Exchange
      <small>Form</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="#">Partexchange</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Part Exchange Form</h3>
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
                  <th style="width: 10%;">Vehicle</th>
                  <th style="width: 15%;">Name</th>
                  <th style="width: 5%;">Phone</th>
                  <th style="width: 15%;">Vehicle Model</th>
                  <th style="width: 15%;">Message</th>
                  <th style="width: 15%;">Date</th>
                  <th style="width: 30%;">Options</th>
                </tr>
                <?php foreach($results as $result){ ?>
                <tr <?= ($result->active) ? '' :"class = 'read'" ?>>
                  <td><?php echo $result->vehicle ?></td>
                  <td><?php echo $result->fname." ".$result->lname ?></td>
                  <td><?php echo $result->phone ?></td>
                  <td><?php echo $result->vehicle_model ?></td>
                  <td><?php echo $result->message ?></td>
                  <td><?php echo $result->created_at ?></td>
                  <td>
                    <a href="<?= site_url('admin/dashboard/sell-car/show/').$result->id ?>" class="btn btn-warning">Show</a>
                    <a class="btn btn-danger" href="<?= site_url('admin/dashboard/sell-car/delete/').$result->id ?>" onclick="return confirm('Do you want to Delete?')">Delete</a>
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
