$(document).ready(function () {
    var post_id = $("#post_id").val();
    var user_id = $("#user_id").val();
    
    $.ajax({
        url: "like.php",
        type: "post",
        data: {post_id: post_id,user_id:user_id},
        success: function (data) {
            var liked = jQuery.parseJSON(data);
            
            if (!liked)
            {
                $("#like").click(function () {
                    
                    $.ajax({
                        url: "insertLike.php",
                        type: "post",
                        data: {post_id: post_id, user_id:user_id},
                        success: function (data) {
                            var like = jQuery.parseJSON(data);
                            $("#like_count").text(like);
                            $("#like").css("pointer-events", "none");
                            $("#error").text("Liked");
                            $("#error").css("color","blue");
                                            
                        }, error: function ()
                        {
                            alert("error");
                        }
                    });
                });

            } else
            {
                $("#like").css("pointer-events", "none");
                $("#error").text("Liked");
                $("#error").css("color","blue");
            }
        }, error: function ()
        {
            alert("error");
        }
    });

});