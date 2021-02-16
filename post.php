    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="section-title">
              <span class="caption d-block small">Categories</span>
              <h2>Post</h2>
            </div>

                  <?php

                    $sql1="SELECT * FROM `wp_blog` ORDER BY blog_date DESC LIMIT 6";
                    $result1=$conn->query($sql1);

                    while ($row1 = $result1->fetch_assoc()) {
                    $b_id=$row1['blog_id'];
                    $b_tittle=$row1['blog_tittle'];
                    $b_descr=$row1['blog_descr'];
                    $b_photo=$row1['blog_photo'];
                    $b_date=$row1['blog_date'];
                    $b_date = date('M d', strtotime($b_date));
                    $encryption = openssl_encrypt($b_id, "AES-128-ECB", DONE);
                    
                    if (empty($b_photo)) {
                        $blog_cover = "blog.png";
                    } else {
                        $blog_cover = "$b_photo";
                    }
                  ?>

            <div class="post-entry-2 d-flex">
              <div class="thumbnail order-md-2" style="background-image: url('blog_photo/<?php echo $blog_cover ?>');width: 247.5px;height: 152px;"></div>
              <div class="contents order-md-1 pl-0">
                <h2><a href="index.php?blog_single&blog_holder=<?php echo $b_id ?>&<?php echo $encryption ?>"><?php echo $b_tittle ?></a></h2>
                <p class="mb-3"><?php echo substr($b_descr,0,123);?></p>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read"><?php echo $b_date ?> <span class="mx-1">&bullet;</span> <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>
                  <?php
                    }
                  ?>

            <div class="post-entry-2 d-flex">
              <div class="thumbnail order-md-2" style="background-image: url('images/img_h_3.jpg')"></div>
              <div class="contents order-md-1 pl-0">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-3">
                <div class="section-title">
                  <h2>Popular Posts</h2>
                </div>

                <?php

                  $sql1=" SELECT * FROM sub_category,wp_blog where sub_category.sub_cat_id=wp_blog.sub_cat_id ORDER BY wp_blog.blog_id DESC LIMIT 5 ";
                  $result1=$conn->query($sql1);
                  $number=0;
                  while ($row1 = $result1->fetch_assoc()) {
                  $b_id=$row1['blog_id'];
                  $b_tittle=$row1['blog_tittle'];
                  $b_date=$row1['blog_date'];
                  $b_date = date('M d', strtotime($b_date));
                  $encryption = openssl_encrypt($b_id, "AES-128-ECB", DONE);
                  $number ++;
                  
                  if (empty($b_photo)) {
                      $blog_cover = "blog.png";
                  } else {
                      $blog_cover = "$b_photo";
                  }
                ?>

                  <div class="trend-entry d-flex">
                    <div class="number align-self-start"><?php echo $number; ?></div>
                    <div class="trend-contents">
                      <h2>
                        <a href="index.php?blog_single&blog_holder=<?php echo $b_id ?>&<?php echo $encryption ?>"><?php echo $b_tittle ?></a>
                      </h2>
                      <div class="post-meta">
                        <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#"><?php echo $row1['sub_cat_name']; ?></a></span>
                        <span class="date-read"> <?php echo $b_date ?> <span class="mx-1">&bullet;</span></span>
                      </div>
                    </div>
                  </div>

                <?php
                  }
                ?>
                
                <!-- <p>
                  <a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
                </p> -->

              </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <ul class="custom-pagination list-unstyled">
              <li><a href="#">1</a></li>
              <li class="active">2</li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>