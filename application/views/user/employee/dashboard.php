<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('user/employee/layouts/head');
?>
<?php
  $this->load->view('user/employee/layouts/header');

  $this->load->view('user/employee/layouts/sidebar');
?>
  

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard</h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <div class="row">
        <!-- Cutting -->

        <?php if ($holiday) { ?>
          <div class="col-md-12 row" style="height: 50px; margin-bottom: 60px;">
            <div class="col-md-10">
              <marquee style="border: 1px solid #5850c7; ">
                <p style=" font-size: 25px;">
                  <?php 
                    echo $holiday->holiday_description.' and holiday for '. date('M j, Y',strtotime($holiday->holiday_date));
                    if ($holiday->until_holiday_date) {
                      echo " - ". date('M j, Y',strtotime($holiday->until_holiday_date));
                    }
                  ?>
                </p>
              </marquee>
            </div>
            <div class="col-md-1" style="background: #5850c7; padding: 13px; text-align: center; margin: 2px 9px 0px;"> <a href="<?php echo site_url('employee/holiday_all'); ?>" style="color: white;">see all</a></div>
          </div>
        <?php } ?>

        <!-- /Cutting -->

        <!-- ./col -->
      </div>

      <!-- Jumbotron -->
      <div class="container" style="height: 330px; overflow: auto; padding: 0px;">
        <div class="jumbotron bg-light-blue-gradient" style="height: 100%; width: 100%; margin: 0px; padding-top: 15px;">
          <h1 class="display-4">Hello, <?= $this->session->employee_name; ?></h1>
          <p class="lead">Welcome to our website</p>
          <hr class="my-4">
          <p>Thank you for using our service</p>
          <a class="btn btn-danger btn-lg" style="width: 200px;" href="<?= base_url('employee/logout'); ?>" role="button">Logout</a>
        </div>
      </div>

      <!-- /.row -->
      
      <br>


      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

  <?php
    $this->load->view('user/employee/layouts/footer');
  ?>