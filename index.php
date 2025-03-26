<!DOCTYPE html>
<html>
<head>
    <title>Projetos Php</title>
</head>
<body>
    <?php
        $idade = 19;
        $peso = 30;

        if(($idade >= 16 && $idade <= 69) && $peso >= 50){
            echo " Atende os requisitos";
        } else {
            echo "Não atende os requisistos";
        }

    ?>
</body>
</html>