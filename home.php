<div class="site-section py-0">
      <div class="owl-carousel hero-slide owl-style" style="padding-bottom: 0px !important;">

        <div class="site-section" style="padding: 0px !important;">
          <div class="container">
            <div class="half-post-entry d-block d-lg-flex bg-light">
              <div class="img-bg" style="background-image: url('images/SLIDE\ 1.jpg')"></div>
              <div class="contents">
                <span class="caption">Editor's Pick</span>
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <p class="mb-3">
                  Hello I’m Emmanuel, welcome to my personal finance and entrepreneur blog! I created this blog as a place to empower others to have financial skills and entrepreneurial skills.
                  I am a young adult who graduated from the former School of Finance and Banking (SFB), now University of Rwanda College of Business and Economics with undergraduate business BBA Finance degree and did courses in enterprise management and money management skills. Igishoro was created to empower people especially the youth by giving them entrepreneurial Skills and financial literacy skills that will help them to have the basic money management skills.
                </p>
                
                <div class="post-meta">
                  <span class="d-block"><a href="#">Emmanuel</a> </span>
                  
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="site-section">
          <div class="container">
            <div class="half-post-entry d-block d-lg-flex bg-light">
              <div class="img-bg" style="background-image: url('images/SLIDE\ 2.jpg')"></div>
              <div class="contents">
                <span class="caption">Editor's Pick</span>
                <h2><a href="blog-single.html">
                  Starting a business from scratch and keeping it running requires a lot of efforts.
                </a></h2>
                <p class="mb-3">
                  Anyone can be an entrepreneur, Starting a small business is an exciting venture, but succeeding at managing the business is also not an easy task but most importantly managing your finances are the key moments of your life, all it takes is that one must have passion, ambition, perseverance, resilience, think long term, be focused and use talents and skills that one has. The most important assets we people have are our mind, information and time, and if our mind is well trained and developed it can create wealth. We were not taught financial literacy at school, so we should change our thinking to become financially literate by preparing ourselves to learn. We must invest our time in financial education so that we build a firm financial foundation.
                </p>
                
                <div class="post-meta">
                  <span class="d-block"><a href="#">Emmanuel</a> </span>
                  
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="site-section">
          <div class="container">
            <div class="half-post-entry d-block d-lg-flex bg-light">
              <div class="img-bg" style="background-image: url('images/SLIDE\ 3.jpg')"></div>
              <div class="contents">
                <span class="caption">Editor's Pick</span>
                <h2><a href="blog-single.html">
                  Capital is not the only factor that one needs for the business to succeed, but also better execution strategy of the business is required.
                </a></h2>
                <p class="mb-3">
                  While having capital is certainly important, it is not a guarantee to the business success. Most funded Small and Medium-sized Enterprises (SMES) and Projects do fail not necessarily as a result of not being funded or not given enough seed capital, but rather lack of entrepreneurial skills, financial literacy skills and poor execution of the business. We always focus on capital as the most factor to the success of a business, but capital is just a catalyst and not a replacement for better execution strategy.  As capital is also not always enough, we should learn to start small and grow big later and do more with the little capital that we have .This is a great principle of value to learn as  in most cases capital is always not enough to start a business.
                </p>
                
                <div class="post-meta">
                  <span class="d-block"><a href="#">Emmanuel</a> </span>
                  
                </div>

              </div>
            </div>
          </div>
        </div>


        <div class="site-section">
          <div class="container">
            <div class="half-post-entry d-block d-lg-flex bg-light">
              <div class="img-bg" style="background-image: url('images/SLIDE\ 4.jpg')"></div>
              <div class="contents">
                <span class="caption">Editor's Pick</span>
                <h2><a href="blog-single.html">
                  Develop better financial habits while living within your means.
                </a></h2>
                <p class="mb-3">
                  My goal is to inspire and motivate you People especially the youth to be innovative, creative and for you to use your talents, knowledge and the skills that you need to start a business and create jobs. I also want to help you to develop entrepreneurial and better financial habits and create the better economic life you want by showing you how to feel rich while living within your means while mastering your economic destiny.
                  In a nutshell, you need to first invest in your entrepreneurial and financial education to have the required financial skills and knowledge if you are to succeed in any business.
                  Thanks for stopping by.

                </p>
                
                <div class="post-meta">
                  <span class="d-block"><a href="#">Emmanuel</a> </span>
                  
                </div>

              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Latest Post</h2>
            </div>
            <div class="row">
                  <?php

                    $sql1="SELECT * FROM wp_blog,category,sub_category WHERE sub_category.cat_id=category.cat_id AND wp_blog.sub_cat_id=sub_category.sub_cat_id ORDER BY wp_blog.blog_date DESC LIMIT 4";
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
                  <div class="col-lg-6">
                    <div class="post-entry-2 d-flex">
                      <div class="thumbnail" style="background-image: url('blog_photo/<?php echo $blog_cover ?>');width: 162px;height: 194px;"></div>
                      <div class="contents">
                        <h2><a href="index.php?blog_single&blog_holder=<?php echo $b_id ?>&<?php echo $encryption ?>"><?php echo $b_tittle ?></a></h2>
                        <p class="mb-3">
                          <?php
                            echo substr($b_descr,0,123); 
                          ?>   
                        </p>
                        <div class="post-meta">
                          <span class="d-block"><a href="#">Emmanuel</a> in <a href="#"><?php echo $row1['cat_name']; ?></a></span>
                          <span class="date-read"><?php echo $b_date ?> <span class="mx-1">&bullet;</span> <span class="icon-star2"></span></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                    }
                  ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>