<?php $__env->startSection('title'); ?>
	Catalogo de pruductos existentes en el sistema.
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script_add'); ?>
	<link rel="stylesheet" href="/panel/css/jquery.dataTables.css">
	<script src="/panel/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/panel/js/jquery.dataTables.min.js"></script>
	<script src="/panel/js/table.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="app">
	<Product />
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
		$('.btn-delete').on('click', function(e){
					if(confirm('Seguro deseas eliminar este articulo ?')){
						$(this).parents('form:first').submit();
					}
				})
		</script>
		<script src="<?php echo e(url('js/app.js ')); ?>" type="text/javascript"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('/panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>