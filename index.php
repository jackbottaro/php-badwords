<?php

$text = "Ieri sono andato ad una festa, mi aveva invitato luca. Alla festa c'erano maria, marco, giorgia, luca ed alessandro";

$badText = "*****";

$userWord = $_GET["censor"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{
        text-align: center;
    }

    p{
        margin-bottom: 10px;
    }

    form{
        margin: 20px;
    }

    h4{
        text-transform: uppercase;
    }
    </style>
</head>
<body>
<h4>Versione incensurata</h4>

<p id=not-censored><?php echo $text?></p>
<p>La stringa è composta da <strong><?php echo strlen($text);?></strong> caratteri</p>

<form method="get">
  <label for="censor">Nome da censurare: </label>
  <input type="text" name="censor">
  <input type="submit" value="Censura">
</form> 

<h4>Versione censurata</h4>
<p id="censored"><?php echo str_replace($userWord,$badText,$text);?></p>
</body>
</html>