<?php $__env->startSection('content'); ?>

<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
				<div class="col-md-10">
					<p style="margin-bottom: 2em;">EDICION DE CATEGORIAS</p>
				</div>
				<div class="col-md-2">
					<a href="/CREAR-CATEGORIA">
						<button type="button" class="btn btn-primary">Crear Categoria</button>
					</a>
				</div>
				<table class="table table-hover table-dark">
				  <thead>
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">NOMBRE</th>
				      <th scope="col">ACTIVA</th>
				      <th scope="col"></th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
									
									


				    <?php $__currentLoopData = $lista_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    	<tr>
							      <th class="col-md-2"><?php echo e($element->id); ?></th>
							      
							      <td class="col-md-8">PRINCIPAL -->
									<?php if($element->padre ==0): ?>   <?php else: ?>
													<?php $__currentLoopData = $lista_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php if($sub_categoria->id == $element->padre): ?>
															<?php echo e($sub_categoria->nombre); ?>

														<?php endif; ?> 
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
									<?php endif; ?>
									
									<?php echo e($element->nombre); ?>

							      </td>
								  <th>
								  	<?php if($element->active == 0): ?>
								  		No
								    <?php else: ?>
								    	Si
								  	<?php endif; ?>
								  </th>
							      <td class="col-md-1">
							      	<form action="/EDITAR-CATEGORIA/<?php echo e($element->id); ?>" method="post">
							      		<?php echo e(csrf_field()); ?>

							      		<input style="background: #868686 !important;" type="submit" class="btn btn-primary" value="Editar">
							      	</form>
							      </td>
							      <td class="col-md-1">
							      	<form action="/ELIMINAR-CATEGORIA/<?php echo e($element->id); ?>" method="post" name="eliminar-categoria">

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
					if(confirm('Seguro deseas eliminar la categoria ? dado que si la eliminas, los aritulos contenidos deberan ser asignados nuevamente a otra categoria')){
						$(this).parents('form:first').submit();
					}
				})
		</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>