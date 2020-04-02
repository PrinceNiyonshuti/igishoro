        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Blog List </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

            if (empty($in_check)||empty($out_check)) {

                $in_check=date('Y-m-d');
                $out_check=date('Y-m-d');
            }
            else{
            $in_check=$_POST['in_check'];
            $out_check=$_POST['out_check'];
            }
        ?>

        <div class="content">
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="row">
                                <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center"><strong>Blog List</strong></h3>
                                        </div>
                                            <hr>

                                            <form action="index.php?view_blog_s" method="post">
                                                <div class="row">
                                                                <?php 

                                                                $month = date('m');
                                                                $day = date('d');
                                                                $year = date('Y');

                                                                $today = $year . '-' . $month . '-' . $day;
                                                                ?>
                                                    <div class="col-md-4">
                                                        <div class="form-group has-success">
                                                            <label for="cc-name" class="control-label mb-1">From Date</label>

                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                <input name="in_check" id="in_check" class="form-control" type="date" max='<?php echo $today; ?>'>
                                                            </div>
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group has-success">
                                                            <label for="cc-name" class="control-label mb-1"> To Date</label>

                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                <input name="out_check" id="out_check" class="form-control" type="date" value="<?php echo $today; ?>" max='<?php echo $today; ?>'>
                                                            </div>
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group has-success">
                                                             <label for="cc-name" class="control-label mb-1">&nbsp;</label>
                                                            <div class="input-group">
                                                                <button type="submit" class="btn btn-primary">Search</button>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </form>
                                            </div>

                                    <?php


                                        echo "<div class='table-stats order-table ov-h'>";
                                            echo "<table id='bootstrap-data-table' class='table'>";
                                            echo "<caption>Igishoro Blog List</caption>";
                                                echo "<thead>";
                                                   echo " <tr>";
                                                        echo "<th>Cover</th>";
                                                        echo "<th>Blog Tittle</th>";
                                                        echo "<th>Short Descrption</th>";
                                                        echo "<th>Date</th>";
                                                       
                                                    echo "</tr>";
                                                echo "</thead>";
                                                echo "<tbody>";
                                                    $sql="SELECT * FROM transaction WHERE type='Operation Nehemie' ";
                                                        $result=$conn->query($sql);
                                                        while ($row = $result->fetch_assoc()) {

                                                    echo "<tr>";
                                                        echo "<td><img src=''></td>";
                                                        echo "<td>".$row['Names']."</td>";
                                                        echo "<td>".$row['phone']."</td>";
                                                        echo "<td>".$row['amount']."</td>";
                                                    echo "</tr>";
                                                        }
                                                echo "</tbody>";
                                           echo "</table>";
                                        echo "</div>";
                                    ?>

                            <hr>



                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /# card -->
            </div><!-- /# column -->
        </div><!-- .animated -->
        </div><!-- .content -->