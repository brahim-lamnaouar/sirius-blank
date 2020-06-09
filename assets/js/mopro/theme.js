
import 'materialize-css'
import 'waypoints/lib/jquery.waypoints'
import 'wow.js'
import './anime'


(function($){
    $(function(){

        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $(".dropdown-trigger").dropdown();



        new WOW().init();

        $(document).scroll(function() {
            const top = $(document).scrollTop();
            if (top > 350){
                $(".main-nav").addClass("fixed-nav");
            }else {
                $(".main-nav").removeClass("fixed-nav");
            }
        });



    }); // end of document ready
})(jQuery); // end of jQuery name space

