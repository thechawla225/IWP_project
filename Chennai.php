<?php session_start();
?>
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

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <script>
    var mybutton = document.getElementById("myBtn");

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    function addCode() {
        document.getElementById("add_to_me").innerHTML +=
            "<h3>This is the text which has been inserted by JS</h3>";
    }
    </script>
    <div class="div2">
        <img src="Chennai1.jpg" alt="">
        <br>
        <br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum</p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>Holder Name</th>
                <th>Address</th>
                <th>Price
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ankit Chawla</td>
                <td>Amazing Heights, Laplat Nagar, Chennai</td>
                <td>33.5 Lakhs</td>
            </tr>
        </tbody>
    </table>

    <div class="div2">
        <img src="Chennai2.jpg" alt="">
        <br>
        <br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum</p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>Holder Name</th>
                <th>Address</th>
                <th>Price
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Subham Kumar</td>
                <td>Subham Enclave, Gumti Nagar, Chennai</td>
                <td>50.0 Lakhs</td>
            </tr>
        </tbody>
    </table>

    <div class="div2">
        <img src="Chennai3.jpg" alt="">
        <br>
        <br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum</p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>Holder Name</th>
                <th>Address</th>
                <th>Price
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gulmohar Corporation</td>
                <td>Gulmohar Vihaar, Shahstri Nagar, Chennai</td>
                <td>3 Crores</td>
            </tr>
        </tbody>
    </table>
    <div class="div2">
        <img src="Chennai4.jpg" alt="">
        <br>
        <br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum</p>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h3>More of our most beautiful properties</h3>
    <table>
        <tr>
            <th>Holder Name</th>
            <th>Address</th>
            <th>Price</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost" , "ankitc", "1234", "realestate");
            if($conn-> connect_error)
            {
                die("Connection Failed : ". $conn->connect_error);
            }
            else
            {
                $sql = "SELECT holdername, address, price from properties where upper(address) LIKE '% CHENNAI'";
                $result = $conn-> query($sql);

                if($result-> num_rows > 0)
                {
                    while($row = $result-> fetch_assoc())
                    {
                        echo "<tr><td>". $row["holdername"] ."</td><td>". $row['address'] ."</td><td>" .$row['price'] ."</td></tr>";
                    }
                }
                else
                {
                    echo "No results";
                }
            }

            $conn-> close();
            ?>
    </table>
    <h4>Contact our registered realtors below to get assistance about properties in your city.</h4>
    <table>
        <tr>
            <th>Name</th>
            <th>User Id</th>
            <th>Email</th>
            <th>City</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost" , "ankitc", "1234", "realestate");
            if($conn-> connect_error)
            {
                die("Connection Failed : ". $conn->connect_error);
            }
            else
            {
                $sql = "SELECT name, userid, email, city from registration where city = 'Chennai'";
                $result = $conn-> query($sql);

                if($result-> num_rows > 0)
                {
                    while($row = $result-> fetch_assoc())
                    {
                        echo "<tr><td>". $row["name"] ."</td><td>". $row['userid'] ."</td><td>" .$row['email'] ."</td><td>" .$row['city'] ."</td></tr>";
                    }
                }
                else
                {
                    echo "No results";
                }
            }

            $conn-> close();
            ?>
    </table>


</body>

</html>