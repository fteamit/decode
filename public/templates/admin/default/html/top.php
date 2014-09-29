<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">Metro <span class="bold">King</span></a>
        </div>
        <!-- Site name for smallar screens -->
        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">     
            <!-- Links -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">            
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img src="<?php echo $this->imgUrl ?>/user.jpg" alt="" class="nav-user-pic img-responsive" /> Admin <b class="caret"></b>  
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                        <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>