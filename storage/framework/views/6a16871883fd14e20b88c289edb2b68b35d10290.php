<?php $__env->startSection('script_add'); ?>
	<link rel="stylesheet" href="/panel/css/jquery.dataTables.css">
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
					<a href="/CREAR-MARCA" style="float: right; margin-bottom: 2em;margin-right: 2em;">
						<button type="button" class="btn btn-primary">Crear Marca</button>
					</a>
					<div class="graph">
						<div class="content tab">
							<table id="tabla" class="display" cellspacing="0" width="100%">
						        <thead>
								    <tr>
								      <th scope="col">MARCA</th>
								      <th scope="col">CREADA</th>
								      <th scope="col">ACCIONES</th>
								    </tr>
								</thead>
						 
						        <tbody>
						        	<?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							    		<tr>
									      <td class="col-md-4"><?php echo e($element->marca); ?></td>
									      <td class="col-md-4"><?php echo e($element->created_at); ?></td>
									      <td class="col-md-4">
									      	<a href="">Editar</a>
									      	|
									      	<a href="">Eliminar</a>
									      </td>
									    </tr>
								    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								  </tbody>
						    </table>
										
						</div><!-- /content -->
					</div>
				<!-- /tabs -->
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