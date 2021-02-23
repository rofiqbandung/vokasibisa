<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('admin/layouts/head');
?>
<?php
  // $this->load->view('admin/layouts/header');

  $this->load->view('admin/layouts/sidebar');
?>
  
  
  <script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit News
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url("Admin/view_news"); ?>"><button style="margin-top: -10px; border: 1px solid gray;" class="btn btn-warning"> back</button></a></li>
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
            <!-- form start -->
            <?php foreach ($berita->result() as $br) : ?>

            <form role="form" action="<?php echo base_url()."admin/update_news/".$br->id_berita; ?>" method="post">

              <div class="box-body">
                
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Judul</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Judul" name="judul" value="<?php echo $br->judul ?>">
                    <span class="text-danger"><?php echo form_error('judul'); ?></span>
                  </div>

                <!-- <div class="form-group">
                  <label for="image">Gambar</label>
                  <input type="file" class="" id="image" name="gambar" value="<?php echo $br->gambar?>">
                  <span class="text-danger"><?php echo form_error('gambar'); ?></span>
                </div> -->

                <div class="form-group">
                  <label for="phone">Kategori</label>
                  <select class="form-control" name="kategori">
                    <option>Select One</option>
                    <?php foreach ($kategori->result() as $kg): ?>

                    <option value="<?php echo $kg->id_category; ?>" <?php if($br->id_category == $kg->id_category) echo "selected"; ?>><?php echo $kg->category; ?></option>
                      
                    <?php endforeach; ?>
                  </select>
                  <span class="text-danger"><?php echo form_error('kategori'); ?></span>
                </div>

                <div class="form-group">
                    <label for="">Teks Berita</label>
                    <textarea type="text" id="teks" name="teks" class="form-control" ><?php echo $br->teks_berita ?></textarea>
                    <span class="text-danger"><?php echo form_error('teks'); ?></span>
                </div>

                <div class="box-body">
                  <div class="form-group">
                    <label for="pen">Penulis</label>
                    <input type="text" class="form-control" id="pen" placeholder="Enter Penulis" name="penulis" value="<?php echo $br->penulis; ?>">
                    <span class="text-danger"><?php echo form_error('penulis'); ?></span>
                  </div>
                  
                </div>
                <!-- /.box-body -->
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>

             <?php endforeach; ?>           
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

  <script>
    CKEDITOR.replace('teks');
  </script>