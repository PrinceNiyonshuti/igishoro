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
                    

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <?php
                                            $sql5="SELECT SUM(amount) AS n_u FROM transaction WHERE type='nehemie' AND status='SUCCESS' AND message='SUCCESS'";
                                            $result5=$conn->query($sql5);
                                            while ($row5 = $result5->fetch_assoc()) {
                                                $user_count=$row5['n_u'];
                                            }
                                                ?>
                                            <div class="stat-text"><span ><?php echo $user_count ?></span> Rwf</div>
                                            <div class="stat-heading">Op. Nehemie</div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <?php
                                            $sql5="SELECT SUM(amount) AS n_u FROM transaction WHERE type='loan' AND status='SUCCESS' AND message='SUCCESS'";
                                            $result5=$conn->query($sql5);
                                            while ($row5 = $result5->fetch_assoc()) {
                                                $user_count=$row5['n_u'];
                                            }
                                                ?>
                                            <div class="stat-text"><span ><?php echo $user_count ?></span> Rwf</div>
                                            <div class="stat-heading">Church Loan</div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

