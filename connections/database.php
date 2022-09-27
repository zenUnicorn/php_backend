<?php 
$connection = mysqli_connect("localhost", "root", "", "environplatformdb");
        if(!$connection){
            die(mysqli_error($connection));
        }
?>