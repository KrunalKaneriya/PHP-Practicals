$(document).ready(function() {
    $("#hide").click(function() {
        $(".hideandshow").hide(500);
    });
    $("#show").click(function() {
        $(".hideandshow").show(500);
    });

    $("#hideshowtoggle").click(function() {
        $(".hideandshow").toggle(500);
    });

    $("#fadein").click(function() {
        $(".box").fadeIn(500);
    });

    $("#fadeout").click(function() {
        $(".box").fadeOut(500);
    });

    $("#fadetoggle").click(function(){
        $(".box").fadeToggle(500);
    });

    $("#fadeto").click(function() {
        $(".box").fadeTo("slow",0.50);
    });

    $("#slideup").click(function() {
        $("#panel").slideUp(500);
    });

    $("#slidedown").click(function() {
        $("#panel").slideDown(500);
    });

    $("#slidetoggle").click(function() {
        $("#panel").slideToggle(500);
    });

    $("#animate").click(function() {
        $("#container-box").animate({
            left:'800px',
            opacity:'0.6',
            fontSize:'50px'
        });

        $("#container-box").animate({
            left:'500px',
            opacity:1,
            fontSize:'40px'
        });
    });

    $("#start").click(function() {
        $("#container-box2").animate({left:'500px'},3000);

        $("#container-box2").animate({fontSize:'50px'},3000);

        $("#container-box2").animate({height:'-=130px'},3000);
        $("#container-box2").animate({top:'50px'},3000);
    });

    $("#stop").click(function() {
        $("#container-box2").stop();
    });

    $("#stopall").click(function() {
        $("#container-box2").stop(true);
    });

    $("#stopbutfinish").click(function() {
        $("#container-box2").stop(true,true);
    });
});