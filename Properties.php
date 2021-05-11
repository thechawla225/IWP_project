<html>
    <head>
        <link rel="stylesheet" href="properties.css">
        
            <style>
 
  
            </style>
    </head>
    <body>
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
        
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="house4.jpg" style="width:100%">
            <div class="text">The Most Beautiful Properties</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="house2.jpg" style="width:100%">
            <div class="text">Provided to you by the best Property dealers</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="house3.jfif" style="width:100%">
            <div class="text">Your Dream Homes</div>
          </div>
          
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
          <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <script>
          function addProperty()
            {
        window.open('AddProperty.html');

            }
          var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

            var mybutton = document.getElementById("myBtn");
            
            window.onscroll = function() {scrollFunction()};
            
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
            <img src="Delhi1.jpg" alt="">
            <br>
            <br>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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
                 <td>Amazing Heights, Laplat Nagar, Lucknow</td>
                 <td>33.5 Lakhs</td>
               </tr>
            </tbody>
          </table>
          
        <div class="div2">
            <img src="Chennai2.jpg" alt="">
            <br>
            <br>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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
                 <td>Amazing Heights, Laplat Nagar, Lucknow</td>
                 <td>33.5 Lakhs</td>
               </tr>
            </tbody>
          </table>
        
        <div class="div2">
            <img src="Delhi3.jpg" alt="">
            <br>
            <br>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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
                 <td>Ankit Chawla</td>
                 <td>Amazing Heights, Laplat Nagar, Lucknow</td>
                 <td>33.5 Lakhs</td>
               </tr>
            </tbody>
          </table>
        <div class="div2">
            <img src="Lucknow3.jpg" alt="">
            <br>
            <br>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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
                 <td>Ankit Chawla</td>
                 <td>Amazing Heights, Laplat Nagar, Lucknow</td>
                 <td>33.5 Lakhs</td>
               </tr>
            </tbody>
          </table>
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
                $sql = "SELECT holdername, address, price from properties";
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
        <button onclick="addProperty()" style = 
        "
  position: fixed;
  bottom: 20px;
  left: 30px;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:blue;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;" title="Go to top">List your property</button>


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