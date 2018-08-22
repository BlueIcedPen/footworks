<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button><!--//nav-toggle-->
    </div><!--//navbar-header-->            
    <div class="navbar-collapse collapse" id="navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="<?php echo e(Request::path() == '/' ? 'active nav-item' : 'nav-item'); ?>"><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li class="<?php echo e(Request::path() == 'salvation' ? 'active nav-item' : 'nav-item'); ?>"><a href="<?php echo e(url('salvation')); ?>">Salvation</a></li>
            <li class="<?php echo e(Request::path() == 'missions' ? 'active nav-item dropdown' : 'nav-item dropdown'); ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Missions <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="news.html">News List</a></li>
                    <li><a href="news-single.html">Single News (with image)</a></li>   
                    <li><a href="news-single-2.html">Single News (with video)</a></li>          
                </ul>
            </li>
            <li class="<?php echo e(Request::path() == 'give' ? 'active nav-item' : 'nav-item'); ?>"><a href="<?php echo e(url('/give')); ?>">Give</a></li>
            <li class="<?php echo e(Request::path() == 'training' ? 'active nav-item' : 'nav-item'); ?>"><a href="<?php echo e(url('/training')); ?>">Training</a></li>
            <li class="<?php echo e(Request::path() == 'events' ? 'active nav-item' : 'nav-item'); ?>"><a href="<?php echo e(url('/events')); ?>">Events</a></li>
            <li class="<?php echo e(Request::path() == 'contact' ? 'active nav-item' : 'nav-item'); ?>"><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
        </ul><!--//nav-->
    </div><!--//navabr-collapse-->
</div><!--//container-->