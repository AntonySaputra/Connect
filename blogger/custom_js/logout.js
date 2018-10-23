$(document).ready(function () {
    $("#logout").click(function () {
        var pathname = window.location.pathname;
        $.ajax({
            url: "logout.php",
            type: "post",
            success: function (data) {
                var logged_out = jQuery.parseJSON(data);

                if (!logged_out)
                {
                    $("#error").text("fail to logout, try again");

                } else
                {
                    if (pathname === "/blogger/user.php")
                    {
                        window.location.href = 'index.php';
                    } else {
                        location.reload();
                    }
                }
            }, error: function ()
            {
                alert("error");
            }
        });
    });
});

