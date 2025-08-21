<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surechain</title>
    <?php include 'includes/styles.php'; ?>
</head>

<body>
    <div id="load"></div>

    <?php include 'includes/header.php'; ?>


    <!-- main contnet starts-->
    <main>
        <!-- hero-->
        <section class="hero">
            <div class="custom-container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-5 align-self-center">
                        <div class="search-block aos-item" data-aos="fade-up" data-aos-duration="400">
                            <h1>Find Verified Sellers, Products, and Services</h1>
                            <!-- search -->
                            <section class="search align-self-center">
                                <i class="bi bi-search h5"></i>
                                <input type="text" class="form-control border-0" placeholder="Search for products, services, or sellers">
                            </section>
                            <p class="pt-2">Frequently Searched: </p>
                            <div class="flex flex-wrap frequently-searched">
                                <a href="javascript:void(0)" class="btn btn-outline-secondary btn-sm me-2 mb-2">Auto Parts</a>
                                <a href="javascript:void(0)" class="btn btn-outline-secondary btn-sm me-2 mb-2">Mobiles</a>
                                <a href="javascript:void(0)" class="btn btn-outline-secondary btn-sm me-2 mb-2">Computers</a>
                                <a href="javascript:void(0)" class="btn btn-outline-secondary btn-sm me-2 mb-2">Electronics</a>
                            </div>
                        </div>
                        <!--/ search -->
                        <!-- numbers -->
                        <section class="numbers mt-5 aos-item" data-aos="fade-up" data-aos-duration="500">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="mb-3 mb-md-0">
                                        <h2 class="mb-0 font-bold">1000+</h2>
                                        <p class="mb-0">Verified Sellers</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="mb-3 mb-md-0">
                                        <h2 class="mb-0 font-bold">5000+</h2>
                                        <p class="mb-0">Products Listed</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="mb-3 mb-md-0">
                                        <h2 class="mb-0 font-bold">200+</h2>
                                        <p class="mb-0">Industries Served</p>
                                    </div>
                                </div>                               
                        </section>
                        <!--/ numbers -->
                    </div>
                    <div class="col-md-6">
                        <div class="hero-image aos-item" data-aos="fade-down" data-aos-duration="400">
                            <img src="img/buyerimg.jpg" alt="Hero Image" class="img-fluid ">
                            <div class="hero-image-overlay position-absolute top-0 start-0  p-2 p-lg-5 h-100">
                                <article>
                                    <h2 class="text-white">Discover great deals, shop securely, and enjoy seamless buying experiences.</h2>

                                    <a href="javascraipt:void(0)" class="primary-btn-border text-white mt-2 d-inline-block">Proceed to Buy</a>
                                </article>
                            </div>
                        </div>

                        <div class="hero-image mt-2 mt-md-5 aos-item" data-aos="fade-down" data-aos-duration="500">
                            <img src="img/sellerimg.jpg" alt="Hero Image" class="img-fluid ">
                            <div class="hero-image-overlay position-absolute top-0 start-0  p-2 p-lg-5 h-100">
                                <article>
                                    <h2 class="text-white">Expand your reach, boost sales, and grow your business effortlessly.</h2>

                                    <a href="javascript:void(0)" class="primary-btn-border text-white mt-2 d-inline-block">Start to sell</a>
                                </article>
                            </div>
                        </div>


                    </div>
                </div>
        </section>
        <!-- hero ends-->

        <!-- intro video -->
        <section class="intro-video custom-container d-flex justify-content-center align-items-center aos-item" data-aos="fade-up" data-aos-duration="600">
            <div class="custom-container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="video-block text-center">
                            <a href="javascript:void(0)" class="play-btn secondary-btn text-darkprimary font-bold" data-bs-target="#videoModal" data-bs-toggle="modal"><i class="bi bi-play-circle"></i>Intro Surechain</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container platform-features">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div>
                        <h2 class="mb-2 font-bold text-center section-title aos-item" data-aos="fade-up " data-aos-duration="600">The Uncompromising Platform for <br>B2B Services</h2>
                        <h6 class="text-center section-subtitle aos-item" data-aos="fade-up " data-aos-duration="650">Discover. Compare. Procure with Confidence. </h6>

                        <!-- nexted tab -->
                        <!--Horizontal Tab-->
                        <div class="parentHorizontalTab nested-tab mt-5 aos-item" data-aos="fade-up" data-aos-duration="700" style="height:500px">
                            <ul class="resp-tabs-list hor_1 mb-2">
                                <li>Buyers </li>
                                <li>Sellers</li>
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div>
                                    <p>
                                        <!--vertical Tabs-->
                                    <div class="ChildVerticalTab_1">
                                        <ul class="resp-tabs-list ver_1">
                                            <li>
                                                <h6>1. Create Your Business Profile</h6>
                                                <p>Register and verify your company to start sourcing from trusted sellers.</p>
                                            </li>
                                            <li>
                                                <h6>2. Browse & Compare Offerings</h6>
                                                <p>Explore service providers, compare features, pricing, and terms.</p>
                                            </li>
                                            <li>
                                                <h6>3. Engage & Collaborate</h6>
                                                <p>Connect directly, request quotes, and evaluate vendor credibility.</p>
                                            </li>
                                            <li>
                                                <h6>4. Manage & Track Orders</h6>
                                                <p> Keep a clear trail of communications, contracts, and deliveries.</p>
                                            </li>
                                        </ul>
                                        <div class="resp-tabs-container ver_1">
                                            <div>
                                                <img src="img/demo01.png" alt="Demo Image" class="img-fluid mb-3">
                                            </div>
                                            <div>
                                                <img src="img/demo01.png" alt="Demo Image" class="img-fluid mb-3">
                                            </div>
                                            <div>
                                                <img src="img/demo01.png" alt="Demo Image" class="img-fluid mb-3">
                                            </div>
                                            <div>
                                                <img src="img/demo01.png" alt="Demo Image" class="img-fluid mb-3">
                                            </div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <!--vertical Tabs-->
                                    <div class="ChildVerticalTab_1">
                                        <ul class="resp-tabs-list ver_1">
                                            <li>
                                                <h6>5. Create Your Business Profile</h6>
                                                <p>Register and verify your company to start sourcing from trusted sellers.</p>
                                            </li>
                                            <li>
                                                <h6>6. Browse & Compare Offerings</h6>
                                                <p>Explore service providers, compare features, pricing, and terms.</p>
                                            </li>
                                            <li>
                                                <h6>7. Engage & Collaborate</h6>
                                                <p>Connect directly, request quotes, and evaluate vendor credibility.</p>
                                            </li>
                                            <li>
                                                <h6>8. Manage & Track Orders</h6>
                                                <p> Keep a clear trail of communications, contracts, and deliveries.</p>
                                            </li>
                                        </ul>
                                        <div class="resp-tabs-container ver_1">
                                            <div>
                                                <img src="img/demo01.png" alt="Demo Image" class="img-fluid mb-3">
                                            </div>
                                            <div>
                                                <img src="img/demo01.png" alt="Demo Image" class="img-fluid mb-3">
                                            </div>
                                            <div>
                                                <img src="img/demo01.png" alt="Demo Image" class="img-fluid mb-3">
                                            </div>
                                            <div>
                                                <img src="img/demo01.png" alt="Demo Image" class="img-fluid mb-3">
                                            </div>
                                        </div>
                                    </div>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!--/ nested tab -->
                    </div>
                </div>
            </div>
        </section>

        <!-- industries -->
        <section class="industries container my-md-5 mt-2">
            <div class="row aos-item" data-aos="fade-up" data-aos-duration="600">
                <div class="col-sm-6 align-self-center">
                    <h2 class="font-bold">Industry-Specific Solutions</h2>
                </div>
                <div class="col-sm-6 text-md-end">
                    <a class="primary-btn text-white mt-2" href="javascript:void(0)">View all Industries</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 col-6 aos-item" data-aos="fade-up" data-aos-duration="700">
                    <div class="industry-card">
                        <img src="img/manufacturing.png" alt="Industry Image" class="img-fluid w-100 rounded-4">
                        <article>
                            <h5 class="text-white">Manufacturing</h5>
                            <p>Streamline your supply chain with verified suppliers.</p>
                        </article>
                    </div>
                </div>

                <div class="col-md-3 col-6 aos-item" data-aos="fade-up" data-aos-duration="750">
                    <div class="industry-card">
                        <img src="img/healthcare.png" alt="Industry Image" class="img-fluid w-100 rounded-4">
                        <article>
                            <h5 class="text-white">Health Care</h5>
                            <p>Streamline your supply chain with verified suppliers.</p>
                        </article>
                    </div>
                </div>

                <div class="col-md-3 col-6 aos-item" data-aos="fade-up" data-aos-duration="800">
                    <div class="industry-card">
                        <img src="img/industrial-distribution.png" alt="Industry Image" class="img-fluid w-100 rounded-4">
                        <article>
                            <h5 class="text-white">INDUSTRIAL DISTRIBUTION</h5>
                            <p>Streamline your supply chain with verified suppliers.</p>
                        </article>
                    </div>
                </div>

                <div class="col-md-3 col-6 aos-item" data-aos="fade-up" data-aos-duration="850">
                    <div class="industry-card">
                        <img src="img/pharma.png" alt="Industry Image" class="img-fluid w-100 rounded-4">
                        <article>
                            <h5 class="text-white">Pharma</h5>
                            <p>Streamline your supply chain with verified suppliers.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- sure chain features -->
        <section class="surechainfeatures container aos-item" data-aos="fade-up" data-aos-duration="600">
            <h2 class="font-bold text-center">Sure Chain Features</h2>
            <div class="parentHorizontalTab nested-tab my-5">
                <ul class="resp-tabs-list hor_1">
                    <li>Connect </li>
                    <li>Promote</li>
                    <li>Finance</li>
                </ul>
                <div class="resp-tabs-container hor_1 mt-3">
                    <div>
                        <ul class="features-labels-list">
                            <li>Business Discovery</li>
                            <li>Smart Matching</li>
                            <li>Verified Network</li>
                            <li>Supplier Access</li>
                            <li>Buyer Groups</li>
                            <li>Search Filters</li>
                            <li>Live Inquiries</li>
                            <li>Location Match</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="features-labels-list">
                            <li>Business Discovery 2</li>
                            <li>Smart Matching</li>
                            <li>Verified Network</li>
                            <li>Supplier Access</li>
                            <li>Buyer Groups</li>
                            <li>Search Filters</li>
                            <li>Live Inquiries</li>
                            <li>Location Match</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="features-labels-list">
                            <li>Business Discovery 3</li>
                            <li>Smart Matching</li>
                            <li>Verified Network</li>
                            <li>Supplier Access</li>
                            <li>Buyer Groups</li>
                            <li>Search Filters</li>
                            <li>Live Inquiries</li>
                            <li>Location Match</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- download app -->
        <section class="download-app aos-item" data-aos="fade-up" data-aos-duration="600">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <article class="text-center">
                            <img src="img/surechainlogo-white.png" alt="Surechain Logo">
                            <h2 class="py-4 text-white">Grow Faster with the Surechain App</h2>
                            <p class="text-white">Manage your business, discover new partners, and close secure deals anytime, anywhere. Built for Businesses on the move.</p>
                            <div class="d-flex justify-content-center align-items-center gap-3 mt-4">
                                <a href="javascript:void(0)" target="_blank">
                                    <img src="img/googleplay.png" alt="Google Play" class="img-fluid appimg">
                                </a>
                                <a href="javascript:void(0)" target="_blank">
                                    <img src="img/appstore-icon.png" alt="Google Play" class="img-fluid appimg">
                                </a>
                            </div>
                            <p class="pt-3 text-white">Already on Surechain? Sign in from your phone and stay connected</p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <img src="img/apphand.png" alt="Download App" class="img-fluid w-100">

                    </div>
                </div>
            </div>
        </section>

        <!-- bllog news -->
        <section class="blog-news container my-5 aos-item" data-aos="fade-up" data-aos-duration="600">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <h2 class="font-bold">News & Blog</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <a class="primary-btn text-white mt-2" href="javascript:void(0)">View all News</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="blog-card position-relative">
                        <a href="javascript:void(0)">
                            <img src="img/blog/1.jpg" alt="Blog Image" class="img-fluid w-100 rounded-4">
                            <article class="position-absolute bottom-0 start-0 p-3">
                                <p>What Interior Contractors are Ordering Most in 2025: MDF, Wall Panels, and More</p>
                            </article>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card position-relative">
                        <a href="javascript:void(0)">
                            <img src="img/blog/2.jpg" alt="Blog Image" class="img-fluid w-100 rounded-4">
                            <article class="position-absolute bottom-0 start-0 p-3">
                                <p>Why Flat-Pack Furniture is the Go-To Choice for Builders and Bulk Buyers</p>
                            </article>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card position-relative">
                        <a href="javascript:void(0)">
                            <img src="img/blog/3.jpg" alt="Blog Image" class="img-fluid w-100 rounded-4">
                            <article class="position-absolute bottom-0 start-0 p-3">
                                <p>Bulk Cookware Buying Trends Among Hotels, Caterers, and Retail Stores</p>
                            </article>
                        </a>
                    </div>
                </div>
            </div>

        </section>

    </main>
    <!-- main content ends -->

    <?php include('includes/footer.php'); ?>

    <?php include('includes/scripts.php'); ?>

</html>