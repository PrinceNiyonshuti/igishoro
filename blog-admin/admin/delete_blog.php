
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WildLife Admin-panel  </title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../asset/images/log.png">
    <link rel="shortcut icon" href="../asset/images/log.png"> 

    <link rel="stylesheet" href="../asset/css/normalize.css">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/css/themify-icons.css">
    <link rel="stylesheet" href="../asset/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="../asset/css/flag-icon.min.css">
    <link rel="stylesheet" href="../asset/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="../asset/css/bootstrap-select.less"> --> 
    <link rel="stylesheet" href="../asset/css/style.css"> 
 
</head>


<body>
<?php

    $blog_data=$_GET['blog_holder'];


                $sql="DELETE FROM `wp_blog` WHERE `wp_blog`.`blog_id` = '$blog_data' ";
    
                    if ($conn->query($sql)==TRUE) 
                    {
                        ?>
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                        <a href="index.php?view_blog"><span class="badge badge-pill badge-success">Done</span> You have succeffuly Deleted This Blog .
                                            <button type="button" class="close"  style="" >
                                                <span aria-hidden="true">&times;</span>
                                             </button></a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <a href="index.php?new_blog"><span class="badge badge-pill badge-danger">Alert</span> Sorry Something went wrong. Please try again .
                                            <button type="button" class="close"  style="" >
                                                <span aria-hidden="true">&times;</span>
                                             </button></a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }

?>
    <script src="../asset/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../asset/js/popper.min.js"></script>
    <script src="../asset/js/plugins.js"></script>
    <script src="../asset/js/main.js"></script>



    <!--Flot Chart-->

    <script src="../asset/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="../asset/js/lib/flot-chart/jquery.flot.spline.js"></script>

    <script src="../asset/js/widgets.js"></script>


    <script src="../asset/js/lib/data-table/datatables.min.js"></script>
    <script src="../asset/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../asset/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../asset/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <!-- <script src="../asset/js/lib/data-table/jszip.min.js"></script>
    <script src="../asset/js/lib/data-table/pdfmake.min.js"></script> -->
    <script src="../asset/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../asset/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../asset/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../asset/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../asset/js/lib/data-table/datatables-init.js"></script>

        <!--  Chart js -->
    <script src="../js/princeop.js"></script>
    <script src="../js/check.js"></script>
    <script src='../js/jspdf.min.js'></script>
</body>
</html>