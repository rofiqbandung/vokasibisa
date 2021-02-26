<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('admin/layouts/head');
?>
<?php
//   $this->load->view('admin/layouts/header');

  $this->load->view('admin/layouts/sidebar');
?>
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      News Dashboard
      </h1>
      <ol class="breadcrumb">
        <a href="<?php echo site_url('admin/view_category');?>"><button class="btn btn-primary">Add Category</button></a>
        <a href="<?php echo site_url('admin/form_news');?>"><button class="btn btn-success">Add News</button></a>
      </ol>
    </section>

    <br>

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
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <!-- <th>Teks Berita</th> -->
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dataa as $dt): ?>
                    
                  <tr>

                    <td><?php echo $dt['judul']; ?></td>
                    <td><img src="<?php echo base_url('assets/berita/'.$dt['gambar']) ; ?>"  width="100"></td>
                    <td><?php echo $dt['category']; ?></td>
                    <td><?php echo $dt['penulis']; ?></td>
                    <!-- <td><?php echo $dt['teks_berita']; ?></td> -->
                    <td>
                      <a href="<?php echo site_url('admin/view_detail/'.$dt['id_berita'])?>"><button class="btn btn-success"><i class="fa fa-eye"></i></button></a>
                      <a href="<?php echo site_url('admin/edit_news/'.$dt['id_berita'])?>"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>
                      <a href="<?php echo site_url('admin/delete_news/'.$dt['id_berita'])?>" onclick="return confirm('Are you sure ? ')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
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