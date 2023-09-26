<?php
// Starting a session
session_start();

// Checking for GET variables
if (isset($_GET['var1']) && isset($_GET['var2'])) {
    $get_var1 = urldecode($_GET['var1']);
    $get_var2 = urldecode($_GET['var2']);
} else {
    $get_var1 = 'Default GET 1';
    $get_var2 = 'Default GET 2';
}

// Checking for POST variables
if (isset($_POST['modulo']) && isset($_POST['nota'])) {
    $post_var1 = $_POST['modulo'];
    $post_var2 = $_POST['nota'];
} else {
    $post_var1 = 'Default POST 1';
    $post_var2 = 'Default POST 2';
}

// Checking for SESSION variables
$session_var1 = isset($_SESSION['session_var1']) ? $_SESSION['session_var1'] : 'Session Variable 1 not set';
$session_var2 = isset($_SESSION['session_var2']) ? $_SESSION['session_var2'] : 'Session Variable 2 not set';
$session_var3 = isset($_SESSION['session_var3']) ? $_SESSION['session_var3'] : 'Session Variable 3 not set';
$session_var4 = isset($_SESSION['session_var4']) ? $_SESSION['session_var4'] : 'Session Variable 4 not set';

// Checking for COOKIES
$cookie1 = isset($_COOKIE['cookie1']) ? $_COOKIE['cookie1'] : 'Cookie 1 not set';
$cookie2 = isset($_COOKIE['cookie2']) ? $_COOKIE['cookie2'] : 'Cookie 2 not set';

// Using date() function
$current_date = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Secondary Page</title>
</head>
<body>
    <h1>Secondary Page</h1>
    <p>GET Variable 1: <?php echo $get_var1; ?></p>
    <p>GET Variable 2: <?php echo $get_var2; ?></p>
    <form method="post">
        <p>Módulo (POST): <?php echo $post_var1; ?></p>
        <p>Nota (POST): <?php echo $post_var2; ?></p>
    </form>
    <p>SESSION Variable 1: <?php echo $session_var1; ?></p>
    <p>SESSION Variable 2: <?php echo $session_var2; ?></p>
    <p>SESSION Variable 3 (null): <?php echo $session_var3; ?></p>
    <p>SESSION Variable 4 (null): <?php echo $session_var4; ?></p>
    <p>Cookie 1: <?php echo $cookie1; ?></p>
    <p>Cookie 2: <?php echo $cookie2; ?></p>
    <p>Current Date and Time: <?php echo $current_date; ?></p>
    <a href="Raul.php">Go back to main</a>
</body>
</html>
