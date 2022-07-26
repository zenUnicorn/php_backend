<?php include("connections/session.php"); ?>
<?php include("connections/database.php"); ?>

<?php
//staff signup

if (isset($_POST['staff-register-btn'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];

    $sql = "INSERT INTO staff_table (username, email, location, phone_number, password) 
    VALUES('{$name}', '{$email}', '{$location}', '{$phone_number}', '{$password}')";

    $result = mysqli_query($connection, $sql);
    if ($result) {
        header('location: staff-sign-in.php');
    } else {
        header('location: staff-sign-up.php');
    }
}

?>


<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="wp-content/themes/creptaam/images/logo-icon.png" type="image/x-icon">
    <title>Environ Platform - Login</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link as="style" rel="stylesheet" href="styles/css/main.min.css"> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-weight: 400;
            background-color: #EEEFF4;
        }

        body,
        html,
        .App,
        .vertical-center {
            width: 100%;
            height: 100%;
        }

        .navbar {
            background: #1833FF !important;
            width: 100%;
        }

        .btn-outline-primary {
            border-color: #1833FF;
            color: #1833FF;
        }

        .btn-outline-primary:hover {
            background-color: #1833FF;
            color: #ffffff;
        }

        .vertical-center {
            display: flex;
            text-align: left;
            justify-content: center;
            flex-direction: column;
        }

        .inner-block {
            width: 450px;
            margin: auto;
            background: #ffffff;
            box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
            padding: 40px 55px 45px 55px;
            transition: all .3s;
            border-radius: 20px;
        }

        .vertical-center .form-control:focus {
            border-color: #2554FF;
            box-shadow: none;
        }

        .vertical-center h3 {
            text-align: center;
            margin: 0;
            line-height: 1;
            padding-bottom: 20px;
        }

        label {
            font-weight: 500;
        }
    </style>
</head>

<body>
    <!-- Login form -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="#" method="POST">
                    <h3>Staff Sign-up.</h3>
                    <div class="form-group">
                        <label>Full name<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="username" id="email_signin" placeholder="Your name" required />
                    </div>
                    <div class="form-group">
                        <label>Email<span style="color: red;">*</span></label>
                        <input type="email" class="form-control" name="email" id="email_signin" placeholder="Your email" required />
                    </div>
                    <div class="form-group">
                        <label>Location<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="location" id="email_signin" placeholder="Your location" required />
                    </div>
                    <div class="form-group">
                        <label>Phone number<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="phone_number" id="email_signin" placeholder="Your phone number" required />
                    </div>
                    <div class="form-group">
                        <label>Password<span style="color: red;">*</span></label>
                        <input type="password" class="form-control" name="password" id="password_signin" placeholder="Your password" required />
                    </div>
                    <button type="submit" name="staff-register-btn" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">Sign
                        Up</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer" style="text-align: center;">
        <div class="copyright">
            &copy; 2022 | Environ Platform | <a href='terms.html'>Terms of use</a>
            | <a href='privacy-policy.html'>Privacy Policy</a>
        </div> <!-- .copyright -->
        <div class="social-link">

            <ul class="list-inline tt-animate btt" style="color: #000000">
                <li>Address: 6222, Wilshire Blvd Ste 304 Los Angeles, CA 90048.</li>
                <li>Email: support@environplatform.io</li>
                <!-- <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-chart-area"></i></a></li> -->
            </ul>
        </div> <!-- /social-links-wrap -->

    </div>
</body>

</html>