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
					<h4>Listado de Marcas</h4>
					<form method="post" action="/crear-marca">
					<?php echo e(csrf_field()); ?>

						<div class="col-md-4">
							<label>Marca</label>
							<input type="text" name="marca" class="form-control">
						</div>
						<div class="col-md-4">
							<button type="submit" class="form-control" style="margin-top: 1.6em;">Crear Marca</button>
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
					if(confirm('Seguro deseas eliminar este cliente ?')){
						$(this).parents('form:first').submit();
					}
				})
		</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>