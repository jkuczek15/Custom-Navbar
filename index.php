<html>
    <head>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/menubar-config.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/menubar.css">
        <!-- Javascript -->
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
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
                    <li class="active"><a href="#">Link 1 <span class="sr-only"></span></a></li>
                    <li class="active"><a href="#">Link 2 <span class="sr-only"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-bell-o"></i>Notifications <span class="badge">0</span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-fw fa-tag"></i><span class="badge">label text</span> Item 1</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i><span class="badge"> label text</span> Item 2</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i><span class="badge"> label text</span> Item 3</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i><span class="badge"> label text</span> Item 4</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-adjust"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-info-circle"></i> Personal Information</a></li>
                            <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>