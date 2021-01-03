<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<pre>
<?php
    require_once 'ContaBanco.php';

    $c1 = new ContaBanco(001, "cc", "Pablo");
    $c2 = new ContaBanco(002, "cp", "Alana");
    print_r($c1);
    print_r($c2);
?>
</pre>
</body>
</html>