<?php $__env->startSection('content'); ?>
<div class="tab-main" style="height: 1200px;">
			<div id="tabs" class="tabs" style="height: 100%;">
				<div class="col-md-12 form-title">
					<h3 class="" style="margin-bottom: 0.5em;float:left;color: #fff;">Orden de Trabajo</h3>
				</div>
	<iframe src="/ejemplo/<?php echo e($repair2[0]->id); ?>" width=100% height=100%>Es este momento no puede visualizar la orden.</iframe>
	</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>