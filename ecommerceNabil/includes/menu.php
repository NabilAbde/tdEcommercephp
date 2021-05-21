<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php //Affiche les categories dans une balise li
        foreach ($category as $cat) {
        ?>
            <li><?php echo $cat; ?></li>
        <?php
        }
        ?>
    </ul>
</body>

</html>