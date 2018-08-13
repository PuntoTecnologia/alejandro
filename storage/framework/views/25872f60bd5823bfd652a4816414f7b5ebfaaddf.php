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
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle" style="margin-bottom: 0em;">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
			
					<div class="col-md-4">
						<p style="margin-bottom: 2em;">Funciones disponibles para ARTICULOS</p>
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-2">
					</div>
					<div class="col-md-2">
						<a href="/NUEVO-ARTICULO">
							<button style="margin-top: 14%;" type="button" class="btn btn-primary">Crear Articulo</button>
						</a>
					</div>
				</div>

				<div class="col-md-12" style="padding-top: 3em;">
					
							<table id="tabla" class="display" cellspacing="0" width="100%">
						        <thead>
								    <tr>
								      <th scope="col">IMG</th>
								      <th scope="col">TITULO</th>
								      <th scope="col">CODIGO</th>
								      <th scope="col">COSTO</th>
								      <th scope="col">RENT(%)</th>
								      <th scope="col">ACCIONES</th>
								    </tr>
								</thead>
						        <tbody>

						        	
						        	<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							    		<tr>
							    			<?php $limite=0 ?>
							    			<?php if(sizeof($element->image)>0): ?>
											<?php $__currentLoopData = $element->image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>							
										      <?php if($limite == 0): ?>
										      <td class="col-md-2">
											     <img src="/uploads/<?php echo e($value->producto_id); ?>/min_<?php echo e($value->file_name); ?>" class="img-responsive" alt="" style="width: 50%;">
											   </td>
										      <?php endif; ?>

										      <?php $limite=1 ?>
									      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									      <?php else: ?>
									       <td class="col-md-2">sin foto</td>
									      <?php endif; ?>
									      									      <td class="col-md-4"><?php echo e($element->titulo); ?></td>
									      <td class="col-md-2">(<?php echo e($element->codigo); ?>)</td>
									      <td class="col-md-1">u$<?php echo e($element->costo); ?></td>
									      <td class="col-md-1">%<?php echo e($element->rent); ?></td>
									      <td class="col-md-2" style="display: inline-flex;">
									      	<form style="margin: 0em 0em 0em 0em;" method="post" action="/EDITAR-ARTICULO-IMG/<?php echo e($element->id); ?>">
											 	<?php echo e(csrf_field()); ?>

											 	<?php echo e(method_field('PATCH')); ?>

											 <button type="submit" class="btn btn-primary">Editar Fotos</button>
											 </form>

											 <form method="post" action="/EDITAR-ARTICULO/<?php echo e($element->id); ?>">
											 	<?php echo e(csrf_field()); ?>

											 	<?php echo e(method_field('PATCH')); ?>

											 <button style="margin-left: 0.5em;" type="submit" class="btn btn-primary">Editar Info</button>
											 </form>

											 <form action="/ELIMINAR-ARTICULO/<?php echo e($element->id); ?>" method="post">
										      	<?php echo e(method_field('DELETE')); ?>

										      	<?php echo e(csrf_field()); ?>

									      		<button type="button" class="btn btn-primary btn-delete" style="margin-left: 0.5em;">Eliminar</button>
											      	
											</form>
									      </td>
									    </tr>
								    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								  </tbody>
						    </table>

				</div>
			</div>
		</div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('/panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>