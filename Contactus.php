<?php

session_start();
?>
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
        <form id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
            <script type="text/javascript">
            function ValidateForm(frm) {
                var ck_number = /^[0-9]{10}$/;
                var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                var ck_name = /^[A-Za-z0-9 ]{3,20}$/;

                if (!ck_name.test(frm.Name)) {
                    alert('Name is required.');
                    frm.Name.focus();
                    return false;
                }
                if (frm.FromEmailAddress.value == "" | !ck_email.test(frm.FromEmailAddress.value)) {
                    alert('Valid email address is required.');
                    frm.FromEmailAddress.focus();
                    return false;
                }

                if (frm.Comments.value == "") {
                    alert('Please enter comments or questions.');
                    frm.Comments.focus();
                    return false;
                }
                if (frm.PhoneNumber.value == "" || !ck_number.test(frm.PhoneNumber.value)) {
                    alert('Please enter a valid phone number');
                    frm.Comments.focus();
                    return false;
                }
                return true;
            }
            </script>
            <table style="width:100%;max-width:550px;border:0;" cellpadding="8" cellspacing="0">
                <tr>
                    <td>
                        <label for="Name">Name*:</label>
                    </td>
                    <td>
                        <input name="Name" type="text" maxlength="60" style="width:100%;max-width:250px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="PhoneNumber">Phone number:</label>
                    </td>
                    <td>
                        <input name="PhoneNumber" type="text" maxlength="43" style="width:100%;max-width:250px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="FromEmailAddress">Email address*:</label>
                    </td>
                    <td>
                        <input name="FromEmailAddress" type="text" maxlength="90" style="width:100%;max-width:250px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Comments">Comments*:</label>
                    </td>
                    <td>
                        <textarea name="Comments" rows="7" cols="40" style="width:100%;max-width:350px;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        * - required fields
                    </td>
                    <td>
                        <input name="skip_Submit" type="submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
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
                            <li><a href="Contactus.php">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>