
import 'materialize-css';


(function($){
    $(function(){

        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $(".dropdown-trigger").dropdown();


        $(document).scroll(function() {
            const top = $(document).scrollTop();
            if (top > 100){
                $(".main-nav").addClass("fixed-nav");
            }else {
                $(".main-nav").removeClass("fixed-nav");
            }
        });

    }); // end of document ready
})(jQuery); // end of jQuery name space

