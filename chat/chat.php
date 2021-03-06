<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SocialFUNsolation - Chat</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Russo+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="chat.css">
    <link rel="stylesheet" href="login.css">
    <script src="app.js"></script>
    
</head>
<body>
<div id="app" class="app">
    <div class="content">
        <div class="header">
            <h1> Welcome to the chat!</h1>
        </div>
        <div id="messages" class="chat"></div>
        <div id="footer-container">
            <div class="footer">
                <input type="text" placeholder="Type your message..." id="message-box">
                <button class="send-button" id="send-button">
                    <div class="send-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet"
                             viewBox="0 0 24 24">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" style="stroke: currentColor;"
                                  d="M9.912 12H4L2.023 4.135A.662.662 0 0 1 2 3.995c-.022-.721.772-1.221 1.46-.891L22
                         12L3.46 20.896c-.68.327-1.464-.159-1.46-.867a.66.66 0 0 1 .033-.186L3.5 15"/>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="modal" id="modal">
        <div class="row">
            <div class="left">
                <h1 class="whiteh1" style="margin-bottom: -3vw;">
                <span>Choose a</span>
                 <span class="orangeh1">name</span>  
                 <br>
                 <span>and get started!</span>
                </h1>
            </div>
            <div class="right">
                    <input type="text" id="login-username" placeholder="What's your name?" class="login-name-input">
                    <div class="login-consent-group flex">
                        <input type="checkbox" id="login-consent" class="login-consent-checkbox">
                            <label for="login-consent">I have read and accept our terms of service and privacy policy.</label>
                    </div>
                <button id="login-button" class="login-button-base login-button-disabled">CHAT</button>
            </div>
        </div>
    </div>    
</div>
</body>
</html>