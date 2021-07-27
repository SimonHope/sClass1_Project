<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>

<section class="position-relative py-5 jarallax" data-speed="0.5" style="background-image: url('https://images.unsplash.com/photo-1519326844852-704caea5679e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80');">
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
                <li class="nav-item <?php echo $file_name == 'index' ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo $file_name == 'about' ? 'active' : '' ?>">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active' : '' ?>">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'contact' ? 'active' : '' ?>">
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