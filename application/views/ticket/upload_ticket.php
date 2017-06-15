<script type="text/javascript">
function checkFile()
{
  var file = document.getElementById("userFile").value;
  if(file == "") 
  {
    alert("Berkas belum dipilih. Silahkan pilih berkas terlebih dahulu");
    return false;
  }
  else 
  {
    if(isExcel5(file))
    {
      return true;
    }
    else
    {
      alert("Berkas yang dipilih tidak sesuai dengan format berkas. Hanya berkas dengan format .xls diperbolehkan. Silahkan pilih berkas dengan format yang sesuai");
      return false;
    }
  }
}

function getExtension(filename)
{
  var parts = filename.split('.');
  return parts[parts.length - 1];
}

function isExcel5(filename)
{
  var ext = getExtension(filename);
  switch (ext.toLowerCase())
  {
    case 'xls':
      //etc
      return true;
  }
  return false;
}
</script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Ticket
            <small>Tambah Ticket</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-file-text text-yellow"></i>  <a href="#">Ticket</a></li>
            <li class="active">Tambah Ticket</li>
          </ol>
        </section>
      <div class="col-md-12">
        <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Unggah Data Ticket</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php base_url() ?>Ticket/uploadTicket" method="post" name="upload_excel" enctype="multipart/form-data">
                  <div class="box-body">
                    <hr>
                      <label for="exampleInputFile">File input</label>
                      <!-- <input type="file" name="file" id="exampleInputFile" class="input-large"> -->
                      <input name="userFile" id="userFile" type="file" tabindex="1" value="NULL" />
                      <!-- <input type="file" id=""> -->
                      <p class="help-block">Unggah file dengan format .xls</p>
                      <button type="submit" class="btn btn-primary" onclick="return checkFile()">Unggah</button>
                  </div><!-- /.box-body -->
                </form>
        </div><!-- /.box -->
      </div><!--/.col (left) -->