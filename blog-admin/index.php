<!DOCTYPE html>
<html>
<head>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="viewport" content="width=device-width, initial-scale=1"><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <title> Igishoro -- Login</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="asset/images/log.png">
    <link rel="shortcut icon" href="asset/images/log.png"> 

    <link rel="stylesheet" href="asset/css/normalize.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/themify-icons.css">
<link rel="stylesheet" href="asset/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="asset/css/flag-icon.min.css">
    <link rel="stylesheet" href="asset/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="asset/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="asset/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="bg-dark">

   
   <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                        <img class="align-content" src="asset/images/logo.png" width="100%" height="100px" alt="">
                </div>

  

 
        <p id="Message1"></p>
        <div class="login-form">
                   
                        <form  method="post" action="#/" onsubmit="login1();return false;">
                            <div id="alert1"></div>
                        <div class="form-group">
                            <label>Username</label>
                           <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="forget.html">Forgotten Password?</a>
                            </label>

                        </div>

                        <button type="submit" class="btn btn-success btn-flat m-b-20 m-t-30"  name="login_btn" >Sign in</button>
                        <hr>

                        <div class="register-link m-t-15 text-center">
                            <p>Igishoro Admin Panel.</p>
                        </div>
                    </form>
                       </div>
            </div>
        </div>
    </div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/princeop.js"></script>


</body>
</html>
