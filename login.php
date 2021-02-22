<?php
    //INCLUDING THE HEAD SECTION
    include './includes/head.inc.php';
    headSectionLink('.', 'Login - Naija Travels');
?>
<body>
    <div class="container-fluid">
        <?php 
            include './includes/header.inc.php';
        ?>
        <div class="row my-3">
            <div class="col-sm-12 bg-image">
                <div class="col-sm-4 my-5 mx-auto">
                    <form class="bg-white py-3 mb-5 px-3">
                        <div id="feedback"></div>
                        <div class="row my-3">
                            <div class="col-sm-12">
                                <input placeholder="Username" type="text" id="username" class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-12">
                                <input placeholder="Password" type="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <input type="button" id="login" value="Login" class="btn btn-success w-50">
                            </div>
                        </div>
                    </form>
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
    <script src="./js/jquery.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>