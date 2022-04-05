<?php
    $con = mysqli_connect('localhost', 'root', '', 'wu');
    $query1 = "select count(*) as 'count' from Highscore where GameName = 'Snake';";
    $query2 = "select max(Score) as 'maxSnake' from Highscore group by GameName having GameName = 'Snake';";
    $result1 = mysqli_query($con, $query1);
    $result2 = mysqli_query($con, $query2);

    $count = mysqli_fetch_assoc($result1);
    $rows = mysqli_fetch_assoc($result2);

    if ($count['count'] == 0){
        echo 0;
    } else {
        echo $rows['maxSnake'];
    }
?>