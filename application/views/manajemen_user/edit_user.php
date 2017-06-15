<script type="text/javascript">
function checkNull()
{
  if(document.getElementById("nama").value == "" || document.getElementById("username").value == "" || document.getElementById("pass").value == "")
  {
    alert("Isian tidak boleh kosong. Silahkan isi kembali");
    return false;
  }
  else
  {
    return true;
  }
}
</script>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manajemen User
            <small>Edit Akun</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Manajemen User</a></li>
            <li class="active">Edit Akun</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12" >

              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Edit Informasi Akun</h3>
                </div>
                <?php

                      if($result != NULL)
                      {
                        foreach($result as $row)
                      { ?>
                <form action="<?php echo site_url('users/update') . '/' . $row['ID_AKUN'] ?>" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Lengkap :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input id="nama" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $row['NAMA_LENGKAP'] ?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Username :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-at"></i>
                      </div>
                      <input id="username" class="form-control" name="username" placeholder="Username" value="<?php echo $row['USERNAME'] ?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Password :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                      <input type="password" id="pass" class="form-control" name="pass" placeholder="Password" value="<?php echo $row['PASSWORD'] ?>"/>
                      <input type="hidden" class="form-control" name="passAwal" placeholder="Password" value="<?php echo $row['PASSWORD'] ?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                  	<label>Tipe akun :</label><br/>
                    <label>
                      <input type="radio" name="otoritas" class="flat-red" value="User" <?php if ($row['OTORITAS'] == 'User') { ?>checked <?php } ?>/> User
                    </label><br/>
                    <label>
                      <input type="radio" name="otoritas" class="flat-red" value="Admin" <?php if ($row['OTORITAS'] == 'Admin') { ?>checked <?php } ?>/> Admin
                    </label>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="float:right" onclick="return checkNull()">Update</button>
                  </div>
                </form>
                <?php } } ?> 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      