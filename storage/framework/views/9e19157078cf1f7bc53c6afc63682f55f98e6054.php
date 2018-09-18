<?php $__env->startSection('content'); ?>

<div id="fb-root"></div>


<!-- ******CONTENT****** --> 
<div class="content container">
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">Contact</h1>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="index-2.html">Home</a><i class="fa fa-angle-right"></i></li>
                    <li class="current">Contact</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header> 
        <div class="page-content">
            <div class="row">
                <article class="contact-form col-md-8 col-sm-7  page-row">                            
                    <h2 class="title">We’d love to hear from you</h2>
                    <p>Send us a message and we'd get back to you in a bit.</p>
                    <form id="contact-form" name="contact-form">
                        <div class="form-group firstname">
                            <label for="firstname">First Name<span class="required">*</span></label>
                            <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Enter your first name">
                        </div><!--//form-group-->
                        <div class="form-group lastname">
                            <label for="lastname">Last Name<span class="required">*</span></label>
                            <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Enter your name last name">
                        </div><!--//form-group-->
                        <div class="form-group email">
                            <label for="email">Email<span class="required">*</span></label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="Enter your email">
                        </div><!--//form-group-->
                        <div class="form-group phone">
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" type="tel" class="form-control" placeholder="Enter your contact number... e.g (233) 20 079 5215, 0200795215">
                        </div><!--//form-group-->
                        <div class="form-group subject">
                                <label for="subject">Subject<span class="required">*</span></label>
                                <input id="subject" name="subject" type="text" class="form-control" placeholder="Enter message subject">
                            </div><!--//form-group-->
                        <div class="form-group message">
                            <label for="message">Message<span class="required">*</span></label>
                            <textarea id="message" name="message" class="form-control" rows="6" placeholder="Enter your message here..."></textarea>
                        </div><!--//form-group-->
                        <button type="submit" class="btn btn-theme">Send message</button>
                    </form>                  
                </article><!--//contact-form-->
                <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                    <section class="widget contact-sidebar has-divider fb">
                         
                        <iframe href="https://www.facebook.com/footworksinternational" data-href="https://www.facebook.com/footworksinternational" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffootworksinternational%2F&tabs=timeline%2C%20events&width=262&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=153363994754355" width="262" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>                    
                    <section class="widget contact-sidebar has-divider">
                        <h3 class="title">Postal Address</h3>
                        <p class="adr">
                            <span class="adr-group">       
                                <span class="street-address">Footworks International</span><br>
                                <span class="region">U. P. O. Box 193, </span><br>
                                <span class="postal-code">Kumasi | Ghana</span><br>
                                <span class="country-name">GH</span>
                            </span>
                        </p>
                    </section><!--//widget-->     
                    
                    <section class="widget contact-sidebar row">
                        <h3 class="title">All Enquiries</h3>
                        <p class="tel col-md-12 col-sm-4"><i class="fa fa-phone"></i><br/>(+233) 20 079 5215 | <br/>(+233) 32 206 3754 | <br/>(+233) 26 110 6157 | <br/>(+14) 05 200 3741 | <br/>(+22) 89 173 5093</p>
                        <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="#">info@footworksinternational.org</a></p> 
                    </section>   
                </aside><!--//page-sidebar-->
            </div><!--//page-row-->
            <div class="page-row">
                <article class="map-section">
                    <h3 class="title">How to find us</h3>
                    <div class="gmap-wrapper" id="map">
                        <!--//You need to embed your own google map below-->
                        <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.985798395094!2d-2.6051732483185885!3d51.458417179527075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718ddbdfd292fb%3A0x2f0b60f89b4b6d56!2sFootworks+International!5e0!3m2!1sen!2suk!4v1469704137699" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div><!--//gmap-wrapper-->
                </article><!--//map-->
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div><!--//page-wrapper--> 
</div><!--//content-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>