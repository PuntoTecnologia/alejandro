<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
	Estas editando la categoria <?php echo e($categori->nombre); ?>

<?php $__env->stopSection(); ?>
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
				<div class="col-md-12">
					<p style="margin-bottom: 2em;">Estas por editar la categoria. <?php echo e($categori->nombre); ?></p>
				</div>
				<form method="post" action="/EDITAR-CATEGORIA/<?php echo e($categori->id); ?>">
				<?php echo e(csrf_field()); ?>

				<?php echo e(method_field('PATCH')); ?>

					<div class="col-md-4">
						<input type="text" name="nombre" value="<?php echo e($categori->nombre); ?>">
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<label">Activa || 
					    	Si <input name="active" value="1" type="radio" <?php if($categori->active=='1'): ?>
					    		checked <?php endif; ?>>
							No <input name="active" value="0" type="radio" <?php if($categori->active=='0'): ?>
					    		checked <?php endif; ?>>
					    </label>
					</div>
					<div class="col-md-2">
						<button class="btn btn-primary">Editar</button>
					</div>
				</form>			
			</div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>