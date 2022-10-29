<?php include("connections/session.php"); ?>
<?php include("connections/database.php"); ?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$output = "";



// Sign up authentication

if (isset($_POST['register_button'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users_table (full_name, email_address, user_password) VALUES('{$fullname}', '{$email}','{$password}')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        
        $message = "Hello ".$fullname. "\r\n" . 
            "Welcome to Environ Platform, we are thrilled to see you here!". "\r\n" .
            
            "We are confident that our service will help you make earn some cryptocurrency with our cutting-edge cloud mining technology.". "\r\n" .
            
            
            "Regards". "\r\n" .
            "Environ Platform Team.";
     
        $from = "support@environplatform.io";

        //change your email here
        $to = $email;
        $subject = "Welcome to Environplatform";
        $headers = "From: ". $from;
    
        mail($to, $subject, $message, $headers);
    
        header('location: sign-in.php');
    } else {
        header('location: sign-up.php');
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
                    <h3>Sign up a new account.</h3>
                    <div class="form-group">
                        <label>Full name<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="fullname" id="email_signin" placeholder="Your name" required />
                    </div>
                    <div class="form-group">
                        <label>Email<span style="color: red;">*</span></label>
                        <input type="email" class="form-control" name="email" id="email_signin" placeholder="Your email" required />
                    </div>
                    <div class="form-group">
                        <label>Password<span style="color: red;">*</span></label>
                        <input type="password" class="form-control" name="password" id="password_signin" placeholder="Your password" required />
                    </div>
                    <button type="submit" name="register_button" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">Sign
                        Up</button>
                    <p>Already have an account? <a href="sign-in.php">Sign in</a></p>
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
                <li>Address: 3435 Wilshire Blvd., Los Angeles, CA, 90010.</li>
                <li>Email: support@environplatform.io</li>
                <!-- <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-chart-area"></i></a></li> -->
            </ul>
        </div> <!-- /social-links-wrap -->
    </div>
</body>

</html>