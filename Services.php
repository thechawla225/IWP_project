<html>
    <head>
        <link rel="stylesheet" href="registerlogin.css">
    </head>
    <body>
        <div class="container">
            <header>
                <div class="logo">
                    <h1>Real Estate</h1>
                </div>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="AboutUs.html">About Us</a>
                    </li>
                        <li>
                            <a href="Properties.php">Properties</a>
                        </li>
    
                        <li>
                            <a href="Services.php">Services</a>
                        </li>
    
                        <li>
                            <a href="Contactus.html">Contact Us</a>
                        </li>
                        
                    <li>
                        <a href="RegisterForm.html" class = "active">Register / Login</a>
                    </li>
                    <li class = "menu">Close</li>
                </ul>
                <div class="menu">Menu</div>
            </header>
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
                $sql = "SELECT name, userid, email, city from registration";
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
                  <li><a href="index.html">Home</a></li>
                  <li><a href="">Contact us</a></li>
                </ul>
              </div>
              </div>
            </div>
           </footer>
       
    </body>
</html>