<?php
    
    include"head.php";
   include"admin/include/connection.php";

?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/qq.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./about.php">About</a></li>
                                <li><a href="./student.php">Students</a></li>
                                <li><a href="./teacher.php">Teachers</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                                <li><a href="./admin/login.php">Login</a></li>
                            </ul>
                        </nav>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </header>
    <!-- Header Section End -->
 <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about about--page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img src="img/about/head2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>About US</h2>
                             <h1>TPSS</h1>
                         </div>
                            <p>TPSS School been operating under experienced educationist since 2000. The vision of the founder was to propagate quality holistic education in Pakistan. Today, TPSS is offering a wide spectrum of subjects in a multi faceted educational program to over 1000 girls and boys from the ages 3 months to 14 years. Its highly peaceful and capacious campus with state of the art facilities accommodate young girls and boys in these following sections.
                            Kindergarten,
                            Junior,
                            High Boys and 
                            High Girls
                            At present, The Punjab School System is considered to be one of the premium education institutions in Faisalabad, which encourages learners to exceed set educational standards. It boasts a well established reputation of producing excellent academic results, with the BISE, Faisalabad.</p> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- About Pic Begin -->
    <div class="about-pic">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 p-0">
                            <img src="img/about/s1.jpg" alt="">
                            <img src="img/about/s4.jpg" alt="">
                            <img src="img/about/s6.jpg" alt="">
                            
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 p-0">
                            <img src="img/about/s12.jpg" alt="">
                            <img src="img/about/s5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 p-0">
                            <img src="img/about/s13.jpg" alt="">
                            <img src="img/about/s2.jpg" alt="">
                            <img src="img/about/s9.jpg" alt="">
                            
                        </div>
                        
                        
                        <div class="col-lg-8 col-md-8 col-sm-8 p-0">
                          <img src="img/about/s10.jpg" alt="">
                             <img src="img/about/s11.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Pic End -->

    <!-- About Services Section Begin -->
    <section class="about-services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>EVENTS</h2>
                        <h1>TPSS</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $fetch_std = "SELECT * FROM event";
                        $run = mysqli_query($con,$fetch_std); 

                        while($data = mysqli_fetch_array($run)){

                ?>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <img src="<?php echo $data['event_pic'] ?>" style="width: 440px;" />
                        <h2><b><?php echo $data['event_name'] ?></b></h2>
                        <p><?php echo $data['event_time'] ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- About Services Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="img/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>(041) 8555580</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>thepunjabschoolsystem@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>TPSS</h2>
                        <div class="footer__social__links">
                            <a href="https://www.facebook.com/pg/The-punjab-school-system-MTC-fsd-172482079527117/about/?ref=page_internal"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Stay With Us</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Music Plugin -->
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/jplayerInit.js"></script>
</body>

</html>