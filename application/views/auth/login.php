<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title><?php echo lang('login_heading');?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?=base_url();?>dash/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?=base_url();?>dash/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?=base_url();?>dash/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">
<?php echo form_open("auth/login");?>


        <div class="form-box" id="login-box">
            <div class="header"><?php echo lang('login_heading');?></div>
            <form method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="identity" id="identity" class="form-control" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Пароль"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember" id="remember" /> Запомнить </br>
                        <small><p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p></small>
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" name="submit" class="btn bg-olive btn-block">Войти</button>  
                    

                </div>
            </form>

           
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?=base_url();?>dash/js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>