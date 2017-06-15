      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Selamat Datang, <?php echo $nama ?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          
          <h4>
            Menu
          </h4>
          <hr style="border-color:#55E0DE;">

          <div class="row">
            <div class="col-lg-4 col-xs-4">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/1" style = "color:white">
                <div class="small-box bg-aqua">
                  <div class="inner" style="padding-left:10px !important;">
                  <?php
                  foreach ($open as $row) 
                  {
                    echo '<h3>'.$row['JML_OPENTICKET'].'</h3>';
                  }
                  ?>
                    <p>Unclosed Ticket</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/1" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
            
              <div class="col-lg-4 col-xs-4">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/2" style = "color:white">
                <div class="small-box bg-orange">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($closed as $row) 
                    {
                      echo '<h3>'.$row['JML_CLOSEDTICKET'].'</h3>';
                    }
                    ?>
                    <p>Closed Ticket</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-gears"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/2" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
              </div>
            </a>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-4">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/3" style = "color:white">
                <div class="small-box bg-maroon">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($pending as $row) 
                    {
                      echo '<h3>'.$row['JML_PENDINGTICKET'].'</h3>';
                    }
                    ?>
                    <p>Pending Ticket</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-list"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/3" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                          </div><!-- ./col -->
          </div><!-- /.row -->

          <h4>
            Pintasan Cepat
          </h4>
          <hr style="border-color:#55E0DE;">

          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
              <a href="<?php echo base_url() ?>ticket">
                <span class="info-box-icon bg-purple"><i class="fa fa-file-text"></i></span></a>
                <div class="info-box-content">
                  <span class="info-box-text">Rekap Teknisi Per Hari</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
              <a href="<?php echo base_url() ?>Excel">
                <span class="info-box-icon bg-green"><i class="fa fa-upload"></i></span></a>
                <div class="info-box-content">
                  <span class="info-box-text">Unggah Excel</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->    
        </section><!-- /.content -->
      </div><!-- /.content-wrapper --> -->
