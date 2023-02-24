<?php
require 'partials/header.php'; //puxando o header
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../PROJETO/assets/css/index.css" >
    <title>Muscle</title>
</head>
<body >

    <div class="full"  >
        <a>
            <img  src="assets/img/bodyy.png" usemap="#body" />
            
            <map id="bic" name="body">
                <area alt="biceps" shape="poly" href="biceps.php" coords="546,250,571,270,600,267,602,241,588,216,562,201,524,201,525,231,275,245,256,262,229,260,223,235,241,209,256,196,294,193,301,221" >
            </map>
        </a>
    </div>
    ...
</body>
</html>
<?php
require 'partials/footer.html'; //puxando o footer
?>