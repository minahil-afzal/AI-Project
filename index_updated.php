<?php
    session_start();
    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1)
        header('location: webpages/students/home.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Testing System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page " style="background-image:url(images/back.jpg); background-size:100% 100%">      
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b style="color:white"> Testing System</b></a> 
      </div><!-- /.login-logo -->
        <?php
            if(isset($_SESSION["error"])){
        ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            Invalid Username or Password
        </div>
        <?php
            }
            unset($_SESSION["error"]);
        
            if(isset($_SESSION["msg"])){
				if($_SESSION["msg"]=="1")
				{
        ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Success!</h4>
            User Registered Successfully.
        </div>
        <?php
				}
            }
            unset($_SESSION["msg"])
        ?>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="login-process.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="email" class="form-control" placeholder="Enter Email">
<!--            <input type="text" name="roll_no" class="form-control" placeholder="Roll No">-->
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
		  
		  
		  
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  
                </label>
              </div>
            </div>  
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
		  <div class="row" style="margin-top:20px">
            <div class="col-xs-12" style="text-align:center">
               <a style="font-size:16px;Font-weight:bold;" href="sing-up.php">Don't have an Account? Register Here.</a>
            </div><!-- /.col -->
          </div>
          
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
	<script>
	localStorage.clear();
    sessionStorage.clear();
    </script>
<?php
unset($_SESSION['q']);
    unset($_SESSION['ans']);
    unset($_SESSION['test_id']);
    unset($_SESSION['duration']);
?>
  </body>
</html>