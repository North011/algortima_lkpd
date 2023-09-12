<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 14</title>
</head>
<body>
    <h2>Bilangan Ganjil dari 1 sd 50 <br></h2>
    <?php
        for ($i=1; $i <= 50; $i++) { 
            
            if ($i % 2 == 1) {
                echo $i;
                echo "<br>";
            }
        }
    ?> 
</body>
</html>