$(document).ready(function () {
    $("#register").click(function () {
        var username = $("#username").val();
        var email_address = $("#email_address").val();
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        var isValid = false;
        var ok = false;
        //alert(username);
        $.ajax({
            url: "checkRegistration.php",
            type: "post",
            data: {username: username, email_address: email_address},
            success: function (data) {
                var isUsed = jQuery.parseJSON(data);
                if (isUsed)
                {
                    $("#error").text("Username or Email address is already taken");

                } else
                {
                     
                    $("#error").text("");
                    if (password === confirm_password)
                    {
                        $("#form").submit();
//                        $("#error2").text("");
//                        $.ajax({
//                            url: "login_session.php",
//                            type: "post",
//                            data: {username: username},
//                            success: function (data) {
//                                var logged_in = jQuery.parseJSON(data);
//                                
//                                if (logged_in)
//                                {
//
//                                    $("#form").submit();
//
//                                } else
//                                {
//
//                                    $("#error").text("fail to login, try again");
//
//                                }
//                            }, error: function ()
//                            {
//                                alert("error");
//                            }
//                        });
                    } else
                    {
                        $("#error2").text("Password is not match");
                    }

                }
            }, error: function ()
            {
                alert("error");
            }

        });







    });

});

