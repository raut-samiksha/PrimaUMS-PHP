<?php 
if (isset($mySessionEmail) ){ ?>
    <nav class="navbar">
        <div class="logo">Mitra Faculty</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="paper-published.php">Paper Published</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="change-password.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <br> 
    
<?php 


}
else{

?>

    <nav class="navbar">
        <div class="logo">Mitra Faculty</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <br>
    <?php } ?>
