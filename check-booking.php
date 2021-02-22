<?php
    //INCLUDING THE HEAD SECTION
    include './includes/head.inc.php';
    headSectionLink('.', 'Check Booking - Naija travels');
?>
<body>
    <div class="container-fluid">
        <?php 
            include './includes/header.inc.php';
        ?>
        <div class="row my-3">
            <div class="col-sm-12 bg-image-booking">
                <div class="row mx-3">
                    <div class="col-sm-6 mt-5">
                        <div class="row px-3">
                            <div class="col-sm-2 bg-danger py-1 text-white rounded-top">
                                <img class="w-25 img-responsive" src="./images/bus.png" alt=""> Bus
                            </div>
                            <div class="col-sm-2 bg-success py-1 ml-2 text-white rounded-top">
                                <img class="w-25 img-responsive" src="./images/train.png" alt=""> Train                            
                            </div>
                            <div class="col-sm-2 bg-success py-1 ml-2 text-white rounded-top">
                                <img class="w-25 img-responsive" src="./images/flight.png" alt=""> Flight
                            </div>
                        </div>
                        <form action="" class="bg-white py-3 mb-5 px-3">
                            <div class="row my-3">
                                <div class="col-sm-6">
                                    <label for="pnr"><b>PNR (Passenger Name Record)</b></label><br>
                                    <input placeholder="PNR (Passenger Name Record)" type="text" name="pnr" class="form-control">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-6">
                                    <label for="phone"><b>Phone</b></label><br>
                                    <input placeholder="Phone" type="text" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-6">
                                    <input type="submit" name="search" value="Search" class="btn btn-success w-50">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 mt-5">
                        <div class="row my-5 py-5 text-white">
                            <h2>
                                "Live with no excuses and travel with no regrets with Naija Travels"
                            </h2>
                            <span>Mr Ibrahim Bakari</span>
                        </div>
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