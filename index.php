<?php session_start();
?>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

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
        <section>
            <div class="banner">
                <div class="thumb">
                    <img src="house1.jfif">
                    <img src="house2.jpg" alt="">
                    <img src="house3.jfif" alt="">
                    <img src="house4.jpg" alt="">

                </div>
                <div class="text">
                    <h2>Find Your Dream Home Today</h2>
                    <form>
                        <input type="text" id="finding" required placeholder="Find Your Dream Home">
                        <button type="submit" onclick="findhome()">Find</button>
                    </form>
                </div>
                <div class="prev"> &lt; </div>
                <div class="prev">&gt;</div>
                <div class="slide-nav">
                    <div class="nav-dot dot-active">1</div>
                    <div class="nav-dot">2</div>
                    <div class="nav-dot">3</div>
                    <div class="nav-dot">4</div>
                </div>
            </div>
        </section>
    </div>

    <script>
    function findhome() {
        var search = document.getElementById("finding").value;
        if (search == "Lucknow") {
            window.open('Lucknow.php');
        }
        if (search == "Chennai") {
            window.open('Chennai.php');
        }
        if (search == "Delhi") {
            window.open('Delhi.php');
        }
    }
    </script>


</body>

</html>