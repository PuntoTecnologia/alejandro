<?php $__env->startSection('title'); ?>
	Panel 3.0 || Gestion en linea || By  Promedios
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script_add'); ?>
	<link rel="stylesheet" href="/panel/css/jquery.dataTables.css">
	<script src="/panel/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/panel/js/jquery.dataTables.min.js"></script>
	<script src="/panel/js/table.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0.5em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
					<h4>Listado de Proveedores</h4>
					<a href="/CREAR-PROVEEDOR" style="float: right;margin-bottom:2em;margin-right: 2em;">
						<button type="button" class="btn btn-primary">Crear Proveedor</button>
					</a>
					<div class="graph">
						<div class="content tab">
							<table id="tabla" class="display" cellspacing="0" width="100%">
						        <thead>
								    <tr>
								      <th scope="col">Orden</th>
								      <th scope="col">Proveedor Nombre</th>
								      <th scope="col">Direccion</th>
								      <th scope="col">E-mail</th>
								      <th scope="col">Cuit / Cuil</th>
								      <th scope="col"></th>
								    </tr>
								</thead>
						 
						        <tbody>
					            		<?php $__currentLoopData = $provers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prover): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									    	<tr>
										      <td class="col-md-1"><?php echo e($prover->id); ?></td>
										      <td class="col-md-3"><?php echo e($prover->name); ?></td>
										      <td class="col-md-3"><?php echo e($prover->direccion); ?></td>
										      <td class="col-md-2"><?php echo e($prover->email); ?></td>
										      <td class="col-md-2"><?php echo e($prover->cuit_cuil); ?></td>
										      <td class="col-md-1" style="display: inline-flex;">
										      	<a href="/EDITAR-PROVER/<?php echo e($prover->id); ?>" class="btn btn-primary">Editar</a>
										      	<form style="margin-left: 0.5em;" action="/ELIMINAR-PROVER/<?php echo e($prover->id); ?>" method="post">

											      	<?php echo e(method_field('DELETE')); ?>

											      	<?php echo e(csrf_field()); ?>

										      		<button type="button" class="btn btn-primary btn-delete">Eliminar</button>
										      	
										      	</form>
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