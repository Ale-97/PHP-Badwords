<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, iure, molestias tenetur saepe quod a distinctio necessitatibus ipsum velit iste nesciunt? Aliquam magni cupiditate eum soluta, dicta ratione obcaecati expedita?";
    echo str_replace( $_GET["word"], "****", $text);

    echo "La lunghezza del testo è  " . strlen($text);
    ?>
</body>

</html>