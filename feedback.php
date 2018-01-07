<?php
if (isset ($_POST['submit'])) {

require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into contact (name,email,message) VALUES('" . $name . "','" . $email . "','" . $message . "')";
$success = $conn->query($query);

    if (isset($_REQUEST['u_email']))  {
//Email information
  $admin_email = "michaelrwalsh@yahoo.ie";
  $u_email = $_REQUEST['u_email'];
  $subject = 'You have new feedback!';
  $comment = $_REQUEST['message'];
  //send email
  mail($admin_email, $subject, $comment, "From:" . $u_email);
}

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

$conn->close();
header('Location: /thankyou.php',true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Michael Walsh - Software Developer, Enginner and Web Developer</title>
    <link rel="stylesheet" href="/CSS/reset.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

    <!-- BootStrap Icons -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- Styles and Fonts -->
    <link rel="stylesheet" href="/CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">

    <!-- JS Links -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="https://use.fontawesome.com/0b60fe69c9.js"></script>

    <!-- MW JS -->
    <script type="text/javascript" src="/scripts/script.js"></script>
</head>

<body>

    <!-- Header and Nav -->
    <header class="container" id="NavContainer">
        <!-- Michael Walsh SVG Logo -->
        <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 480 480" enable-background="new 0 0 60 60" xml:space="preserve" style="width:60px; height:60px; float: left;">
<font horiz-adv-x="1000">
<!-- Copyright 1992, 1994, 1997, 2000, 2004 Adobe Systems Incorporated. All rights reserved. Myriad is either a registered trademark or a trademark of Adobe Systems Incorporated in the United States and/or other countries. -->
<font-face font-family="MyriadPro-Regular" units-per-em="1000" underline-position="-100" underline-thickness="50"/>
<missing-glyph horiz-adv-x="500" d="M0,0l500,0l0,700l-500,0M250,395l-170,255l340,0M280,350l170,255l0,-510M80,50l170,255l170,-255M50,605l170,-255l-170,-255z"/>
<glyph unicode="M" horiz-adv-x="804" d="M661,0l85,0l-42,674l-111,0l-120,-326C443,263 419,189 402,121l-3,0C382,191 359,265 331,348l-115,326l-111,0l-47,-674l83,0l18,289C165,390 170,503 172,587l2,0C193,507 220,420 252,325l109,-321l66,0l119,327C580,424 608,508 631,587l3,0C633,503 639,390 644,296z"/>
<glyph unicode="W" horiz-adv-x="846" d="M277,0l96,351C398,438 413,504 425,571l2,0C436,503 450,437 471,351l85,-351l91,0l191,674l-89,0l-89,-340C639,250 620,175 606,101l-2,0C594,172 576,252 557,332l-82,342l-91,0l-90,-340C271,247 250,167 239,100l-2,0C225,165 207,249 187,333l-80,341l-92,0l171,-674z"/>
</font>

	<g><rect x="6" y="6" fill="#FFFFFF" width="468" height="468"/><path d="M468,12v456H12V12H468 M480,0H0v480h480V0L480,0z"/></g>
	<text transform="matrix(0.952 0 0 1 263 423.1826)" font-family="'MyriadPro-Regular'" font-size="110.1332px">MW</text>

</svg>
        <p style="color:black; opacity: 0.6; float: left; padding-top: 15px; padding-left: 5px;">Michael Walsh</p>



        <nav class="navbar navbar-toggleable-md navbar-light bg-transparent">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <a class="navbar-brand" href="#"></a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html" title="Home">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Social">Social Media</a>
                        <div class="dropdown-menu no-border" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://www.linkedin.com/in/michael-walsh-8775459/"><i class="fa fa-linkedin fa-2x" title="LinkedIn" aria-hidden="true"></i></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Software">Software</a>
                        <div class="dropdown-menu no-border" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://github.com/mwalshd7"><i class="fa fa-github fa-2x"  title="GitHub" aria-hidden="true"></i></a>
                            <a class="dropdown-item" href="#"><i class="fa fa-briefcase fa-2x"  title="Project Examples" aria-hidden="true"></i></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Contact">Contact</a>
                        <div class="dropdown-menu no-border" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="mailto: michaelrwalsh@yahoo.ie?Subject=I visited your website and liked it"><i class="fa fa-envelope-o fa-2x" title="Email" aria-hidden="true" ></i></a>
                            <a class="dropdown-item" href="skype:michaelrwalsh@yahoo.ie?call"><i class="fa fa-skype fa-2x" title="Skype" aria-hidden="true"></i></a>
                            <a class="dropdown-item" href="feedback.php"><i class="fa fa-comment-o fa-2x" title="Comments" aria-hidden="true"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <div class="container">
        <div class="container" style="margin-top: 10px;">
            <h1>Feedback Form</h1>


            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h3>Tell me what you think.....</h3>

                    <form role="form" id="contactForm" action="feedback.php" method="post">
                        <div class="form-group">
                            <label for="name" class="h4">Name</label>
                            <input type="text" name="u_name" class="form-control" id="name" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="h4">Email</label>
                            <input type="email" name="u_email" class="form-control" id="email" placeholder="Enter email" required>
                        </div>


                        <div class="form-group">
                            <label for="message" class="h4 ">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" name="submit" value="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>


                    </form>
                </div>
            </div>

            <!-- Back to Top Button -->
            <div>
                <a href="#0" class="cd-top">Top</a>
            </div>

            <!-- Footer -->
            <footer class="container">
                <div id="footer">
                    <div class="copyright">© MW Design 2017</div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
