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
//Save new Sub Category

if (isset($_POST['save_sub_category'])) {
    $cat_id = $_POST['cat_id'];
    $sub_cat_name = $_POST['sub_cat_name'];

    $sql = "INSERT INTO sub_category( cat_id, sub_cat_name) VALUES ('$cat_id','$sub_cat_name')";

    if ($conn->query($sql) == true) { ?>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <a href="index.php?sub_category"><span class="badge badge-pill badge-success">Done</span> You have succeffuly Created New Sub Category .
                                <button type="button" class="close"  style="" >
                                    <span aria-hidden="true">&times;</span>
                                </button></a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <a href="index.php?sub_category"><span class="badge badge-pill badge-danger">Alert</span> Sorry Something went wrong. Please try again .
                                <button type="button" class="close"  style="" >
                                    <span aria-hidden="true">&times;</span>
                                </button></a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
}

//Delete Sub Catogory

if (isset($_GET['data_holder'])) {
    $data_holder = $_GET['data_holder'];

    $sql = "DELETE FROM sub_category WHERE sub_cat_id = '$data_holder' ";

    if ($conn->query($sql) == true) { ?>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <a href="index.php?sub_category"><span class="badge badge-pill badge-success">Done</span> You have succeffuly Deleted Sub Category .
                                <button type="button" class="close"  style="" >
                                    <span aria-hidden="true">&times;</span>
                                </button></a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <a href="index.php?sub_category"><span class="badge badge-pill badge-danger">Alert</span> Sorry Something went wrong. Please try again .
                                <button type="button" class="close"  style="" >
                                    <span aria-hidden="true">&times;</span>
                                </button></a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
}

//Update Current Sub Category Data

if (isset($_POST['update_sub_category_data'])) {
    $cat_id = $_POST['cat_id'];
    $sub_cat_id = $_POST['sub_cat_id'];
    $sub_cat_name = $_POST['sub_cat_name'];

    $sql = " UPDATE sub_category SET sub_cat_name='$sub_cat_name',cat_id='$cat_id' WHERE sub_cat_id='$sub_cat_id' ";

    if ($conn->query($sql) == true) { ?>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <a href="index.php?sub_category"><span class="badge badge-pill badge-success">Done</span> You have succeffuly Updated Sub Category Data .
                                <button type="button" class="close"  style="" >
                                    <span aria-hidden="true">&times;</span>
                                </button></a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <a href="index.php?sub_category"><span class="badge badge-pill badge-danger">Alert</span> Sorry Something went wrong. Please try again .
                                <button type="button" class="close"  style="" >
                                    <span aria-hidden="true">&times;</span>
                                </button></a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
}
?>

<?php // Update Sub Category

if (isset($_POST['update_sub_category'])) {
    $sub_cat_id = $_POST['sub_cat_id']; ?>

            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Edit Sub - Category</div>
                            <div class="card-body">
                            <form class="form-horizontal" method="POST" action="">
                                    <div class="row">

                                    <?php
                                    $sql = "SELECT * FROM sub_category,category where sub_category.cat_id=category.cat_id and sub_category.sub_cat_id='$sub_cat_id' ";
                                    $result = $conn->query($sql);
                                    while ($row3 = $result->fetch_assoc()) {
                                        $sub_cat_id = $row3['sub_cat_id'];
                                        $cat_id = $row3['cat_id'];
                                        $cat_name = $row3['cat_name'];
                                        $sub_cat_name = $row3['sub_cat_name'];
                                    }
                                    ?>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1"> Category Name</label>
                                                <select class="form-control"  name="cat_id" data-placeholder="Choose one.." required>
                                                    <option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
                                                    <?php
                                                    $sql = "SELECT * FROM category where cat_id != '$cat_id' ";
                                                    $result = $conn->query(
                                                        $sql
                                                    );
                                                    while (
                                                        $row1 = $result->fetch_assoc()
                                                    ) { ?>
                                                                    <option value="<?php echo $row1[
                                                                        'cat_id'
                                                                    ]; ?>"><?php echo $row1[
    'cat_name'
]; ?></option>
                                                                <?php }
                                                    ?> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Sub Category Name</label>
                                                <input id="sub_cat_id" name="sub_cat_id" value="<?php echo $sub_cat_id; ?>" type="hidden"  >
                                                <input id="sub_cat_name" name="sub_cat_name" value="<?php echo $sub_cat_name; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="cc-payment" class="control-label mb-1"> </label>
                                            <button id="payment-button" type="submit" name="update_sub_category_data" class="btn btn-lg btn-primary btn-block">
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
} else {
     ?>

            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">New Sub - Category</div>
                            <div class="card-body">
                                <form class="form-horizontal" method="POST" action="">
                                    <div class="row">

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1"> Category Name</label>
                                                <select class="form-control"  name="cat_id" data-placeholder="Choose one.." required>
                                                    <option value="0">--- Select Category ---</option>
                                                    <?php
                                                    $sql =
                                                        'SELECT * FROM category ';
                                                    $result = $conn->query(
                                                        $sql
                                                    );
                                                    while (
                                                        $row = $result->fetch_assoc()
                                                    ) { ?>
                                                                    <option value="<?php echo $row[
                                                                        'cat_id'
                                                                    ]; ?>"><?php echo $row[
    'cat_name'
]; ?></option>
                                                                <?php }
                                                    ?> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Sub Category Name</label>
                                                <input id="sub_cat_name" name="sub_cat_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="cc-payment" class="control-label mb-1"> </label>
                                            <button id="payment-button" type="submit" name="save_sub_category" class="btn btn-lg btn-primary btn-block">
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
} ?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center"><strong>Sub - Category List</strong></h3>
                    </div>
                    <hr>

                    <?php
                    echo "<div class='table-stats order-table ov-h'>";
                    echo "<table id='bootstrap-data-table' class='table'>";
                    echo '<thead>';
                    echo '<th>Sub Category Name</th>';
                    echo '<th>Category Name</th>';
                    echo '<th>Action</th>';
                    echo '<th>Action</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    $sql =
                        ' SELECT * FROM sub_category,category WHERE sub_category.cat_id=category.cat_id ';
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {

                        $sub_cat_id = $row['sub_cat_id'];
                        $sub_cat_name = $row['sub_cat_name'];
                        $cat_name = $row['cat_name'];

                        echo '<tr>';
                        echo '<td>' . $row['sub_cat_name'] . '</td>';
                        echo '<td> - ' . $row['cat_name'] . ' - </td>';
                        echo '<td>';
                        ?>
                                                <form class="form-horizontal" method="POST" action="">

                                                    <input id="sub_cat_id" name="sub_cat_id" value="<?php echo $sub_cat_id; ?>" type="hidden"  >
                                                    <button type="submit" name="update_sub_category" class="btn_link" >
                                                        <i class='menu-icon fa fa-file'></i> Edit</a>
                                                    </button>
                                                </form>
                                            
                                            <?php
                                            echo '</td>';
                                            echo "<td>
                                            <a href='index.php?sub_category&data_holder=$sub_cat_id'><i class='menu-icon fa fa-trash'></i> Delete</a>
                                        </td>";
                                            echo '</tr>';

                    }
                    echo '</tbody>';
                    echo '</table>';
                    echo '</div>';
                    ?>
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>