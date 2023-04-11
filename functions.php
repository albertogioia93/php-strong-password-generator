<?php
    // Nella funzione generate_password, viene creata una stringa di caratteri contenente lettere (maiuscole e minuscole), numeri e simboli speciali.
    function generate_password($length) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        // Usando la funzione str_shuffle, viene mischiata la stringa di caratteri in modo casuale e viene estratta la sottostringa di lunghezza specificata dall'utente in input type=number.
        $password = substr(str_shuffle($chars), 0, $length);
        return $password;
    }
?>
