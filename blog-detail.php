<?php
    require_once('php/connect.php');
    $sql = "SELECT * FROM articles WHERE id = '".$_GET['id']."'";
    $result = $conn->query($sql) or die ($conn->error);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc() or die($conn->error);
    }
    else {
        header('Location: blog.php');
    }

    $sql_RAND = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result_RAND = $conn->query($sql_RAND) or die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title><?php echo $row['subject']; ?></title>

<!-- COMMON TAGS -->
    <meta charset="utf-8">
    <!-- Search Engine -->
    <meta property="description" content="<?php echo $row['sub_title']; ?>">
    <meta property="title" content="SimonHope Studio">
    <meta property="keywords" content="เกม, บอร์ดเกม, เล่นเกม">
    <meta property="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="language" content="English">
    <meta property="image" content="https://images.unsplash.com/10/wii.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
    <!-- Schema.org for Google -->
    <meta property="name" content="SimonHope ส่งต่อเรื่องราวของเกม">
    <meta property="description" content="<?php echo $row['sub_title']; ?>">
    <meta property="image" content="https://images.unsplash.com/10/wii.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:title" content="SimonHope ส่งต่อเรื่องราวของเกม">
    <meta property="og:description" content="<?php echo $row['sub_title']; ?>">
    <meta property="og:image" content="https://images.unsplash.com/10/wii.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
    <meta property="og:url" content="https://sclass1-project.web.app/blog.php">
    <meta property="og:site_name" content="https://sclass1-project.web.app/blog.php">
    <meta property="og:type" content="website">

<!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

<!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- Section Navbar -->
        <?php include_once('includes/navbar.php') ?>

    <!-- Section Page-title -->
        <header class="jarallax " data-speed="0.5" style="background-image: url('<?php echo $base_path_blog.$row['image']; ?>');">
            <div class="page-image">
                <h1 class="display-4 font-weight-bold"><?php echo $row['subject']; ?></h1>
                <p class="lead container"><?php echo $row['sub_title'] ?></p>
            </div>
        </header>

    <!-- Section Blog -->
        <section class="container blog-content">
            <div class="row">
                <div class="col=12">
                    <?php echo $row['detail']; ?>
                </div>
                <div class="col-12">
                    <hr>
                    <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                    <p class="text-right text-muted"><?php echo date_format(new DateTime($row['updated_at']),"j F Y"); ?></p>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <?php while($row_RAND = $result_RAND->fetch_assoc()) { ?>
                        <section class="col-12 p-2">
                            <div class="card h-100">
                                <a href="blog-detail.php?id=<?php echo $row_RAND['id']; ?>" class="warpper-card-img">
                                    <img src="<?php echo $base_path_blog.$row_RAND['image'] ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row_RAND['subject']; ?></h5>
                                    <p class="card-text"><?php echo $row_RAND['sub_title'];?></p>
                                </div>
                                <div class="p-3">
                                    <a href="blog-detail.php?id=<?php echo $row_RAND['id']; ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </section>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="fb-comments" data-href="https://localhost/blog/blog-detail.php?id_simonhope=<?php echo $row['id']; ?>" data-width="100%" data-numposts="5"></div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v11.0" nonce="12tA1ym2"></script>
                </div>
            </div>
        </section>  

    <!-- Section Footer -->
        <?php include_once('includes/footer.php') ?>

    <!-- Section On to Top -->
        <div class="to-top">
            <i class="fas fa-angle-up"></i>
        </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=60fc2d4b7cf8170012e3da70&product=inline-share-buttons' async='async'></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: false,
                nav:false,
                dot: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        });
    </script>
</body>
</html>