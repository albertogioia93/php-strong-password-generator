<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>

    <h1>STRONG PASSWORD GENERATOR</h1>
    <h2>Genera una password sicura</h2>
    
    <?php
        // Nella funzione generate_password, viene creata una stringa di caratteri contenente lettere (maiuscole e minuscole), numeri e simboli speciali.
        function generate_password($length) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
            // Usando la funzione str_shuffle, viene mischiata la stringa di caratteri in modo casuale e viene estratta la sottostringa di lunghezza specificata dall'utente in input type=number.
            $password = substr(str_shuffle($chars), 0, $length);
            return $password;
        }

        if (isset($_GET['length'])) {
            $length = $_GET['length'];
            $password = generate_password($length);
            echo "<p>La tua password è: $password</p>";
        }
    ?>

    <!-- Quando l'utente invia il modulo, la variabile length viene inviata in GET all'url di index.php. -->
    <form action="index.php" method="GET">
        <div>
            <label for="length">Lunghezza password (da 8 caratteri a 32 caratteri):</label>
            <!-- Questo campo richiede che l'utente inserisca un valore tra 8 e 32 e lo rendo obbligatorio con 'required' per evitare che l'utente lasci vuoto il campo. -->
            <input type="number" name="length" id="length" min="8" max="32" required>
        </div>
        <button type="submit">Genera password</button>
    </form>
</body>
</html>