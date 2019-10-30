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
            <li class="<?php echo e(Request::path() == 'missions' ? 'active nav-item dropdown' : 'nav-item dropdown'); ?>"><a href="<?php echo e(url('/missions')); ?>">Missions</a>
                
            </li>
            <li class="<?php echo e(Request::path() == 'give' ? 'active nav-item' : 'nav-item'); ?>"><a href="<?php echo e(url('/give')); ?>">Give</a></li>
            <li class="<?php echo e(Request::path() == 'training' ? 'active nav-item' : 'nav-item'); ?>"><a href="<?php echo e(url('/training')); ?>">Training</a></li>
            <li class="<?php echo e(Request::path() == 'events' ? 'active nav-item' : 'nav-item'); ?>"><a href="<?php echo e(url('/events')); ?>">Events</a></li>
            <li class="<?php echo e(Request::path() == 'contact' ? 'active nav-item' : 'nav-item'); ?>"><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
        </ul><!--//nav-->
    </div><!--//navabr-collapse-->
</div><!--//container-->