<!doctype html>
<html lang="en">
	<head>
		<title>Social FUNsolation</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
		<!-- Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		
		<link href="style.css" rel="stylesheet" type="text/css">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Russo+One&display=swap" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark navbar-static-top bg-transparent fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand mb-0 navbar" href="#landing-page">
					<img
						class="d-inline-block align-top" href="#landing-page"
						src="img/Joystick_Logo_v2.png" width="30" height="30" alt="Social Funsolation">
						SOCIAL FUNSOLATION
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav me-auto mx-auto">
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#landing-page">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#page2">About</a>
					</li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#page3" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Games
					</a>
					<ul class="dropdown-menu fade-down" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" target="_blank" href="Snake/snake.html">Snake</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" target="_blank" href="Flappy Bird/FlappyBird.html">Flappy Bird</a></li>
					</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#page4">Highscore</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" target="_blank" href="chat/chat.html">Chat</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#page6">Contact</a>
					</li>
				</ul>
				</div>
			</div>
		</nav>
		<div class="landing-page" id = "landing-page">
			<h1 class="yellowh1">
           		Enough isolation.
        	</h1>
        	<h1 class="whiteh1">
            	Challenge your friends.
        	</h1>
        	<button class="button1">
            	PLAY NOW 
				<span class="button2">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
					</svg>
				</span>
        	</button>
		</div>
		<div style="background-image: url('Mouse_background.jpg'); background-size: 100% 100%;">
		</div>
		<div class="page2" id = "page2">
			<div class="row">
				<div class="left">
					<h1 class="whiteh1p2">
						Start the Social
					</h1>
					<h1 class="yellowh1p2">
						FUNsolation!
					</h1>
					<p class="p-white" style="text-transform: uppercase;">
						Sitting at home is not always fun, take a break of being alone and challenge your friends to one of our retro games!
					</p>
				</div>
				<div class="right">
					
						<a target="_blank" href="Snake/snake.html">
							<img src="img/snake_screenshot.png" alt="play snake!" width="400" height="400" style="border-radius: 7%;">
						</a>
				</div>
			</div>
		</div>
		<div class="page3" id = "page3">
			<span class="whiteh1p2" style="margin-right: 0vw;">Top </span>
			<span class="yellowh1p2" style="margin-left: 0vw;">Games</span>
			<div class="row">
				<div class="column33">
					<div class="whitebg">
						<div class="octagon">
							<a target="_blank" href="Snake/snake.html">
								<img src="img/snake_screenshot.png" alt="play snake!" style="border-radius: 7%;height: 20vw; width: 20vw;">
							</a>
						</div>
						<h2 class="yellowh2">
							Snake
						</h2>
						<p class="p-black" style="margin-left: 2vw;">
							Flight meets platform in <br>this endless movement game!
						</p>
					</div>
				</div>
				<div class="column33">
					<div class="whitebg" style="margin-left: 4vw;">
						<div class="octagon">
							<a target="_blank" href="Flappy Bird/FlappyBird.html">
								<img src="img/flappy_bird.png" alt="play flappy bird!" style="border-radius: 7%;height: 20vw; width: 20vw;">
							</a>
						</div>
						<h2 class="yellowh2">
							Flappy Bird
						</h2>
						<p class="p-black" style="margin-left: 2vw;">
							A handheld classic <br>now on PC!
						</p>
					</div>
				</div>
				<div class="column33">
					<div class="whitebg" style="margin-left: 1vw;">
						<div class="octagon">
							<img src="img/dino_jump.png" alt="more coming soon!" style="border-radius: 7%;height: 20vw; width: 20vw;">
						</div>
						<h2 class="yellowh2">
							More Coming Soon
						</h2>
						<p class="p-black" style="margin-left: 2vw;">
							Our developers are currently <br>expanding our library!
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="page4" id = "page4">

			<?php
				$con = mysqli_connect('localhost', 'root', '', 'wu');
				$query1 = "select max(Score) as 'maxSnake' from Highscore group by GameName having GameName = 'Snake';";
				$query2 = "select max(Score) as 'maxFlap' from Highscore group by GameName having GameName = 'Flappy';";
				$result1 = mysqli_query($con, $query1);
				$result2 = mysqli_query($con, $query2);
    		?>

			<div class="row">
				<div class="left" style="width: 40%;">
					<h1 class="whiteh1" style="margin-bottom: -3vw;">
						Beat the <br>Highscore!
					</h1>
					<div class="octagonPurple">
						Current Snake Highscore:<br>
						<span style="color: white;">
							<?php
                                $rows = mysqli_fetch_assoc($result1);
                                echo $rows['maxSnake'];
                            ?>
						</span>
					</div>
				</div>
				<div class="right" style="width: 60;">
					<div class="purplebox">
						<a href="Snake/snake.html" style="color: #f9b850; text-decoration: none;">
							Snake<br></a>
						<span style="color: white; font-size: 1.5vw;">
							<?php
                                echo $rows['maxSnake'];
                            ?>
						</span>
					</div>
					<div class="purplebox">
						<a href="Flappy Bird/FlappyBird.html" style="color: #f9b850; text-decoration: none;">
						Flappy Bird<br></a>
						<span style="color: white; font-size: 1.5vw;">
							<?php
                                $rows = mysqli_fetch_assoc($result2);
                                echo $rows['maxFlap'];
                            ?>
						</span>
					</div>
					<div class="purplebox">
						Dino Jump<br>
						<span style="color: white; font-size: 1.5vw;">
							Dino Jump is coming soon!
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="page5" id = "page5">
			<span class="whiteh1p2" style="margin-right: 0vw;">Start a </span>
			<span class="yellowh1p2" style="margin-left: 0vw;">Chat!</span>
			<img src="img/chat_icon_twocolor.png" alt="chat" width="100" height="100" style="margin-top: -3vw;margin-left: -5vw;">
			<div class="row">
				<div class="left" style="width: 50%;">
					<div class="purplechat">
<<<<<<< HEAD
						<a href="chat/index.html" target="_blank" git stgitstyle="color: white; text-decoration: none;">
=======
						<a target="_blank" href="chat/chat.html" style="color: white; text-decoration: none;">
>>>>>>> fa5a643cee193001bea1e5872580a2c8d9bdc510
							<img src="img/chatbubble_purple.png" style="height: 13vw; width: 34vw;">
						</a>
					</div>
				</div>
				<div class="right" style="width: 50%;">
					<div class="pinkchat">
<<<<<<< HEAD
						<a href="chat/index.html" target="_blank" style="color: white; text-decoration: none;">
=======
						<a target="_blank" href="chat/chat.html" style="color: white; text-decoration: none;">
>>>>>>> fa5a643cee193001bea1e5872580a2c8d9bdc510
							<img src="img/chatbubble_pink.png" style="height: 11vw; width: 34vw;">
						</a>
					</div>
					<div class="yellowchat">
<<<<<<< HEAD
						<a href="chat/index.html" target="_blank" style="color: white; text-decoration: none;">
=======
						<a target="_blank" href="chat/chat.html" style="color: white; text-decoration: none;">
>>>>>>> fa5a643cee193001bea1e5872580a2c8d9bdc510
							<img src="img/chatbubble_yellow.png" style="height: 11vw; width: 34vw;">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="page6" id = "page6">
			<h1 class="whiteh1">
				<a href="mailto:hello@socialfunsolation.com" style="color: white;text-decoration: none; ">
					Send us<br>a message
				</a>
			</h1>
			<div class="row">
				<div class="left" style="width: 50%;">
				</div>
				<div class="right" style="width: 50%;">
					<p class="p-white" style="margin-left: 0;font-size: 1vw; margin-top: 2vw;">
						Department of Information Systems and New Media<br>
						Welthandelsplatz 1<br>
						1020 Vienna<br>
						Austria
					</p>
					<p class="p-white" style="color:#ff0f7b; font-size: 1vw; margin-left: 0vw; margin-top: 4vw;">
						<a href="mailto:hello@socialfunsolation.com" style="color: #ff0f7b;text-decoration: none; ">
							hello@socialfunsolation.com
						</a>
					</p>
					<p class="p-white" style="margin-left: 0vw; margin-top: 3vw;">
						<img src="img/social_media.png">
					</p>
				</div>
			</div>
		</div>
	</body>
</html>