/**
 * Created by jerome.roethlisberge on 16.04.2015.
 */


$(document).ready(function () {
    $("#menu-close").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").removeClass("slideInDown");
        $("#sidebar-wrapper").addClass("slideOutUp");


    });
// Opens the sidebar menu
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").removeClass("slideOutLeft slideOutUp");
        $("#sidebar-wrapper").addClass("slideInDown");
    });
// Scrolls to the selected menu item on the page
    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

});


