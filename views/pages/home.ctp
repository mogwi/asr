<div class="grid_12">


					<div id="promo_01" class="promo-container primary-promo-container">

						<ul class="promo-navigation clean"></ul><!-- //promo-navigation (auto generated) -->

						<ul class="promos clean">
							<li><a href="#"><img src="images/promos/promo01.jpg" alt="Promo" /></a></li>
							<li class="hidden"> <a href="#"> <?php echo $this->Html->image('promos/promo02.jpg', array('alt'=>'Promo', 'width'=>'940', 'height'=>'400')); ?> </a> </li>
							<li class="hidden"> <a href="#"> <?php echo $this->Html->image('promos/promo03.jpg', array('alt'=>'Promo', 'width'=>'940', 'height'=>'400')); ?> </a> </li>
						</ul><!-- // promo list -->

					</div><!-- //promo-container -->
					<script type="text/javascript">
						jQuery(function($){

							// Full options at http://jquery.malsup.com/cycle/options.html
							$('#promo_01 .promos').cycle({
								fx: 		'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
								pager: 		'#promo_01 .promo-navigation',
								pause: 		1
							});

						});
					</script>


				</div><!--//grid_12-->


                <div class="clear"></div><!--//clear columns-->



                <div class="grid_8">
                    <h2>Welcome to Clearly Modern by Cudazi</h2>
                    <p>Clearly Modern is a clean, modern HTML/CSS theme by Cudazi that is extremely flexible and easy to use. It includes tons of sample formatting with lightboxes, sliders and much more!</p>

                    <div class="grid_4 alpha">
                    	<ul class="iconlist clean">
                        	<li class="clearfix">
                            	<?php echo $this->Html->image('icons/exchange32.png', array('alt'=>'Icon', 'class'=>'left')); ?>
                            	<h5><a href="#">Fast Turnaround</a></h5>
                                <p>Easy to set up, gets you started quickly</p>
                            </li>
                            <li class="clearfix">
                            	<?php echo $this->Html->image('icons/star32.png', array('alt'=>'Icon', 'class'=>'left')); ?>
                            	<h5>Sure to be a favorite</h5>
                                <p>Impress your visitors!</p>
                            </li>
                            <li class="clearfix">
                            	<?php echo $this->Html->image('icons/check32.png', array('alt'=>'Icon', 'class'=>'left')); ?>
                            	<h5>Quality Coding and Validation</h5>
                                <p>Well thought out with room to grow</p>
                            </li>
                        </ul>
                    </div><!-- grid_4 alpha (nested column start)-->

                    <div class="grid_4 omega">
                    	<ul class="iconlist clean">
                        	<li class="clearfix">
                            	<?php echo $this->Html->image('icons/moneyreceipt32.png', array('alt'=>'Icon', 'class'=>'left')); ?>
                            	<h5>Value Priced</h5>
                                <p>You can't beat the price!</p>
                            </li>
                            <li class="clearfix">
                            	<?php echo $this->Html->image('icons/plug32.png', array('alt'=>'Icon', 'class'=>'left')); ?>
                            	<h5>jQuery Plugin Ready!</h5>
                                <p>Add any jQuery plugin and go</p>
                            </li>
                            <li class="clearfix">
                            	<?php echo $this->Html->image('icons/wordpress32.png', array('alt'=>'Icon', 'class'=>'left')); ?>
                            	<h5>Coming to WordPress</h5>
                                <p>Watch for the WordPress version</p>
                            </li>
                        </ul>
                    </div><!-- grid_4 omega (nested column end)-->

                </div><!--//grid_8-->



                <div class="grid_4">

                    <div class="widget">
                    	<h3 class="widgettitle">Built on the Grid</h3>
                        <p>Nearly unlimited layout options since this is built on the 960.gs grid framework. Easily change column or gallery widths with minimal effort!</p>
                    </div>

                    <div class="widget">
                    	<h3 class="widgettitle">Features, Features, Features</h3>
                        <div id="promo_44">
							<ul>
                            	<!-- specify width/height when using HTML to help out older browsers slide HTML content -->
								<li class="clearfix" style="width:300px; height:55px;">
                                	<p><strong>jQuery Enhanced</strong><br />Take advantage of the many jQuery plugins out there already, this theme can handle it!</p>
                                </li>
                                <li class="clearfix hidden" style="width:300px; height:55px;">
                                	<p><strong>Lightbox Included</strong><br />I've included an easy to use, flexible lightbox to showcase your work on the site.</p>
                                </li>
                                <li class="clearfix hidden" style="width:300px; height:55px;">
                                	<p><strong>Tons of Sample Formatting</strong><br />Explore the site to see all the sample formatting included with your download.</p>
                                </li>
                                <li class="clearfix hidden" style="width:300px; height:55px;">
                                	<p><strong>Lightbox Included</strong><br />I've included an easy to use, flexible lightbox to showcase your work on the site.</p>
                                </li>
							</ul>
							<p><a href="#" class="next">View Next Feature &raquo;</a></p>
						</div>
						<script type="text/javascript">
							jQuery(function($){ $("#promo_44 UL").cycle({ /* add options here */ fx:'scrollUp',next:'#promo_44 .next', timeout:0, speed:500 }); });
						</script>
                    </div>


                </div><!--//grid_4-->



                <div class="clear"></div><!--//clear columns-->

                <div class="grid_12">
                    <p class="quotebox">
                        <small class="right">John Marks - <a href="#">FakeCo</a></small>
                        We were lost until we discovered your services five years ago and haven’t looked back, thanks for everything!
                    </p>
                </div><!--//grid_12-->
