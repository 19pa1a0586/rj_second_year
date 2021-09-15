<!DOCTYPE html>
<html>
<body>
    <?php
        session_start();
        $con=mysqli_connect("localhost","root","9948334127k","test");
        $un=$_POST['uname'];
        $pwd=$_POST['pass'];
        $qry="select * from registration where uname='$un' and pass='$pwd'";
        $result=mysqli_query($con,$qry);
        $count=mysqli_num_rows($result);

        if($count>0){
            header("location: Home.php");
            $_SESSION['username']=$un;
        }
        else{
            echo "<h2>Invalid Username/Password</h2>";
        }
    ?>
</body>

</html>