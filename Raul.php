<?php
// Starting a session
session_start();

// Setting SESSION variables
$_SESSION['session_var1'] = 'Hello';
$_SESSION['session_var2'] = 'World';
$_SESSION['session_var3'] = null;
$_SESSION['session_var4'] = null;

// Setting COOKIES
setcookie('cookie1', 'Cuidado que me voy en 3600s', time() + 3600, '/');
setcookie('cookie2', 'Cuidado que me voy en 60s', time() + 60, '/');

// Generating two GET variables
$get_var1 = urlencode('Hello GET');
$get_var2 = urlencode('World GET');
?>


<p>Para comprobar los datos $_POST usar este enlace</p>
<form action="Raul2.php" method="post">
    <label>Módulo</label>
    <input type="text" name="modulo">
    <label>Nota</label>
    <input type="text" name="nota">
    <input type="submit" value="Submit POST">
</form>

<p>Para comprobar los datos $_GET usar este enlace</p>
<?php
echo "<a href='Raul2.php?var1=$get_var1&var2=$get_var2'>Go to Secondary Page</a>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
</head>
<body>
    <h1>Main Page</h1>
</body>
</html>
