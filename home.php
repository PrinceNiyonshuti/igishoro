<div class="site-section py-0">
    <div class="owl-carousel hero-slide owl-style" style="padding-bottom: 0px !important;">

        <div class="site-section" style="padding: 0px !important;">
            <div class="container">
                <div class="half-post-entry d-block d-lg-flex bg-light">
                    <div class="img-bg contents" style="background-image: url('images/SLIDE\ 1.jpg')">
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section" style="padding: 0px !important;">
            <div class="container">
                <div class="half-post-entry d-block d-lg-flex bg-light">
                    <div class="img-bg contents" style="background-image: url('images/SLIDE\ 2.jpg')">
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section" style="padding: 0px !important;">
            <div class="container">
                <div class="half-post-entry d-block d-lg-flex bg-light">
                    <div class="img-bg contents" style="background-image: url('images/SLIDE\ 3.jpg')">
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

                    $sql1 = "SELECT * FROM wp_blog,category,sub_category WHERE sub_category.cat_id=category.cat_id AND wp_blog.sub_cat_id=sub_category.sub_cat_id ORDER BY wp_blog.blog_date DESC LIMIT 4";
                    $result1 = $conn->query($sql1);

                    while ($row1 = $result1->fetch_assoc()) {
                        $b_id = $row1['blog_id'];
                        $b_tittle = $row1['blog_tittle'];
                        $b_descr = $row1['blog_descr'];
                        $b_photo = $row1['blog_photo'];
                        $b_date = $row1['blog_date'];
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
                            <div class="thumbnail"
                                style="background-image: url('blog_photo/<?php echo $blog_cover ?>');width: 162px;height: 194px;">
                            </div>
                            <div class="contents">
                                <h2><a
                                        href="index.php?blog_single&blog_holder=<?php echo $b_id ?>&<?php echo $encryption ?>"><?php echo $b_tittle ?></a>
                                </h2>
                                <p class="mb-3">
                                    <?php
                                        echo substr($b_descr, 0, 123);
                                    ?>
                                </p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Emmanuel</a> in <a
                                            href="#"><?php echo $row1['cat_name']; ?></a></span>
                                    <span class="date-read"><?php echo $b_date ?> <span class="mx-1">&bullet;</span>
                                        <span class="icon-star2"></span></span>
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