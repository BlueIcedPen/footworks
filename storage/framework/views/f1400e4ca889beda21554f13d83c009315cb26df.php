<!-- ******HEADER****** --> 
<header class="header">  
    <div class="top-bar">
        <div class="container">              
            <ul class="social-icons col-md-4 col-sm-6 col-xs-12 hidden-xs">
                <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>         
                <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>             
            </ul><!--//social-icons-->
            <div class="col-md-8 col-xs-12 pull-right">
            <form class="col-md-7 col-xs-7 col-lg-6 search-form" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search the site...">
                </div>
                <button type="submit" class="btn btn-theme">Go</button>
            </form>

            <ul class="col-md-5 col-xs-5 col-lg-6 auth pull-right right" role="search">
                <li class="dropdown">
                    <a id="signin" class="btn btn-auth dropdown-toggle pull-right" href="#" data-toggle="dropdown">Sign In</a>
                    <div class="dropdown-menu sign-drop">
                        <div class="card">
                        <article class="card-body">
                        <a href="" class="float-right btn btn-outline-primary">Sign up</a>
                        <h4 class="card-title mb-4 mt-1">Sign in</h4>
                            <form>
                            <div class="form-group">
                                <label>Your email</label>
                                <input name="" class="form-control" placeholder="Email" type="email" required>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <a class="float-right" href="#">Forgot?</a>
                                <label>Your password</label>
                                <input class="form-control" placeholder="******" type="password" required>
                            </div> <!-- form-group// --> 
                            <div class="form-group"> 
                            <div class="checkbox">
                            <label> <input type="checkbox"> Save password </label>
                            </div> <!-- checkbox .// -->
                            </div> <!-- form-group// -->  
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                            </div> <!-- form-group// -->                                                           
                        </form>
                        </article>
                        </div> <!-- card.// -->
                        
                    </div>
                </li>
                <li>
                    <a id="register" class="btn btn-auth pull-right" href="#">Register</a>   
                </il>
            </ul>
        </div>
        </div>      
    </div><!--//to-bar-->
    <div class="header-main container">
        <h1 class="logo col-md-4 col-sm-4">
            <a href="<?php echo e(URL('/')); ?>"><img id="logo" src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo"></a>
        </h1><!--//logo-->           
        <div class="info col-md-8 col-sm-8">
            <ul class="menu-top navbar-right hidden-xs">
                <li class="divider"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li class="divider"><a href="<?php echo e(url('/faq')); ?>">FAQ</a></li>
                <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
            </ul><!--//menu-top-->
            <br />
            <div class="contact pull-right">
                <p class="phone"><i class="fa fa-phone"></i>Call us today (+233) 20 07  9 5215</p> 
                <p class="email"><i class="fa fa-envelope"></i><a href="#">info@footworksinternational.com</a></p>
            </div><!--//contact-->
        </div><!--//info-->
    </div><!--//header-main-->
</header><!--//header-->
