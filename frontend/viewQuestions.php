<!DOCTYPE html>
<html>
<head>
        <title>View Questions</title>
        <link rel="stylesheet" type="text/css" href="boxedStylesheet.css">
<style>
        .easy {
            background-color: lightgreen;
            float: left;
            width: 33%;
        }
        .medium {
            background-color: yellow;
            float: left;
            width: 33%;
        }
        .hard {
            background-color: red;
            float: left;
            width: 33%;
        }

</style>
</head>
<body>
        <ul>
                <li><a href="instructorL.php">Examination Nation</a></li>
                <li><a href="">About</a></li>
                <li style="float: right"><a href="../logout.php">Logout</a></li>
        </ul>
        <h1 align="center">Question Bank</h1>
<?php
    include "../backend/query_db.php";
    
    echo "<div class=\"easy\">";
    foreach(getAllEasyAnswersFromQuestions() as $Easy){
        $Question = $Easy['Question'];
        $Input1 = $Easy['Input1'];
        $Input2 = $Easy['Input2'];
        $Input3 = $Easy['Input3'];
        $Correct1 = $Easy['Correct1'];
        $Correct2 = $Easy['Correct2'];
        $Correct3 = $Easy['Correct3'];

        echo "<fieldset>";
        echo "    <b>$Question</b><br>";
        echo "    <b>$Input1</b>:$Correct1<br>";
        echo "    <b>$Input2</b>:$Correct2<br>";
        echo "    <b>$Input3</b>:$Correct3<br>";
        echo "</fieldset>";
    }
    echo "</div>";
    echo "<div class=\"medium\">";
    foreach(getAllMediumAnswersFromQuestions() as $Medium){
       $Question = $Medium['Question'];
       $Input1 = $Medium['Input1'];
       $Input2 = $Medium['Input2'];
       $Input3 = $Medium['Input3'];
       $Correct1 = $Medium['Correct1'];
       $Correct2 = $Medium['Correct2'];
       $Correct3 = $Medium['Correct3'];

       echo "<fieldset>";
       echo "    <b>$Question</b><br>";
       echo "    <b>$Input1</b>:$Correct1<br>";
       echo "    <b>$Input2</b>:$Correct2<br>";
       echo "    <b>$Input3</b>:$Correct3<br>";
       echo "</fieldset>";
    }
    echo "</div>";
    echo "<div class=\"hard\">";
    foreach(getAllHardAnswersFromQuestions() as $Hard){
        $Question = $Hard['Question'];
        $Input1 = $Hard['Input1'];
        $Input2 = $Hard['Input2'];
        $Input3 = $Hard['Input3'];
        $Correct1 = $Hard['Correct1'];
        $Correct2 = $Hard['Correct2'];
        $Correct3 = $Hard['Correct3'];

        echo "<fieldset>";
        echo "    <b>$Question</b><br>";
        echo "    <b>$Input1</b>:$Correct1<br>";
        echo "    <b>$Input2</b>:$Correct2<br>";
        echo "    <b>$Input3</b>:$Correct3<br>";
        echo "</fieldset>";
    }
    echo "</div>";
?>

</body>
</html>
