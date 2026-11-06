
<?php include_once("../includes/student.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("../includes/styles.php"); ?>
</head>
<body>
    <h1>OOP and Classes</h1>
    <a href="/">Home</a>
    <div>
        <?php
            $student1 = new Student("Josh", "Watson");

            echo $student1->firstName;
            $student1->firstName = "Joshua";
            echo "<br>";
            echo $student1->getFullName();

            $student2 = new Student("Cora", "Watson");
            $student3 = new Student("Shirley", "Watson");
            $student4 = new Student("DJ", "Watson");

            $students = [];

            array_push($students, $student1, $student2, $student3, $student4);
        ?>

        <ol>
            <?php
                for ($i = 0; $i < count($students); $i++) {
                    echo "<li>" . $students[$i]->getFullName() . "</li>";
                }
            ?>
        </ol>

        <ul>
            <?php
            // for foreach the collection is first then the interative var
            //as == in c#
                foreach ($students as $student) {
                    echo "<li>" . $student->getFullName() . "</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>
