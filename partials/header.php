<?php
require '../PROJETO/config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../PROJETO/assets/css/header.css" >
    
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="https://ifrs.edu.br/rolante/"><img src="../PROJETO/assets/img/logo.png"/></a>
            </div>
            <div class="menu" border="1">
                <nav>
                    <div class="menuMobile">
                        <div class="mm_line"></div>
                        <div class="mm_line"></div>
                    </div>
                    <ul>
                        <li class="active"><a href="<?=$base;?>/index.php">MUSCLE</a></li>
                        <li><a href="<?=$base;?>/calculadora.php">CALCULADORA IMC</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
</body>
</html>