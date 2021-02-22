<?php
    //INCLUDING THE HEAD SECTION
    include './includes/head.inc.php';
    headSectionLink('.', 'Contact Us - Naija Travels');
?>
<body>
    <div class="container-fluid">
        <?php 
            include './includes/header.inc.php';
        ?>
        <div class="row my-3">
            <div class="col-sm-12 bg-image-contact">
                <div class="row mx-3">
                    <div class="col-sm-6 mt-5">
                        <form action="contact-us.php" method="POST" class="bg-white py-3 mb-5 px-3">
                            <h3 class="text-center">Contact Us</h3>
                            <?php
                                if(isset ($_POST['submit'])){   

                                    $fname = htmlentities($_POST['name']);
                                    $from = htmlentities($_POST['email']);
                                    $to = 'info@naijatravels.com';
                                    $phone = htmlentities($_POST['phone']);
                                    $subject = htmlentities($_POST['subject']);
                                    $message = htmlentities($_POST['message']);
                                    $body = '<div style="font-size:17px;">'.$message .'</div> <br />Name: <b>'.$fname .'</b><br /> Phone: <b>'.$phone.'</b><br />Email: <b>'.$from.'</b><br /> Message was sent from <a href="https://www.naijatravels.com"><b>naijatravels.com</b></a>';

                                    $encoding = "utf-8";

                                    // Preferences for Subject field
                                    $subject_preferences = array(
                                        "input-charset" => $encoding,
                                        "output-charset" => $encoding,
                                        "line-length" => 76,
                                        "line-break-chars" => "\r\n"
                                    );

                                    // Mail header
                                    $header = "Content-type: text/html; charset=".$encoding." \r\n";
                                    $header .= "From: ".$from." <".$from."> \r\n";
                                    $header .= "MIME-Version: 1.0 \r\n";
                                    $header .= "Content-Transfer-Encoding: 8bit \r\n";
                                    $header .= "Date: ".date("r (T)")." \r\n";
                                    $header .= iconv_mime_encode("Subject", $message, $subject_preferences);

                                    // Send mail

                                    if($fname && $from && $subject && $body){
                                        mail($to, $subject, $body, $header);
                                        echo "<center>Thank you for your mail, We will get back to you soon...</center>";
                                        echo '
                                            <script type="text/javascript">
                                                function counter(time, url){
                                                    var interval = setInterval(function(){
                                                        time = time - 1;
                                                                if(time == 0){
                                                                    clearInterval(interval);
                                                                    window.location = url;
                                                                }
                                                    }, 1000)
                                                }
                                                counter(5, "contact-us.php")
                                            </script>
                                        ';
                                    }else{
                                        echo 'Please try again later. Thank You!!!';
                                    }
                                }
			                ?>

                            <div class="row my-3">
                                <div class="col-sm-6">
                                    <label for="full_name"><b>Full Name</b></label><br>
                                    <input class="form-control" placeholder="Full Name" type="text" name="name" required="">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-6">
                                    <label for="subject"><b>Subject</b></label><br>
                                    <input class="form-control" placeholder="Subject" type="text" name="subject" required="">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-6">
                                    <label for="email"><b>Email</b></label><br>
                                    <input class="form-control" placeholder="Email" type="email" name="email" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone"><b>Phone</b></label><br>
                                    <input class="form-control" placeholder="Phone" type="text" name="phone" required="">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-6">
                                    <label for="message"><b>Message</b></label><br>
                                    <textarea class="form-control" name="message" required="" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-6">
                                    <input class="form-control btn btn-success w-50" name="submit" type="submit" value="SEND">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <div class="row my-3 py-5 text-white">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3937.8574328163563!2d12.4445455144594!3d9.257032987925324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10fc6b484d3f3ac3%3A0xb053d72f81151e87!2sWaziri%20Road%2C%20Karewa%2C%20Jimeta!5e0!3m2!1sen!2sng!4v1577563011528!5m2!1sen!2sng" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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