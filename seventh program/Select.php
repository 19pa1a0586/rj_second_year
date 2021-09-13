<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
        session_start();
        $con=mysqli_connect("localhost","root","9948334127k","test");
        $un=$_POST['uname'];
        $pwd=$_POST['pass'];
        $sql="select * from registration where uname='$un' and pass='$pwd'";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);

        if($count>0){
            header("location: home.php");
            $_SESSION['username']=$un;
        }
        else{
            echo "<h2>Invalid Username/Password</h2>";
        }
    ?>
</body>

</html>