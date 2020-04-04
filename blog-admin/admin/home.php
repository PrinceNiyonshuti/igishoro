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
                                    <li class="active">Home</li>
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
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="fa fa-file"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <?php
                                            $sql5="SELECT COUNT(blog_tittle) AS n_u FROM wp_blog";
                                            $result5=$conn->query($sql5);
                                            while ($row5 = $result5->fetch_assoc()) {
                                                $user_count=$row5['n_u'];
                                            }
                                                ?>
                                            <div class="stat-text"><span ><?php echo $user_count ?></span> Blogs</div>
                                            <div class="stat-heading">Active</div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

