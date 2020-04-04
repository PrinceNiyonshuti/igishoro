<!DOCTYPE html>
<html lang="en">

<head>

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

 <script src="js/jquery-3.2.1.min.js"></script>
<script src="js/princeop.js"></script>

</head>

<body>


<?php
include "../../config/config.php";
?>

<?php

session_start();

        $username=$_POST["username"];
        //$password=md5($_POST['password']);
        $passwor=$_POST['password'];
        $username = stripslashes($username);
        $passwor = stripslashes($passwor);
        $username = mysqli_real_escape_string($conn,$username);
        $passwor = mysqli_real_escape_string($conn,$passwor);
        $d = date("Y-m-d");
        $t = date("H:i:s");
         //Get current date and time
        
    if(empty($username) || empty($passwor)){
        ?>
        <div class="alert alert-danger" role="alert">
        <i class='fa fa-times-circle'></i> Invalid username or password
            </div>
        <?php
    }else{
    
    
    $password = openssl_encrypt($passwor, "AES-128-ECB", DONE);
    
    
//ADMIN    
    
    
    
    

$query=$conn->query("SELECT * from user where username='$username' and password='$password'");
if($query->num_rows === 1){

$sql4="SELECT * from user where username like '$username'";
$result4=$conn->query($sql4);

if ($row4 = $result4->fetch_assoc()) {
  
    $username_real=$row4['username'];
    $password_real=$row4['password'];


}

if ($username===$username_real and $password===$password_real){

        $_SESSION['IGISHORO_BLOG_ADMIN_PANEL_PRINCE_2020']=$username;
       
        ?>
        <div class="alert alert-success" role="alert">
        <i class='fa  fa-check-circle'></i> Login successfull. Redirecting ...
            </div>
        <?php
        echo "<script>location.href='admin/index.php'</script>";


}else{
      ?>
      <div class="alert alert-danger" role="alert">
      <i class='fa fa-times-circle'></i> Invalid username or password
       </div>
      <?php
}

}
    
    
    
    
    
//END ADMIN    
    







else{


	  ?>
      <div class="alert alert-danger" role="alert">
      <i class='fa fa-times-circle'></i> Invalid username or password
       </div>
      <?php      
}
}       

?>

</body>
</html>