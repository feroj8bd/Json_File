<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP JSON</title>
</head>

<body>

    <?php
    $friend = file_get_contents('index.json');
    $friend = json_decode($friend);

    foreach ($friend as $fans) {
        echo '<li>' . $fans->name . '<br>' . 'email : ' . $fans->email . '<br>' . 'mob : ' . $fans->mob . '</li>';
    }


    ?>

</body>

</html>