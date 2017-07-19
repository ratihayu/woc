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
            Rekap Manual Tiket Gangguan Magelang
          </h4>
          <hr style="border-color:#55E0DE;">

          <div class="row">
            <div class="col-lg-3 col-xs-3">
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
                    <p>Open Ticket</p>
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
            
              <div class="col-lg-3 col-xs-3">
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
                    <p>Closed Ticket Hari ini</p>
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
            <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/4" style = "color:white">
                <div class="small-box bg-green">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($closedall as $row) 
                    {
                      echo '<h3>'.$row['JML_CLOSEDTICKETALL'].'</h3>';
                    }
                    ?>
					<p>Closed Ticket Total</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-gears"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/4" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
              </div>
            </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-3">
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
            Open Tiket 
          </h4>
          <hr style="border-color:#55E0DE;">

          <div class="row">
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/11" style = "color:white">
                <div class="small-box bg-aqua">
                  <div class="inner" style="padding-left:10px !important;">
                  <?php
                  foreach ($openmea as $row) 
                  {
                    echo '<h3>'.$row['JML_MEA_OPEN'].'</h3>';
                  }
                  ?>
                    <p>MEA Magelang</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/11" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
            
              <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/12" style = "color:white">
                <div class="small-box bg-aqua">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($openmun as $row) 
                    {
                      echo '<h3>'.$row['JML_MUN_OPEN'].'</h3>';
                    }
                    ?>
                    <p>Muntilan</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-gears"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/12" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
              </div>
            </a>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/13" style = "color:white">
                <div class="small-box bg-aqua">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($opentem as $row) 
                    {
                      echo '<h3>'.$row['JML_TEM_OPEN'].'</h3>';
                    }
                    ?>
					<p>Temanggung</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-gears"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/13" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
              </div>
            </a>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/14" style = "color:white">
                <div class="small-box bg-aqua">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($openpwr as $row) 
                    {
                      echo '<h3>'.$row['JML_PWR_OPEN'].'</h3>';
                    }
                    ?>
                    <p>Purworejo</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-list"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/14" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
            
		  
		  <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/15" style = "color:white">
                <div class="small-box bg-aqua">
                  <div class="inner" style="padding-left:10px !important;">
                  <?php
                  foreach ($openkbm as $row) 
                  {
                    echo '<h3>'.$row['JML_KBM_OPEN'].'</h3>';
                  }
                  ?>
                    <p>Kebumen</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/15" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
			
			<div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/16" style = "color:white">
                <div class="small-box bg-aqua">
                  <div class="inner" style="padding-left:10px !important;">
                  <?php
                  foreach ($openwos as $row) 
                  {
                    echo '<h3>'.$row['JML_WOS_OPEN'].'</h3>';
                  }
                  ?>
                    <p>Wonosobo</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/16" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
                          </div><!-- ./col -->
          </div><!-- /.row -->		  
		  
<h4>
            Closed Tiket Hari ini
          </h4>
          <hr style="border-color:#55E0DE;">

          <div class="row">
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/5" style = "color:white">
                <div class="small-box bg-orange">
                  <div class="inner" style="padding-left:10px !important;">
                  <?php
                  foreach ($closedmea as $row) 
                  {
                    echo '<h3>'.$row['JML_MEA'].'</h3>';
                  }
                  ?>
                    <p>MEA Magelang</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/5" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
            
              <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/6" style = "color:white">
                <div class="small-box bg-orange">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($closedmun as $row) 
                    {
                      echo '<h3>'.$row['JML_MUN'].'</h3>';
                    }
                    ?>
                    <p>Muntilan</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-gears"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/6" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
              </div>
            </a>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/7" style = "color:white">
                <div class="small-box bg-orange">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($closedtem as $row) 
                    {
                      echo '<h3>'.$row['JML_TEM'].'</h3>';
                    }
                    ?>
					<p>Temanggung</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-gears"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/7" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
              </div>
            </a>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/9" style = "color:white">
                <div class="small-box bg-orange">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($closedpwr as $row) 
                    {
                      echo '<h3>'.$row['JML_PWR'].'</h3>';
                    }
                    ?>
                    <p>Purworejo</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-list"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/9" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
            
		  
		  <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/8" style = "color:white">
                <div class="small-box bg-orange">
                  <div class="inner" style="padding-left:10px !important;">
                  <?php
                  foreach ($closedkbm as $row) 
                  {
                    echo '<h3>'.$row['JML_KBM'].'</h3>';
                  }
                  ?>
                    <p>Kebumen</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/8" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
			
			<div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/10" style = "color:white">
                <div class="small-box bg-orange">
                  <div class="inner" style="padding-left:10px !important;">
                  <?php
                  foreach ($closedwos as $row) 
                  {
                    echo '<h3>'.$row['JML_WOS'].'</h3>';
                  }
                  ?>
                    <p>Wonosobo</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/10" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
                          </div><!-- ./col -->
          </div><!-- /.row -->
		  
		  <h4>
            Pending Tiket
          </h4>
          <hr style="border-color:#55E0DE;">

          <div class="row">
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/17" style = "color:white">
                <div class="small-box bg-maroon">
                  <div class="inner" style="padding-left:10px !important;">
                  <?php
                  foreach ($pendingmea as $row) 
                  {
                    echo '<h3>'.$row['JML_MEA_PENDING'].'</h3>';
                  }
                  ?>
                    <p>MEA Magelang</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/17" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
            
              <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/18" style = "color:white">
                <div class="small-box bg-maroon">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($pendingmun as $row) 
                    {
                      echo '<h3>'.$row['JML_MUN_PENDING'].'</h3>';
                    }
                    ?>
                    <p>Muntilan</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-gears"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/18" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
              </div>
            </a>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/19" style = "color:white">
                <div class="small-box bg-maroon">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($pendingtem as $row) 
                    {
                      echo '<h3>'.$row['JML_TEM_PENDING'].'</h3>';
                    }
                    ?>
					<p>Temanggung</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-gears"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/19" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
              </div>
            </a>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/20" style = "color:white">
                <div class="small-box bg-maroon">
                  <div class="inner" style="padding-left:10px !important;">
                    <?php
                    foreach ($pendingpwr as $row) 
                    {
                      echo '<h3>'.$row['JML_PWR_PENDING'].'</h3>';
                    }
                    ?>
                    <p>Purworejo</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-list"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/20" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
            
		  
		  <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/21" style = "color:white">
                <div class="small-box bg-maroon">
                  <div class="inner" style="padding-left:10px !important;">
                  <?php
                  foreach ($pendingkbm as $row) 
                  {
                    echo '<h3>'.$row['JML_KBM_PENDING'].'</h3>';
                  }
                  ?>
                    <p>Kebumen</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/21" class="small-box-footer">
                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </a>
            </div><!-- ./col -->
			
			<div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <a href = "<?php echo base_url() ?>Ticket/showAllTicket/22" style = "color:white">
                <div class="small-box bg-maroon">
                  <div class="inner" style="padding-left:10px !important;">
                  <?php
                  foreach ($pendingwos as $row) 
                  {
                    echo '<h3>'.$row['JML_WOS_PENDING'].'</h3>';
                  }
                  ?>
                    <p>Wonosobo</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <a href="<?php echo base_url() ?>Ticket/showAllTicket/22" class="small-box-footer">
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
