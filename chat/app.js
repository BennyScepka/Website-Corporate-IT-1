/*
* Hook that gets called every 120 ms and requests messages from DB
*/

$("#messages").load("getMessages.php");
$(function(){
    setInterval(function(){
        $("#messages").load("http://localhost/Website-Corporate-IT-1/chat/getMessages.php", {"author": sessionStorage.getItem("username")});
    }, 120);
});

/*
* takes "username" from session storage and content of message box to send it to the php to save it to the DB 
*/

$(document).on("click", "#send-button" , function() {
    let formData = new FormData();
    let msg = $("#message-box").val();
    formData.append("message", msg);
    const authorFromSessionStorage = sessionStorage.getItem("username");
    formData.append("author", authorFromSessionStorage);
    $.ajax({
        url: "http://localhost/Website-Corporate-IT-1/chat/postMessage.php",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
        success: () => {
            $('#message-box').val("");
        },
    });
});

/*
* if username is set and user agrees to TOS, close modal and save username in local storage
*/

$(document).on("click", "#login-button" , function() {
    const consent = $("#login-consent").val();
    const loginUsername = $("#login-username").val();

    console.log("login button pressed");

    if (consent && loginUsername) {
        sessionStorage.setItem("username", loginUsername);
        $("#modal").hide().css("visibility", "hidden");
    }
});

const styleLoginButton = () => {
    const consent = $("#login-consent").is(":checked");
    const loginUsername = $("#login-username").val();

    if (consent && loginUsername) {
        $("#login-button")
            .removeAttr("disabled")
            .removeClass("login-button-disabled")
            .addClass("login-button");
    } else {
        $("#login-button").attr("disabled", "disabled")
            .addClass("login-button-disabled")
            .removeClass("login-button");
    }
};

$(document).on("click", "#login-consent" , styleLoginButton);
$(document).on("keypress", "#login-username", styleLoginButton)
$(document).on("change", "#login-username", styleLoginButton)