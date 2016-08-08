<?php session_start() ?>

<!DOCTYPE html>
<html>

<head>
    <title>Exam Results</title>
    <link rel="stylesheet" type="text/css" href="boxedStylesheet.css">
    <style>
        body {
            position: relative;
        }
        h1 {
            width: 50%;
            float: left;
            margin: 0 0 10px;
            font-size: 20pt;
        }
        p {
            padding: 0;
            margin: 0;
        }
        pre {
            margin: 0;
        }
        #totalPoints {
            float: right;
            text-align: right;
            top: 0;
            right: 5px;
        }
        .questionBox {
            position: relative;
            border: 1px solid black;
            padding: 5px;
        }
        .points {
            position: absolute;
            top: 5px;
            right: 5px;
        }
    </style>
</head>
<body>
    <ul>     
        <li><a href="studentL.php">Examination Nation</a></li>
        <li><a href="">About</a></li>
        <li style="float: right"><a href="../logout.php">Logout</a></li>
    </ul>
<!--<b>Exam Results</b>-->

<?php
    include "../backend/query_db.php";

    $sid = $_GET["sid"];
    $eid = $_GET["eid"];

    $examName = getExamNameGivenEid($eid);
    $points = round(100 * calculateStudentsTotalExamGrade($eid, $sid));
    echo "<h1>$examName</h1>";
    echo "<h1 id='totalPoints'>Points: $points%</h1>";

    foreach (getStudentAnswersRows($sid, $eid) as $answerRow) {
        $qid = $answerRow["QID"];
        $question = getQuestionTextGivenQid("$qid");
        $answerCode = $answerRow["AnswerCode"];
        $studentPoints = $answerRow["Points"];
        $totalPoints = getPointsPerQuestion($eid, $qid);
        $comment = $answerRow["Comment"];

        echo "<p>$question</p>";
        echo "<div class='questionBox'>";
        echo "    <pre>$answerCode</pre>";
        echo "    <p class='points'>$studentPoints/$totalPoints</p>";
        echo "    <p>Instructor Comment</p>";
        echo "    <p>$comment</p>";
        echo "</div>";
        echo "<br/>";
    }
?>

</body>

</html>
