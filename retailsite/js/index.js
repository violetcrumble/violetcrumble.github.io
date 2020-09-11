$(document).ready(function () {

    //Responsive Nav Stuff
    $("#menu_button").click(function () {
        $("nav ul").slideToggle();
    });

    $(window).resize(function () {
        var w = $(window).width();
        if (w > 1000) {
            $('nav ul').show();
        }
        else {
            $('nav ul').hide();
        }
    });

    //Home Listing Responsive Touch Slider Stuff
    mySwipe1 = new Swipe(document.getElementById('slider'));
    mySwipe2 = new Swipe(document.getElementById('slider2'));
    mySwipe3 = new Swipe(document.getElementById('slider3'));
    mySwipe4 = new Swipe(document.getElementById('slider4'));

    //Needed for page load timing issues (https://github.com/bradbirdsall/Swipe/issues/121)
    setTimeout(function () {
        mySwipe1.setup();
        mySwipe2.setup();
        mySwipe3.setup();
        mySwipe4.setup();
    }, 10);

    $("#listing_view_form_exterior").bind("click", function () {
        mySwipe1.slide(0, 1000);
        mySwipe2.slide(0, 1000);
        mySwipe3.slide(0, 1000);
        mySwipe4.slide(0, 1000);
    });

    $("#listing_view_form_interior").bind("click", function () {
        mySwipe1.slide(1, 1000);
        mySwipe2.slide(1, 1000);
        mySwipe3.slide(1, 1000);
        mySwipe4.slide(1, 1000);
    });

    $("#listing_view_form_floorplan").bind("click", function () {
        mySwipe1.slide(2, 1000);
        mySwipe2.slide(2, 1000);
        mySwipe3.slide(2, 1000);
        mySwipe4.slide(2, 1000);
    });


    //show an overlay on swipeable home listing images if the person is on a touch screen device
    if (Modernizr.touch) {
        $("section.home_listing .home_listing_overlay").css("display", "block");
    }

});