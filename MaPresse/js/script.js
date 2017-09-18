$(function() {
    $(".panel-default").hide();
    $(".hide-rss").hide();
    $("body").css("background-color", "white");
    $("#user").click(function() {
        $(".panel-default").toggle();
    });
    $("#express-sport").click(function () {
        $("#rss-express-sport").show();
    });
    $("#sport24-sport").click(function () {
        $("#rss-sport24-sport").show();
    });
    $("#le-telegramme-sport").click(function () {
        $("#rss-le-telegramme").show();
    });
    $("#le-parisien-sport").click(function () {
        $("#rss-le-parisien").show();
    });

    $(".hide-rss").hide();

    $(".dropdown-menu li a span").click(function(e){
        e.preventDefault();
        var $this = $(this).parent().find(".hide-rss");
        $(".hide-rss").not($this).hide();
        $this.toggle();
    });
});
