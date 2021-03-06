<?php $__env->startSection('content'); ?>
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
				<div class="col-md-10">
					<p style="margin-bottom: 2em;">LISTADO DE CLIENTES</p>
				</div>
				<div class="col-md-2">
					<a href="/CREAR-CLIENTE">
						<button type="button" class="btn btn-primary">Crear Cliente</button>
					</a>
				</div>
				<table class="table table-hover table-dark">
				  <thead>
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">CLIENTE</th>
				      <th scope="col">E-MAIL</th>
				      <th scope="col">TELEFONO</th>
				      <th scope="col">CUIT-CUIL</th>
				      <th scope="col">FECHA ALTA</th>
				      <th scope="col">ACCIONES</th>
				    </tr>
				  </thead>
				  <tbody>
									
									


				    <?php $__currentLoopData = $lista_clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    	<tr style="<?php if($element->active == '0'): ?> background: bisque;
					    	<?php endif; ?>">
							      <td class="col-md-1"><?php echo e($element->id); ?></td>
							      <td class="col-md-2"><?php echo e($element->last_name); ?> <?php echo e($element->name); ?></td>
							      <td class="col-md-1"><?php echo e($element->email); ?></td>
							      <td class="col-md-2"><?php echo e($element->telefono); ?></td>
							      <td class="col-md-1"><?php echo e($element->cuit_cuil); ?></td>
							      <td class="col-md-3"><?php echo e($element->created_at); ?></td>
							      <td class="col-md-1">
							      	<form action="/EDITAR-CLIENTE/<?php echo e($element->id); ?>" method="post">
							      		<?php echo e(csrf_field()); ?>

							      		<input style="background: #868686 !important;" type="submit" class="btn btn-primary" value="Editar">
							      	</form>
							      </td>
							      <td class="col-md-1">
							      	<form action="/ELIMINAR-CLIENTE/<?php echo e($element->id); ?>" method="post" name="eliminar-categoria">

								      	<?php echo e(method_field('DELETE')); ?>

								      	<?php echo e(csrf_field()); ?>

							      		<button type="button" class="btn btn-primary btn-delete">Eliminar</button>
							      	
							      	</form>
							      </td>
						    </tr>
				    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				  </tbody>
				</table>
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