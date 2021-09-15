<?php
    session_start();
?>
<h1> Welcome <?php echo $_SESSION['username'] ?> <h1>
<a href="Logout.php"> Log Out </a>