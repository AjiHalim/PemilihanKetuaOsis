
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://file.smkbatikpwrj.sch.id/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://file.smkbatikpwrj.sch.id/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?=base_url('assets/')?>dist/css/adminlte.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <style type="text/css">
    .fa-lock {
      cursor: pointer;
    }
    @media (max-width: 576px){
      .login-box, .register-box {
        margin-top: .5rem;
        width: 100%;
      }

    }
    
  </style>
</head>
<body class="hold-transition login-page">
  <?php echo @$_SESSION['msg']; ?>
<div class="card">
    <div class="login-box">
      <div class="login-logo" style="margin: 20px 0 0 0;">
        <a href="index2.html"><img src="<?=base_url('assets/images/')?>gambarnobg.png" style="width: 50%"></a>
      </div>
      <!-- /.login-logo -->
      <div class="card-body login-card-body">
        <p class="login-box-msg"><i>Silahkan Log In</i></p>

        <form action="<?=base_url('User/cek_login')?>" method="post">
          <div class="input-group mb-3">
            <input type="username" class="form-control" placeholder="Username" name="nama">
            <div class="input-group-append">
              <div class="input-group-text" style="background-color: grey; color : white">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="sandi" id="password">
            <div class="input-group-append">
              <div class="input-group-text" style="background-color: grey; color : white">
              <span class="fas fa-lock" id="show" onclick="lihat()" ondblclick="hide()" data-toggle="popover" data-placement="right" data-content="Harap Klik dua Kali di logo Gembok Jika ingin Menyembunyikan Password."></span><br/>             
            </div>
          </div>
            <div class="input-group mb-3 mt-4">
              <button type="submit" class="btn btn-primary btn-block" style="width: 335%; margin: auto;" name="kirim">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
</div>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?=base_url('assets/')?>dist/js/adminlte.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script type="text/javascript">
function lihat()
{
    var password = document.getElementById('password'),
        button = document.getElementById('show');
      password.setAttribute('type', 'text');
}
function hide()
{
    var password = document.getElementById('password'),
        button = document.getElementById('show');
      password.setAttribute('type', 'password');
}

$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
</body>
</html>
