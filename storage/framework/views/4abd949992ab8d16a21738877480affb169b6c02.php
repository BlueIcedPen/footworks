<!doctype html>
<html>

    <head>
        <?php echo $__env->make('pages.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>

    <body class="home-page">

        <div class="wrapper">
            <header class="header">
                <?php echo $__env->make('pages.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </header>

            <nav class="main-nav" role="navigation">
                <?php echo $__env->make('pages.includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </nav>

            <div id="main" class="content container">

                    <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>
        <footer class="footer">
            <?php echo $__env->make('pages.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </footer>
        <?php echo $__env->make('pages.includes.config', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>

</html>