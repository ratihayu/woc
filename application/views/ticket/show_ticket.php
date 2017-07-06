<script>
function deldata() {
    return confirm('Apakah Anda yakin akan menghapus data ini?');
  }
</script>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Ticket
      <?php
        echo '<small>' . $subjudul . '</small>';
      ?>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-list"></i> Ticket</li>
      <?php
        echo '<li class="active">' . $subjudul . '</li>';
      ?>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <div class="box">
  	<div class="row">
      <div class="col-xs-12">
          <div class="box-body">
            <h4>Navigasi</h4><hr>
            <?php if($subjudul != 'Daftar Semua Ticket') { ?><a href="<?php echo base_url() ?>Ticket/showAllTicket/4"><button type="button" class="btn btn-primary">Lihat Semua Ticket</button></a> <?php } ?>
            <?php if($subjudul != 'Unclosed Ticket') { ?><a href="<?php echo base_url() ?>Ticket/showAllTicket/1"><button type="button" class="btn btn-danger">Lihat Unclosed Ticket</button></a><?php } ?>
            <?php if($subjudul != 'Closed Ticket') { ?><a href="<?php echo base_url() ?>Ticket/showAllTicket/2"><button type="button" class="btn btn-success">Lihat Komplain Closed Ticket</button></a><?php } ?>
            <?php if($subjudul != 'Pending Ticket') { ?><a href="<?php echo base_url() ?>Ticket/showAllTicket/3"><button type="button" class="btn btn-warning">Lihat Pending Ticket</button></a><?php } ?>    
            <br><br>
          </div>
        </div>
      </div>
    </div>
  <div class="box">
  <div class="box-header with-border">
        <h3 class="box-title"><?php echo $subjudul?></h3>
      </div><!-- /.box-header -->
    <div class="row">
      <div class="col-xs-12">
          <div class="box-body">
            <br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="background-color:#FACC2E!important"><p style="color: #FACC2E!important">asdasdasd</p>AKSI</th>
                  <th style="background-color:#FACC2E!important">ID INCIDENT</th>
                  <th style="background-color:#FACC2E!important">STATUS</th>
                  <th style="background-color:#FACC2E!important">TANGGAL REKAP</th>
                  <th style="background-color:#FACC2E!important">NAMA PELANGGAN</th>
                  <th style="background-color:#FACC2E!important">SUMMARY</th>
                  <th style="background-color:#FACC2E!important">ALPRO</th>
                  <th style="background-color:#FACC2E!important">TANGGAL LAPOR</th>
                  <th style="background-color:#FACC2E!important">PRIORITAS</th>
                  <th style="background-color:#FACC2E!important">TTR_SEGMENT</th>
                  <th style="background-color:#FACC2E!important">FILTER</th>
                  <th style="background-color:#FACC2E!important">TANGGAL CLOSED</th>
                  <th style="background-color:#FACC2E!important">CLOSED BY</th>
                  <th style="background-color:#FACC2E!important">HD</th>
                  <th style="background-color:#FACC2E!important">ACTUAL SOLUTION</th>
                  <th style="background-color:#FACC2E!important">KETERANGAN KENDALA</th>
                  <th style="background-color:#FACC2E!important">WORKZONE</th>
                  <th style="background-color:#FACC2E!important">NO SERVICE</th>
                  <th style="background-color:#FACC2E!important">DATEK</th>
                  <th style="background-color:#FACC2E!important">ASSIGNED TECHNICIAN</th>
                  <th style="background-color:#FACC2E!important">KETERANGAN CLOSED</th>
                  <th style="background-color:#FACC2E!important">KETERANGAN PENDING</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if($list != NULL)
                {
                  foreach($list as $row)
                  { ?>
                  <tr>
                    <td> 
                      <a href="<?php echo base_url() . 'Ticket/editTicket/' . $row->ID_INCIDENT ?>" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil text-black fa-lg"></i></a>
                    </td>
                    <td><?php echo $row->ID_INCIDENT; ?></td>
                    <td><?php echo $row->STATUS; ?></td>
                    <td><?php echo $row->RECAP_DATE; ?></td>
                    <td><?php echo $row->CUSTOMER_NAME; ?></td>
                    <td><?php echo $row->SUMMARY; ?></td>
                    <td><?php echo $row->ALPRO; ?></td>
                    <td><?php echo $row->REPORT_DATE; ?></td>
                    <td><?php echo $row->PRIORITY; ?></td>
                    <td><?php echo $row->TTR_SEGMENT; ?></td>
                    <td><?php echo $row->FILTER; ?></td>
                    <td><?php if ($row->CLOSED_DATE == '0000-00-00') {echo '-';} else {echo $row->CLOSED_DATE;}  ?></td>
                    <td><?php echo $row->NAMA_TEKNISI; ?></td>
                    <td><?php echo $row->NAMA_LENGKAP; ?></td>
                    <td><?php echo $row->ACTUAL_SOLUTION; ?></td>
                    <td><?php echo $row->KETERANGAN_KENDALA; ?></td>
                    <td><?php echo $row->WORKZONE; ?></td>
                    <td><?php echo $row->NO_SERVICE; ?></td>
                    <td><?php echo $row->DATEK; ?></td>
                    <td><?php echo $row->TECHNICIAN_ASSIGNED; ?></td>
                    <td><?php echo $row->KETERANGAN_CLOSED; ?></td>
                    <td><?php echo $row->KETERANGAN_PENDING; ?></td>
                  </tr>
                  <?php
                  }
                }?>
              </tbody>
              <tfoot>
                <tr>
                  <th style="background-color:#FACC2E!important"><p style="color: #FACC2E!important">asdasdasd</p>AKSI</th>
                  <th style="background-color:#FACC2E!important">ID INCIDENT</th>
                  <th style="background-color:#FACC2E!important">STATUS</th>
                  <th style="background-color:#FACC2E!important">TANGGAL REKAP</th>
                  <th style="background-color:#FACC2E!important">NAMA PELANGGAN</th>
                  <th style="background-color:#FACC2E!important">SUMMARY</th>
                  <th style="background-color:#FACC2E!important">ALPRO</th>
                  <th style="background-color:#FACC2E!important">TANGGAL LAPOR</th>
                  <th style="background-color:#FACC2E!important">PRIORITAS</th>
                  <th style="background-color:#FACC2E!important">TTR_SEGMENT</th>
                  <th style="background-color:#FACC2E!important">FILTER</th>
                  <th style="background-color:#FACC2E!important">TANGGAL CLOSED</th>
                  <th style="background-color:#FACC2E!important">CLOSED BY</th>
                  <th style="background-color:#FACC2E!important">HD</th>
                  <th style="background-color:#FACC2E!important">ACTUAL SOLUTION</th>
                  <th style="background-color:#FACC2E!important">KETERANGAN KENDALA</th>
                  <th style="background-color:#FACC2E!important">WORKZONE</th>
                  <th style="background-color:#FACC2E!important">NO SERVICE</th>
                  <th style="background-color:#FACC2E!important">DATEK</th>
                  <th style="background-color:#FACC2E!important">ASSIGNED TECHNICIAN</th>
                  <th style="background-color:#FACC2E!important">KETERANGAN CLOSED</th>
                  <th style="background-color:#FACC2E!important">KETERANGAN PENDING</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->