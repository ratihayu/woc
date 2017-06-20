</script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Ticket
            <small>Edit Ticket</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-file-text text-orange"></i>  <a href="#">Ticket</a></li>
            <li class="active">Edit Ticket</li>
          </ol>
        </section>
        <?php
          foreach ($ticket as $row) {
                          $id             = $row['ID_INCIDENT'];
                          $status         = $row['STATUS'];
                          $name           = $row['CUSTOMER_NAME'];
                          $summary        = $row['SUMMARY'];
                          $ketclosed      = $row['KETERANGAN_CLOSED'];
                          $ketpending     = $row['KETERANGAN_PENDING'];
                       }
        ?>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Ticket</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <form action="<?php echo site_url('Ticket/updateTicket'); ?>" method="post" role="form">
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <div class="form-group">
                          <label>No Incident</label>
                          <input name="id" type="text" id="id" class="form-control" value="<?php echo $id ?>" disabled/>
                        </div>
                                             <!-- select -->
                        <div class="form-group">
                          <label>Status Ticket</label>
                          <select name="status" id="status" class="form-control">
                             <option value="OPEN" <?php echo ($status == "OPEN")?"selected":"" ?> >OPEN</option>
                             <option value="CLOSED" <?php echo ($status == "CLOSED")?"selected":"" ?> >CLOSED</option>
                             <option value="PENDING" <?php echo ($status == "PENDING")?"selected":"" ?> >PENDING</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Nama Pelanggan</label>
                          <input name="name" type="text" id="name" class="form-control" value="<?php echo $name ?>" disabled/>
                        </div>
                        <div class="form-group">
                          <label>Summary</span></label>
                          <textarea name="summary" id="summary" type="text" class="form-control" disabled> <?php echo $summary;?></textarea>
                        </div>
                        <div class="form-group">
                          <label>Keterangan Closed</span></label>
                          <textarea name="ketclosed" id="ketclosed" type="text" class="form-control"> <?php echo $ketclosed;?></textarea>
                        </div>
                        <div class="form-group">
                          <label>Keterangan Pending</span></label>
                          <textarea name="ketpending" id="ketpending" type="text" class="form-control"> <?php echo $ketpending;?></textarea>
                        </div>
                      <input type="hidden" name="ref" value="<?php echo $ref_uri?>">
                      <div class="box-footer">
                        <?php
                        if ($id == NULL || $id == '')
                        {
                          echo '<button type="submit" class="btn btn-primary" >Ubah Ticket</button>';
                        }
                        else
                        {
                          echo '<button type="submit" class="btn btn-primary" >Ubah Ticket</button>';
                        }
                        ?>
                       </div>
                      </form>
                    </div> <!-- /.col -->
                  </div> <!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div> <!-- /.col -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->    