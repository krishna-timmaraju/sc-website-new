<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surechain Pricing</title>
    <?php include 'includes/styles.php' ?>
    <?php include 'includes/data.php' ?>
</head>

<body>
    <div id="load"></div>

    <?php include 'includes/header.php' ?>
    <!-- main contnet starts-->
    <main class="sub-page">
        <section class="subpage-header">
            <div class="custom-container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h1 class="text-white text-center">Industries We Serve</h1>
                        <p class="text-center text-white">Surechain is designed to support businesses across a wide range of industries — enabling them to trade smarter, connect with verified partners, and grow with confidence.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- sub page content -->
        <section class="subpage-content">
            <div class="container">
                <div class="row">
                    <?php foreach ($industries as $industry): ?>
                        <div class="col-md-4 mb-4 col-sm-6">
                            <div class="industry-cardpage shadow">
                                <img src="<?= $industry['img'] ?>" alt="" class="img-fluid w-100 bannerimg">
                                <div class="article">
                                    <div class="icon shadow-sm">
                                        <img src="<?= $industry['icon'] ?>" class="bannericon" />
                                    </div>
                                    <div class="text-center">
                                        <h5 class="pb-3"><?= $industry['title'] ?></h5>
                                        <p><?= $industry['desc'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <!-- main content ends -->

    <?php include('includes/footer.php'); ?>
    <?php include('includes/scripts.php'); ?>

</html>