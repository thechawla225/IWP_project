<?php session_start();?>
<html>

<head>
    <link rel="stylesheet" href="properties.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <h1>Real Estate</h1>
            </div>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="AboutUs.php">About Us</a>
                </li>
                <li>
                    <?php
                    if($_SESSION["userid"] == 'nahi')
                    {
                        echo '<a href="LoginForm.php">Properties</a>';
                    }
                    else
                    {
                        echo '<a href="Properties.php">Properties</a>';
                        }
                    ?>
                </li>

                <li>

                    <?php
                    
                    if($_SESSION["userid"] == 'nahi')
                    {
                        echo '<a href="LoginForm.php">Services</a>';
                    }
                    else
                    {
                        echo '<a href="Services.php">Services</a>';
                        }
                    ?>
                </li>

                <li>
                    <a href="Contactus.php">Contact Us</a>
                </li>

                <li>
                    <?php
                    if($_SESSION['userid'] == 'nahi')
                    {   echo '<a href="RegisterForm.php" class = "active">Register / Login</a>';
                        
                    }
                    else
                    {
                        echo "<a href='LogOut.php'>". $_SESSION['userid'] . "</a>" ;
                    }
                    ?>
                </li>
                <li class="menu">Close</li>
            </ul>
            <div class="menu">Menu</div>
        </header>

        <h3>REAL ESTATE</h3>
        <h2>We are a company on a mission, to connect property seekers to property sellers accross India and give them
            the quality service that they deserve. We promise to provide best quality of service and strive towards
            customer satisfaction.</h2>
        <br>
        <h3>Our Corporate Values</h3>
        <ul>
            <li>
                <h2>Accountability</h2>
            </li>
            <li>

                <h2>Availability</h2>
            </li>
            <li>

                <h2>Quality of Service</h2>
            </li>
        </ul>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h4 style="text-align: left;">Contact Address </h4>
                        <address>
                            Vellore Institute of Technology<br>
                            Vellore,<br>
                            Tamil Nadu.
                        </address>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="col-md-5">&copy;Copyright Real Estate.</div>
                    <div class="col-md-7">
                        <ul class="footer-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="Contactus.php">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


</body>

</html>