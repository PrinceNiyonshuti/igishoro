<?php

include "../config/config.php";

session_start();

// For logout

if(isset($_GET["sign"]))
{
  $sign=$_GET["sign"];
  if($sign=="out")
  {
        unset($_SESSION["IGISHORO_BLOG_ADMIN_PANEL_PRINCE_2020"]);
    
    header("location:../index.php");}
    }
    

// For checking if the user logged in

if(isset($_SESSION['IGISHORO_BLOG_ADMIN_PANEL_PRINCE_2020']) == false){
    header("Location:../index.php");
}else{
    ?>

<!doctype html>

<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Igishoro Admin-panel  </title>
  
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
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <?php

                            $sql5="SELECT * from user where username='$_SESSION[IGISHORO_BLOG_ADMIN_PANEL_PRINCE_2020]'";
                            $result5=$conn->query($sql5);


                            while ($row5 = $result5->fetch_assoc()) {
                            $id=$row5['id'];
                            $names=$row5['Names'];


                            

                                }

                                ?>


                    <li>
                        <a href="index.php?home"><i class="menu-icon active fa fa-laptop"></i><strong><?php echo $names; ?></strong> Dashboard </a>
                    </li>
                    <li class="menu-title">Admin Elements</li><!-- /.menu-title -->

                    <li>
                        <a href="index.php?new_blog"> <i class="menu-icon fa fa-file"></i>New Blog</a>
                    </li>

                    <li>
                        <a href="index.php?view_blog"> <i class="menu-icon fa fa-file-text"></i>View Blogs</a>
                    </li>            
                	
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">  
            <div class="top-left">
                <div class="navbar-header"> 
                    <a class="navbar-brand" href="index.php"><img src="../asset/images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="../asset/images/logo2.png" alt="Logo"></a> 
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> 
                </div> 
            </div>
            <div class="top-right"> 
                <div class="header-menu"> 

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../img/avatar.png"  >
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="?sign=out" id="logout"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
 
                </div>  
            </div>
        </header><!-- /header -->
        <!-- Header-->

    <?php
	   
       if(isset($_GET['home']))
        {
            include("home.php");
        }

        elseif(isset($_GET['new_blog']))
        {           
            include("new_blog.php");
        }

        elseif(isset($_GET['view_blog']))
        {           
            include("view_blog.php");
        }

        elseif(isset($_GET['update_blog']))
        {           
            include("update_blog.php");
        }

        elseif(isset($_GET['delete_blog']))
        {           
            include("delete_blog.php");
        }

        else
        {
            include("home.php");
        }

	?> 


        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; <?php echo  date("Y"); ?> Igishoro
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://github.com/PrinceNiyonshuti" target="_blank">NP Tech</a>
                    </div>
                </div>
            </div>
        </footer>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


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


            <!--  Rich Text area -->
    <script type="text/javascript" src="../asset/src/jquery.min.js"></script>
    <script type="text/javascript" src="../asset/src/jquery.richtext.js"></script>
    <link rel="stylesheet" href="../asset/src/richtext.min.css">


<script>
    $(document).ready(function() {
        $('.rich_text_area').richText();
    });
</script>

<script>
var base64Img = null;
imgToBase64('logo.png', function(base64) {
    base64Img = base64; 
});

margins = {
  top: 70,
  bottom: 40,
  left: 30,
  width: 550
};

generate = function()
{
	var pdf = new jsPDF('p', 'pt', 'a4');
	pdf.setFontSize(14);
	pdf.fromHTML(document.getElementById('flow_data'), 
		margins.left, // x coord
		margins.top,
		{
			// y coord
			width: margins.width// max width of content on PDF
		},function(dispose) {
			headerFooterFormatting(pdf, pdf.internal.getNumberOfPages());
		}, 
		margins);
	
	var iframe = document.createElement('iframe');
	iframe.setAttribute('style','position:fixed;right:0;left:0; top:0; bottom:0; height:100%; width:100%; padding:20px; z-index:10000000000;');
	document.body.appendChild(iframe);
	
    iframe.src = pdf.output('datauristring');
	//pdf.output("dataurlnewwindow","Flow_Data.pdf");

};
function headerFooterFormatting(doc, totalPages)
{
    for(var i = totalPages; i >= 1; i--)
    {
        doc.setPage(i);                            
        //header
        header(doc);
        
        footer(doc, i, totalPages);
        doc.page++;
    }
};

function header(doc)
{
    doc.setFontSize(14);
    doc.setTextColor(40);
    doc.setFontStyle('normal');
	
    if (base64Img) {
       doc.addImage(base64Img, 'JPEG', margins.left, 10, 150,40);        
    }
	    
    doc.text("Fuel Flow Statisticts Report", margins.left + 130, 40 );
	doc.setLineCap(2);
	doc.line(3, 70, margins.width + 43,70); // horizontal line
};

// You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
// http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
function imgToBase64(url, callback, imgVariable) {
 
    if (!window.FileReader) {
        callback(null);
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'blob';
    xhr.onload = function() {
        var reader = new FileReader();
        reader.onloadend = function() {
			imgVariable = reader.result.replace('text/xml', 'image/jpeg');
            callback(imgVariable);
        };
        reader.readAsDataURL(xhr.response);
    };
    xhr.open('GET', url);
    xhr.send();
};

function footer(doc, pageNumber, totalPages){

    var str = "Page " + pageNumber + " of " + totalPages
   
    doc.setFontSize(10);
    doc.text(str, margins.left, doc.internal.pageSize.height - 20);
    
};
</script>



</body>
</html>
<?php
}
?>
