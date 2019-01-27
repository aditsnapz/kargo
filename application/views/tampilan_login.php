<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DA Cargo| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/file/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/file/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>/file/plugins/iCheck/square/blue.css">

  <style type="text/css">
    body{
      background-image: url(<?php echo base_url(); ?>file/gambar/bg.jpg);
    }
  </style>

</head>
<body class="hold-transition">
<div class="login-box">
  <div class="login-logo">
  <font color="white"><b>PT Domestic</b></font></br>
  <font color="white">Andalan Cargo</font></br>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><img src="<?php echo base_url(); ?>file/gambar/logo.jpg"></p>

    <form action="<?php echo base_url(); ?>index.php/login/getlogin" method="POST">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" required placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" required placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         <?php
                    $info = $this->session->flashdata('info');
                    if (!empty($info)) {
                        echo $info;
                    }
                ?>
      </div>
      <div class="form-group has-feedback">
        <select name="level" required class="form-control">
          <option value="" >-- Pilih Akses --</option>
          <option value="Admin">Admin</option>
          
          <option value="Pimpinan">Pimpinan</option>
          
        </select>
      </div>
      <div class="row" align="center">
        
        <!-- /.col -->
        
    <table>
      <tr>&nbsp
        <td>  
          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </td>
        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
        <td>
          <button type="reset" class="btn btn-danger btn-block">Cancel</button>
        </td>
      </tr>
    </table>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>/file/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>/file/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>/file/plugins/iCheck/icheck.min.js"></script>
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
