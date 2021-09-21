<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css/style_php.css">
    <title>Php Badwords</title>
</head>
<body>

<?php 
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ad provident recusandae corporis explicabo eius libero labore tempore nostrum soluta voluptas voluptatibus. Debitis corporis culpa repellendus et expedita at quas.';
$bad_word = $_GET ['badword'];
$edit_text = str_replace($bad_word, '***', $text);
?>

<div class="container">
    <div>
        <h1>Testo Iniziale</h1>
        <?php
        echo "$text <br/>";
        echo strlen($text) . " Caratteri";
        ?>
    </div>
    <div>
        <h1>Testo Modificato</h1>
        <?php
        echo "$edit_text <br/>";
        echo strlen($edit_text)  . " Caratteri";
        ?>
    </div>
</div>

    
</body>
</html>