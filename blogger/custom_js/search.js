$(document).ready(function () {
    $("#go").click(function () {
        var base = $('select').val();
        var search = $("#search").val();
        console.log(base);
        console.log(search);
        $.ajax({
            url: "searchPost.php",
            type: "post",
            data: {base: base, search: search},
            success: function (data) {
                var posts = jQuery.parseJSON(data);
                $("#result").html('');
                for (var i = 0; i < posts.length; i++) {
                    $("#result").append(
                            '<div class="col-md-4 cate-grid grid">\n\
<figure>\n\
<img src="' + posts[i]['Image'] + '" alt="">\n\
<figcaption>\n\
<h4>' + posts[i]['Title'] + '</h4>\n\
<a class="example-image-link" href="single.php?post_id=' + posts[i]['Post_id'] + '">VIEW</a>\n\
</figcaption>\n\
</figure>\n\
</div>'

                            );
                }


            }, error: function ()
            {
                alert("error");
            }
        });

    });
    $("select").on('change',function(){
        var base = $(this).val();
        if(base=="Date")
        {
            $("#search").attr("placeholder","YYYY-MM-DD");
        }
       console.log(base); 
    });

});