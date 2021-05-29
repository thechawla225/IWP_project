<?php session_start();?>

<html>

<head>
    <link rel="stylesheet" href="registerlogin.css">
    <script type="text/javascript">
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
    var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;

    function validate(form) {
        var email = form.email.value;
        var password = form.password.value;
        var errors = [];

        if (!ck_email.test(email)) {
            errors[errors.length] = "You must enter a valid email address.";
        }

        if (!ck_password.test(password)) {
            errors[errors.length] = "You must enter a valid Password ";
        }

        if (errors.length > 0) {

            reportErrors(errors);
            return false;
        }
        return true;
    }

    function reportErrors(errors) {
        var msg = "Please Enter Valide Data...\n";
        for (var i = 0; i < errors.length; i++) {
            var numError = i + 1;
            msg += "\n" + numError + ". " + errors[i];
        }
        alert(msg);
    }
    </script>
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
        
        <h1>You must login before proceeding forward</h1>

        <form autocomplete="off" enctype="multipart/form-data" method="post" action="login.php"
            onsubmit="return validate(this);" name="form">
            <div class="info" style="padding-left:20px">
                <h2>Login Form</h2>
                <ul>
                    <li id="foli2" class="   ">
                        <label class="desc" id="title2" for="Field2">
                            Email </label>
                        <div>
                            <input id="email" name="email" type="text" class="field text medium" value=""
                                maxlength="255" tabindex="2">
                        </div>
                    </li>
                    <li id="foli4" class="   ">
                        <label class="desc" id="title4" for="Field4">
                            Password </label>
                        <div>
                            <input id="password" name="password" type="password" class="field text medium" value=""
                                maxlength="255" tabindex="4">
                        </div>
                    </li>
                    <li class="buttons">
                        <input type="submit" value="Submit"
                            style="background: rgb(0, 96, 161); color: rgb(255, 255, 255); font-size: 14px; border: 1px solid rgb(0, 96, 161); --darkreader-inline-bgimage: initial; --darkreader-inline-bgcolor:#004d81; --darkreader-inline-color:#e8e6e3; --darkreader-inline-border-top:#007bcf; --darkreader-inline-border-right:#007bcf; --darkreader-inline-border-bottom:#007bcf; --darkreader-inline-border-left:#007bcf;"
                            data-darkreader-inline-bgimage="" data-darkreader-inline-bgcolor=""
                            data-darkreader-inline-color="" data-darkreader-inline-border-top=""
                            data-darkreader-inline-border-right="" data-darkreader-inline-border-bottom=""
                            data-darkreader-inline-border-left="">
                    </li>
                </ul>
        </form>
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
                            <li><a href="Contactus.php">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>



</body>

</html>