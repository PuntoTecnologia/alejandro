<?php $__env->startSection('title'); ?>
	Consultas recibidas en tu sitio.
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0.5em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
				<p style="margin-bottom: 1em;">Consultas de clientes orden temporal decreciente:</p>

				<?php $__currentLoopData = $consultas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $con): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="women_main col-md-12">
					<div class="women_main col-md-12" style="margin-bottom: 1em;">
						<?php echo e($con->created_at); ?>

					</div>
					<h4><?php echo e($con->nombre); ?></h4>
					<p><?php echo e($con->telefono); ?></p>
					<p><?php echo e($con->email); ?></p>
					<p><?php echo e($con->consulta); ?></p>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
					
			</div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>