<script type="text/javascript">
function checkNull()
{
  var user_check = document.getElementById("username").value;
  var pass_check = document.getElementById("password").value;
  if(user_check == "")
  {
    alert("Username tidak boleh kosong. Silahkan isi kembali");
    document.getElementById("username").focus();
    return false;
  }
  else if (pass_check == "") 
  {
    alert("Password tidak boleh kosong. Silahkan isi kembali");
    document.getElementById("password").focus();
    return false;
  }
  else 
  {
    return true;
  }
}
</script>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>WOC</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="http://10.88.117.150:80/woc/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="http://10.88.117.150:80/woc/assets/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="http://10.88.117.150:80/woc/assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="http://10.88.117.150:80/woc/assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

  </head>

  <body class="login-page">

    <!-- <div class="login-logo" style="padding-top: 50px !important;">
        <a href="http://10.88.117.150:80/woc/" style="color:#ffffff;text-shadow: 2px 2px 4px #000000;"><b>WOC</b><br style="margin-top: 0px !important;"><small><small><small>(Customer Handling Arrangement)</small></small></small></a>
    </div> --><!-- /.login-logo -->

    <div class="login-box" style="padding-top: 50px !important;">
  
      <div class="login-box-body" style=" background-color: #DD4B39 !important; color: white !important; ">
        <h1 align="center"><b>WOC</b></h1>
        <hr>
                  <form action="http://10.88.117.150:80/woc/auth/doLogin" class="mainForm" method="post">
          <div class="form-group has-feedback">
              <input type="text" name="username" id="username" 
                     class="form-control" placeholder="Username" autofocus="" value=""/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="password" name="password" id="password" 
                     class="form-control" placeholder="Password" value=""/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
          <input type="hidden" name="ref" value="http://10.88.117.150:80/woc/Bot.php">
          <div class="row">
              <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="return checkNull()">Masuk</button>
              </div><!-- /.col -->
          </div>
          </form>
          
    <!-- jQuery 2.1.3 -->
    <script src="http://10.88.117.150:80/woc/assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="http://10.88.117.150:80/woc/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="http://10.88.117.150:80/woc/assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
  
</html>