console.log(monkey.blogName);
console.log(monkey.rest_url);
console.log(monkey.security_token);

jQuery(document).ready(function($){
    // Ajax call
    //var url = monkey.rest_url;
   // url += "wp/v2/posts";
    var url = "https://graph.facebook.com/v2.8/44589077752?fields=id%2Cname%2Cposts%7Bpicture%2Cstory%2Ccreated_time%2Cid%7D%2Cphotos&access_token=EAACEdEose0cBAJ0jHJneIcRYVeoHwYAo9ZCG4EzBY3qt0XtZCRAjjP2ivwBPvu5qkoBI5ZAujkGtx3lZBJzQVqtPMnlMx46HqvMvlUb5C5vNB7G0oh1ViU7G8SsikXDcpt9eJ9KnBTbtdZB8IIGx6by6dJLtbTRPZAVpWZCd6ZBhOAZDZD";
    $.ajax({
        url: url,
        //data: {
          //filter: {
            //'posts_per_page': 5
          //},
        //},
        method: 'GET',
    }).done(function(result) {
        $(".loader").show();
        console.log(result);
       // buildArticle(result);
    }).fail(function(err) {
        throw err;
    });


    // site search function (showing and hiding elements)

    // Header search bar
    $(".site-header").find("label").hide();
    $(".site-header").find(".search-submit").on("click", function(e) {
    console.log("this is the search in the header");
        if ($(".site-header").find("label").is(":visible")) {
            if ($('#search').attr('value') == "") {
                e.preventDefault();
                $(".site-header").find("label").toggle();
            }
        } else {
            e.preventDefault();
            $(".site-header").find("label").toggle();
        }
    })


    // Search bar in page content
    var finder = $(".page-404").find(".submit-search-page");
    //console.log(finder);
    finder.hide();
    var search = $(".page-404").find(".search-page");
    $(".page-404").find("input").attr('placeholder', 'Type and hit enter...');
    search.show();

    $(".page-404").find(".search-submit").on("click", function(e) {
            var inputValue = $(".page-404").find("input").val();
            console.log(inputValue);
            if (inputValue == "") {
                e.preventDefault();
            }
    })

    // Adventure image height

    function resizeImage () {
        var image = $('.post-two');
        var width = image.width();
        var height = width / 2;

        image.css('height', height);
    }

    // Set initial image size
    resizeImage();

    // Change image size as screen size changes
    $( window ).resize(function() {
        resizeImage();
    });


})
