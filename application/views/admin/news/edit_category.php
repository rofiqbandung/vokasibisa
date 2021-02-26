<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('admin/layouts/head');
?>
<?php
//   $this->load->view('admin/layouts/header');
  $this->load->view('admin/layouts/sidebar');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/view_category'); ?>"><button style="margin-top: -10px; border: 1px solid gray;" class="btn btn-warning"> Back </button></a></li>
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
\
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($category->result() as $row): ?>

            <form role="form" action="<?php echo base_url()."admin/update_category/".$row->id_category; ?>" method="post">


              <div class="box-body">
                
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Category</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Category" name="category_name" value="<?php echo $row->category; ?>">
                  <span class="text-danger"><?php echo form_error('category_name'); ?></span>
                </div>

                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>


            </form>

            <?php endforeach ?>

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