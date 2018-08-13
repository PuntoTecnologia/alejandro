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