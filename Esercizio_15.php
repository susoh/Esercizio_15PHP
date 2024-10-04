<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tipo = "o";
        $num = 23;

        function stampaLista ($t, $n) {
            if($t=="u") {
                echo "<ul>";
                for($i=0; $i<$n; $i++) {
                    if($i % 5 == 0|| $i % 2 == 0) {
                        echo "<li>$i</li>";
                    }
                }
                echo "</ul>";
            } else {
                echo "<ol>";
                for($i=0; $i<$n; $i++) {
                    if($i % 5 == 0|| $i % 2 == 0) {
                        echo "<li>$i</li>";
                    }
                }
                echo "</ol>";
            }
        }

        stampaLista($tipo, $num);

    ?>
</body>
</html>