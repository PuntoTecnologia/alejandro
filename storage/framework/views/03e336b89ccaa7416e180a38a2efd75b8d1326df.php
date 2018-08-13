<?php $__env->startSection('title'); ?>
	<?php echo e($product->titulo); ?> | <?php echo e($product->descripcion); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
	<?php echo $__env->make('elements.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('metakeys'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $__currentLoopData = $my_site; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<meta name="title" content="<?php echo e($element->title); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $meta_description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<meta name="description" content="<?php echo e($desc->description); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $metakeys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<meta name="keywords" content="<?php echo e($keys->key1); ?>, <?php echo e($keys->key2); ?>, <?php echo e($keys->key3); ?>, <?php echo e($keys->key4); ?>, <?php echo e($keys->key5); ?>, <?php echo e($keys->key6); ?>, <?php echo e($keys->key7); ?>, <?php echo e($keys->key8); ?>" />
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 1em;">
				<div class="col-md-3 product-price">
					  
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">RELACIONADOS</h3>
					</div>
		 <ul class="menu">
		 <?php $__currentLoopData = $relacionados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		 	<a href="/DETALLE/<?php echo e($rel->id); ?>" style="font-size: 0.9em;">
		 		<li class="item1">-
		 			<?php echo e(substr($rel->titulo, '0', '18')); ?>

		 		</li>	
		 	</a>
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
		
	</ul>
					</div>
				<!--initiate accordion-->
		 
				
				
				</div>
				<!---->
		<div class="col-md-9 product-price1">
			<div class="col-md-5 single-top">	
						<ul id="etalage">
							<?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
							<li>
									<img class="etalage_thumb_image img-responsive" src="/uploads/<?php echo e($img_product->id); ?>/full_<?php echo e($img_product->file_name); ?>" alt="" >
									<img class="etalage_source_image img-responsive" src="/uploads/<?php echo e($img_product->id); ?>/full_<?php echo e($img_product->file_name); ?>" alt="" >
							</li>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</ul>

					</div>	
						
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4><?php echo e($product->titulo); ?></h4>
							<div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
								<div class="review">
									<a href="#"> Calidad y Buen Gusto</a>
									
								</div>
							<div class="clearfix"> </div>
							</div>
							
							<h5 class="item_price">
										Precio: 	
										<?php if($product->precio == '0'): ?>
											Consultar
										<?php else: ?>
										$<?php echo e($product->precio); ?>-
										<?php endif; ?>
							</h5>
							<p>
								<?php echo e($product->descripcion); ?>

							</p>
							
							<ul class="tag-men">
								<li><span>Codigo Articulo 00<?php echo e($product->id); ?></span>
								<li><span></span>
							</ul>
							
						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="col-md-12" style="margin-top: 2em;margin-bottom: 3em;">
				<div class="top-product">
					<h3 class="real">OFERTAS ESPECIALES</h3>
		        	<?php $__currentLoopData = $oferts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ofer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        		
			        	<div class="col-md-3 chain-grid  simpleCart_shelfItem">
			        			<div class="grid-span-1">
		   		     		<a href="/DETALLE/<?php echo e($ofer->id); ?>"><img class="img-responsive " src="/uploads/<?php echo e($ofer->id); ?>/full_<?php echo e($ofer->file_name); ?>" alt=" ">
		   		     		</a>
		   		     	</div>
		   		     		<div class="grid-chain-bottom " style="width: 75%;margin: auto;">
		   		     			<h6 style="margin-top: 1em;"><a href="/DETALLE/<?php echo e($ofer->id); ?>"><?php echo e(substr($ofer->titulo, '0', '18')); ?></a></h6>
		   		     			<div class="star-price">
		   		     				<div class="price-at">
			   		     				<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
										</div>
										<div class="price-at-bottom ">
											<span class="item_price"><?php if($ofer->precio == '0'): ?>
											Consultar
										<?php else: ?>
										$<?php echo e($ofer->precio); ?>-
										<?php endif; ?></span>
										</div>
		   		     				<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="/DETALLE/<?php echo e($ofer->id); ?>">Ver mas.. <i> </i></a>
									<div class="clearfix"> </div>
								</div>
		   		     		</div>
		   		     		
		   		     	</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
	   		     	<div class="clearfix"> </div>
		        	</div>
			</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script_add'); ?>
<script type="text/javascript">
	$(function() {
	    var menu_ul = $('.menu > li > ul'),
	           menu_a  = $('.menu > li > a');
	    menu_ul.hide();
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>

<link rel="stylesheet" href="<?php echo e(asset ('/css/etalage.css')); ?>">
<script src="<?php echo e(asset ('/js/jquery.etalage.min.js')); ?>"></script>
<script>
	jQuery(document).ready(function($){

		$('#etalage').etalage({
			thumb_image_width: 300,
			thumb_image_height: 400,
			source_image_width: 900,
			source_image_height: 1200,
			show_hint: true,
			click_callback: function(image_anchor, instance_id){
				alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
			}
		});

	});
</script>

<script src="<?php echo e(asset ('/js/main.js')); ?>"></script> <!-- Resource jQuery -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-48014931-1', 'codyhouse.co');
  	ga('send', 'pageview');

  	jQuery(document).ready(function($){
  		$('.close-carbon-adv').on('click', function(){
  			$('#carbonads-container').hide();
  		});
  	});
</script>	
<script src="<?php echo e(asset ('/js/simpleCart.min.js')); ?>"> </script>
<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>