$(document).ready(function () {
    $("#login").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();
        var exist = false;
        var logged_in=false;

        $.ajax({
            url: "checkLogin.php",
            type: "post",
            data: {username: username, password: password},
            success: function (data) {
                exist = jQuery.parseJSON(data);

                if (!exist)
                {
                    $("#error").text("Username and Password not match");

                } else
                {

                    $("#error").text("");
                    $.ajax({

                        url: "login_session.php",
                        type: "post",
                        data: {username: username},
                        success: function (data) {
                            logged_in = jQuery.parseJSON(data);

                            if (logged_in)
                            {
                                 window.location.href='index.php';

                            } else
                            {

                                $("#error").text("fail to login, try again");

                            }
                        }, error: function ()
                        {
                            alert("error");
                        }

                    });
                }
            }, error: function ()
            {
                alert("error");
            }
        });
        //alert(valid);
       
    });
});

