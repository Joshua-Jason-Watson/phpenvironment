<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
    <?php include_once("../includes/styles.php"); ?>
</head>
<body>
   <h1>Constants</h1>
   <a href="/">Home</a>
   <div>
    <?=
        define("COLLEGE","NBCC");
        define("CAMPUS","MONCTON");
        define("MARGIN","0.05"); //5%
        // define("CAMPUS","FREDERICTON"); // we cannot reassign constants

        const TAX_RATE = 0.15;
        const MAX_STUDENTS = 30;
        const ADDRESS = "1234 Mountain Road"
    
    ?>
    <h1>I am studying at <?= COLLEGE ?> <?= CAMPUS ?>.</h1>
    <div>
        Tax rate: <?= TAX_RATE ?><br>
        Max students: <?= MAX_STUDENTS ?><br>
        Margin: <?= MARGIN ?><br>
        Address: <?= ADDRESS ?>
    </div>

</div>
</body>
</html>