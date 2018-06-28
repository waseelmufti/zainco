
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p class="text-uppercase"><?php echo $this->session->username; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url('admin/dashboard/page') ?>"><i class="fa fa-circle-o"></i>Pages</a></li>
            <li><a href="<?= site_url('admin/dashboard/page/add') ?>"><i class="fa fa-circle-o"></i>Add Pages</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Car Manager</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url('admin/dashboard/car') ?>"><i class="fa fa-circle-o"></i>Car List</a></li>
            <li><a href="<?= site_url('admin/dashboard/car/add') ?>"><i class="fa fa-circle-o"></i>Add New Car</a></li>
          </ul>
        </li>
         <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url('admin/dashboard/contact') ?>"><i class="fa fa-circle-o"></i>Contact Messages</a></li>
            <li><a href="<?= site_url('admin/dashboard/sell-car') ?>"><i class="fa fa-circle-o"></i>Sell Car Massages</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Enquiries</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li><a href="<?= site_url('admin/dashboard/reserve-car') ?>"><i class="fa fa-circle-o"></i>Reserve Vehical</a></li>-->
            <li><a href="<?= site_url('admin/dashboard/test-drive') ?>"><i class="fa fa-circle-o"></i>Test Drive</a></li>
            <li><a href="<?= site_url('admin/dashboard/send-offer') ?>"><i class="fa fa-circle-o"></i>Send Offer</a></li>
            <li><a href="<?= site_url('admin/dashboard/enquiry') ?>"><i class="fa fa-circle-o"></i>General Enquiries</a></li>
          </ul>
        </li>
        <li>
          <a href="<?= site_url('admin/dashboard/part-exchange') ?>">
            <i class="fa fa-dashboard"></i> <span>Part Exchange Form</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
         <li>
          <a href="<?= site_url('admin/dashboard/services') ?>">
            <i class="fa fa-dashboard"></i> <span>Servicing Form</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('admin/dashboard/vehicle-health') ?>">
            <i class="fa fa-dashboard"></i> <span>Vehicle Health Form</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('admin/dashboard/car-dignose') ?>">
            <i class="fa fa-dashboard"></i> <span>Car Dignose Form</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
