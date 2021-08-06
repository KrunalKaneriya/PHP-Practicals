$(document).ready(function () {
    
//Hide And Show Functions
    $("#hideandshow h3").click(function() {
        $(this).hide(500);
    });
    $("#hideandshow #showbutton").click(function() {
        $("#hideandshow h3").show(500);
    });
    $("#hideandshow #togglebutton").click(function() {
        $("#hideandshow h3").toggle(500);
    });
    

//Fade In Fade Out Fade Toggle Fade To Functions

    $("#fadein").click(function() {
        $("#container1").fadeIn();
    });

    $("#fadeout").click(function() {
        $("#container2").fadeOut();
    });

    $("#fadetoggle").click(function() {


        $("#container1").fadeToggle();
        $("#container2").fadeToggle();
        $("#container3").fadeToggle();
        $("#container4").fadeToggle();
    });

    $("#fadeto").click(function() {
        $("#container1").fadeTo("slow",0.88);
        $("#container2").fadeTo(2000,0.10);
        $("#container3").fadeTo("fast",0.58);
        $("#container4").fadeTo(5000,0.30);
    });

//Slide up Slide down Slide Toggle functions
    $("#slideup").click(function() {
        $("#slideuppanel").slideUp();
    });

    $("#slidedown").click(function() {
        $("#slidedownpanel").slideDown();
    });

    $("#slidetoggle").click(function() {
        $("#slidetogglepanel").slideToggle(500);
    });

//Animation Functions

    $("#animatecontainer1").click(function() {
        $(this).animate({
            right: "10px"
        });
        $(this).animate({
            left:"20px"
    
        });
        
    });
});
