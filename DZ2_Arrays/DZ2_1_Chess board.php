<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess board</title>
    <link rel="stylesheet" href="css/all.css">
</head>
<body class="uni_mar">
    <?php
        echo "<table border=\"1\" width=\"270px\">";
        for($i = 0; $i < 8; ++$i){
            echo "<tr height=\"30px\">";
            for($j = 0;$j < 8; ++$j){
                echo "<td ";
                if(($i%2 == 0 && $j%2==0) || ($i%2==1 && $j%2==1))
                    echo " bgcolor=\"black\">";
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
    
</body>
</html>