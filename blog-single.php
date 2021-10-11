<?php

$blog_data = $_GET['blog_holder'];

// Use openssl_decrypt() function to decrypt the data 
$decryption = openssl_decrypt($blog_data, "AES-128-ECB", DONE);

if (empty($blog_data)) {
?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 single-content">

                <div class="section-title">
                    <h2>Sorry Nothing We Did Catch , Please Choose Again The Blog</h2>
                </div>

                <div class="trend-entry d-flex">
                    <div class="trend-contents">
                        <h2><a href="blog-single.html">This Blog You Want To View Can't Be Given t This Time</a></h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
} else {
?>

<?php

  $sql1 = "SELECT * FROM `wp_blog` WHERE blog_id='$blog_data'";
  $result1 = $conn->query($sql1);

  while ($row1 = $result1->fetch_assoc()) {
    $b_id = $row1['blog_id'];
    $b_tittle = $row1['blog_tittle'];
    $b_content = $row1['blog_content'];
    $b_photo = $row1['blog_photo'];
    $b_date = $row1['blog_date'];
    $b_date = date('M d', strtotime($b_date));

    if (empty($b_photo)) {
      $blog_cover = "test1.jpg";
    } else {
      $blog_cover = "$b_photo";
    }
  }

  if ($result1->num_rows == 1) {
  ?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 single-content">

                <p class="mb-5">
                    <img src="blog_photo/<?php echo $blog_cover ?>" style="width: 730px;height: 438px;" alt="Image"
                        class="img-fluid">
                </p>
                <h1 class="mb-4">
                    <?php echo $b_tittle ?>
                </h1>
                <div class="post-meta d-flex mb-5">
                    <div class="bio-pic mr-3">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluidid">
                    </div>
                    <div class="vcard">
                        <span class="d-block"><a href="#">Emmanuel</a> in <a
                                href="#"><?php echo $row1['cat_name']; ?></a></span>
                        <span class="date-read"><?php echo $b_date ?> <span class="mx-1">&bullet;</span> <span
                                class="icon-star2"></span></span>
                    </div>
                </div>
                <div style="color: black;">
                    <p style="text-align: justify;font-size: 15px;"><?php echo $b_content ?></p>
                </div>
                <div class="pt-5">
                    <p>Categories: <a href="#">Design</a>, <a href="#">Events</a> Tags: <a href="#">#html</a>, <a
                            href="#">#trends</a></p>
                </div>

            </div>


            <div class="col-lg-3 ml-auto">
                <div class="section-title">
                    <h2>Popular Posts</h2>
                </div>

                <?php

            $sql1 = "SELECT * FROM wp_blog,category,sub_category WHERE sub_category.cat_id=category.cat_id AND wp_blog.sub_cat_id=sub_category.sub_cat_id ORDER BY wp_blog.blog_date DESC LIMIT 4";
            $result1 = $conn->query($sql1);
            $a = 1;
            while ($row1 = $result1->fetch_assoc()) {
              $b_id = $row1['blog_id'];
              $b_tittle = $row1['blog_tittle'];
              $b_descr = $row1['blog_descr'];
              $b_photo = $row1['blog_photo'];
              $b_date = $row1['blog_date'];
              $b_date = date('M d', strtotime($b_date));
              $encryption = openssl_encrypt($b_id, "AES-128-ECB", DONE);
              $a = +1;

            ?>

                <div class="trend-entry d-flex">
                    <div class="number align-self-start"><?php echo $a; ?></div>
                    <div class="trend-contents">
                        <h2><a
                                href="index.php?blog_single&blog_holder=<?php echo $b_id ?>&<?php echo $encryption ?>"><?php echo $b_tittle ?></a>
                        </h2>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Emmanuel</a> in <a
                                    href="#"><?php echo $row1['cat_name']; ?></a></span>

                            <!-- <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span> -->
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

    </div>
</div>
<?php
  } else {

  ?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 single-content">

                <div class="section-title">
                    <h2>Sorry The Blog You Want To Access Doesn't Exist</h2>
                </div>

                <div class="trend-entry d-flex">
                    <div class="trend-contents">
                        <h2><a href="blog-single.html">This Blog You have Selected Have Been Removed By The Owner.</a>
                        </h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
  }
}
?>
