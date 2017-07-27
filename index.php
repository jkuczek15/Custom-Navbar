<html>
    <head>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet/less" type="text/less" href="./assets/css/menubar.less" />
        <!-- Javascript -->
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/less.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-custom">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Menu</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a class="item" href="#">Link 1 <span class="sr-only"></span></a></li>
                    <li class="active"><a class="item" href="#">Link 2 <span class="sr-only"></span></a></li>
                    <li class="active"><a class="item" href="#">Link 3 <span class="sr-only"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nested Left <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-submenu">
                                <a class="menu" tabindex="-1" href="#">1st level dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="item" tabindex="-1" href="#">2nd level</a></li>
                                    <li><a class="item" tabindex="-1" href="#">2nd level</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="menu" href="#">Another dropdown <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="item" href="#">3rd level</a></li>
                                            <li><a class="item" href="#">3rd level</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li><a class="item" href="#"><i class="fa fa-key"></i> Another Link</a></li>
                        </ul>
                    </li>
                </ul>
                 <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nested Right <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-submenu">
                                <a class="menu" tabindex="-1" href="#">1st level dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="item" tabindex="-1" href="#">2nd level</a></li>
                                    <li><a class="item" tabindex="-1" href="#">2nd level</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="menu" href="#">Another dropdown <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="item" href="#">3rd level</a></li>
                                            <li><a class="item" href="#">3rd level</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li><a class="item" href="#"><i class="fa fa-key"></i> Another Link</a></li>
                        </ul>
                    </li>
                 </ul>
            </div>
        </nav>
    </body>
</html>

<script>
$(document).ready(function() {
    $('.dropdown-submenu a.menu').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});

$('.nav a.item').click(function () {
    $('.navbar-collapse').collapse('hide');
});
</script>