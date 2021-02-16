<style>
    .btn_link {
        background: none!important;
        border: none;
        padding: 0!important;
        /*optional*/
        font-family: arial, sans-serif;
        /*input has OS specific font-family*/
        color: #069;
        text-decoration: underline;
        cursor: pointer;
        text-decoration: none;
        outline: none !important;
        color: #878787;
        -webkit-transition: all 0.25s ease;
        transition: all 0.25s ease;
    }
</style>


<?php

    //Save new Category 

    if(ISSET($_POST['save_category'])){
            
        $cat_name = $_POST['cat_name'];
                                
        $sql="INSERT INTO category( cat_name) VALUES ('$cat_name')";

        if ($conn->query($sql)==TRUE) 
        {
            ?>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <a href="index.php?category"><span class="badge badge-pill badge-success">Done</span> You have succeffuly Created new Blog .
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
                            <a href="index.php?category"><span class="badge badge-pill badge-danger">Alert</span> Sorry Something went wrong. Please try again .
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
    }

    //Delete Catogory

    if(ISSET($_GET['data_holder'])){

        $data_holder=$_GET['data_holder'];

        $sql="DELETE FROM category WHERE cat_id = '$data_holder' ";

        if ($conn->query($sql)==TRUE) 
        {
            ?>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <a href="index.php?category"><span class="badge badge-pill badge-success">Done</span> You have succeffuly Deleted Category .
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
                            <a href="index.php?category"><span class="badge badge-pill badge-danger">Alert</span> Sorry Something went wrong. Please try again .
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

    }

    //Update Current Category Data

    if(ISSET($_POST['update_category_data'])){
            
        $cat_id = $_POST['cat_id'];
        $cat_name = $_POST['cat_name'];
                                
        $sql=" UPDATE category SET cat_name='$cat_name' WHERE cat_id='$cat_id' ";

        if ($conn->query($sql)==TRUE) 
        {
            ?>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <a href="index.php?category"><span class="badge badge-pill badge-success">Done</span> You have succeffuly Updated Category Data .
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
                            <a href="index.php?category"><span class="badge badge-pill badge-danger">Alert</span> Sorry Something went wrong. Please try again .
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
    }
?>

<?php 

    // Update Category

    if(ISSET($_POST['update_category'])){

        $cat_id = $_POST['cat_id'];
    
        ?>

            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Edit Category</div>
                            <div class="card-body">
                                <form class="form-horizontal" method="POST" action="">
                                    <div class="row">
                                        <?php

                                            $sql="SELECT * FROM category where cat_id='$cat_id' ";
                                            $result=$conn->query($sql);
                                            while ($row = $result->fetch_assoc()) {
                                                $cat_id=$row['cat_id'];
                                                $cat_name=$row['cat_name'];
                                            }
                                        ?>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                                <input id="cat_id" name="cat_id" value="<?php echo $cat_id ?>" type="hidden" >
                                                <input id="cat_name" name="cat_name" value="<?php echo $cat_name ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="cc-payment" class="control-label mb-1"> </label>
                                            <button id="payment-button" type="submit" name="update_category_data" class="btn btn-lg btn-primary btn-block">
                                                <i class="fa fa-book fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">Update</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php

    }else{
        
        ?>

            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">New Category</div>
                            <div class="card-body">
                                <form class="form-horizontal" method="POST" action="">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                                <input id="cat_name" name="cat_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="cc-payment" class="control-label mb-1"> </label>
                                            <button id="payment-button" type="submit" name="save_category" class="btn btn-lg btn-primary btn-block">
                                                <i class="fa fa-book fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">Save</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php

    }
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center"><strong>Category List</strong></h3>
                    </div>
                    <hr>

                    <?php
                        echo "<div class='table-stats order-table ov-h'>";
                            echo "<table id='bootstrap-data-table' class='table'>";
                                echo "<thead>";
                                    echo "<th>Category Name</th>";
                                    echo "<th>Action</th>";
                                    echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    $sql="SELECT * FROM category ";
                                        $result=$conn->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            $cat_id=$row['cat_id'];
                                            $cat_name=$row['cat_name'];

                                    echo "<tr>";
                                        echo "<td>".$row['cat_name']."</td>";
                                        echo "<td>";
                                            ?>
                                                <form class="form-horizontal" method="POST" action="">

                                                    <input id="cat_id" name="cat_id" value="<?php echo $cat_id ?>" type="hidden"  >
                                                    <button type="submit" name="update_category" class="btn_link" >
                                                        <i class='menu-icon fa fa-file'></i> Edit</a>
                                                    </button>
                                                </form>
                                            
                                            <?php
                                            
                                        echo "</td>";
                                        echo "<td>
                                            <a href='index.php?category&data_holder=$cat_id'><i class='menu-icon fa fa-trash'></i> Delete</a>
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
</div>