<?php session_start();?>

<html>

<head>
    <link rel="stylesheet" href="registerlogin.css">
    <script type="text/javascript">
    var ck_name = /^[A-Za-z0-9 ]{3,20}$/;
    var ck_city = /^[A-Za-z]{3,50}$/;
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
    var ck_username = /^[A-Za-z0-9_]{1,20}$/;
    var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
    var ck_address = /^[A-Za-z0-9 ]{3,20}$/;


    function validate(form) {
        var name = form.name.value;
        var email = form.email.value;
        var username = form.username.value;
        var password = form.password.value;
        var gender = form.gender.value;
        var address = form.address.value;
        var errors = [];

        if (!ck_name.test(name)) {
            errors[errors.length] = "You valid Name .";
        }
        if (!ck_email.test(email)) {
            errors[errors.length] = "You must enter a valid email address.";
        }
        if (!ck_username.test(username)) {
            errors[errors.length] = "You must enter a valid User Name no special char.";
        }

        if (!ck_password.test(password)) {
            errors[errors.length] = "You must enter a valid Password ";
        }
        if (!ck_city.test(address)) {
            errors[errors.length] = "You must enter a valid City ";
        }
        if (gender == 0) {
            errors[errors.length] = "Select Gender";
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

        <form autocomplete="off" enctype="multipart/form-data" method="post" action="http://localhost/connect.php"
            onsubmit="return validate(this);" name="form">
            <div class="info" style="padding-left:20px">
                <h2>Welcome Realtor! We'll love to have you on board!</h2>
                <h3>Please provide some details below so that we can list you on our website.</h3>
                <ul>
                    <li id="foli1" class="   ">
                        <label class="desc" id="title1" for="Field1">
                            Full Name </label>
                        <div>
                            <input id="name" name="name" type="text" class="field text medium" value="" maxlength="255"
                                tabindex="1">
                        </div>
                    </li>
                    <li id="foli2" class="   ">
                        <label class="desc" id="title2" for="Field2">
                            Email </label>
                        <div>
                            <input id="email" name="email" type="text" class="field text medium" value=""
                                maxlength="255" tabindex="2">
                        </div>
                    </li>
                    <li id="foli3" class="   ">
                        <label class="desc" id="title3" for="Field3">
                            User-ID </label>
                        <div>
                            <input id="username" name="username" type="text" class="field text medium" value=""
                                maxlength="255" tabindex="3">
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
                    <li id="foli6" class="   ">
                        <label class="desc" id="title6" for="Field6">
                            Gender </label>
                        <div>
                            <select id="gender" name="gender" class="field select medium" tabindex="5">
                                <option value="0">Gender</option>
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                            </select>
                        </div>
                    </li>
                    <li id="foli7" class="   ">
                        <label class="desc" id="title4" for="Field4">
                            Address </label>
                        <div>
                            <input id="address" name="address" type="text" class="field text medium" value=""
                                maxlength="500" tabindex="4">
                        </div>
                    </li>
                    <li id="foli7" class="   ">
                        <label class="desc" id="title4" for="Field4">
                            City </label>
                        <div>
                            <input id="city" name="city" type="text" class="field text medium" value="" maxlength="500"
                                tabindex="4">
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

        <button onclick="goToLogin()">
            Already have an account? Login !
        </button>

        <button onclick="goToUser()">
            Register as user
        </button>


        <script>
        function goToLogin() {
            window.open('LoginForm.php');

        }

        function goToUser() {
            window.open('UserRegister.php');

        }
        </script>
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