$("document").ready(function () {
    $("#comment_button").click(function () {
        var comment = $("#comment").val();
        var post_id = $("#post_id").val();
        var user_id = $("#user_id").val();
        

        //excuse for the strong words
        var prohibited_words = new RegExp('asshole|freak|fuck|fucking');
        if (prohibited_words.test(comment))
        {
            $("#comment_error").text("Your comment contains some prohibited words");
            $("#comment_error").css('color', 'red');
        } else
        {
            console.log("post comment");
            $("#comment_error").text("");
            $.ajax({
                url: "insertComment.php",
                type: "post",
                data: {post_id: post_id, user_id: user_id, comment: comment},
                success: function (data) {
                    var comment = jQuery.parseJSON(data);
                    $(".response").append("<div class='media response-info'>\n\
<div class='media-left response-text-left'>\n\
<a href='#'>\n\
<img class='media-object' src='"+comment['Avatar_image']+"' alt=''/>\n\
</a>\n\
<h5>"+comment['User_name']+"</h5>\n\
</div>\n\
<div class='media-body response-text-right'>\n\
<p>"+comment['comment']+"</p>\n\
<ul>\n\
<li>"+comment['comment_date']+"</li>\n\
</ul>\n\
</div>\n\
<div class='clearfix'> </div>\n\
</div>");
                    $("#comment").val("");

                }, error: function ()
                {
                    console.log("error");
                }
            });
        }

    });
});


