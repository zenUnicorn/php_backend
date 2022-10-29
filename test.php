<?php
$email = $_POST['email'];
$password = $_POST['password']; 


?>
<html>
    <head>
        <title></title>
    </head>
    <body>
                <form action="#" method="POST">
                    <h3>Admin-Login</h3>
                    <div class="form-group">
                        <label>Email<span style="color: red;">*</span></label>
                        <input type="email" class="form-control" name="email" id="email_signin" placeholder="email" required />
                    </div>
                    <div class="form-group">
                        <label>password<span style="color: red;">*</span></label>
                        <input type="password" class="form-control" name="password" id="password_signin" placeholder="*****" required />
                    </div>
                    <button type="submit" name="login_button" id="sign_in"
                        class="btn btn-outline-primary btn-lg btn-block">Sign
                        in</button>
                </form>
    </body>
</html>