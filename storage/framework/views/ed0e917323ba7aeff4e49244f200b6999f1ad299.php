<!-- *****CONFIGURE STYLE****** -->  
<div class="config-wrapper hidden-xs">
    <div class="config-wrapper-inner">
        <a id="config-trigger" class="config-trigger" href="#"><i class="fa fa-cog"></i></a>
        <div id="config-panel" class="config-panel">
            <p>Choose Colour</p>
            <ul id="color-options" class="list-unstyled list-inline">
                <li class="default active" ><a data-style="<?php echo e(asset('css/styles.css')); ?>" data-logo="<?php echo e(asset('images/logo.png')); ?>" href="#"></a></li>
                <li class="green"><a data-style="<?php echo e(asset('css/styles-green.css')); ?>" data-logo="<?php echo e(asset('images/logo-green.png')); ?>" href="#"></a></li>
                <li class="purple"><a data-style="<?php echo e(asset('css/styles-purple.css')); ?>" data-logo="<?php echo e(asset('images/logo-purple.png')); ?>" href="#"></a></li>
                <li class="red"><a data-style="<?php echo e(asset('css/styles-red.css')); ?>" data-logo="<?php echo e(asset('images/logo-red.png')); ?>" href="#"></a></li>
            </ul><!--//color-options-->
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//configure-panel-->
    </div><!--//config-wrapper-inner-->
</div><!--//config-wrapper-->
        
<!-- Javascript -->          
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php echo e(asset('plugins/bootstrap-hover-dropdown.min.js')); ?>"></script> 
<script type="text/javascript" src="<?php echo e(asset('plugins/back-to-top.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('plugins/jquery-placeholder/jquery.placeholder.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('plugins/pretty-photo/js/jquery.prettyPhoto.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('plugins/flexslider/jquery.flexslider-min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('plugins/jflickrfeed/jflickrfeed.min.js')); ?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>