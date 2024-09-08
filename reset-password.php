<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>
    <form action="reset-password-process.php" method="post">
        <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
        <label for="password">New Password:</label>
        <input type="password" name="password" required>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>
