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

    <!-- Main content -->
    <section class="content">

      <!-- Container -->
      <div class="container">

        <?php echo $this->session->message; ?>

        <!-- Panel -->
        <div class="panel panel-primary">

          <div class="panel-heading">
            <h2 style="margin: 0px;">Profile</h2>
          </div>

          <div class="panel-body">

            <!-- row -->
            <div class="row">

              <div class="col-sm-4 text-center" style="margin-bottom: 15px; padding: 0px;">
                <img src="<?= base_url('upload/'.$employee->employee_image); ?>" class="img-rounded img-thumbnail" style="width: 200px">
              </div>

              <div class="col-sm-7">
                <div class="table-responsive" style="border: 0px;">
                  <table class="table table-striped" cellpadding="5" cellspacing="0" style="">
                    <tr>
                      <td>Name</td>
                      <td>:</td>
                      <td><strong><?= $employee->employee_name; ?></strong></td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td><strong><?= $employee->employee_email; ?></strong></td>
                  </tr>
                  <tr>
                      <td>Phone Number</td>
                      <td>:</td>
                      <td><strong><?= $employee->employee_phone; ?></strong></td>
                  </tr>
                  <tr>
                      <td>Designation</td>
                      <td>:</td>
                      <td><strong><?= $employee->designation_name; ?></strong></td>
                  </tr>
                  <tr>
                      <td>Salary</td>
                      <td>:</td>
                      <td><strong><?= $employee->employee_salary; ?></strong></td>
                  </tr>
                  <tr>
                      <td>Company</td>
                      <td>:</td>
                      <td><strong><?= $employee->company_id; ?></strong></td>
                  </tr>
                  </table>
                </div>
              </div>

            </div>
            <!-- /.row -->

          </div>

        </div>
        <!-- /.panel -->

        <div class="text-center">
          <a href="<?= base_url('employee/edit_profile'); ?>" class="btn btn-primary btn-lg">Edit Profile</a>
        </div>

      </div>
      <!-- /.container -->

    </section>
    <!-- /.content -->
  </div>

  <?php
    $this->load->view('user/employee/layouts/footer');
  ?>