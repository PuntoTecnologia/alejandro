<?php $__env->startSection('title'); ?>
	Contactenos a traves de los siguientes metodos. | Madercar.com.ar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
	<?php echo $__env->make('elements.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('metakeys'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $__currentLoopData = $my_site; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<meta name="title" content="<?php echo e($element->title); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $meta_description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<meta name="description" content="<?php echo e($desc->description); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $metakeys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<meta name="keywords" content="<?php echo e($keys->key1); ?>, <?php echo e($keys->key2); ?>, <?php echo e($keys->key3); ?>, <?php echo e($keys->key4); ?>, <?php echo e($keys->key5); ?>, <?php echo e($keys->key6); ?>, <?php echo e($keys->key7); ?>, <?php echo e($keys->key8); ?>" />
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!---->
		<div class="container">
			<div class="contact">
			
				<div class=" contact-top-in">
					<h3 style="padding-bottom: 3em<">Como llegar a Madercar</h3>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4443.094522324729!2d-57.56297171742071!3d-38.053091351866044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9584de0cede8b62f%3A0xa301148349c26c9a!2sAv.+Fortunato+de+la+Plaza+3427%2C+7600FMD+Mar+del+Plata%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1524284520976" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					
				</div>
				<div class="">
					<form method="POST" action="/ENVIAR-CONSULTA">
					<?php echo e(csrf_field()); ?>

						<h3 style="padding-top: 3em<">Contáctenos</h3>
							<div>
								<span>Su Nombre</span>		
								<input name="nombre" type="text" class="form-control" value="" >						
							</div>
							<div>
								<span>Su Telefono</span>		
								<input name="telefono" type="number" class="form-control" value="" >						
							</div>
							<div>
								<span>Su Email </span>		
								<input name="email" type="text" class="form-control" value="" >						
							</div>
							<div>
								<span>Su consulta</span>		
								<textarea name="consulta" class="form-control"> </textarea>	
							</div>
							<input type="submit" value="Enviar" >	
					</form>				
				</div>
		
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>