<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $form_type ?>
      <small>Enquires</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Enquires</a></li>
      <li class="active">Reserve Car</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Reserve Car Enquires</h3>
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
                 <th style="width: 20%;">Subject</th>
                  <th style="width: 10%;">Name</th>
                  <th style="width: 10%;">Phone</th>
                  <th style="width: 10%;">Email</th>
                  <th style="width: 15%;">Message</th>
                  <th style="width: 15%;">Date</th>
                  <th style="width: 30%;">Options</th>
                </tr>
                <?php foreach($enquiries as $enquiry){ ?>
                <tr <?= ($enquiry->active) ? '' :"class = 'read'" ?>>
                  <td><?php echo $enquiry->subject ?></td>
                  <td><?php echo $enquiry->name ?></td>
                  <td><?php echo $enquiry->phone ?></td>
                  <td><?php echo $enquiry->email ?></td>
                  <td><?php echo $enquiry->message ?></td>
                  <td><?php echo $enquiry->created_at ?></td>
                  <td>
                    <a href="<?= site_url('admin/dashboard/'.$form_type.'/show/').$enquiry->id ?>" class="btn btn-warning">Read</a>
                    <a class="btn btn-danger" href="<?= site_url('admin/dashboard/'.$form_type.'/delete/').$enquiry->id ?>" onclick="return confirm('Do you want to Delete?')">Delete</a>
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
