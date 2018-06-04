<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Prolie
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Profile</a></li>
      <li class="active">Edit</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <?= form_open('profile/update') ?>
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Profile</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
        <div class="form-group col-md-6">
          <label for="fname">First Name*</label>
          <input class="form-control" id="fname" name="fname" placeholder="First Name" type="text" value="<?= $first_name ?>" required>
            </div>
        <div class="form-group col-md-6">
          <label for="lname">Last Name*</label>
          <input class="form-control" id="lname" name="lname" placeholder="Last Name" type="text" value="<?= $last_name ?>" required>
        </div>
        </div>
        
        <div class="row">
        <div class="form-group col-md-6">
          <label for="username">UserName*</label>
          <input class="form-control" id="username" name="username" placeholder="Username" type="text" value="<?= $username ?>" required readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email address*</label>
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" value="<?= $email ?>" required>
        </div>
        </div>
        
        <div class="row">
        <div class="form-group col-md-6">
          <label for="password">Password</label>
          <input class="form-control" id="password" name="password" placeholder="Password" type="password" value="">
        </div>
        </div>                                
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
       <div class="pull-right">
        <button type="submit" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-info">Update</button>
        </div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
    <?= form_close() ?>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
