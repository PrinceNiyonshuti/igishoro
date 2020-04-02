
 

 
                    <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div id="Message2" ></div>
                                <br>
                                
                                <div class="table-responsive table-responsive-data">
                                    
                                         <br>
                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">New Blog Data</div>
                                    <div class="card-body">
                                        <form action="create_blog.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                           
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="../../blog_photo/test1.jpg" alt="Book Cover" id="blah" alt="Card image cap" width="300px" height="290px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Blog Tittle</label>
                                                        <input id="b_tittle" name="b_tittle" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Blog Short Description</label>
                                                        <textarea id="b_descr" name="b_descr" type="text" class="form-control" aria-required="true" aria-invalid="false" ></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Blog Content </label>
                                                        <textarea id="b_content" name="b_content" type="text" class="form-control" aria-required="true" aria-invalid="false" rows="10" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-book fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save New Blog</span>
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