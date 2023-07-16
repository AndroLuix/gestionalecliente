<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <div></div>
                <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>


            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>

                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Clienti</span>
                        </a>

                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-gem"></i>
                            <span>Fornitori</span>
                        </a>

                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-chart-line"></i>
                            <span>Preventivi</span>
                        </a>

                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-globe"></i>
                            <span>Ordini</span>
                        </a>

                    </li>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-globe"></i>
                            <span>Magazzino</span>
                        </a>

                    </li>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-globe"></i>
                            <span>Prodotti</span>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- sidebar-wrapper  -->

    <!-- page-content" -->


    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script>
        jQuery(function ($) {

            $(".sidebar-dropdown > a").click(function () {
                $(".sidebar-submenu").slideUp(200);
                if (
                    $(this)
                        .parent()
                        .hasClass("active")
                ) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .parent()
                        .removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .next(".sidebar-submenu")
                        .slideDown(200);
                    $(this)
                        .parent()
                        .addClass("active");
                }
            });

            $("#close-sidebar").click(function () {
                $(".page-wrapper").removeClass("toggled");
            });
            $("#show-sidebar").click(function () {
                $(".page-wrapper").addClass("toggled");
            });

        });
    </script>
