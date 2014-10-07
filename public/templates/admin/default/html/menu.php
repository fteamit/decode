<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
    <div class="sidebar-inner">
        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
        <ul class="navi">
            <!-- Use the class nred, ngreen, nblue, nlightblue, nviolet or norange to add background color. You need to use this in <li> tag. -->

            <li class="nred current"><a href="#"><i class="fa fa-desktop"></i> Dashboard</a></li>
            <!-- Menu with sub menu -->
            <li class="has_submenu nlightblue">
                <a href="#">
                    <!-- Menu name with icon -->
                    <i class="fa fa-th"></i> Bookings 
                    <!-- Icon for dropdown -->
                    <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                </a>
                <ul>
                    <li><a href="#">View all bookings</a></li>
                    <li><a href="#">Add new booking</a></li>
                </ul>
            </li>
            <li class="has_submenu nlightblue">
                <a href="#">
                    <!-- Menu name with icon -->
                    <i class="fa fa-th"></i> Games 
                    <!-- Icon for dropdown -->
                    <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                </a>
                <ul>
                    <li><a href="#">View all games</a></li>
                    <li><a href="#">Add new game</a></li>
                </ul>
            </li>
            <li class="has_submenu nlightblue">
                <a href="#">
                    <!-- Menu name with icon -->
                    <i class="fa fa-th"></i> Prices 
                    <!-- Icon for dropdown -->
                    <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                </a>
                <ul>
                    <li><a href="<?php echo $this->baseUrl('admin/prices'); ?>">View all prices</a></li>
                    <li><a href="<?php echo $this->baseUrl('admin/prices/add'); ?>">Add new price</a></li>
                </ul>
            </li>
            <li class="has_submenu nlightblue">
                <a href="#">
                    <!-- Menu name with icon -->
                    <i class="fa fa-th"></i> Times
                    <!-- Icon for dropdown -->
                    <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                </a>
                <ul>
                    <li><a href="<?php echo $this->baseUrl('admin/times'); ?>">View all times</a></li>
                    <li><a href="#">Add new time</a></li>
                </ul>
            </li>
            <li class="has_submenu nlightblue">
                <a href="#">
                    <!-- Menu name with icon -->
                    <i class="fa fa-th"></i> FAQs 
                    <!-- Icon for dropdown -->
                    <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                </a>
                <ul>
                    <li><a href="<?php echo $this->baseUrl('admin/faqs') ?>">View all FAQs</a></li>
                    <li><a href="<?php echo $this->baseUrl('admin/faqs/save')?>">Add new FAQ</a></li>
                </ul>
            </li>
            <li class="has_submenu nlightblue">
                <a href="#">
                    <!-- Menu name with icon -->
                    <i class="fa fa-th"></i> Users 
                    <!-- Icon for dropdown -->
                    <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                </a>
                <ul>
                    <li><a href="#">View all users</a></li>
                    <li><a href="#">Add new user</a></li>
                </ul>
            </li>
        </ul>
        <!--/ Sidebar navigation -->

        <!-- Date -->
        <div class="sidebar-widget">
            <div id="todaydate"></div>
        </div>
    </div>
</div>
<!-- Sidebar ends -->