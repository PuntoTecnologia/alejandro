<?php $__env->startSection('title'); ?>
	Ofertas disponibles en Madercar.com.ar
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
<?php $__currentLoopData = $oferts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ofer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        		
	<div class="col-md-3 chain-grid  simpleCart_shelfItem" style="margin-bottom: 2em;">
		<div class="grid-span-1">
		<span>OFERTA!</span>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>