<?php $__env->startSection('title'); ?>
	Mas informacion sobre Madercar.com.ar
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
<div class="container"> 
<div class="separador" style="margin-bottom: 3em;"></div>


	<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-4 simpleCart_shelfItem" style="margin-bottom: 2em;    border: 1px solid #e8e8e8;">
		
			<div class="grid-span-1" style="margin-bottom: 1em;">
				<a href="/DETALLE/<?php echo e($producto->id); ?>"><img class="img-responsive " src="/uploads/<?php echo e($producto->id); ?>/full_<?php echo e($producto->file_name); ?>" alt="">
					<div class="link">
					<ul>
						
			</ul>
				</div>
				</a>
			</div>
				<div class="grid-chain-bottom " style="width: 75%;margin: auto;">
	   		     			<h6><a href="/DETALLE/<?php echo e($producto->id); ?>"><?php echo e(substr($producto->titulo, '0', '18')); ?></a></h6>
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
										<span class="item_price">
										<?php if($producto->precio == '0'): ?>
											Consultar
										<?php else: ?>
										$<?php echo e($producto->precio); ?>-
										<?php endif; ?>
										</span>
									</div>
	   		     				<div class="clearfix"> </div>
							</div>
							<div class="cart-add">
								<a class="add1 item_add" href="/DETALLE/<?php echo e($producto->id); ?>">Ver mas... <i> </i></a>
								<a class="add2" href="/DETALLE/<?php echo e($producto->id); ?>"><i> </i></a>
								<div class="clearfix"> </div>
							</div>
	   		     		</div>
				
			</div>	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>