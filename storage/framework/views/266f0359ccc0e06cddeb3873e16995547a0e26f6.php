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
					<form id="upload" method="post" action="/EDITAR_ARTICULO_INFO/<?php echo e($product->id); ?>">
							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('PATCH')); ?>

						<div class="col-md-6">
						  <div class="form-group">
						    <label style="color: #fff;">Titulo</label>
						    <input class="form-control" name="titulo" value="<?php echo e($product->titulo); ?>" required>
						  </div>
						</div>  
					  <div class="form-group">
						  <div class="col-md-6">  
						    <label style="color: #fff;">Categoria</label>
						    <select name="padre" class="form-control" required>
						      <option></option>
						      <?php $__currentLoopData = $lista_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							      	<option value="<?php echo e($categoria->id); ?>" <?php if($categoria->id==$product->padre): ?>
							      		selected
							      	<?php endif; ?>>
									
									<?php if($categoria->padre ==0): ?>
										Principal
									
									<?php else: ?>
									
											<?php $__currentLoopData = $lista_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php if($sub_categoria->id == $categoria->padre): ?>
													<?php echo e($sub_categoria->nombre); ?>

												<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
									-->
							      	<?php echo e($categoria->nombre); ?></option>
							      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						    </select>
						  </div>
					  </div>
						<div class="col-md-12"> 
						  <div class="form-group">
						    <label style="color: #fff;">Descripcion del Articulo</label>
						    <textarea class="form-control" name="descripcion" rows="3" required><?php echo e($product->descripcion); ?></textarea>
						  </div>
						</div>
						

						<div class="col-md-3"> 
							<div class="form-group">
						    <label style="color: #fff;">Precio $</label>
						    <input class="form-control" name="precio" type="number" value="<?php echo e($product->precio); ?>" required>
						  </div>
						</div>
						<div class="col-md-3" style="padding-top: 2%;"> 
							<div class="form-group">
						    <label style="color: #fff;">Es Oferta ? 
						    	Si <input name="oferta" value="1" type="radio"<?php if($product->oferta=='1'): ?>
						    		checked <?php endif; ?>>
						    	No <input name="oferta" value="0" type="radio" <?php if($product->oferta=='0'): ?>
						    		checked <?php endif; ?>>
						    	</label>
						 	</div>   
						</div>
						<div class="col-md-3" style="padding-top: 2%;">
							<div class="form-group">
						    <label style="color: #fff;">Activo 
						    	Si <input name="active" value="1" type="radio" <?php if($product->active=='1'): ?>
						    		checked <?php endif; ?>>
								No <input name="active" value="0" type="radio" <?php if($product->active=='0'): ?>
						    		checked <?php endif; ?>>
						    </label>
						 	</div> 
						</div>
						<div class="col-md-3" style="margin-top: 2%;">
							<button type="submit" class="btn btn-primary">Editar Articulo</button> 
						</div>
					</form>
			</div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>