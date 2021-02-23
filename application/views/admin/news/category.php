<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('admin/layouts/head');
?>
<?php
  // $this->load->view('admin/layouts/header');

  $this->load->view('admin/layouts/sidebar');
?>
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>Kategori</h1>
        <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/view_news'); ?>"><button style="margin-top: -10px; border: 1px solid gray;" class="btn btn-warning"> back </button></a></li>
        <li><a href="<?php echo site_url('admin/form_category'); ?>"><button style="margin-top: -10px; border: 1px solid gray;" class="btn btn-primary"> add category</button></a></li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="">
        
        <!-- Cutting -->
          <div class="box box-primary">
          <div class="col-md-12 row">
              <div class="box-header with-border col-md-8">
                <h3 class="box-title">Fill all the field</h3>
              </div>

              <div class="box-header with-border col-md-4">
                <?php if (isset($this->session->message)): ?>
                  
                  <span class="alert alert-success"><?php echo $this->session->message; ?></span>
                <?php endif ?>
              </div>
            </div>
            
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($kategori->result() as $cg): ?>
                    
                  <tr>

                  <td><?php echo $no++; ?></td>
                    <td><?php echo $cg->category; ?></td>
                    <td>
                      <a href="<?php echo site_url('admin/edit_category/'.$cg->id_category)?>"><i class="fa fa-pencil"></i></a>
                      <a href="<?php echo site_url('admin/delete_category/'.$cg->id_category)?>" onclick="return confirm('Are you sure ? ')"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>

                  <?php endforeach ?>

                </tbody>  
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->




        <!-- /Cutting -->

        <!-- ./col -->
      </div>
      <!-- /.row -->
     
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

  <?php
    $this->load->view('admin/layouts/footer');
  ?>