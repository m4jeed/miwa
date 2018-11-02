<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- icon url -->
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/admin.jpeg');?>">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
  <!-- <style type="text/css">
    body  {
      background-image: url("admin.jpeg");
      background-color: #0f2233;
  }
  </style> -->

  <script type="text/javascript">
    function cekform()
    {
      if(!$("#email").val()){
        alert("Maaf email harus di isi");
        $("#email").focus();
        return false;
      }

      if(!$("#password").val()){
        alert("Maaf password harus di isi");
        $("#password").focus();
        return false;
      }
    }
  </script>

  <?php 
    $info = $this->session->flashdata('messages');
    if(!empty($info))
    { echo $info; } ?>  
  
</head>
  <body class="hold-transition login-page" style="background-image:url('<?php echo base_url();?>/assets/images/bg.jpeg');">
    <div class="login-box">
      <div class="login-logo">
        <a href="" style="color:#2F4F4F;"><b>MIWA RENGGINANG</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Welcome to Login</p>

        <form action="<?php base_url();?>login/cek_login" method="post" onsubmit="return cekform();" >
          <div class="form-group has-feedback">
            <input type="type" name="email" id="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>  
          </div>

          <?php 
            $info = $this->session->flashdata('info');
            if(!empty($info))
            { echo $info; } ?> 

          <div class="row">
            <div class="col-xs-8">
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" data-toggle="modal" data-target="#modalSuccess" class="btn btn-primary btn-block btn-flat"><i class="fa fa-unlock"></i> Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.login-box-body -->
    </div>
  <!-- /.login-box -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
  </body>
</html>
