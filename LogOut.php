<?php session_start();?>
<html>

<head>
    <link rel="stylesheet" href="properties.css">
</head>

<body>
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
        

    <?php 
    echo "<h1>Welcome to your profile " . $_SESSION['userid'] . "</h1>"
    ?>
    <div style="text-align : center">
        <form method='post' action='logouter.php'>
            <input type="type" name='logout' placeholder="Enter 'Logout' to confirm logout" size="50"
                style="height: 50px; padding: 5px">
            <input type="submit" value='Logout'
                style="font-size:10pt;color:white;background-color:green;border:2px solid #336600;padding:0px; height : 50px; width : 50">
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4>Contact Address </h4>
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
                        <li><a href="">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>