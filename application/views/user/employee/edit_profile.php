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
      <h1>
        Edit Profile
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="">
        
        <!-- Cutting -->

        <?= $this->session->message; ?>
          
          <div class="box box-primary">
            
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">

              <!-- box-body -->
              <div class="box-body">

                <div class="form-group row">
                  <label for="name" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="<?= $employee->employee_name; ?>">
                    <span class="text-danger"><?= form_error('name'); ?></span>
                  </div>
                </div>

                <!-- <div class="form-group row">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="">
                    <span class="text-danger"></span>
                  </div>
                </div> -->

                <div class="form-group row">
                  <label for="phone" class="col-sm-2 control-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Your phone number" value="<?= $employee->employee_phone; ?>">
                    <span class="text-danger"><?= form_error('phone'); ?></span>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="designation" class="col-sm-2 control-label">Designation</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="designation" name="designation">
                          <option value="">Select One</option>
                      <?php foreach ($designations as $d): ?>
                        <?php if ($employee->employee_designation == $d['designation_id']): ?>
                          <option value="<?= $d['designation_id']; ?>" selected><?= $d['designation_name']; ?></option>
                        <?php else: ?>
                          <option value="<?= $d['designation_id']; ?>"><?= $d['designation_name']; ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                    <span class="text-danger"><?= form_error('designation'); ?></span>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
                    <div class="row">
                      <div class="col-xs-5 col-md-2">
                        <div class="thumbnail">
                          <img src="<?= base_url('upload/'.$employee->employee_image); ?>">
                        </div>
                      </div>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="image" placeholder="silahkan"></input>
                        <span class="text-danger"><?= form_error('image'); ?></span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="col-sm-10 col-sm-offset-2">
                  <a href="<?= base_url('employee/profile'); ?>" class="btn btn-warning">Kembali</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>

            </form>

          </div>
          <!-- /.box -->


        <!-- /Cutting -->

      </div>

    </section>
    <!-- /.content -->
  </div>

  <?php
    $this->load->view('user/employee/layouts/footer');
  ?>