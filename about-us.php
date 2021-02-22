<?php
    //INCLUDING THE HEAD SECTION
    include './includes/head.inc.php';
    headSectionLink('.', 'About Us - Naija Travels');
?>
<body>
    <div class="container-fluid">
        <?php 
            include './includes/header.inc.php';
        ?>
        <div class="row my-3">
            <div class="col-sm-12 bg-image-about text-white px-4 py-5">
                <div class="row mx-auto col-sm-10 slogan">
                    <div class="px-4">
                        <h4>
                            <p style="font-size:150%;">About Us</p>
                            <p class="py-2">Naija Travels is the first all in one online booking platform in Nigeria</p>
                            <p class="py-2">We give our customer variety of means and vehicles to travel at a cheaper price</p>
                            <p class="py-2" style="line-height:1.7;">Our main aim to give passengers a very good choice to choose from across different medium with comfort and relaxation</p>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include './includes/routes.inc.php';
        ?>
        </div>
        <?php
            include './includes/footer.inc.php';
        ?>
    </div>
</body>
</html>