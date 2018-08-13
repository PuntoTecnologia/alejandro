<?php $__env->startSection('script_add'); ?>
		<!-- jQuery File Upload Dependencies -->
		<script src="<?php echo e(asset ('panel/js/script.js')); ?>"></script>
		<script src="<?php echo e(asset ('panel/js/jquery.knob.js')); ?>"></script>
		<script src="<?php echo e(asset ('panel/js/jquery.ui.widget.js')); ?>"></script>
		<script src="<?php echo e(asset ('panel/js/jquery.iframe-transport.js')); ?>"></script>
		<script src="<?php echo e(asset ('panel/js/jquery.fileupload.js')); ?>"></script>
		<link href="<?php echo e(asset ('panel/css/style_upload.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tab-main">
	<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle">Panel 3.0 Pro || <?php echo e(Request::path()); ?></h2>
				<div class="col-md-12">
				<a href="/CATALOGO">
					<button style="float: right;font-size: 25px;" class="btn btn-primary">Terminar Edicion</button>
					</a>
				</div>

				<div class="contenedor-fotos col-md-12" style="margin:2em 2em 2em 2em;">
					<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="grid1_of_4">
							<div class="content_box">
								<form action="/ELIMINAR-FOTO/<?php echo e($producto->id); ?>/<?php echo e($producto->producto_id); ?>/<?php echo e($product->id); ?>" method="post" name="eliminar-categoria">
								      	<?php echo e(csrf_field()); ?>

								      	<button type="submit">
							      		<img src="/images/delete.png" style="width: 10%;float: right;">
							      		</button>
							      	</form>
								<img src="/uploads/<?php echo e($producto->producto_id); ?>/min_<?php echo e($producto->file_name); ?>" class="img-responsive" alt="" style="margin-top: 5%;">
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>


					<form id="upload" method="post" action="/drop" enctype="multipart/form-data">
							<?php echo e(csrf_field()); ?>

							<div id="drop">
								<a>AGREGAR NUEVAS FOTOS</a>


                                
								<input type="file" name="upl" multiple />
								<input type="text" name="id_producto" value="<?php echo e($product->id); ?>">
                        
							</div>
                                                        
							<ul>
							<!-- The file uploads will be shown here -->
							</ul>
					</form>
			</div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>