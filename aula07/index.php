<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Ultra Emoji Combat</title>
</head>
<body>
<pre>
<?php
    echo "<h1>Ultra Emoji Combat</h1>";
    require_once 'Lutador.php';
    $l = new Lutador("Pretty Boy", "França", 31, 1.75, 90.9, 11, 2, 1);
    $l->status();
?>
</pre>
</body>
</html>