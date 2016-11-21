console.log(monkey.blogName);
console.log(monkey.rest_url);
console.log(monkey.security_token);

jQuery(document).ready(function($){

    var url = monkey.rest_url;
    url += "wp/v2/posts";
    $.ajax({
        url: url,
        data: {
          filter: {
            'posts_per_page': 5
          },
        },
        method: 'GET',
    }).done(function(result) {
        $(".loader").show();
        console.log(result);
       // buildArticle(result);
    }).fail(function(err) {
        throw err;
    });


    $(".site-header").find("label").hide();
    console.log("hello, this is javascript");

    var finder = $(".page-404").find(".submit-search-page");
    console.log(finder);

    finder.hide();

    var search = $(".page-404").find(".search-page");
    $(".page-404").find("input").attr('placeholder', 'Type and hit enter...');
    search.show();


    $(".search-submit").on("click", function(e) {
        //e.preventDefault();
        //console.log("search label is: "+ $('#search').attr('value'));

        if ($(".site-header").find("label").is(":visible")) {
            if ($('#search').attr('value') == "") {
                e.preventDefault();
                $(".site-header").find("label").toggle();
                search.show();
            }
        } else {
            e.preventDefault();
            $(".site-header").find("label").toggle();
            search.show();
        }



    })

})
