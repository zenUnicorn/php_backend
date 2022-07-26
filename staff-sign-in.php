<?php include("connections/session.php"); ?>
<?php include("connections/database.php"); ?>

<?php

   if(isset($_POST['login_button'])) {
       $email_signin = $_POST['email_signin'];
       $password_signin = $_POST['password_signin'];

       // clean data 
       $user_email = filter_var($email_signin, FILTER_SANITIZE_EMAIL);
       $pswd = mysqli_real_escape_string($connection, $password_signin);

       // Query if email exists in db
       $sql = "SELECT * FROM `staff_table` WHERE email = '{$email_signin}' AND password = '{$password_signin}' ";
       $query = mysqli_query($connection, $sql);
       $rowCount = mysqli_num_rows($query);

       // If query fails, show the reason 
       if(!$query){
          die("SQL query failed: " . mysqli_error($connection));
       }

       if(!empty($email_signin) && !empty($password_signin)){
           if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $pswd)) {
               $wrongPwdErr = '<div class="alert alert-danger">
                       Password should be between 6 to 20 charcters long, contains atleast one special chacter, lowercase, uppercase and a digit.
                   </div>';
           }
           // Check if email exist
           if($rowCount <= 0) {
               $accountNotExistErr = '<div class="alert alert-danger">
                       User account does not exist.
                   </div>';
           } else {
               // Fetch user data and store in php session
               while($row = mysqli_fetch_array($query)) {
                   $id            = $row['id'];
                   $staff_username     = $row['username'];
                   $staff_email      = $row['email'];
                   $staff_location         = $row['location'];
                   $staff_phone_number =         $row['phone_number'];
                   $staff_password =         $row['password'];
                   $staff_time  =         $row['time'];
            }
               
                   if($user_email == $user_email && $user_password == $user_password) {
                      header("Location: staff-dashboard.php");
                      
                      $_SESSION['id'] = $id;
                      $_SESSION['username'] = $staff_username;
                      $_SESSION['email'] = $staff_email;
                      $_SESSION['location'] = $staff_location;
                      $_SESSION['phone_number'] = $staff_phone_number;
                      $_SESSION['password'] = $staff_password;
                      $_SESSION['time'] = $staff_time;
                   } else {
                       $emailPwdErr = '<div class="alert alert-danger">
                               Either email or password is incorrect.
                           </div>';
                   }
           }
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
    <title>Staff Sign In</title>
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
                    <h3>Login</h3>
                    <div class="form-group">
                        <label>Email<span style="color: red;">*</span></label>
                        <input type="email" class="form-control" name="email_signin" id="email_signin" placeholder="jon@gmail.com" required />
                    </div>
                    <div class="form-group">
                        <label>Password<span style="color: red;">*</span></label>
                        <input type="password" class="form-control" name="password_signin" id="password_signin" placeholder="*****" required />
                    </div>
                    <button type="submit" name="login_button" id="sign_in"
                        class="btn btn-outline-primary btn-lg btn-block">Sign
                        in</button>
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