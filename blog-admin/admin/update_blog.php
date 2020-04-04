 <?php   
    $blog_data=$_GET['blog_holder'];

                $sql1="SELECT * FROM `wp_blog` WHERE blog_id='$blog_data'";
                    $result1=$conn->query($sql1);

                    while ($row1 = $result1->fetch_assoc()) {
                    $b_id=$row1['blog_id'];
                    $b_tittle=$row1['blog_tittle'];
                    $b_descr=$row1['blog_descr'];
                    $b_content=$row1['blog_content'];
                    $b_photo=$row1['blog_photo'];
                    $b_date=$row1['blog_date'];
                    $b_date = date('M d', strtotime($b_date)); 
                    
                    if (empty($b_photo)) {
                        $blog_cover = "test1.jpg";
                    } else {
                        $blog_cover = "$b_photo";
                    }

                    }

?>
 

 
                    <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div id="Message2" ></div>
                                <br>
                                
                                <div class="table-responsive table-responsive-data">
                                    
                                         <br>
                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">Update <?php echo $b_tittle ?> Data</div>
                                    <div class="card-body">
                                        <form action="update_blog_data.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                           
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="../../blog_photo/<?php echo $b_photo?>" alt="Book Cover" id="blah" alt="Card image cap" width="300px" height="290px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                        <input style="display: none;"type="text" id="b_id" name="b_id" value="<?php echo $b_id ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Blog Tittle</label>
                                                        <input id="b_tittle" name="b_tittle" type="text" value="<?php echo $b_tittle ?>" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Blog Short Description</label>
                                                        <textarea id="b_descr" name="b_descr" type="text" class="form-control" aria-required="true" aria-invalid="false" ><?php echo $b_descr ?></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Blog Content </label>
                                                        <textarea id="b_content" name="b_content" type="text" class="form-control rich_text_area" aria-required="true" aria-invalid="false" rows="10" ><?php echo $b_content ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-book fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save Blog Updates</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                                        <script>

                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#blah')
                                                        .attr('src', e.target.result)
                                                        .width(250)
                                                        .height(300);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            }
                                                }
                                            
                                        </script>