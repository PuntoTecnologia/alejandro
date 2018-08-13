<?php $__env->startSection('script_add'); ?>
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
	<script src="/panel/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/panel/js/jquery.dataTables.min.js"></script>
	<script src="/panel/js/table.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tab-main">
<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0.5em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
					<h4>Editar Planes</h4>
					<form id="upload" method="post" action="/EDITAR-PLAN/<?php echo e($plan->id); ?>">
						<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('PATCH')); ?>

						<div class="col-md-4">
							<div class="form-group">
								<label>TARJETA</label>
									<input type="text" name="card" class="form-control" value="<?php echo e($plan->card); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>CUOTAS</label>
									<input type="number" name="cuotas" class="form-control" value="<?php echo e($plan->cuotas); ?>">
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>COEFICIENTE INTERESES</label>
									<input type="number" name="coef" class="form-control" value="<?php echo e($plan->coef); ?>">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>ACTIVO</label>
									<input type="number" name="act" class="form-control" value="<?php echo e($plan->active); ?>">
							</div>
						</div>
						<div class="col-md-3" style="margin-top: 2%;">
							<button type="submit" class="btn btn-primary">EDITAR</button>
							
						</div>
					</form>
					
			</div>
		</div>
	<!--/tabs-inner-->
		
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
		$('.btn-delete').on('click', function(e){
					if(confirm('Seguro deseas modificar este plan ?')){
						$(this).parents('form:first').submit();
					}
				})
		</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>