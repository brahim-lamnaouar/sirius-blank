//import './mopro/theme'


    (function($){
        $(function(){

            let app_drawer_toggle = $('.sidebar-drawer')
            let sidebar_menu = $('.app-sidebar-panel')
            let content_container = $('.o_main_content')

            app_drawer_toggle.click(function () {
                sidebar_menu.toggleClass('visible')
                content_container.toggleClass('navbar-visible')

            })

        }); // end of document ready
    })(jQuery); // end of jQuery name space

