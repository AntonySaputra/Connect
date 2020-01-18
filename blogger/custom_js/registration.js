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

