<html>

<head>
    <title>Get Cookie</title>
</head>

<body>
    <?php 
        $user = $_COOKIE['user']; 
        $pwd= $_COOKIE['pwd']; 
        if($user=="user1"){ 
            if($pwd == "pwd1") 
                echo "<h2>Welcome User1</h2>"; 
            else 
                echo "<h2>You are not an authenticated user.</h2>"; 
        } 
        elseif($user=="user2"){ 
            if($pwd == "pwd2") 
                echo "<h2>Welcome User2</h2>"; 
            else 
                echo "<h2>You are not an authenticated user.</h2>"; 
        } 
        elseif($user=="user3"){ 
            if($pwd == "pwd3") 
                echo "<h2>Welcome User3</h2>"; 
            else 
                echo "<h2>You are not an authenticated user.</h2>"; 
        } 
        elseif($user=="user4"){ 
            if($pwd == "pwd4") 
                echo "<h2>Welcome User4</h2>"; 
            else 
                echo "<h2>You are not an authenticated user.</h2>"; 
        } 
        else 
            echo "<h2>Invalid Username/Password</h2>"; 
    ?>
    <a href="logout.php"> Log Out </a>
</body>

</html>