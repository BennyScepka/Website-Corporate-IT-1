<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SocialFunsolation - Snake</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="snakestyle.css">
</head>
<body>

    <?php
        $con = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($con, 'wu');
        $score = $_GET['scoresnake'];

        $sql = "INSERT INTO Highscore(GameName, Score) VALUES('Snake', '$score')";

        mysqli_query($con, $sql);

        
    ?>

    <div class="container noselect">
        <div class="wrapper">
            <div id="gametype">
                <h1>Your score of <?php echo "$score"?> will be added to the Highscore.</h1> <span></span>
            </div>
        </div>
    </div>

    <?php
        header("refresh:7; url = snake.html");  
    ?>
    
</body>
</html>