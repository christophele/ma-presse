$(function() {
    $(".panel-default").hide();
    $(".hide-rss").hide();
    $("body").css("background-color", "white");

    $("#btn-register").click(function() {
        $("#register").show();
        $("#login").hide();
    });

    $("#btn-login").click(function() {
        $("#login").show();
        $("#register").hide();
    });

    $("#login-now").click(function() {
        $("#register").hide();
        $("#login").show();
    });

    $("#register-now").click(function() {
        $("#login").hide();
        $("#register").show();
    });

    $(".dropdown-menu li a span").click(function(e){
        e.preventDefault();
        var $this = $(this).parent().find(".hide-rss");
        $(".hide-rss").not($this).hide();
        $this.toggle();
    });

    // $(".panel").click(function(e){
    //     e.preventDefault();
    //     var $this = $(this).parent().find(".hide-rss");
    //     $(".hide-rss").not($this).hide();
    //     $this.toggle();
    // });

    // RSS SPORT
    $("#express-sport").click(function () {
        $("#rss-express-sport").show();
    });
    $("#sport24-sport").click(function () {
        $("#rss-sport24-sport").show();
    });
    $("#le-telegramme-sport").click(function () {
        $("#rss-le-telegramme-sport").show();
    });
    $("#le-parisien-sport").click(function () {
        $("#rss-le-parisien-sport").show();
    });

    // RSS POLITIQUE
    $("#express-politique").click(function () {
        $("#rss-express-politique").show();
    });
    $("#le-parisien-politique").click(function () {
        $("#rss-le-parisien-politique").show();
    });
    $("#la-croix-politique").click(function () {
        $("#rss-la-croix-politique").show();
    });
    $("#liberation-politique").click(function () {
        $("#rss-liberation-politique").show();
    });
    $("#le-figaro-politique").click(function () {
        $("#rss-le-figaro-politique").show();
    });

    // RSS TECHNOLOGIE
    $("#le-monde-technologie").click(function () {
        $("#rss-le-monde-technologie").show();
    });
    $("#le-figaro-technologie").click(function () {
        $("#rss-le-figaro-technologie").show();
    });
    $("#le-parisien-technologie").click(function () {
        $("#rss-le-parisien-technologie").show();
    });

    // RSS ECONOMIE
    $("#le-monde-economie").click(function () {
        $("#rss-le-monde-economie").show();
    });
    $("#le-figaro-economie").click(function () {
        $("#rss-le-figaro-economie").show();
    });
    $("#le-parisien-economie").click(function () {
        $("#rss-le-parisien-economie").show();
    });
    $("#la-croix-economie").click(function () {
        $("#rss-la-croix-economie").show();
    });
    $("#le-telegramme-economie").click(function () {
        $("#rss-le-telegramme-economie").show();
    });
});
