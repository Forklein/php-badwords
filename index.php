<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>

<?php 
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ad provident recusandae corporis explicabo eius libero labore tempore nostrum soluta voluptas voluptatibus. Debitis corporis culpa repellendus et expedita at quas.';
$bad_word = $_GET ['badword'];
?>


<?php
echo "$text <br/>";
echo strlen($text);
echo str_replace($bad_word, '***', $text);
?>

<!-- /* Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. */ -->
    
</body>
</html>