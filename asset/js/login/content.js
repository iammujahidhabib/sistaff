$('#to-recover').on("click", function () {
    $("#loginform").slideUp();
    $("#recoverform").fadeIn();
});

$('#to-login').on("click", function () {
    $("#recoverform").slideUp();
    $("#loginform").fadeIn();
});