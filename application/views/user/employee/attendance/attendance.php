<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('user/employee/layouts/head');
?>

<?php
  date_default_timezone_set('Asia/Dhaka');

  $this->load->view('user/employee/layouts/header');

  $this->load->view('user/employee/layouts/sidebar');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="">
        
        <!-- Cutting -->

            <div class="box box-primary">
            
            <!-- /.box-header -->
            
                <div class="col-md-12 alert alert-success">
                    <?php if (isset($this->session->message)): ?>
                        <span class=""><?php echo $this->session->message; ?></span>
                    <?php endif ?>
                </div>

                <fieldset style="padding: 20px;">

                    <h3 align="center" style="margin-bottom: 20px;">Choose Your Attendance Type</h3>

                    <?php $emp_user_id = $this->session->emp_user_id; ?>

                    <?php if ($collections) { ?>
                        <div class="form-group" align="center">

                            <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default">Start Time</button>

                            <?php if ($short_break) { ?>

                                <?php if ($short_break->part_time_signout != '00:00:00' && $short_break->part_time_signin != '00:00:00') { ?>

                                  <!-- Button lunch start time and end time -->
                                    <?php if ($collections->lunch_start_time != '00:00:00') { ?>
                                        <button type="button" class="btn btn-default" style="margin: 5px;">Lunch Start Time</button>
                                    <?php }else{ ?>
                                        <a href="<?php echo site_url('employee/attendance_store/lunch_start_time/'); ?>"><button type="button" class="btn btn-warning" style="margin: 5px;">Lunch Start Time</button></a>
                                    <?php } ?>

                                    <?php if ($collections->lunch_start_time == '00:00:00' || $collections->lunch_end_time != '00:00:00') { ?>
                                        <button type="button" class="btn btn-default" style="margin: 5px;">Lunch End Time</button>
                                    <?php }else{ ?>
                                        <a href="<?php echo site_url('employee/attendance_store/lunch_end_time/'); ?>"><button type="button" class="btn btn-success" style="margin: 5px;">Lunch End Time</button></a>
                                    <?php } ?>
                                  <!-- /.Button lunch start time and end time -->

                                  <!-- Button end time -->
                                    <?php if (($collections->end_time == '00:00:00') && ($collections->lunch_start_time == '00:00:00' && $collections->lunch_end_time == '00:00:00' || $collections->lunch_start_time != '00:00:00' && $collections->lunch_end_time != '00:00:00')) { ?>
                                        <a href="<?php echo site_url('employee/attendance_store/end_time/'); ?>"><button type="button" style="width: 150px; margin: 5px;" class="btn btn-info" id="stop">End Time</button></a>
                                    <?php }else{ ?>
                                        <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default" id="endTime">End Time</button>
                                    <?php } ?>
                                  <!-- /.Button end time -->

                                <?php }else{ ?>
                                  <button type="button" class="btn btn-default" style="margin: 5px;">Lunch Start Time</button>
                                  <button type="button" class="btn btn-default" style="margin: 5px;">Lunch End Time</button>
                                  <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default" id="endTime">End Time</button>
                                <?php } ?>

                            <?php }else{ ?>

                              <!-- Button lunch start time and end time  -->
                                <?php if ($collections->lunch_start_time != '00:00:00') { ?>
                                    <button type="button" class="btn btn-default" style="margin: 5px;">Lunch Start Time</button>
                                <?php }else{ ?>
                                    <a href="<?php echo site_url('employee/attendance_store/lunch_start_time/'); ?>"><button type="button" class="btn btn-warning" style="margin: 5px;">Lunch Start Time</button></a>
                                <?php } ?>

                                <?php if ($collections->lunch_start_time == '00:00:00' || $collections->lunch_end_time != '00:00:00') { ?>
                                    <button type="button" class="btn btn-default" style="margin: 5px;">Lunch End Time</button>
                                <?php }else{ ?>
                                    <a href="<?php echo site_url('employee/attendance_store/lunch_end_time/'); ?>"><button type="button" class="btn btn-success" style="margin: 5px;">Lunch End Time</button></a>
                                <?php } ?>
                              <!-- /.Button lunch start time and end time -->

                              <!-- Button end time -->
                                <?php if (($collections->end_time == '00:00:00') && ($collections->lunch_start_time == '00:00:00' && $collections->lunch_end_time == '00:00:00' || $collections->lunch_start_time != '00:00:00' && $collections->lunch_end_time != '00:00:00')) { ?>
                                    <a href="<?php echo site_url('employee/attendance_store/end_time/'); ?>"><button type="button" style="width: 150px; margin: 5px;" class="btn btn-info" id="stop">End Time</button></a>
                                <?php }else{ ?>
                                    <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default" id="endTime">End Time</button>
                                <?php } ?>
                              <!-- /.Button end time -->

                            <?php } ?>
                    
                        </div>

                      <!-- Button short break -->
                        <?php if (($collections->end_time == '00:00:00') && ($collections->lunch_start_time == '00:00:00' && $collections->lunch_end_time == '00:00:00' || $collections->lunch_start_time != '00:00:00' && $collections->lunch_end_time != '00:00:00')) { ?>
                            <div class="form-group" align="center">
                                <?php if (!$short_break) { ?>
                                    <a href="<?php echo site_url('employee/attendance_store/part_time_signout/'); ?>"><button type="button" style="width: 150px; margin: 5px;" class="btn btn-danger">Short Break Sign Out</button></a>
                                    <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default">Short Break Sign In</button>
                                <?php }else{ ?>
                                    <?php if ($short_break->part_time_signout != '00:00:00' && $short_break->part_time_signin == '00:00:00' && $short_break->insert_date == $collections->insert_time) { ?>
                                        <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default">Short Break Sign Out</button>
                                    <?php }else{ ?>
                                        <a href="<?php echo site_url('employee/attendance_store/part_time_signout/'); ?>"><button type="button" style="width: 150px; margin: 5px;" class="btn btn-danger">Short Break Sign Out</button></a>
                                    <?php } ?>

                                    <?php if ($short_break->part_time_signout != '00:00:00' && $short_break->part_time_signin != '00:00:00') { ?>
                                        <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default">Short Break Sign In</button>
                                    <?php }else{ ?>
                                        <a href="<?php echo site_url('employee/attendance_store/part_time_signin/'.$short_break->attendance_id); ?>"><button type="button" style="width: 150px; margin: 5px;" class="btn btn-success">Short Break Sign In</button></a>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        <?php }else{ ?>
                            <div class="form-group" align="center">
                                <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default">Short Break Sign Out</button>
                                <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default">Short Break Sign In</button>
                            </div>
                        <?php } ?>
                      <!-- /.Button short break -->

                    <?php }else{ ?>
                        <div class="form-group" align="center">
                            <a href="<?php echo site_url('employee/attendance_store/start_time'); ?>"><button type="button" style="width: 150px; margin: 5px;" class="btn btn-primary">Start Time</button></a>
                            <button type="button" style="margin: 5px;" class="btn btn-default">Lunch Start Time</button>
                            <button type="button" class="btn btn-default" style="margin: 5px;">Lunch End Time</button>
                            <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default">End Time</button>
                        </div>
                        <div class="form-group" align="center">
                            <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default">Short Break Sign Out</button>
                            <button type="button" style="width: 150px; margin: 5px;" class="btn btn-default">Short Break Sign In</button>
                        </div>
                    <?php } ?>
                  
                </fieldset>

            </div>
            <!-- /.box -->

        <!-- /Cutting -->

        </div>
      
        <!-- Timer -->
        <div class="container" style="height: 300px; width: 100%;">
            <div id="display" style="width: 100%; font-size: 72px; text-align: center; margin: 0px auto;">
                00:00:00
            </div>
        </div>
        <!-- /.Timer -->

    </section>
<!-- /.content -->
</div>

  <?php
    $this->load->view('user/employee/layouts/footer');
  ?>
  
  <?php
    $start_time = ($collections) ? implode(' ', [$collections->insert_time, $collections->start_time]) : 0 ;
    $end_time = ($collections->end_time != '00:00:00') ? implode(' ', [$collections->insert_time, $collections->end_time]) : date('Y-m-d H:i:s') ;

    $total_break = 0;
    foreach ($short_break_today as $s) {
      $total_break += (strtotime($s['part_time_signin'])-strtotime($s['part_time_signout']));
    }

    if ($collections) {
      $total_break += strtotime($collections->lunch_end_time)-strtotime($collections->lunch_start_time);
    }
  ?>

  <script>
    $(document).ready(function() {
        const startTime = new Date('<?= $start_time; ?>').getTime();
        const endTime = new Date('<?= $end_time; ?>').getTime();
        const totalBreak = <?= $total_break; ?>*1000;
        const difference = (endTime - startTime)-totalBreak;

        let seconds = Math.floor(difference % (1000*60) / (1000));
        let minutes = Math.floor(difference % (1000*60*60) / (1000*60));
        let hours = Math.floor(difference % (1000*60*60*24) / (1000*60*60));

        let displaySeconds = 0;
        let displayMinutes = 0;
        let displayHours = 0;

        function updateDisplay(i) {
            if (i < 10) i="0"+i.toString();
            return i;
        }

        function stopWatch() {
            seconds++;
            if (seconds/60 == 1) {
                seconds = 0;
                minutes++;

                if (minutes/60 == 1) {
                    minutes = 0;
                    hours++;
                }
            }
            displaySeconds = updateDisplay(seconds);
            displayMinutes = updateDisplay(minutes);
            displayHours = updateDisplay(hours);

            document.getElementById("display").innerHTML = `${displayHours}:${displayMinutes}:${displaySeconds}`;
        }

      
    <?php if ($collections) { ?>
      // Jalankan Timer
        <?php if (($collections->start_time != '00:00:00' && $collections->end_time == '00:00:00') && ($collections->lunch_start_time == '00:00:00' && $collections->lunch_end_time == '00:00:00' || $collections->lunch_start_time != '00:00:00' && $collections->lunch_end_time != '00:00:00') && ($short_break && $short_break->part_time_signout != '00:00:00' && $short_break->part_time_signin != '00:00:00')) { ?>
            setInterval(stopWatch, 1000);
        <?php } ?>

      // Pause Timer saat sedang lunch dan short break
        <?php if (($collections->lunch_start_time != '00:00:00' && $collections->lunch_end_time == '00:00:00') || ($short_break && $short_break->part_time_signout != '00:00:00' && $short_break->part_time_signin == '00:00:00')) { ?>
            clearInterval();
        <?php } ?>

      // Matikan Timer
        <?php if ($collections->end_time != '00:00:00') { ?>
            clearInterval();
            document.getElementById("display").innerHTML = `${updateDisplay(hours)}:${updateDisplay(minutes)}:${updateDisplay(seconds)}`;
        <?php } ?>
    <?php } ?>

    });
  </script>
