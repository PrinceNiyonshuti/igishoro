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

                                    <?php


                                        echo "<div class='table-stats order-table ov-h'>";
                                            echo "<table id='bootstrap-data-table' class='table'>";
                                                echo "<thead>";
                                                   echo " <tr>";
                                                        echo "<th>Cover</th>";
                                                        echo "<th>Blog Tittle</th>";
                                                        echo "<th>Short Descrption</th>";
                                                        echo "<th>Date</th>";
                                                        echo "<th>Action</th>";
                                                        echo "<th>Action</th>";
                                                       
                                                    echo "</tr>";
                                                echo "</thead>";
                                                echo "<tbody>";
                                                    $sql="SELECT * FROM wp_blog ";
                                                        $result=$conn->query($sql);
                                                        while ($row = $result->fetch_assoc()) {
                                                            $b_descr=$row['blog_descr'];
                                                            $b_descr=substr($b_descr,0,50);
                                                            $b_id=$row['blog_id'];

                                                    echo "<tr>";
                                                        echo "<td><img src='../../blog_photo/".$row['blog_photo']."' style='height:50px;width:100%;padding:0px;margin:0px;'></td>";
                                                        echo "<td>".$row['blog_tittle']."</td>";
                                                        echo "<td>".$b_descr." ...</td>";
                                                        echo "<td>".$row['blog_date']."</td>";
                                                        echo "<td>
                                                            <a href='index.php?update_blog&&blog_holder=$b_id'><i class='menu-icon fa fa-file'></i> Edit</a>
                                                        </td>";
                                                        echo "<td>
                                                            <a href='index.php?delete_blog&blog_holder=$b_id'><i class='menu-icon fa fa-trash'></i> Delete</a>
                                                        </td>";
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