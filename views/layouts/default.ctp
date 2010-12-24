<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->element('head'); ?>
</head>
<body>

	<div id="outer" class="clearfix">


		<?php echo $this->element('topbar'); ?>


		<div id="header" class="clearfix">
        	<div class="container_12">
           		<div class="grid_12" id="header-container">

                    <div id="logo">
                        <h1> <a href="index.html" title="Go to the home page"> <?php echo $this->Html->image('logo-trans.png', array('alt'=>'Logo')); ?> </a> </h1>
                    </div><!-- //logo -->

                    <?php echo $this->element('main-nav'); ?>

            	</div><!-- //grid_12 -->
			</div><!-- //container_12 -->
        </div><!-- //header -->


        <div id="main" class="clearfix">
            <div class="container_12">

				<?php echo $content_for_layout; ?>

            </div><!-- //container_12 -->
        </div><!-- //main -->


        <div id="footer" class="clearfix">
        	<div class="container_12">

                <?php echo $this->element('footer'); ?>

            </div><!--//container_12-->
        </div><!-- //footer -->


        <div id="footer-bottom" class="clearfix">
            <div class="container_12">
            	<div class="grid_12">
                    <p class="left">&copy; 2010 - Theme created by <a href="http://cudazi.com/" title="Curt Ziegler / Cudazi Web Design Portfolio ">Cudazi</a> for <a href="http://themeforest.net/user/cudazi/?ref=cudazi" title="More WordPress and HTML themes by Cudazi on ThemeForest">ThemeForest.net</a></p>
                    <p class="right"><a href="#" class="scroll-top" title="Back to the Top">TOP</a></p>
                </div>
            </div><!--//container_12-->
        </div>


	</div><!-- //outer -->

	<!-- insert analytics -->
</body>
</html>
