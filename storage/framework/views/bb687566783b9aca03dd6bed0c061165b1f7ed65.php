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
					<a href="CATALOGO">
						<button type="button" class="btn btn-primary" style="float: right;">Terminar</button>
					</a>
				</div>
					<form id="upload" method="post" action="/drop" enctype="multipart/form-data">
							<?php echo e(csrf_field()); ?>

							<div id="drop">
								<a>SELECCIONAR FOTOS</a>
                                
								<input type="file" name="upl" multiple />
								<input type="text" name="id_producto" value="<?php echo e($crear_articulo->id); ?>">
                        
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