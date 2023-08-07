<?php
session_start();

if (!isset($_COOKIE['user_info'])) {
    
    header('Location: cookie.php');
    exit;
}
$user_info = unserialize($_COOKIE['user_info']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user_info['username']); ?>!</h1>
    <p>Your email: <?php echo htmlspecialchars($user_info['email']); ?></p>
    <p>Your password is: <?php echo htmlspecialchars($user_info['password']); ?></p>
</body>
</html>