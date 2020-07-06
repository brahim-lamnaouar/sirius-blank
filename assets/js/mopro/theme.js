
import 'materialize-css'
import 'wow.js'


(function($){
    $(function(){

        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $(".dropdown-trigger").dropdown();

        let dropdown_container = $('li.dropdown-container')
        let dropdown_class = 'hover'
        dropdown_container.click(function () {
            dropdown_container.not(this).removeClass(dropdown_class)
            $(this).toggleClass(dropdown_class)
        })
        $(document).mouseup(function(e)
        {
            // if the target of the click isn't the container nor a descendant of the container
            if (!dropdown_container.is(e.target) && dropdown_container.has(e.target).length === 0)
            {
                dropdown_container.removeClass(dropdown_class)
            }
        });

        new WOW().init();

        $(document).scroll(function() {
            const top = $(document).scrollTop();
            if (top > 150){
                $(".main-nav").addClass("fixed-nav");
            }else {
                $(".main-nav").removeClass("fixed-nav");
            }
        });



    }); // end of document ready
})(jQuery); // end of jQuery name space

