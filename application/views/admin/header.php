<!--Double navigation-->
<header style="height: auto;" >
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav fixed sn-bg-2 custom-scrollbar ">
        <!-- Logo -->
        <li>
            <div class="logo-wrapper waves-light">
                <a href="<?php echo base_url() ?>dashboard"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
            </div>
        </li>
        <!--/. Logo -->
        <!--Social-->
        <li>
            <ul class="social">
                <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
            </ul>
        </li>
        <!--/Social-->
        <!--Search Form-->
        <li>
            <form class="search-form" role="search">
                <div class="form-group waves-light">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </li>
        <!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> Student<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>student" class="waves-effect">Student Register</a>
                    </li>
                    <li><a href="#" class="waves-effect">Student List</a>
                </li>
            </ul>
        </div>
    </li>
    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user-secret"></i> Teacher<i class="fa fa-angle-down rotate-icon"></i></a>
    <div class="collapsible-body">
        <ul>
            <li><a href="#" class="waves-effect">Add Teacher</a>
        </li>
        
    </ul>
</div>
</li>
<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-book"></i> Library<i class="fa fa-angle-down rotate-icon"></i></a>
<div class="collapsible-body">
<ul>
    <li><a href="#" class="waves-effect">Add Book</a>
</li>
<li><a href="#" class="waves-effect">List Book</a>
</li>
</ul>
</div>
</li>
<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-pencil-square-o"></i> Examination<i class="fa fa-angle-down rotate-icon"></i></a>
<div class="collapsible-body">
<ul>
<li><a href="#" class="waves-effect">New Examination</a>
</li>
<li><a href="#" class="waves-effect">List Examination</a>
</li>
</ul>
</div>
</li>
<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
<div class="collapsible-body">
<ul>
<li><a href="#" class="waves-effect">Introduction</a>
</li>
</ul>
</div>
</li>
<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact me<i class="fa fa-angle-down rotate-icon"></i></a>
<div class="collapsible-body">
<ul>
<li><a href="#" class="waves-effect">FAQ</a>
</li>
<li><a href="#" class="waves-effect">Write a message</a>
</li>
</ul>
</div>
</li>
</ul>
</li>
<!--/. Side navigation links -->
<div class="sidenav-bg mask-strong"></div>
</ul>
<!--/. Sidebar navigation -->
<!-- Navbar -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav color-block blue-gradient z-depth-2">
<!-- SideNav slide-out button -->
<div class="float-left">
<a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
</div>
<!-- Breadcrumb-->
<div class="breadcrumb-dn mr-auto">
<p>ACXSMS - A Complete School Management System</p>
</div>
<ul class="nav navbar-nav nav-flex-icons ml-auto">
<li class="nav-item">
<a class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
User
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="#">Profile</a>
<a class="dropdown-item" href="<?php echo base_url() ?>">Logout</a>
</div>
</li>
</ul>
</nav>
<!-- /.Navbar -->
</header>
<!--/.Double navigation-->
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="assets/plugin/js/mdb.min.js"></script>
<script>
// SideNav Initialization
$(".button-collapse").sideNav();
</script>