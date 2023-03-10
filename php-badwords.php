<?php
$paragraph =  $_GET["paragraph"];
$badword = $_GET["badword"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h2>Questo è il paragrafo che hai inserito</h2>
    <p>
        <?php echo $_GET["paragraph"]; ?>
    </p>
    <h3>Ha una lunghezza di </h3>
    <p>  <?php echo strlen($paragraph);?> caratteri </p>
</div>

<div>
    <h2>Questo è il tuo paragrafo dopo la censura</h2>
    <?php echo str_replace($badword, "***",$paragraph);
    $censurato = str_replace($badword, "***",$paragraph);
    ?>
    <h3>Ha una lunghezza di </h3>
    <p>  <?php echo strlen($censurato) ;?> caratteri </p>
</div>

  
</body>
</html>