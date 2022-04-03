$("#messages").load("getMessages.php");
$(function(){
    setInterval(function(){
        $("#messages").load("getMessages.php", {"author": sessionStorage.getItem("username")});
    }, 120);
});

$(document).on("click", "#send-button" , function() {
    let formData = new FormData();
    let msg = $("#message-box").val();
    formData.append("message", msg);
    const authorFromSessionStorage = sessionStorage.getItem("username");
    formData.append("author", authorFromSessionStorage);
    $.ajax({
        url: "postMessage.php",
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

$(document).on("click", "#login-button" , function() {
    const consent = $("#login-consent").val();
    const loginUsername = $("#login-username").val();

    console.log("login button pressed");

    if (consent && loginUsername) {
        sessionStorage.setItem("username", loginUsername);
        $("#modal").hide().css("visibility", "hidden");
    }
});
