<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Blog</title>

<!-- COMMON TAGS -->
    <meta charset="utf-8">
    <!-- Search Engine -->
    <meta name="description" content="อยากให้ทุกคนเข้าใจในเกมและเล่นเกมอย่างมีความสุข">
    <meta name="title" content="SimonHope Studio">
    <meta name="keywords" content="เกม, บอร์ดเกม, เล่นเกม">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="image" content="https://images.unsplash.com/10/wii.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="SimonHope ส่งต่อเรื่องราวของเกม">
    <meta itemprop="description" content="อยากให้ทุกคนเข้าใจในเกมและเล่นเกมอย่างมีความสุข">
    <meta itemprop="image" content="https://images.unsplash.com/10/wii.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="SimonHope ส่งต่อเรื่องราวของเกม">
    <meta name="og:description" content="อยากให้ทุกคนเข้าใจในเกมและเล่นเกมอย่างมีความสุข">
    <meta name="og:image" content="https://images.unsplash.com/10/wii.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
    <meta name="og:url" content="https://sclass1-project.web.app/blog.php">
    <meta name="og:site_name" content="https://sclass1-project.web.app/blog.php">
    <meta name="og:type" content="website">

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
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    
    <!-- Se ction Navbar -->
        <?php include_once('includes/navbar.php') ?>

    <!-- Section Page-title -->
        <header class="jarallax" data-jarallax='{ "speed": 0.6 }' style="background-image: url('https://images.unsplash.com/photo-1498736297812-3a08021f206f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
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
                            <button class="btn btn-primary active">ทั้งหมด</button>
                        </a>
                        <a href="blog.php?tag=FPS">
                            <button class="btn btn-primary">FPS</button>
                        </a>
                        <button class="btn btn-primary">MMORPG</button>
                        <button class="btn btn-primary">Platform</button>
                        <button class="btn btn-primary">MOBA</button>
                        <button class="btn btn-primary">Boardgame</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=001" class="warpper-card-img">
                            <img src="https://images.unsplash.com/photo-1598550511769-875ef2a01663?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">เกมแนว FPS คืออะไร</h5>
                            <p class="card-text">FPS&nbsp;ย่อมาจาก&nbsp;First-person shooter</p>
                        </div>
                        <div class="p-3">
                            <a href="blog-detail.php" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </section>

                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="#" class="warpper-card-img">
                            <img src="assets/images/blog/img2.jfif" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </section>

                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="#" class="warpper-card-img">
                            <img src="assets/images/blog/img3.jfif" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </section>

                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="#" class="warpper-card-img">
                            <img src="assets/images/blog/img4.jfif" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </section>

                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="#" class="warpper-card-img">
                            <img src="assets/images/blog/img5.jfif" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </section>

                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="#" class="warpper-card-img">
                            <img src="assets/images/blog/img6.jfif" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </section>
            </div>
        </section>

    <!-- Section About -->
        <section class="position-relative py-5 jarallax" data-jarallax='{ "speed": 0.6 }' style="background-image: url('https://images.unsplash.com/photo-1519326844852-704caea5679e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80');">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="img-fluid" src="assets/images/logo.png" width="150" alt="">
                        <h2 class="text-white display-4 font-weight-bold">Simon Hope Studio</h2>
                        <div class="star-rating">
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <div class="star-current" style="width: 50%;">
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Section Footer -->
        <footer class="semi-footer p-5 text-center text-md-left">
            <div class="row">
                <div class="col-md-4">
                    <a class="navbar-brand" href="https://www.facebook.com/nutthapoom.lmk" target="_blank">
                        <img src="assets/images/logo.png" width="35" height="35" class="d-inline-block align-top" alt="">
                        SimonHope Studio
                    </a>
                    <p>
                        <i class="fas fa-phone-square-alt"></i> 085-729-5454
                        <br>
                        <i class="fas fa-envelope"></i> email@example.com
                        <br>
                        <i class="fas fa-address-card"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="https://www.facebook.com/nutthapoom.lmk" target="_blank">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UC9r5CdyjvSMYgiuMHnSRwBQ" target="_blank">
                        <i class="fab fa-youtube-square fa-2x"></i>
                    </a>
                </div>
                <div class="col-md-4">
                    <h4>เมนู</h4>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>แผนที่</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3875.511552031784!2d100.5120747!3d13.747996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2993c9d2f3f75%3A0xac2bd6b821263494!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5geC4reC4quC5guC4geC5ieC4i-C4seC4nuC4nuC4peC4suC4oiDguIjguLPguIHguLHguJQ!5e0!3m2!1sth!2sth!4v1626081159816!5m2!1sth!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </footer>

        <footer class="footer">
            <span> COPYRIGHT © 2020 <a href="https://www.facebook.com/nutthapoom.lmk" target="_blank">SimonHope Studio</a> </span>
            All Right Reserved
        </footer>

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