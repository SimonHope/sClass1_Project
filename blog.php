<?php
    require_once('php/connect.php');
    $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
    $sql = "SELECT * FROM `articles` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true'";
    $result = $conn->query($sql);
    if (!$result) {
        header('Location: blog.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Blog</title>

<!-- COMMON TAGS -->
    <?php include_once('includes/meta.php'); ?>

<!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    
    <!-- Se ction Navbar -->
        <?php include_once('includes/navbar.php') ?>

    <!-- Section Page-title -->
        <header class="jarallax" data-speed="0.5" style="background-image: url('https://images.unsplash.com/photo-1498736297812-3a08021f206f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <div class="page-image">
                <h1 class="display-4 font-weight-bold">บทความ</h1>
                <p class="lead">"สังคมแห่งการเล่นเกม"</p>
            </div>
        </header>

    <!-- Section Blog -->
        <section class="container py-5">
            <div class="row pb-4">
                <div class="col-12 text-center">
                    <div class="btn-group-custom">
                        <a href="blog.php?tag=all">
                            <button class="btn btn-primary <?php echo $tag == 'all' || $tag == '' ? 'active' : '' ?>">ทั้งหมด</button>
                        </a>
                        <a href="blog.php?tag=fps">
                            <button class="btn btn-primary <?php echo $tag == 'fps' ? 'active' : '' ?>">FPS</button>
                        </a>
                        <a href="blog.php?tag=mmorpg">
                            <button class="btn btn-primary <?php echo $tag == 'mmorpg' ? 'active' : '' ?>">MMORPG</button>
                        </a>
                        <a href="blog.php?tag=platform">
                            <button class="btn btn-primary <?php echo $tag == 'platform' ? 'active' : '' ?>">Platform</button>
                        </a>
                        <a href="blog.php?tag=moba">
                            <button class="btn btn-primary <?php echo $tag == 'moba' ? 'active' : '' ?>">MOBA</button>
                        </a>
                        <a href="blog.php?tag=boardgame">
                            <button class="btn btn-primary <?php echo $tag == 'boardgame' ? 'active' : '' ?> ">Boardgame</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php 
                    if ($result->num_rows) {
                        while($row = $result->fetch_assoc()) {  
                ?>
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
                            <img src="<?php echo $base_path_blog.$row['image'] ?>" class="card-img-top" alt="gaming">
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
                <?php 
                        }
                    }
                    else{
                ?>

                <section class="col-12">
                    <p class="text-center">ไม่มีข้อมูล</p>
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