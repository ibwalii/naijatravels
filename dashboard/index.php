<?php
    //INCLUDING THE HEAD SECTION
    include '../includes/head.inc.php';
    headSectionLink('..', 'Dashboard - Naija Travels');
?>
<body>
    <div class="container-fluid">
        <div class="row">
            
            <!-- NAVIGATION SECTION -->
            <div class="col-sm-2 bg-dark text-white py-3 px-2">
                <div class="row">
                    <img class="mx-auto img-responsive w-75" src="../images/naijatravels-white.jpg" alt="Naija Travels Logo">
                </div>
                <hr class="border-bottom-2 border-white">
                <div class="row col-sm-12">
                    <img class="mx-auto img-responsive w-25 rounded-circle" src="../images/admin.png" alt="Admin Icon"><br>
                    <p style="font-size:80%;" class="py-2 mx-auto">
                        ADMINISTRATOR DASHBOARD
                    </p>
                    <p>
                        <ul class="nav flex-column">
                            <li class="nav-item link-style">
                                <a class="icons-nav link-style-anchor text-white nav-link" href="#">
                                    <img class="img-responsive" src="../images/dashboard_icon.png" alt="Dashboard Icon">
                                    <span class="ml-4">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item link-style">
                                <a class="icons-nav link-style-anchor text-white nav-link" href="#">
                                    <img class="img-responsive" src="../images/account.png" alt="Account Icon">
                                    <span class="ml-4">User Mgt. System</span>
                                </a>
                            </li>
                            <li class="nav-item link-style">
                                <a class="icons-nav link-style-anchor text-white nav-link" href="#">
                                    <img class="img-responsive" src="../images/fleet.png" alt="Fleet Icon">
                                    <span class="ml-4 text-center">Fleet Mgt. System</span>
                                </a>
                            </li>
                            <li class="nav-item link-style">
                                <a class="icons-nav link-style-anchor text-white nav-link" href="#">
                                    <img class="img-responsive" src="../images/ticket.png" alt="Ticket Icon">
                                    <span class="ml-4">Ticket Mgt.</span>
                                </a>
                            </li>
                            <li class="nav-item link-style">
                                <a class="icons-nav link-style-anchor text-white nav-link" href="#">
                                    <img class="img-responsive" src="../images/human.png" alt="Human Icon">
                                    <span class="ml-4">Human Resource</span>
                                </a>
                            </li>
                            <li class="nav-item link-style">
                                <a class="icons-nav link-style-anchor text-white nav-link" href="#">
                                    <img class="img-responsive" src="../images/trip.png" alt="Trip Icon">
                                    <span class="ml-4">Trip Mgt. System</span>
                                </a>
                            </li>
                            <li class="nav-item link-style">
                                <a class="icons-nav link-style-anchor text-white nav-link" href="#">
                                    <img class="img-responsive" src="../images/report.png" alt="Report Icon">
                                    <span class="ml-4">Report</span>
                                </a>
                            </li>
                            <li class="nav-item link-style">
                                <a class="icons-nav link-style-anchor text-white nav-link" href="#">
                                    <img class="img-responsive" src="../images/logout_icon.png" alt="Logout Icon">
                                    <span class="ml-4">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </p> 
                </div>
            </div>
            <!-- END OF NAVIGATION SECTION -->
            
            <!-- CONTENT SECTION -->
            <div class="col-sm-10">
                
                <div class="row bg-success">
                    <div class="col-sm-12 mt-2">
                        <p class="text-right text-white icons">
                            <span class="col-xs-2 mx-4">
                                <img class="img-responsive" src="../images/account.png" alt="Account Icon">
                                15
                            </span>
                            <span class="col-xs-2 mx-4">
                                <img class="img-responsive" src="../images/fleet.png" alt="Fleet Icon">
                                100
                            </span>
                            <span class="col-xs-2 mx-4">
                                <img class="img-responsive" src="../images/trip.png" alt="Trip Icon">
                                50
                            </span>
                            <span class="col-xs-2 mx-4">
                                <img class="img-responsive" src="../images/human.png" alt="Human Icon">
                                40
                            </span>
                            <span class="col-xs-2 mx-4">
                                <img class="img-responsive" src="../images/report.png" alt="Report Icon">
                                2
                            </span>
                        </p>
                    </div>
                </div>
                
                <div class="row bg-white py-2 shadow">
                    <div class="col-sm-12">
                        <span class="col-sm-4">
                            <img class="img-responsive" src="../images/home.png" alt="Home Icon">
                        </span>
                        <span class="col-sm-8">
                            Dashboard/Home
                        </span>
                    </div>
                </div>

                <div class="text-white row mt-5 mx-4">
                    <div class="py-5 col-sm-4 my-3 bg-dark text-center icons-bars">
                        <img class="img-responsive" src="../images/dashboard_icon.png" alt="Dashboard Icon">
                        <br>Dashboard
                    </div>
                    <div class="py-5 col-sm-4 my-3 bg-success text-center icons-bars">
                        <img class="img-responsive" src="../images/account.png" alt="Account Icon">
                        <br>User Mgt. System
                    </div>
                    <div class="py-5 col-sm-4 my-3 bg-dark text-center icons-bars">
                        <img class="img-responsive" src="../images/fleet.png" alt="Fleet Icon">
                        <br>Fleet
                    </div>
                    <div class="py-5 col-sm-4 my-3 bg-success text-center icons-bars">
                        <img class="img-responsive" src="../images/ticket.png" alt="Ticket Icon">
                        <br>Ticket
                    </div>
                    <div class="py-5 col-sm-4 my-3 bg-dark text-center icons-bars">
                        <img class="img-responsive" src="../images/trip.png" alt="Trip Icon">
                        <br>Trip
                    </div>
                    <div class="py-5 col-sm-4 my-3 bg-success text-center icons-bars">
                        <img class="img-responsive" src="../images/report.png" alt="Report Icon">
                        <br>Report
                    </div>
                </div>

            </div>
            <!-- END OF CONTENT SECTION -->
        </div>
    </div>
</body>
</html>