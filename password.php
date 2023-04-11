<?php
session_start(); // avvia la sessione
if (!isset($_SESSION['password'])) {
    header('Location: index.php'); // se la password non è presente nella sessione, effettua un redirect alla pagina index.php
    exit();
}
$password = $_SESSION['password']; // recupera la password dalla sessione
unset($_SESSION['password']); // cancella la password dalla sessione
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
</head>
<body>
    <h1>Password generata</h1>
    <p>La tua password è: <?php echo $password; ?></p>
</body>
</html>
