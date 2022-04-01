<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SocialFunsolation - Highscore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="Flappy Bird/flappystyle.css"> 
</head>
<body>
    
    <?php
        $con = mysqli_connect('localhost', 'root', '', 'wu');
        $query1 = "select max(Score) as 'maxSnake' from Highscore group by GameName having GameName = 'Snake';";
        $query2 = "select max(Score) as 'maxFlap' from Highscore group by GameName having GameName = 'Flappy';";
        $result1 = mysqli_query($con, $query1);
        $result2 = mysqli_query($con, $query2);
    ?>

    <div class="container noselect">
        <div class="wrapper">
            <div id="gametype">
                <h1>See all highscores below to challenge yourself!</h1> <span></span>
        </div>
        <div class="wrapper">
            <table class="table highscorealign">
                <thead>
                    <tr class="theader">
                        <th>Game</th>
                        <th>Overall Highscore</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Snake</td>
                        <td>
                            <?php
                                $rows = mysqli_fetch_assoc($result1);
                                echo $rows['maxSnake'];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Flappy Bird</td>
                        <td>
                            <?php
                                $rows = mysqli_fetch_assoc($result2);
                                echo $rows['maxFlap'];
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    
</body>
</html>