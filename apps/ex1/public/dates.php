<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
    <?php include_once("../includes/styles.php"); ?>
</head>
<body>
    <h1 class="blue">Intro to PHP</h1>
    <a href="index.php">Home</a>
    <?php
        date_default_timezone_set("America/Moncton");
        $now = time(); //get the current date and time in EPOCH seconds
    
        $date = strtotime("2026-20-4 14:35:05");
    ?>
    <h1>Now Epoch Seconds: <?= $now ?></h1>
    <h2>Now Formatted Date: <?= date("y-m-d H:i:s", $now) ?></h2>
    <h1>Epoch seconds of our constructed date: <?= $date ?></h1>
    <h2>Formatted date: <?= date("y-m-d H:i:s", $date) ?> </h2>
</body>
</html>