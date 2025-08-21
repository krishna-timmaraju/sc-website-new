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
    <main class="sub-page">
        <section class="subpage-header">
            <div class="custom-container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h1 class="text-white text-center">Contact Us</h1>
                        <p class="text-white text-center">Have questions, business inquiries, or partnership ideas?
                            We'd love to hear from you.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- sub page content -->
        <section class="subpage-content">
            <div class="container">
                <div class="row bg-white p-4 rounded-3 contact-box shadow rounded-4">
                    <div class="col-md-4 text-center">
                        <img src="img/R-Send.png" alt="Mail Icon" class="mb-3">
                        <h4>General Inquires</h4>
                        <a href="mailto:besure@surechain.ai">besure@surechain.ai</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="img/r-location.png" alt="Mail Icon" class="mb-3">
                        <h4>Office address</h4>
                        <p>Lakshmi Arcade, KPHB 5th Phase, Hyderabad, Telangana 500072</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="img/R-Camera.png" alt="Mail Icon" class="mb-3">
                        <h4>Website</h4>
                        <a href="www.surechain.ai/contact" target="_blank">www.surechain.ai/contact</a>
                    </div>
                </div>

                <div class="row justify-content-between mt-5">
                    <div class="col-md-4">
                        <div class="section-title">
                            <h6 class="font-secondary">FAST REPLIES</h6>
                            <h2>Contact Us</h2>
                        </div>
                        <p>Have questions, business inquiries, or partnership ideas?
                            We'd love to hear from you.</p>
                    </div>
                    <div class="col-md-6">
                        <form id="contact_form" method="post" action="includes/contact_form.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                        <label for="firstName">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                        <label for="lastName">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Message" id="msg" style="height: 150px"></textarea>
                                        <label for="msg">Message</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a class="primary-btn text-white mt-2" href="javascript:void(0)">Send</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- main content ends -->

    <?php include('includes/footer.php'); ?>
    <?php include('includes/scripts.php'); ?>

</html>