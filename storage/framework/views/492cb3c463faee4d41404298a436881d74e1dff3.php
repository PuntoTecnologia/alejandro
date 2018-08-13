<?php $__env->startSection('content'); ?>
<div class="newproductslider-container"> 
        <div id="new-products" class="owl-container">
        <!-- COLUMNA EN BLANCO PARA NO QUEDAR BAJO EL MENU -->
		<div class="col-md-3" style="min-height: 455px;"></div>
		<!-- // COLUMNA EN BLANCO PARA NO QUEDAR BAJO EL MENU -->
         <div class="col-md-9">
			<!-- FOREACH DE PRODUCTOS -->
			<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="<?php echo e($producto->id); ?>">
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
				                <a href="<?php echo e($producto->id); ?>" title="Nunc facilisis" class="product-image">
				                	<img src="/uploads/<?php echo e($producto->producto_id); ?>/min_<?php echo e($producto->file_name); ?>" alt="Nunc facilisis">
				                </a>
				            </div>
				            <div class="des-container">
				                <h2 class="product-name"><a href="#" title="Nunc facilisis"><?php echo e(substr($producto->titulo, 0, 30)); ?></a></h2>
				                <div class="price-box">
				                    <p class="special-price">
				                        <span class="price-label">Special Price</span>
				                        <span class="price">$169.99</span>
				                    </p>
				                    <p class="old-price">
				                    	<span class="price-label"></span>
				                        <span class="">cod.(<?php echo e($producto->codigo); ?>)</span>
				                    </p>
				                </div>
				                <div class="ratings">
				                    <div class="rating-box">
				                        <div class="rating" style="width:67%"></div>
				                    </div>
				                    <span class="amount"><a href="#">3 Review(s)</a></span>
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