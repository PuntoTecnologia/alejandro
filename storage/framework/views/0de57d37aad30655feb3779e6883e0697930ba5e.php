<?php $__env->startSection('title'); ?>
<?php $__currentLoopData = $my_site; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($element->title); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<div class="newproductslider-container"> 
        <div id="new-products" class="owl-container">
        <!-- COLUMNA EN BLANCO PARA NO QUEDAR BAJO EL MENU -->
		<div class="col-md-3 visible-md visible-lg" style="min-height: 455px;"></div>
		<!-- // COLUMNA EN BLANCO PARA NO QUEDAR BAJO EL MENU -->
         <div class="col-md-9">
			<!-- FOREACH DE PRODUCTOS -->
			<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="/detalle/<?php echo e($producto->producto_id); ?>">
				<div>
					<div class="col-md-4" style="padding: 0.5em; border:1px solid #ccc;">
				        <div class="item-inner">
				            <div class="images-container">
				                <div class="product_icon">
				                	<?php if($producto->tipo == 1): ?>
				                		<div class="new-icon"><span>nuevo</span></div>
				                	<?php endif; ?>
				                	<?php if($producto->tipo == 2): ?>
				                		<div class="sale-icon"><span>usado</span></div>
				                	<?php endif; ?>
				                    
				                </div>
				                <a href="/detalle/<?php echo e($producto->producto_id); ?>" class="product-image">
				                	<img src="/uploads/<?php echo e($producto->producto_id); ?>/min_<?php echo e($producto->file_name); ?>" alt="Nunc facilisis">
				                </a>
				            </div>
				            <div class="des-container">
				                <h2 class="product-name"><a href="/detalle/<?php echo e($producto->producto_id); ?>"><?php echo e(substr($producto->titulo, 0, 30)); ?></a></h2>
				                <div class="price-box">
				                    <a href="/detalle/<?php echo e($producto->producto_id); ?>">
					                    <p class="special-price">
					                        <!--CALCULO DEL PRECIO DE VENTA-->
					                        <span class="price">$<?php echo e(round(((($producto->costo*$producto->rent)/100)+$producto->costo)*$dolar[0]->valor)); ?>-</span>
					                    </p>
				                    
					                    <p class="old-price">
					                    	<span class="price-label"></span>
					                        <span style="float: right;">cod.(<?php echo e($producto->codigo); ?>)</span>
					                    </p>
					                </a>
				                </div>
				                <div class="ratings">
				                    <div class="rating-box">
				                        <div class="rating" style="width:67%"></div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
				<!-- FOREACH DE PRODUCTOS -->
				</a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('elements.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>