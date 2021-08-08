<?php
    require_once('php/connect.php');
    $sql = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>SimonHope ส่งต่อเรื่องราวของเกม</title>

<!-- COMMON TAGS -->
    <?php include_once('includes/meta.php'); ?>

<!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- Section Navbar -->
        <?php include_once('includes/navbar.php') ?>
          
    <!-- Section Carousel -->
        <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="corousel-img" style="background-image: url('https://images.unsplash.com/10/wii.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80');">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Simon Hope Studio</h1>
                        <p class="lead">ฝึกเขียนเว็บไซต์ไปกับเรา(HTML CSS Javascript)</p>
                    </div>
                    <div class="backscreen"></div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="corousel-img" style="background-image: url('https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');">
                    <div class="carousel-caption">
                        <h1 class="display-4">Simon Hope Studio</h1>
                        <p class="lead">Angular React Vue</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="corousel-img" style="background-image: url('https://images.unsplash.com/photo-1585504198199-20277593b94f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=877&q=80');">
                    <div class="carousel-caption">
                        <h1 class="display-4">Simon Hope Studio</h1>
                        <p class="lead">PHP MySql</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </section>
  
    <!-- Section Jumbotron -->
        <section class="jumbotron jumbotron-fluid text-center">
            <div class="container">
                <h1 class="border-short-bottom">เป้าหมายของการเขียนเว็บไซต์</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem fuga at porro nobis tempore temporibus eveniet mollitia unde sequi quis optio, quo assumenda rerum sed. Pariatur dolor eveniet odio sit.</p>
            </div>
        </section>
        
    <!-- Section Blog -->
        <section class="container">
            <h1 class="border-short-bottom text-center">บทความ Blog</h1>
            <div class="row">
                <?php while($row = $result->fetch_assoc()){ ?>
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
                            <img src="<?php echo $base_path_blog.$row['image'] ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                            <p class="card-text"><?php echo $row['sub_title'] ?></p>
                        </div>
                        <div class="p-3">
                            <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </section>
                <?php } ?>
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
    <script src="assets/js/main.js"></script>
</body>
</html>