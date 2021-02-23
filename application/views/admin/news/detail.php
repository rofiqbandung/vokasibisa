<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('admin/layouts/head');
?>
<?php
//   $this->load->view('admin/layouts/header');
     $this->load->view('admin/layouts/sidebar');
?>

<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
      Report
      </h1>
      <ol class="breadcrumb">
        <a href="<?php echo site_url('admin/view_news');?>"><button class="btn btn-primary">Back</button></a>
      </ol>
    </section>

    <br>

    <div class="box">
            <div class="box-header">
            <?php foreach ($berita->result() as $dt): ?>
              <h3 align="center"><?php echo $dt->judul?></h3>
            </div>


        <div class="box-body">

            <div class="row post-meta">
                <div class="col-sm-2" style="float: right;">
                    <i class="glyphicon glyphicon-user">
                        <?php echo $dt->penulis?>
                    </i>
                </div>
                <br>
                <div class="col-sm-2" style="float: right;">
                    <i class="glyphicon glyphicon-folder-open">
                        <?php echo $dt->category?>
                    </i>
                </div>
            </div>

            <br>

            <div class="row post-content">
				<div class="col-sm-12">
					<div class="image wow fadeIn" style="text-align: center;">
                        <img src="<?php echo base_url('assets/berita/'.$dt->gambar) ; ?>" alt="" width="400" height="300" class="img-rounded">
					</div>

                    <br>

					<div class="text">
						<?php echo $dt->teks_berita; ?>
					</div>
				</div>
			</div>

            <br>
            <br>

         <?php endforeach ?> 
        <!-- .box body -->
        </div>

    </div>






</div>