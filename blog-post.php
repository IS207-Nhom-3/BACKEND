<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Post</title>

    <link rel="stylesheet" href="style/general.css">
    <link rel="stylesheet" href="style/blog.css">
    

    <link rel="stylesheet" href="font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://kit.fontawesome.com/c79c075354.js" crossorigin="anonymous"></script>

</head>
<body>

    <?php include"./includes/header.php" ?>

    <div class="well">
    <h4>Blog Search</h4>
    <!-- Tạo một form -->
    <form action="search.php" method="post">
    <div class="input-group">
        <input name="search" type="text" class="form-control">
        <span class="input-group-btn">
            <button name="submit" class="btn btn-default" type="submit">
                Search
        </button>
        </span>
    </div>
    </form><!--Kết thúc Search form -->

    <!-- /.input-group -->
</div>


    <section class="blog-post section-header-offset">
        <div class="blog-post-container container">
            <div class="blog-post-data">
                <h3 class="title blog-post-title">Is VR the future?</h3>
                <div class="article-data">
                    <span>Dec 6th 2021</span>
                    <span class="article-data-spacer"></span>
                    <span>4 Min read</span>
                </div>
                <img src="/img/blog/featured/featured-1.jpg" alt="">
            </div>

            <div class="container">


                <p>
                    Meta's Quest Pro is one of the most highly anticipated pieces of technology to hit the market in the past few years. 
                    The virtual reality industry is highly competitive, with major companies such as Meta, Sony (PlayStation VR) and HTC (Vive) leading the way in terms of market share and innovation. 
                    Meta's Quest Pro is a virtual reality headset that lets users fully immerse themselves in a digital world with a passthrough that lets you see the real world.
                </p>
                
                <p>
                    To understand passthrough, imagine sitting at Starbucks and spawning three huge monitors displaying your emails, CRM and spreadsheets. 
                    Today you can do that with a VR device and work from literally anywhere with multiple monitors. 
                    Yes, you'll look a little crazy wearing the VR headset, but I think it's going to become a common scene in public places.
                     When the Airpods first came out, I thought they looked super weird and couldn't imagine people wearing them in public. 
                     Today we all use Airpods and Airpod sales may even do more in revenue than some of the biggest companies we all love: Spotify, Snapchat, Twitter, Shopify, AMD and others.
                </p>

                <blockquote class="quote">
                    <p><span><i class="ri-double-quotes-l"></i></span> Forbes Technology Council is an invitation-only community for world-class CIOs, CTOs and technology executives. Do I qualify?  <span><i class="ri-double-quotes-r"></i></span></p>
                </blockquote>
            
                <p>
                    VR is a very exciting facet of technology that has a lot of potential for the future. 
                    While these headsets are not ready for widespread use yet, they're worth keeping an eye on. 
                    I'm very confident that we'll see major improvements in the next five to 10 years to make it more comfortable and practical for everyday use. 
                    You can think of the Meta Quest Pro as the first iPhone. I'm excited to see what we'll have 10 years from now.
                </p>

                <div class="author d-grid">
                    <div class="author-image-box">
                        <img src="/img/blog/author.jpg" alt="" class="article-image">
                    </div>
                    <div class="author-about">
                        <h3 class="author-name">Net Kohen</h3>
                        <p>I'm very confident that we'll see major improvements in the next five to 10 years to make it more comfortable and practical for everyday use.</p>
                        <ul class="list social-media">
                            <li class="list-item">
                                <a href="#" class="list-link"><i class="ri-instagram-line"></i></a>
                            </li>
                            <li class="list-item">
                                <a href="#" class="list-link"><i class="ri-facebook-circle-line"></i></a>
                            </li>
                            <li class="list-item">
                                <a href="#" class="list-link"><i class="ri-twitter-line"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="well categories">
    <!-- Dùng php để gọi loại post từ bảng cơ sở dữ liệu -->
    <?php
     $query ="SELECT * FROM categories";
     $select_categories_sidebar = mysqli_query($connection, $query);
    ?>
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
        <?php 
        while ($row = mysqli_fetch_assoc($select_categories_sidebar)){ // duyệt qua từng dòng của bảng
        $cat_title = $row['cat_title'];
        $cat_id = $row['cat_id'];
        echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";}//Xuất ra loại post với link là ví dụ category.php?category=1
        ?>
        </div> 
    </div>
    <!-- /.row -->
</div>
    <footer class="section-p1 footer">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong>Trường Đại học Công Nghệ Thông Tin, Quận Thủ Đức, TP.Hồ Chí Minh</p>
            <p><strong>Phone:</strong>0967692310</p>
            <p><strong>Hours:</strong>8:00-20.00, Monday-Saturday</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Term & Conditions</a>
            <a href="#">Contact us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>&copy; 2023 Phone Ecommerce. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Custom script -->
    <script src="/assets/js/blog.js"></script>
</body>
</html>
