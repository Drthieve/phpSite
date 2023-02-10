<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste HTML avec PHP</title>
</head>
<body>

<ul>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        echo "<li>Hello numéro $i</li>";
    }
    ?>
</ul>

</body>
</html>
