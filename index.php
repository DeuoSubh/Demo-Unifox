<?php include "header.php";?>

<body>
    <!-- Start Settings box -->
    <div class="settings-box" id="myDIV">
        <div class="toggle-spin">
            <i class="fas fa-cog"></i>
        </div>
        <div class="settings-content">
            <div class="option-box">
                <h4>Choose Your Colors</h4>
                <ul class="colors-list">
                    <li data-color="#7cb62f"></li>
                    <li data-color="#512DA8"></li>
                    <li data-color="#0097A7"></li>
                    <li data-color="#FBC02D"></li>
                    <li data-color="#b71c1c"></li>
                </ul>
            </div>
            <button class="reset-option">Reset Options</button>
        </div>
    </div>
    <!-- End Settings box -->
    <!-- Start Navbar -->
    <div class="header">
        <nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand logo" href="#landing">UNIFOX</a>
                <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#toggleMobileMenu"
                aria-controls="toggleMobileMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav ms-auto text-center">
                        <li><a class="nav-link" href="#about">About</a></li>
                        <li><a class="nav-link" href="#services">Services</a></li>
                        <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li><a class="nav-link" href="#price">Prices</a></li>
                        <li><a class="nav-link" href="#team">Team</a></li>
                        <li><a class="nav-link" href="#testmonilas">Testmonilas</a></li>
                        <li><a class="nav-link" href="#blog">Blog</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->
    <!-- Start Home section -->
    <div class="sections home text-center">
        <div class="overlay">
            <div class="container">
                <div class="home-content">
                    <h3>Start Your Busniess today</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi provident veritatis praesentium, odio sed sunt</p>
                    <button class="btn button">Start Now</button>
                    <button class="btn button">Discover More</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home section -->
    <!-- Start About Section -->
    <div class="about" id="about">
        <div class="sections">
            <div class="container">
                <div class="main-header text-center">
                    <h2 class="sections-title">About Us</h2>
                    <div class="line">
                    <span></span>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, laborum obcaecati harum mollitia totam nobis</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-info">
                            <h3>Welcome to Unifox Creative <span>Desgin Agency.</span>Thinking Creative Do Better</h3>
                            <p class="about-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, at qui, temporibus voluptatibus rerum dolore animi sed molestias magni nesciunt in nam eveniet impedit veritatis quasi nihil, dolorem ab repellat suscipit consequuntur voluptas! Excepturi vel odit id autem magnam? Quibusdam, sapiente! Molestiae quas doloremque dolorum aliquid vero tenetur ducimus quisquam illum, placeat, asperiores itaque illo. Possimus quo officia, tenetur minus dolorum asperiores, perspiciatis omnis autem cum, molestiae exercitationem quod sapiente debitis et rem ratione dolore sit ipsum quisquam in sunt.</p>
                            <button class="btn button">Learn More</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="./Images/about-bg.jpg" alt=""> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Section -->

    <!-- Start Service Section -->
    <div class="services" id="services">
        <div class="sections">
            <div class="container">
                <div class="main-header text-center">
                    <h2 class="sections-title">Our Services</h2>
                    <div class="line">
                    <span></span>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, laborum obcaecati harum mollitia totam nobis</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="serve">
                            <i class="fa fa-camera"></i>
                            <h3 class="serve-title">Strategy</h3>
                            <p class="serve-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum ad ab ea pariatur asperiores?</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="serve">
                            <i class="fa fa-laptop"></i>
                            <h3 class="serve-title">Create Desgin</h3>
                            <p class="serve-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum ad ab ea pariatur asperiores?</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="serve">
                            <i class="fa fa-desktop"></i>
                            <h3 class="serve-title">Development</h3>
                            <p class="serve-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum ad ab ea pariatur asperiores?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="serve">
                            <i class="fa fa-database"></i>
                            <h3 class="serve-title">Marketing</h3>
                            <p class="serve-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum ad ab ea pariatur asperiores?</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="serve">
                            <i class="fa fa-pencil-ruler"></i>
                            <h3 class="serve-title">Innovation</h3>
                            <p class="serve-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum ad ab ea pariatur asperiores?</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="serve">
                            <i class="fa fa-file-video"></i>
                            <h3 class="serve-title">App Desgin</h3>
                            <p class="serve-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum ad ab ea pariatur asperiores?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Section -->

    <!-- Start Statistics Section -->
    <div class="statistics sections">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="stat-info">
                            <i class="fa fa-cloud-download-alt"></i>
                            <span class="time" data-from="0" data-to="300" data-speed="2000">300</span>
                            <p class="stat-title">Project Complete</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-info">
                            <i class="fa fa-user"></i>
                            <span class="time" data-from="0" data-to="500" data-speed="2000">500</span>
                            <p class="stat-title">Satisfied Customer</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-info">
                            <i class="fa fa-trophy"></i>
                            <span class="time" data-from="0" data-to="1200" data-speed="2000">1200</span>
                            <p class="stat-title">Working Hours</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-info">
                            <i class="fa fa-database"></i>
                            <span class="time" data-from="0" data-to="2100" data-speed="2000">2100</span>
                            <p class="stat-title">Line of Codes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Statistics Section -->

    <!-- Start Portfolio Section -->
    <div class="portfolio" id="portfolio">
        <div class="container">
            <div class="main-header text-center sections">
                <h2 class="sections-title">Our Portfolio</h2>
                <div class="line">
                <span></span>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, laborum obcaecati harum mollitia totam nobis</p>
            </div>
            <div class="port-buttons">
                <button class="filter" data-filter="all">All</button>
                <button class="filter" data-filter=".desgin">Desgin</button>
                <button class="filter" data-filter=".mation">Mation</button>
                <button class="filter" data-filter=".print">Print</button>
                <button class="filter" data-filter=".video">Video</button>
            </div>
            <div class="port-images" id="Container">
                    <div class="row">
                        <div class="mix desgin col-md-3 col-xs-12">
                            <img class="mix desgin" src="Images/gellary3.jpg" alt="">
                        </div>
                        <div class="mix mation col-md-3 col-xs-12">
                            <img src="Images/gellary4.jpg" alt="">
                        </div>
                        <div class="mix desgin col-md-3 col-xs-12">
                            <img src="Images/gellary5.jpg" alt="">
                        </div>
                        <div class="mix print col-md-3 col-xs-12">
                            <img src="Images/gellary3.jpg" alt="">
                        </div>
                        <div class="mix mation col-md-3 col-xs-12">
                            <img src="Images/gellary4.jpg" alt="">
                        </div>
                        <div class="mix desgin col-md-3 col-xs-12">
                            <img src="Images/gellary5.jpg" alt="">
                        </div>
                        <div class="mix print col-md-3 col-xs-12">
                            <img src="Images/gellary3.jpg" alt="">
                        </div>
                        <div class="mix mation col-md-3 col-xs-12">
                            <img src="Images/gellary4.jpg" alt="">
                        </div>
                        <div class="mix print col-md-3 col-xs-12">
                            <img src="Images/gellary5.jpg" alt="">
                        </div>
                        <div class="mix video col-md-3 col-xs-12">
                            <img src="Images/gellary3.jpg" alt="">
                        </div>
                        <div class="mix mation col-md-3 col-xs-12">
                            <img src="Images/gellary4.jpg" alt="">
                        </div>
                        <div class="mix print col-md-3 col-xs-12">
                            <img src="Images/gellary5.jpg" alt="">
                        </div>
                </div>
                <button class="port-btn-more">View More Portfolio</button>
            </div>
        </div>
    </div>
    <!-- End Portfolio Section -->
    <!-- Start Exprtes  Section -->
    <div class="exprtes">
        <div class="container">
            <div class="main-header text-center sections">
                <h2 class="sections-title">Our Exprtes</h2>
                <div class="line">
                    <span></span>
                </div>
            </div>
            <!-- Circle -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circles">
                        <div class="circle blue">
                            <span class="circle-right">
                                <span class="circle-bar"></span>
                            </span>
                            <span class="circle-left">
                                <span class="circle-bar"></span>
                            </span>
                            <div class="percent-value">90%</div>
                        </div>
                        <h2>Desgin</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circles">
                        <div class="circle yallow">
                            <span class="circle-right">
                                <spna class="circle-bar"></spna>
                            </span>
                            <span class="circle-left">
                                <spna class="circle-bar"></spna>
                            </span>
                            <div class="percent-value">80%</div>
                        </div>
                        <h2>Development</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circles">
                        <div class="circle blue">
                            <span class="circle-right">
                                <spna class="circle-bar"></spna>
                            </span>
                            <span class="circle-left">
                                <spna class="circle-bar"></spna>
                            </span>
                            <div class="percent-value">90%</div>
                        </div>
                        <h2>WordPress</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circles">
                        <div class="circle yallow">
                            <span class="circle-right">
                                <spna class="circle-bar"></spna>
                            </span>
                            <span class="circle-left">
                                <spna class="circle-bar"></spna>
                            </span>
                            <div class="percent-value">80%</div>
                        </div>
                        <h2>Coding Skills</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Exprtes  Section -->

            <!--start price section-->
            <div class="price-section text-center" id="price">
                <div class="container">
                    <div class="main-header text-center sections">
                        <h2 class="sections-title">Our Price</h2>
                        <div class="line">
                        <span></span>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, laborum obcaecati harum mollitia totam nobis</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="price-box Basic">
                                <h3>Starter</h3>
                                <div class="option-price">
                                    <span class="price">
                                        <span class="usd">$</span>29
                                    </span>
                                    <span class="period">Monthly Plan</span>
                                </div>
                                <ul class="list-unstyled configuration">
                                    <li>1 GB Of space</li>
                                    <li>10 gb of bandwidth</li>
                                    <li>3 websites</li>
                                    <li>Basic Customization</li>
                                    <li>wordpress integration</li>
                                    <li>email support</li>
                                </ul>
                                <button class="price-btn">Select Plane</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-box Basic">
                                <h3>Primium</h3>
                                <div class="option-price">
                                    <span class="price">
                                        <span class="usd">$</span>49
                                    </span>
                                    <span class="period">Monthly Plan</span>
                                </div>
                                <ul class="list-unstyled configuration">
                                    <li>1 GB Of space</li>
                                    <li>10 gb of bandwidth</li>
                                    <li>3 websites</li>
                                    <li>Basic Customization</li>
                                    <li>wordpress integration</li>
                                    <li>email support</li>
                                </ul>
                                <button class="price-btn">Select Plane</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-box Professional">
                                <h3>Professional</h3>
                                <div class="option-price">
                                    <span class="price">
                                        <span class="usd">$</span>69
                                    </span>
                                    <span class="period">Monthly Plan</span>
                                </div>
                                <p class="most-pop">Our Most Popular</p>
                                <ul class="list-unstyled configuration">
                                    <li>5 gb of space</li>
                                    <li>50 gb of bandwidth</li>
                                    <li>12 websites</li>
                                    <li>Advanced Customization</li>
                                    <li>wordpress integration</li>
                                    <li>email support</li>
                                </ul>
                                <button class="price-btn green">Select Plane</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-box Enterprise">
                                <h3>Busniess</h3>
                                <div class="option-price">
                                    <span class="price">
                                        <span class="usd">$</span>59
                                    </span>
                                    <span class="period">Monthly Plan</span>
                                </div>
                                <ul class="list-unstyled configuration">
                                    <li>Unlimited space</li>
                                    <li>unlimited bandwidth</li>
                                    <li>100 websites</li>
                                    <li>Advanced Customization</li>
                                    <li>wordpress integration</li>
                                    <li>24/7 customer support</li>
                                </ul>
                                <button class="price-btn">Select Plane</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end price section-->
    <!-- Start team Section -->
    <div class="team" id="team">
        <div class="container">
            <div class="main-header text-center sections">
                <h2 class="sections-title">Our Team</h2>
                <div class="line">
                <span></span>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, laborum obcaecati harum mollitia totam nobis</p>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="team-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="team-name">Frank Martin</h4>
                        <p class="team-post">Full Stack Developer</p>
                        <div class="team-social">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-google-plus"></i>
                            <span class="bg"></span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="team-name">Frank Martin</h4>
                        <p class="team-post">Full Stack Developer</p>
                        <div class="team-social">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-google-plus"></i>
                            <span class="bg"></span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="team-name">Frank Martin</h4>
                        <p class="team-post">Full Stack Developer</p>
                        <div class="team-social">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-google-plus"></i>
                            <span class="bg"></span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="team-name">Frank Martin</h4>
                        <p class="team-post">Full Stack Developer</p>
                        <div class="team-social">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-google-plus"></i>
                            <span class="bg"></span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="team-name">Frank Martin</h4>
                        <p class="team-post">Full Stack Developer</p>
                        <div class="team-social">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-google-plus"></i>
                            <span class="bg"></span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="team-name">Frank Martin</h4>
                        <p class="team-post">Full Stack Developer</p>
                        <div class="team-social">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-google-plus"></i>
                            <span class="bg"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End team Section -->
    <!-- Start Business Section-->
        <div class="business">
            <div class="business-section">
                <div class="main-header text-center sections">
                    <h2 class="sections-title">Work With Our Experts to Solve Your All Busniess</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, harum ad. Alias totam laborum officiis veniam omnis ullam. Nostrum, corrupti!</p>
                </div>
                <button class="business-btn">Discover More</button>
            </div>
        </div>
    <!-- End Business Section -->

    <!-- Start Choose us Section -->
    <div class="choose">
        <div class="container">
            <div class="main-header text-center sections">
                <h2 class="sections-title">Why Choose Us</h2>
                <div class="line">
                <span></span>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, laborum obcaecati harum mollitia totam nobis</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="choose-info">
                        <ul class="list-unstyled">
                            <li data-role="p_about">About</li>
                            <li data-role="p_service">Service</li>
                            <li data-role="p_contact">Contact</li>
                        </ul>
                        <div class="contact">
                            <div class="us contact1" id="p_about">
                                <img src="./Images/panel2.jpg" alt="">
                                <p>About Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione culpa fuga placeat saepe aperiam sit laborum officia cum magni dignissimos dolores eaque optio totam consequatur, voluptatibus earum mollitia autem itaque nobis? Sit architecto quo quis minima, placeat soluta! Rerum nemo, architecto, accusantium porro facilis quis eos totam nulla neque adipisci, nostrum soluta ullam dolorum rem quam? Sunt numquam alias officia odit tenetur ducimus laborum inventore aliquid repellat mollitia, ab optio et nobis blanditiis recusandae deserunt atque exercitationem quas facilis deleniti corporis magni dolorem architecto iusto? Obcaecati officiis asperiores molestias vero officia porro! Odio temporibus repellat eos voluptates impedit molestias. Aspernatur.</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="us contact2" id="p_service">
                                <img src="./Images/panel2.jpg" alt="">
                                <p>Services Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur quis fugit recusandae. Dolor dolore cumque minima quos soluta veritatis modi nihil sed consectetur, laudantium totam. Ipsam aliquam praesentium nesciunt vitae expedita dolorem ipsa doloribus rem quibusdam sed? Molestias minima eius porro incidunt expedita modi dolor suscipit quidem earum ut, iure quae quisquam sit dicta, rem est aliquid placeat dolorem voluptates explicabo. Asperiores, vero est modi dolorem quod harum hic possimus labore pariatur architecto fugit ullam nesciunt at minus libero, quo illo! Repellat asperiores veniam dicta autem dignissimos sequi, quae ducimus non. Aut sit quasi sunt pariatur eaque tempore consequuntur minus!</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="us contact3" id="p_contact">
                                <img src="./Images/panel2.jpg" alt="">
                                <p>Contact Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est sint veniam magni magnam, iusto soluta nostrum quas fuga modi minus tenetur dolore dolorum ut molestias assumenda fugit. Molestiae facilis dicta quas eum fugit error rem repudiandae deleniti at, in dolores laborum cupiditate. Provident nulla amet autem libero tempore consequuntur quos. Esse quod quae, consequuntur omnis ex fugiat aut velit consequatur aliquam sint? Voluptatibus impedit officiis laboriosam facilis iure voluptas cum natus assumenda nobis eligendi repellat voluptatem, pariatur ea sit eveniet mollitia recusandae illo rerum reprehenderit ratione harum libero. Nobis at quasi porro. Voluptate magni reprehenderit a sed odit sequi at?</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="choose-video">
                        <a class="popup" href="./Images/Animated Website Presentation.mp4" type="video/mp4">
                            <i class="fab fa-youtube"></i>
                        </a>
                        
                        <h3>Our Succsesfuly Story</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Choose us Section -->

    <!-- Start Testimonial Section -->
    <div class="testimonial" id="testmonilas">
        <div class="container">
            <div class="main-header text-center sections">
                <h2 class="sections-title">What They Say</h2>
                <div class="line">
                <span></span>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, laborum obcaecati harum mollitia totam nobis</p>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="test-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="test-name">Frank Martin</h4>
                        <p class="test-post">Full Stack Developer</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="test-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas fugit suscipit quam asperiores possimus dolorum obcaecati temporibus libero sunt facilis.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="test-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="test-name">Frank Martin</h4>
                        <p class="test-post">Full Stack Developer</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="test-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas fugit suscipit quam asperiores possimus dolorum obcaecati temporibus libero sunt facilis.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="test-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="test-name">Frank Martin</h4>
                        <p class="test-post">Full Stack Developer</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="test-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas fugit suscipit quam asperiores possimus dolorum obcaecati temporibus libero sunt facilis.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="test-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="test-name">Frank Martin</h4>
                        <p class="test-post">Full Stack Developer</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="test-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas fugit suscipit quam asperiores possimus dolorum obcaecati temporibus libero sunt facilis.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="test-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="test-name">Frank Martin</h4>
                        <p class="test-post">Full Stack Developer</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="test-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas fugit suscipit quam asperiores possimus dolorum obcaecati temporibus libero sunt facilis.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="test-info">
                        <img src="./Images/team3.jpg" alt="">
                        <h4 class="test-name">Frank Martin</h4>
                        <p class="test-post">Full Stack Developer</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="test-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas fugit suscipit quam asperiores possimus dolorum obcaecati temporibus libero sunt facilis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Section -->
    <!-- Start Blog Section -->
    <div class="blog" id="blog">
        <div class="container">
            <div class="main-header text-center sections">
                <h2 class="sections-title">Our Blogs</h2>
                <div class="line">
                <span></span>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, laborum obcaecati harum mollitia totam nobis</p>
            </div>


            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="blog-info">
                        <img src="./Images/blog3.jpg" alt="">
                        <h4 class="blog-name">Here blog Title</h4>
                        <span>
                            <i class="fa fa-calendar-alt"></i>
                            2 Feb 2018
                        </span>
                        <span>
                            <i class="fa fa-comment-dots"></i>
                            18 Comments
                        </span>
                        <p class="blog-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa neque quos corrupti laudantium aspernatur! Consequatur.</p>
                        <button class="blog-btn">Read More</button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="blog-info">
                        <img src="./Images/blog3.jpg" alt="">
                        <h4 class="blog-name">Here blog Title</h4>
                        <span>
                            <i class="fa fa-calendar-alt"></i>
                            2 Feb 2018
                        </span>
                        <span>
                            <i class="fa fa-comment-dots"></i>
                            18 Comments
                        </span>
                        <p class="blog-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa neque quos corrupti laudantium aspernatur! Consequatur.</p>
                        <button class="blog-btn">Read More</button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="blog-info">
                        <img src="./Images/blog3.jpg" alt="">
                        <h4 class="blog-name">Here blog Title</h4>
                        <span>
                            <i class="fa fa-calendar-alt"></i>
                            2 Feb 2018
                        </span>
                        <span>
                            <i class="fa fa-comment-dots"></i>
                            18 Comments
                        </span>
                        <p class="blog-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa neque quos corrupti laudantium aspernatur! Consequatur.</p>
                        <button class="blog-btn">Read More</button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="blog-info">
                        <img src="./Images/blog3.jpg" alt="">
                        <h4 class="blog-name">Here blog Title</h4>
                        <span>
                            <i class="fa fa-calendar-alt"></i>
                            2 Feb 2018
                        </span>
                        <span>
                            <i class="fa fa-comment-dots"></i>
                            18 Comments
                        </span>
                        <p class="blog-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa neque quos corrupti laudantium aspernatur! Consequatur.</p>
                        <button class="blog-btn">Read More</button>
                    </div>
                </div>
            </div>
    </div>
    <!-- End Blog Section -->

    <!-- Start Pleasure Section -->
    <div class="pleasure sections text-center">
        <div class="container">
            <div class="slick">
                <div class="pleas-content">
                    <i class="fab fa-twitter"></i>
                    <p class="pleas-desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos similique tempore <span> ducimus neque deleniti</span>. Exercitationem officiis nemo aspernatur dolores architecto nobis, <span> corrupti sed</span> similique modi omnis hic quam velit? Veniam!
                    </p>
                    <p class="pleas-time">12 Hours Ago</p>
                </div>
                <div class="pleas-content">
                    <i class="fab fa-facebook"></i>
                    <p class="pleas-desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos similique tempore <span> ducimus neque deleniti</span>. Exercitationem officiis nemo aspernatur dolores architecto nobis, <span> corrupti sed</span> similique modi omnis hic quam velit? Veniam!
                    </p>
                    <p class="pleas-time">12 Hours Ago</p>
                </div>
                <div class="pleas-content">
                    <i class="fab fa-instagram"></i>
                    <p class="pleas-desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos similique tempore <span> ducimus neque deleniti</span>. Exercitationem officiis nemo aspernatur dolores architecto nobis, <span> corrupti sed</span> similique modi omnis hic quam velit? Veniam!
                    </p>
                    <p class="pleas-time">12 Hours Ago</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pleasure Section -->
    <!-- Start next project section -->
    <div class="next sections">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <p class="next-desc">Are You Ready To Start Next Project?</p>
                </div>
                <div class="col-md-3 col-xs-12">
                    <button class="next-btn">Get Started</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End next project section -->

    <!-- Start contact Section -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="main-header text-center sections">
                <h2 class="sections-title">Contact Us</h2>
                <div class="line">
                <span></span>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, laborum obcaecati harum mollitia totam nobis</p>
            </div>
        
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="contact-info">
                        <h3 class="contact-title">Have You Any Questions?</h3>
                        <p class="contact-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora consectetur magni fugit, aliquam iure ducimus minus hic possimus ad. Quia.</p>
                        <div>
                            <i class="fa fa-location-arrow"></i>
                            <p>15 Street Hamra</p>
                        </div>
                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+111 2222 33333</p>
                        </div>
                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>Email@gmail.co</p>
                        </div>
                        <div>
                            <i class="fa fa-globe"></i>
                            <p>www.google.com/1stProject</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <form action="">
                        <div class="form-label">
                            <input type="text" class="form-control" placeholder="Your Name">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-label">
                            <input type="url"  class="form-control" placeholder="Website..">
                            <input type="text" class="form-control" placeholder="Subject..">
                        </div>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message.." rows="10"></textarea>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>  
        </div>
    </div>
    <!-- End contact Section -->


    <!-- Start Footer Section -->
    <div class="footer">
        <div class="container sections">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="foot-about">
                        <h3>About Unifox</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, saepe. Provident vero distinctio eligendi tempore voluptas. Quos nam beatae culpa.</p>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-google-plus"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="foot-post">
                        <h3>Recent Posts</h3>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa fa-angle-double-left"></i>
                                Recent Blog Post Here
                            </li>
                            <li>
                                <i class="fa fa-angle-double-left"></i>
                                Recent Blog Post Here
                            </li>
                            <li>
                                <i class="fa fa-angle-double-left"></i>
                                Recent Blog Post Here
                            </li>
                            <li>
                                <i class="fa fa-angle-double-left"></i>
                                Recent Blog Post Here
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="foot-search">
                        <h3>Popular Search</h3>
                        <button>HTML5</button>
                        <button>Blog</button>
                        <button>jquery</button>
                        <button>Bootstrap</button>
                        <button>CSS3</button>
                        <button>WordPress</button>
                        <button>JavaScript</button>
                        <button>Unifox</button>
                        <button>Sass</button>
                        <button>React</button>
                        <button>Node.js</button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="foot-gallary">
                        <h3>Gallary</h3>
                        <img src="Images/gellary3.jpg" alt="">
                        <img src="Images/gellary4.jpg" alt="">
                        <img src="Images/gellary5.jpg" alt="">
                        <img src="Images/gallary6.jpg" alt="">
                        <img src="Images/gellary3.jpg" alt="">
                        <img src="Images/gellary4.jpg" alt="">
                        <img src="Images/gellary5.jpg" alt="">
                        <img src="Images/gallary6.jpg" alt="">
                        <img src="Images/gellary3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="copyrith-desc">&copy;2021 <span>Unifox </span>All Right Reserved by <span>Deuo</span> ThemeForset <i class="fa fa-heart"></i></div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <ul class="list-unstyled">
                        <li>Home</li>
                        <li>About</li>
                        <li>Blog</li>
                        <li>Contact</li>
                        <li>FAQ</li>
                        <li>Support</li>
                        <li>Buy Now</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ENd Footer Section -->

    <div class="scrollTop">
        <i class="fa fa-arrow-up"></i>
    </div>
<?php include "footer.php" ?>